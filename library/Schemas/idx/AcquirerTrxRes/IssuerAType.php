<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes;

/**
 * Class representing IssuerAType
 */
class IssuerAType
{

    /**
     * @property string $issuerAuthenticationURL
     */
    private $issuerAuthenticationURL = null;

    /**
     * Gets as issuerAuthenticationURL
     *
     * @return string
     */
    public function getIssuerAuthenticationURL()
    {
        return $this->issuerAuthenticationURL;
    }

    /**
     * Sets a new issuerAuthenticationURL
     *
     * @param string $issuerAuthenticationURL
     * @return self
     */
    public function setIssuerAuthenticationURL($issuerAuthenticationURL)
    {
        $this->issuerAuthenticationURL = $issuerAuthenticationURL;
        return $this;
    }


}

