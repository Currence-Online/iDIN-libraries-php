<?php

namespace BankId\Merchant\Library\Internal;

/*
 * Describes a transaction request
 */
class TransactionRequestBase extends IdxMessageBase {

    public function __construct() {
        parent::__construct();
    }

    protected $entranceCode;
    protected $language;
    protected $expirationPeriod;
    protected $issuerID;

    /*
     * An 'authentication identifier' to facilitate continuation of the session even if the existing session has been lost.
     */
    public function getEntranceCode() {
        return $this->entranceCode;
    }

    /*
     * An 'authentication identifier' to facilitate continuation of the session even if the existing session has been lost.
     */
    public function setEntranceCode($entranceCode) {
        $this->entranceCode = $entranceCode;
    }

    /*
     * This field enables the Issuers's site to select the Consumer's preferred language (e.g. the language selected on the Merchant's site),
     * if the Issuers's site supports this: Dutch = 'nl', English = 'en'.
     */
    public function getLanguage() {
        return $this->language;
    }
    
    /*
     * This field enables the Issuers's site to select the Consumer's preferred language (e.g. the language selected on the Merchant's site),
     * if the Issuers's site supports this: Dutch = 'nl', English = 'en'.
     */
    public function setLanguage($language) {
        $this->language = $language;
    }

    /*
     * Optional: The period of validity of the authentication request
     */
    public function getExpirationPeriod() {
        return $this->expirationPeriod;
    }
    
    /*
     * Optional: The period of validity of the authentication request
     */
    public function setExpirationPeriod($expirationPeriod) {
        $this->expirationPeriod = $expirationPeriod;
    }

    /**
     * BIC of the Issuer
     */
    public function getIssuerID() {
        return $this->issuerID;
    }
    
    /**
     * BIC of the Issuer
     */
    public function setIssuerID($issuerID) {
        $this->issuerID = $issuerID;
    }

}
