<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing CipherDataType
 *
 * 
 * XSD Type: CipherDataType
 */
class CipherDataType
{

    /**
     * @property mixed $cipherValue
     */
    private $cipherValue = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\CipherReference
     * $cipherReference
     */
    private $cipherReference = null;

    /**
     * Gets as cipherValue
     *
     * @return mixed
     */
    public function getCipherValue()
    {
        return $this->cipherValue;
    }

    /**
     * Sets a new cipherValue
     *
     * @param mixed $cipherValue
     * @return self
     */
    public function setCipherValue($cipherValue)
    {
        $this->cipherValue = $cipherValue;
        return $this;
    }

    /**
     * Gets as cipherReference
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\CipherReference
     */
    public function getCipherReference()
    {
        return $this->cipherReference;
    }

    /**
     * Sets a new cipherReference
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\CipherReference $cipherReference
     * @return self
     */
    public function setCipherReference(\BankId\Merchant\Library\Schemas\xmlenc\CipherReference $cipherReference)
    {
        $this->cipherReference = $cipherReference;
        return $this;
    }


}

