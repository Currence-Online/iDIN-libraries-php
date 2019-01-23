<?php

namespace BankId\Merchant\Library;

class BankIdMessageBuilder {
    public function getTransaction(Configuration $config, $authenticationRequest) {
        $authnReq = new Schemas\saml\protocol\AuthnRequestType();

        $authnReq->setID($authenticationRequest->getMerchantReference());
        $authnReq->setVersion('2.0');
        $authnReq->setIssueInstant($authenticationRequest->getCreated());
        $authnReq->setConsent('true');
        $authnReq->setForceAuthn('true');
        $authnReq->setProtocolBinding('nl:bvn:bankid:1.0:protocol:iDx');
        $authnReq->setAssertionConsumerServiceURL($config->MerchantReturnUrl);
        $authnReq->setAttributeConsumingServiceIndex($authenticationRequest->getRequestedServiceID());
        
        $authnReq->setIssuer(new Schemas\saml\assertion\Issuer($config->MerchantID));
        
        $authnReq->setConditions(new Schemas\saml\assertion\Conditions());
        
        $authnReq->setRequestedAuthnContext(new Schemas\saml\protocol\RequestedAuthnContext());
        $authnReq->getRequestedAuthnContext()->setComparison('minimum');
        $authnReq->getRequestedAuthnContext()->setAuthnContextClassRef(
            array(
                $authenticationRequest->getAssuranceLevel(),
                $authenticationRequest->getDocumentID()
            ));
        
        $authnReq->setScoping(new Schemas\saml\protocol\Scoping());


        $authnReq->setExtensions(new Schemas\saml\protocol\Extensions());
        $authnReq->getExtensions()->setName("urn:nl:bvn:bankid:1.0:merchant.documentID");
        $authnReq->getExtensions()->setAttribute(
            array(
                $authenticationRequest->getDocumentID()
            )
        );

        Validation\Validator::validateAuthnRequestType($authnReq);
                
        return Utils::serializeAuthnRequest($authnReq);
    }
}
