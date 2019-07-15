<?php

namespace BankId\Merchant\Library;

class Utils {
    const NS_BANKID = 'http://www.betaalvereniging.nl/iDx/messages/Merchant-Acquirer/1.0.0';
    const NS_ASSERTION = 'urn:oasis:names:tc:SAML:2.0:assertion';
    const NS_PROTOCOL = 'urn:oasis:names:tc:SAML:2.0:protocol';
    const NS_URI = 'http://www.w3.org/2000/xmlns/';

    public static function log(Configuration $config, $message) {
        $config->getLogger()->log($config, $message);
    }
    
    public static function logXmlMessage(Configuration $config, $message) {
        $config->getLogger()->logXmlMessage($config, $message);
    }
    
    public static function serializeDirectoryReq($dirReq) {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $DirectoryReq = $dom->createElementNS(self::NS_BANKID, 'DirectoryReq');

        $DirectoryReq->setAttribute('productID', $dirReq->getProductID());
        $DirectoryReq->setAttribute('version', $dirReq->getVersion());
        $dom->appendChild($DirectoryReq);

        $DirectoryReq->appendChild($dom->createElementNS(self::NS_BANKID, 'createDateTimestamp',
            $dirReq->getCreateDateTimestamp()));

        $Merchant = $dom->createElementNS(self::NS_BANKID, 'Merchant');
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'merchantID',
            $dirReq->getMerchant()->getMerchantID()));
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'subID',
            $dirReq->getMerchant()->getSubID()));
        $DirectoryReq->appendChild($Merchant);

        $dom->formatOutput = TRUE;
        return $dom->saveXML();
    }
    
    public static function serializeAcquirerTrxReq($trxReq) {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $AcquirerTrxReq = $dom->createElementNS(self::NS_BANKID, 'AcquirerTrxReq');
        
        $AcquirerTrxReq->setAttribute('productID', $trxReq->getProductID());
        $AcquirerTrxReq->setAttribute('version', $trxReq->getVersion());
        $dom->appendChild($AcquirerTrxReq);
                
        $AcquirerTrxReq->appendChild($dom->createElementNS(self::NS_BANKID, 'createDateTimestamp',
            $trxReq->getCreateDateTimestamp()));
        
        $Issuer = $dom->createElementNS(self::NS_BANKID, 'Issuer');
        $Issuer->appendChild($dom->createElementNS(self::NS_BANKID, 'issuerID',
            $trxReq->getIssuer()->getIssuerID()));
        $AcquirerTrxReq->appendChild($Issuer);
        
        $Merchant = $dom->createElementNS(self::NS_BANKID, 'Merchant');
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'merchantID',
            $trxReq->getMerchant()->getMerchantID()));
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'subID',
            $trxReq->getMerchant()->getSubID()));
        $Merchant->appendChild($merchantReturnURLXML = $dom->createElement('merchantReturnURL'));
            $merchantReturnURLXML->appendChild($dom->createTextNode( $trxReq->getMerchant()->getMerchantReturnURL() ));
        $AcquirerTrxReq->appendChild($Merchant);
        
        $Transaction = $dom->createElementNS(self::NS_BANKID, 'Transaction');
        if ($trxReq->getTransaction()->getExpirationPeriod()) {
            $Transaction->appendChild($dom->createElementNS(self::NS_BANKID, 'expirationPeriod',
                $trxReq->getTransaction()->getExpirationPeriod()));
        }
        if ($trxReq->getTransaction()->getLanguage()) {
            $Transaction->appendChild($dom->createElementNS(self::NS_BANKID, 'language',
                $trxReq->getTransaction()->getLanguage()));
        }
        $Transaction->appendChild($dom->createElementNS(self::NS_BANKID, 'entranceCode',
            $trxReq->getTransaction()->getEntranceCode()));
        $AcquirerTrxReq->appendChild($Transaction);
        
        $container = $dom->createElementNS(self::NS_BANKID, 'container');
        $Transaction->appendChild($container);
        
        $AuthnRequest = $trxReq->getTransaction()->getContainer()->ContainedData->documentElement;
        $container->appendChild($dom->importNode($AuthnRequest, TRUE));
        
        $dom->formatOutput = TRUE;
        return $dom->saveXML();
    }
    
    public static function serializeAuthnRequest(Schemas\saml\protocol\AuthnRequestType $authnReq) {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $AuthnRequest = $dom->createElementNS(self::NS_PROTOCOL, 'samlp:AuthnRequest');
        $dom->appendChild($AuthnRequest);
        
        $AuthnRequest->setAttribute('AssertionConsumerServiceURL', $authnReq->getAssertionConsumerServiceURL());
        $AuthnRequest->setAttribute('AttributeConsumingServiceIndex', $authnReq->getAttributeConsumingServiceIndex());
        $AuthnRequest->setAttribute('Consent', $authnReq->getConsent());
        $AuthnRequest->setAttribute('ForceAuthn', $authnReq->getForceAuthn());
        $AuthnRequest->setAttribute('ID', $authnReq->getID());
        $AuthnRequest->setAttribute('IssueInstant', $authnReq->getIssueInstant());
        $AuthnRequest->setAttribute('ProtocolBinding', $authnReq->getProtocolBinding());
        $AuthnRequest->setAttribute('Version', $authnReq->getVersion());
        
        $AuthnRequest->appendChild($dom->createElementNS(self::NS_ASSERTION, 'saml:Issuer',
            $authnReq->getIssuer()->value()));

        if(!empty($authnReq->getExtensions()->getAttribute()[0])) {
            $Extensions = $dom->createElementNS(self::NS_ASSERTION, 'saml:Extensions', '');

            $Attribute = $dom->createElementNS(self::NS_ASSERTION, 'saml:Attribute', '');
            $Attribute->setAttribute('Name', $authnReq->getExtensions()->getName());

            $AttributeValue = $dom->createElementNS(self::NS_ASSERTION, 'saml:AttributeValue', $authnReq->getExtensions()->getAttribute()[0]);

            $Attribute->appendChild($AttributeValue);
            $Extensions->appendChild($Attribute);
            $AuthnRequest->appendChild($Extensions);
        }

        $AuthnRequest->appendChild($dom->createElementNS(self::NS_ASSERTION, 'saml:Conditions',
            ''));
        
        $RequestedAuthnContext = $dom->createElementNS(self::NS_PROTOCOL, 'RequestedAuthnContext',
            '');
        $RequestedAuthnContext->setAttribute('Comparison', $authnReq->getRequestedAuthnContext()->getComparison());
        $RequestedAuthnContext->appendChild($dom->createElementNS(self::NS_ASSERTION, 'saml:AuthnContextClassRef',
            $authnReq->getRequestedAuthnContext()->getAuthnContextClassRef()[0]));
        $AuthnRequest->appendChild($RequestedAuthnContext);
        
        $AuthnRequest->appendChild($dom->createElementNS(self::NS_PROTOCOL, 'Scoping',
            ''));
        
        $dom->formatOutput = TRUE;

        return $dom;
    }
    
    public static function serializeAcquirerStatusReq($stsReq) {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $AcquirerStatusReq = $dom->createElementNS(self::NS_BANKID, 'AcquirerStatusReq');
        
        $AcquirerStatusReq->setAttribute('productID', $stsReq->getProductID());
        $AcquirerStatusReq->setAttribute('version', $stsReq->getVersion());
        $dom->appendChild($AcquirerStatusReq);
                
        $AcquirerStatusReq->appendChild($dom->createElementNS(self::NS_BANKID, 'createDateTimestamp',
            $stsReq->getCreateDateTimestamp()));
        
        $Merchant = $dom->createElementNS(self::NS_BANKID, 'Merchant');
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'merchantID',
            $stsReq->getMerchant()->getMerchantID()));
        $Merchant->appendChild($dom->createElementNS(self::NS_BANKID, 'subID',
            $stsReq->getMerchant()->getSubID()));
        $AcquirerStatusReq->appendChild($Merchant);
        
        $Transaction = $dom->createElementNS(self::NS_BANKID, 'Transaction');
        $Transaction->appendChild($dom->createElementNS(self::NS_BANKID, 'transactionID',
            $stsReq->getTransaction()->getTransactionID()));

        $AcquirerStatusReq->appendChild($Transaction);
        
        $dom->formatOutput = TRUE;
        return $dom->saveXML();
    }
    
    public static function normalizeCertificate($certificate) {
        $begin = '-----BEGIN CERTIFICATE-----';
        $end = '-----END CERTIFICATE-----';
        
        $certificate = str_replace($begin, '', $certificate);
        $certificate = str_replace($end, '', $certificate);
        $certificate = preg_replace('~[\r\n\s\t]+~', '', $certificate);
        $certificate = trim($certificate);
        
        $certificate = chunk_split($certificate, 64);
        
        $certificate =
            $begin . PHP_EOL .
            $certificate. // no need for EOL here, it's added by chunk_split
            $end;
            
        return $certificate;
    }
}
