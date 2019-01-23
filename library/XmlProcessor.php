<?php

namespace BankId\Merchant\Library;

use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;

/**
 * @internal
 */
class XmlProcessor {
    const BEGIN_CERTIFICATE = '-----BEGIN CERTIFICATE-----';
    const END_CERTIFICATE = '-----END CERTIFICATE-----';
    
    protected $schemas;
    
    public function __construct() {
        $this->schemas = array(
            'DirectoryReq' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'DirectoryRes' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'AcquirerTrxReq' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'AcquirerTrxRes' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'AcquirerStatusReq' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'AcquirerStatusRes' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd',
            'AcquirerErrorRes' => __DIR__ . '/Schemas/idx/idx.merchant-acquirer.1.0.xsd'
        );
    }
    
    public function addSignature(Configuration $config, $xml) {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);

        $signature = new XMLSecurityDSig('');		
        $signature->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);		
        $signature->addReference(
            $doc,
            XMLSecurityDSig::SHA256,
            array(
                    'http://www.w3.org/2000/09/xmldsig#enveloped-signature',
                    'http://www.w3.org/2001/10/xml-exc-c14n#'
            ),
            array('force_uri' => TRUE)
        );

        $key = new XMLSecurityKey(XMLSecurityKey::RSA_SHA256, array('type' => 'private'));
        $key->passphrase = $config->MerchantCertificatePassword;
        $key->loadKey($config->MerchantCertificate['pkey']);
        $signature->sign($key);
        $fingerprint = $this->getFingerprint($config->MerchantCertificate['cert']);
        $signature->appendToKeyInfo($signature->sigNode->ownerDocument->createElement('KeyName', $fingerprint));
        $signature->appendSignature($doc->documentElement);
        
        return $doc->saveXML();
    }
    
    private function checkBankIdSignature($doc) {

        $bankidRoot = $doc->getElementsByTagNameNS(Utils::NS_ASSERTION, 'Assertion')->item(0);
        $bankidDoc = new \DOMDocument();
        $root = $this->propagateNamespaces($bankidRoot, $bankidDoc);
        $bankidDoc->loadXML($bankidDoc->saveXML($root));
        
        $signature = new XMLSecurityDSig();
        $signature->locateSignature($bankidDoc);
        $signature->canonicalizeSignedInfo();
        $signature->idKeys = array( 0 => 'ID' );
        $signature->validateReference();

        $x509cert = $doc->getElementsByTagName('X509Certificate')->item(0)->textContent;
        $signature->idKeys = array( 0 => 'ID' );
        
        $key = $signature->locateKey();
        // Normalize the certificate, if necessary
        $key->loadKey(Utils::normalizeCertificate($x509cert), FALSE, TRUE);
        $signature->verify($key);
    }
    
    private function propagateNamespaces($node, $doc) {
        // if this element doesn't have a prefix for it's namespace...
        if (empty($node->lookupPrefix($node->namespaceURI))) {
            // either the namespace is default
            if ($node->hasAttribute('xmlns'))
            {
                $nd = $doc->createElement($node->localName);
                $nd->setAttribute('xmlns', $node->namespaceURI);
            }
            // or it just inherited it from a parent/ancestor element
            else
            {
                $ns = NULL;
                $n = $node;
                while ($n->parentNode != NULL) {
                    if (empty($n->lookupPrefix($node->namespaceURI)) && $n->hasAttribute('xmlns')) {
                        $ns = $n->getAttribute('xmlns');
                        break;
                    }
                    $n = $n->parentNode;
                }
                $nd = $doc->createElement($node->localName);
                if ($ns != NULL) {
                    $nd->setAttribute('xmlns', $ns);
                }
            }
        }
        else {
            $prefix = $node->lookupPrefix($node->namespaceURI);
            $nd = $doc->createElement($prefix . ':' . $node->localName);
            $nd->setAttribute('xmlns:' . $prefix, $node->namespaceURI);
        }
        
        foreach ($node->attributes as $value) {
            if (!empty($value->prefix)) {
                $nd->setAttribute($value->prefix . ':' . $value->localName, $value->value);
                $nd->setAttribute('xmlns:' . $value->prefix, $value->namespaceURI);
            }
            else {
                $nd->setAttribute($value->localName, $value->value);
            }
        }
        
        if (!$node->childNodes) {
            return $nd;
        }
        foreach($node->childNodes as $child) {
            if ($child->nodeName=="#text")
                $nd->appendChild($doc->createTextNode($child->nodeValue));
            else
                $nd->appendChild($this->propagateNamespaces($child, $doc));
        }
        return $nd;
    }
    
    private function checkIdxSignature(Configuration $config, $doc) {
        $signature = new XMLSecurityDSig();
        $sig = $signature->locateSignature($doc, $doc->getElementsByTagName('Signature')->length - 1);
        if (!$sig) {
            throw new CommunicatorException('Cannot locate Signature Node');
        }

        $signature->canonicalizeSignedInfo();

        try {
            $signature->validateReference();
        } catch (Exception $ex) {
            throw new CommunicatorException('Reference Validation Failed', $ex->getCode());
        }

        $key = $signature->locateKey();
        if (!$key) {
            throw new CommunicatorException('Cannot locate the key.');
        }
        
        $key->loadKey($config->RoutingServiceCertificate);
        if ($signature->verify($key) == 1) {
            return TRUE;
        } else {
            $key->loadKey($config->RoutingServiceCertificateAlternative);
        if ($signature->verify($key) == 1) {
            return TRUE;
        } else {
            throw new CommunicatorException('The signature could not be verified.');
            }
        }
    }
    
    public function verifySignature(Configuration $config, $xml) {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        
        if ($doc->getElementsByTagName('Signature')->length == 2) {
            $this->checkBankIdSignature($doc);
            $this->checkIdxSignature($config, $doc);
        }
        else {
            $this->checkIdxSignature($config, $doc);
        }
    }

    public function verifySchema($xml) {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        
        libxml_use_internal_errors(TRUE);
        
        if (!$doc->schemaValidate($this->schemas[$doc->documentElement->localName]))
        {
            $error = libxml_get_errors();
            throw new CommunicatorException($error[0]->message);
        }
    }
    
    private function getFingerprint($certificate) {
        $contents = $certificate;
        $contents = str_replace(self::END_CERTIFICATE, '', str_replace(self::BEGIN_CERTIFICATE, '', $contents));
        $contents = base64_decode($contents);
        return strtoupper(sha1($contents));
    }
}
