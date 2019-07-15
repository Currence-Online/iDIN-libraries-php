<?php

namespace BankId\Merchant\Library;

use RobRichards\XMLSecLibs\XMLSecEnc;
use RobRichards\XMLSecLibs\XMLSecurityKey;

/**
 * Class responsible for handling Saml Responses
 */
class SamlResponse extends Internal\AcceptanceReportBase {
    private $transactionID;
    private $merchantReference;
    private $version;
    private $acquirerID;
    private $attributes;
    private $status;
    
    private function __construct(Configuration $config, \SimpleXMLElement $response) {
        $responseDoc = $response;
        $response = $responseDoc->Transaction->container->children(Utils::NS_PROTOCOL)->Response;
        $this->transactionID = (string)$response->attributes()['ID'];
        $this->merchantReference = (string)$response->attributes()['InResponseTo'];
        $this->version = (string)$response->attributes()['Version'];
        $this->acquirerID = (string)$responseDoc->Acquirer->acquirerID;

        foreach ($response->getNamespaces(TRUE) as $nsvalue) {
            $children = $response->children($nsvalue);

            if ($nsvalue == Utils::NS_PROTOCOL) {
                if (isset($children)) {
                    if (!isset($children->Status->StatusCode->StatusCode)) {
                        throw new CommunicatorException("Missing second level status code");
                    }
                    $this->status = new SamlStatus(
                        (string)$children->Status->StatusMessage,
                        (string)$children->Status->StatusCode->attributes()['Value'],
                        (string)$children->Status->StatusCode->StatusCode->attributes()['Value']
                    );
                }
            }
            else if ($nsvalue == Utils::NS_ASSERTION) {
                if (!isset($children->Assertion)) {
                    continue;
                }
                
                $assertion = $children->Assertion;
                if (!isset($assertion->Subject)) {
                    continue;
                }
                
                $nameIdEncrypted = $assertion->Subject->EncryptedID;
                $nameIdDecrypted = $this->decryptElement($config, $nameIdEncrypted);
                
                $this->attributes = array();
                $nameId = new \SimpleXMLElement($nameIdDecrypted);
                if (strcmp(substr((string)$nameId, 0, 5), 'TRANS') == 0) {
                    $this->attributes[SamlAttribute::$ConsumerTransientID] = (string)$nameId;
                }
                else {
                    $this->attributes[SamlAttribute::$ConsumerBin] = (string)$nameId;
                }
                
                if (!isset($children->Assertion->AttributeStatement))
                    continue;
                    
                if (isset($children->Assertion->AttributeStatement->EncryptedAttribute)) {
                    foreach ($children->Assertion->AttributeStatement->EncryptedAttribute as $value) {
                        $decrypted = $this->decryptElement($config, $value);
                        $element = new \SimpleXMLElement($decrypted);
                        $this->attributes[(string)$element->attributes()['Name']] = trim(dom_import_simplexml($element)->textContent);
                    }
                }
                
                if (isset($children->Assertion->AttributeStatement->Attribute)) {
                    foreach ($children->Assertion->AttributeStatement->Attribute as $value) {
                        $this->attributes[(string)$value->attributes()['Name']] = (string)$value->AttributeValue;
                    }
                }
            }
        }
    }
    
    private function decryptKey(Configuration $config, $encryptedElement) {
        $encryptedKeyElement = $encryptedElement->getElementsByTagName('EncryptedKey')->item(0);
        $encryptedKey = XMLSecurityKey::fromEncryptedKeyElement($encryptedKeyElement);
        $encryptedKey->key = $config->MerchantCertificate['pkey'];
        
        $enc = new XMLSecEnc();
        $enc->setNode($encryptedKeyElement);
        
        return $enc->decryptKey($encryptedKey);
    }
    
    private function decryptElement(Configuration $config, $encrypted) {
        $encryptedElement = dom_import_simplexml($encrypted);
        
        $aesKey = $this->decryptKey($config, $encryptedElement);
        
        $encryptedData = $encryptedElement->getElementsByTagName('EncryptedData')->item(0);
        
        $key = new XMLSecurityKey(XMLSecurityKey::AES256_CBC);
        $key->key = $aesKey;
        $enc = new XMLSecEnc();
        
        $enc->setNode($encryptedData);
        return $enc->decryptNode($key);
    }
    
    public static function parse(Configuration $config, $xml) {
        $sr = new SamlResponse($config, $xml);
        return $sr;
    }

    /**
     * The Transaction ID
     */
    public function getTransactionID() {
        return $this->transactionID;
    }

    /**
     * The SAML Attributes required by the merchant
     */
    public function getAttributes() {
        if (!isset($this->attributes)) {
            $this->attributes = array();
        }
        return $this->attributes;
    }

    /**
     * Unique transaction reference fron the Merchant
     */
    public function getMerchantReference() {
        return $this->merchantReference;
    }

    /**
     * The Acquirer ID
     */
    public function getAcquirerID() {
        return $this->acquirerID;
    }

    /**
     * The SAML Version
     */
    public function getVersion() {
        return $this->version;
    }
    
    /**
     * Details of the SAML status.
     */
    public function getStatus() {
        return $this->status;
    }
}
