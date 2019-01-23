<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerTrxReq;

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


}

