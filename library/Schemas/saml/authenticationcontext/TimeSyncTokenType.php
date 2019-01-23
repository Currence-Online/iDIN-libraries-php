<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing TimeSyncTokenType
 *
 * 
 * XSD Type: TimeSyncTokenType
 */
class TimeSyncTokenType
{

    /**
     * @property string $deviceType
     */
    private $deviceType = null;

    /**
     * @property integer $seedLength
     */
    private $seedLength = null;

    /**
     * @property string $deviceInHand
     */
    private $deviceInHand = null;

    /**
     * Gets as deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Sets a new deviceType
     *
     * @param string $deviceType
     * @return self
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Gets as seedLength
     *
     * @return integer
     */
    public function getSeedLength()
    {
        return $this->seedLength;
    }

    /**
     * Sets a new seedLength
     *
     * @param integer $seedLength
     * @return self
     */
    public function setSeedLength($seedLength)
    {
        $this->seedLength = $seedLength;
        return $this;
    }

    /**
     * Gets as deviceInHand
     *
     * @return string
     */
    public function getDeviceInHand()
    {
        return $this->deviceInHand;
    }

    /**
     * Sets a new deviceInHand
     *
     * @param string $deviceInHand
     * @return self
     */
    public function setDeviceInHand($deviceInHand)
    {
        $this->deviceInHand = $deviceInHand;
        return $this;
    }


}

