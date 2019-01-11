<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerTrxReq;

/**
 * Class representing MerchantAType
 */
class MerchantAType
{

    /**
     * @property string $merchantID
     */
    private $merchantID = null;

    /**
     * @property integer $subID
     */
    private $subID = null;

    /**
     * @property string $merchantReturnURL
     */
    private $merchantReturnURL = null;

    /**
     * Gets as merchantID
     *
     * @return string
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Sets a new merchantID
     *
     * @param string $merchantID
     * @return self
     */
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;
        return $this;
    }

    /**
     * Gets as subID
     *
     * @return integer
     */
    public function getSubID()
    {
        return $this->subID;
    }

    /**
     * Sets a new subID
     *
     * @param integer $subID
     * @return self
     */
    public function setSubID($subID)
    {
        $this->subID = $subID;
        return $this;
    }

    /**
     * Gets as merchantReturnURL
     *
     * @return string
     */
    public function getMerchantReturnURL()
    {
        return $this->merchantReturnURL;
    }

    /**
     * Sets a new merchantReturnURL
     *
     * @param string $merchantReturnURL
     * @return self
     */
    public function setMerchantReturnURL($merchantReturnURL)
    {
        $this->merchantReturnURL = $merchantReturnURL;
        return $this;
    }


}

