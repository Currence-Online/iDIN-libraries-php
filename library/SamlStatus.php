<?php

namespace BankId\Merchant\Library;

class SamlStatus {
    /**
     * Status Success
     */
    public static $Success   = 'urn:oasis:names:tc:SAML:2.0:status:Success';
    /**
     * Status Requester
     */
    public static $Requester = 'urn:oasis:names:tc:SAML:2.0:status:Requester';
    /**
     * Status RequestDenied
     */
    public static $RequestDenied = 'urn:oasis:names:tc:SAML:2.0:status:RequestDenied';
    /**
     * Status RequestUnsupported
     */
    public static $RequestUnsupported = 'urn:oasis:names:tc:SAML:2.0:status:RequestUnsupported';
    /**
     * Status InvalidAttrNameOrValue
     */
    public static $InvalidAttrNameOrValue = 'urn:oasis:names:tc:SAML:2.0:status:InvalidAttrNameOrValue';
    /**
     * Status MismatchWithIDx
     */
    public static $MismatchWithIDx = 'urn:nl:bvn:bankid:1.0:status:MismatchWithIDx';
            
    private $statusMessage;
    private $statusCodeFirstLevel;
    private $statusCodeSecondLevel;
    
    /**
     * Constructor used to create Saml Status objects
     */
    public function __construct($statusMessage, $statusCodeFirstLevel, $statusCodeSecondLevel) {
        $this->statusMessage = $statusMessage;
        $this->statusCodeFirstLevel = $statusCodeFirstLevel;
        $this->statusCodeSecondLevel = $statusCodeSecondLevel;
    }
    
    /**
     * The status message
     */
    public function getStatusMessage() {
        return $this->statusMessage;
    }

    /**
     * The status message
     */
    public function setStatusMessage($statusMessage) {
        $this->statusMessage = $statusMessage;
    }

    /**
     * The status code first level
     */
    public function getStatusCodeFirstLevel() {
        return $this->statusCodeFirstLevel;
    }

    /**
     * The status code first level
     */
    public function setStatusCodeFirstLevel($statusCodeFirstLevel) {
        $this->statusCodeFirstLevel = $statusCodeFirstLevel;
    }

    /**
     * The status code second level
     */
    public function getStatusCodeSecondLevel() {
        return $this->statusCodeSecondLevel;
    }

    /**
     * The status code second level
     */
    public function setStatusCodeSecondLevel($statusCodeSecondLevel) {
        $this->statusCodeSecondLevel = $statusCodeSecondLevel;
    }
}
