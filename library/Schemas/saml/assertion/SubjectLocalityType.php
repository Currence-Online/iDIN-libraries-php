<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing SubjectLocalityType
 *
 * 
 * XSD Type: SubjectLocalityType
 */
class SubjectLocalityType
{

    /**
     * @property string $address
     */
    private $address = null;

    /**
     * @property string $dNSName
     */
    private $dNSName = null;

    /**
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as dNSName
     *
     * @return string
     */
    public function getDNSName()
    {
        return $this->dNSName;
    }

    /**
     * Sets a new dNSName
     *
     * @param string $dNSName
     * @return self
     */
    public function setDNSName($dNSName)
    {
        $this->dNSName = $dNSName;
        return $this;
    }


}

