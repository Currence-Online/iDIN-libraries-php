<?php

namespace BankId\Merchant\Library\Schemas\ds;

/**
 * Class representing TransformsType
 *
 * 
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Transform[] $transform
     */
    private $transform = null;

    /**
     * Adds as transform
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\ds\Transform $transform
     */
    public function addToTransform(\BankId\Merchant\Library\Schemas\ds\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

