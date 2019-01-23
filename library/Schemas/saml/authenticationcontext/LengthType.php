<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing LengthType
 *
 * 
 * XSD Type: LengthType
 */
class LengthType
{

    /**
     * @property integer $min
     */
    private $min = null;

    /**
     * @property integer $max
     */
    private $max = null;

    /**
     * Gets as min
     *
     * @return integer
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * @param integer $min
     * @return self
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * @param integer $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }


}

