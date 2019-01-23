<?php

namespace BankId\Merchant\Library\Schemas\idx\DirectoryRes;

/**
 * Class representing DirectoryAType
 */
class DirectoryAType
{

    /**
     * @property string $directoryDateTimestamp
     */
    private $directoryDateTimestamp = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType[]
     * $country
     */
    private $country = null;

    /**
     * Gets as directoryDateTimestamp
     *
     * @return string
     */
    public function getDirectoryDateTimestamp()
    {
        return $this->directoryDateTimestamp;
    }

    /**
     * Sets a new directoryDateTimestamp
     *
     * @param string $directoryDateTimestamp
     * @return self
     */
    public function setDirectoryDateTimestamp($directoryDateTimestamp)
    {
        $this->directoryDateTimestamp = $directoryDateTimestamp;
        return $this;
    }

    /**
     * Adds as country
     *
     * @return self
     * @param
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType
     * $country
     */
    public function addToCountry(\BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType $country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * @return
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param
     * \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType\CountryAType[]
     * $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }


}

