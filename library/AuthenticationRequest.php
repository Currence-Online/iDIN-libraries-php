<?php

namespace BankId\Merchant\Library;

/**
 * Describes a new authentication request
 */
class AuthenticationRequest extends Internal\TransactionRequestBase {
    protected $merchantReference;
    protected $requestedServiceID;
    protected $assuranceLevel;
    protected $documentID;

    /**
     * Default constructor
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * This field is the unique authentication reference from the Merchant.
     */
    public function getMerchantReference() {
        return $this->merchantReference;
    }
    
    /**
     * This field is the unique authentication reference from the Merchant.
     */
    public function setMerchantReference($merchantReference) {
        $this->merchantReference = $merchantReference;
    }
    
    /**
     * This field specifies what attributes the Merchant would like to have a look at.
     */
    public function getRequestedServiceID() {
        return $this->requestedServiceID;
    }
    
    /**
     * This field specifies what attributes the Merchant would like to have a look at.
     */
    public function setRequestedServiceID($serviceID) {
        $this->requestedServiceID = $serviceID;
    }
    
    /**
     * This fiels specified the level of assurance for authentication of Consumer.
     */
    public function getAssuranceLevel() {
        return $this->assuranceLevel;
    }
    
    /**
     * This fiels specified the level of assurance for authentication of Consumer.
     */
    public function setAssuranceLevel($assuranceLevel) {
        $this->assuranceLevel = $assuranceLevel;
    }

    /**
     * This fiels specified the document to be signed (Merchant.DocumentID – as a sha256 value)
     */
    public function getDocumentID() {
        return $this->documentID;
    }

    /**
     * This fiels specified the document to be signed (Merchant.DocumentID – as a sha256 value)
     */
    public function setDocumentID($documentID) {
        $this->documentID = $documentID;
    }
    
    private static function getGuid() {
        if (function_exists('com_create_guid') === TRUE) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535),
            mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479),
            mt_rand(32768, 49151), mt_rand(0, 65535),
            mt_rand(0, 65535), mt_rand(0, 65535));
    }
    
    /**
     * Generates a merchantReference that you can use
     */
    public static function generateMerchantReference() {
        return substr(
            'A' .
            str_replace('-', '', self::getGuid()) .
            str_replace('-', '', self::getGuid()),
        0, 35);
    }
}
