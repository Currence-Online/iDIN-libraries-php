<?php

namespace BankId\Merchant\Library\Internal;

class DirectoryResponseBase {
    protected $isError;
    protected $directoryDateTimestamp;
    protected $issuers;
    protected $rawMessage;
    
    public function __construct() {
        $this->issuers = array();
    }

    /**
     * true if an error occured, or false when no errors were encountered
     */
    public function getIsError() {
        return $this->isError;
    }
    
    /**
     * DateTime set to when this directory was last updated
     */
    public function getDirectoryDateTimestamp() {
        return $this->directoryDateTimestamp;
    }
    
    /**
     * Array of available Issuers
     */
    public function getIssuers() {
        return $this->issuers;
    }

    /**
     * The response XML as received
     */
    public function getRawMessage() {
        return $this->rawMessage;
    }
    
    /**
     * List of available issuers as a map where the key is each country and the value is a list of issuers in that country
     */
    public function getIssuersByCountry() {
        $issuers = $this->issuers;
        
        $ret = array();
        
        foreach ($issuers as $issuer) {
            if (array_key_exists($issuer->GetCountry(), $ret)) {
                array_push($ret[$issuer->GetCountry()], $issuer);
            }
            else {
                $ret[$issuer->GetCountry()] = array();
                array_push($ret[$issuer->GetCountry()], $issuer);
            }
        }
        
        return $ret;
    }
}

/**
 * An Issuer contained in a directory response
 */
class Issuer {
    private $country;
    private $name;
    private $ID;

    public function __construct($country, $name, $ID) {
        $this->country = $country;
        $this->name = $name;
        $this->ID = $ID;
    }
    
    /**
     * Country name
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Bank name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * BIC
     */
    public function getID() {
        return $this->ID;
    }
}