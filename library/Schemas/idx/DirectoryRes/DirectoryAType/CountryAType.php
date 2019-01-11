<?php

namespace BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType;

/**
 * Class representing CountryAType
 */
class CountryAType
{

    /**
     * @property string $countryNames
     */
    private $countryNames = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType\IssuerAType[]
     * $issuer
     */
    private $issuer = null;

    /**
     * Gets as countryNames
     *
     * @return string
     */
    public function getCountryNames()
    {
        return $this->countryNames;
    }

    /**
     * Sets a new countryNames
     *
     * @param string $countryNames
     * @return self
     */
    public function setCountryNames($countryNames)
    {
        $this->countryNames = $countryNames;
        return $this;
    }

    /**
     * Adds as issuer
     *
     * @return self
     * @param
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType\IssuerAType
     * $issuer
     */
    public function addToIssuer(\BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType\IssuerAType $issuer)
    {
        $this->issuer[] = $issuer;
        return $this;
    }

    /**
     * isset issuer
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIssuer($index)
    {
        return isset($this->issuer[$index]);
    }

    /**
     * unset issuer
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIssuer($index)
    {
        unset($this->issuer[$index]);
    }

    /**
     * Gets as issuer
     *
     * @return
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType\IssuerAType[]
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * @param
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType\IssuerAType[]
     * $issuer
     * @return self
     */
    public function setIssuer(array $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }


}

