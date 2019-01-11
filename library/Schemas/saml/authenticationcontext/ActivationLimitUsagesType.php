<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing ActivationLimitUsagesType
 *
 * 
 * XSD Type: ActivationLimitUsagesType
 */
class ActivationLimitUsagesType
{

    /**
     * @property integer $number
     */
    private $number = null;

    /**
     * Gets as number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

