<?php

namespace BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType;

/**
 * Class representing IssuerAType
 */
class IssuerAType
{

    /**
     * @property string $issuerID
     */
    private $issuerID = null;

    /**
     * @property string $issuerName
     */
    private $issuerName = null;

    /**
     * Gets as issuerID
     *
     * @return string
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * @param string $issuerID
     * @return self
     */
    public function setIssuerID($issuerID)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issuerName
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * Sets a new issuerName
     *
     * @param string $issuerName
     * @return self
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
        return $this;
    }


}

