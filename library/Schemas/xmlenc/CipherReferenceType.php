<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing CipherReferenceType
 *
 * 
 * XSD Type: CipherReferenceType
 */
class CipherReferenceType
{

    /**
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\ds\Transform $transform
     */
    public function addToTransforms(\BankId\Merchant\Library\Schemas\ds\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Transform[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }


}

