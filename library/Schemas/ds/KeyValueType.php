<?php

namespace BankId\Merchant\Library\Schemas\ds;

/**
 * Class representing KeyValueType
 *
 * 
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \BankId\Merchant\Library\Schemas\ds\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \BankId\Merchant\Library\Schemas\ds\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\BankId\Merchant\Library\Schemas\ds\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \BankId\Merchant\Library\Schemas\ds\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \BankId\Merchant\Library\Schemas\ds\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\BankId\Merchant\Library\Schemas\ds\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

