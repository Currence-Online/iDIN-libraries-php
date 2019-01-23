<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing EncryptionMethodType
 *
 * 
 * XSD Type: EncryptionMethodType
 */
class EncryptionMethodType
{

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * @property integer $keySize
     */
    private $keySize = null;

    /**
     * @property mixed $oAEPparams
     */
    private $oAEPparams = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as keySize
     *
     * @return integer
     */
    public function getKeySize()
    {
        return $this->keySize;
    }

    /**
     * Sets a new keySize
     *
     * @param integer $keySize
     * @return self
     */
    public function setKeySize($keySize)
    {
        $this->keySize = $keySize;
        return $this;
    }

    /**
     * Gets as oAEPparams
     *
     * @return mixed
     */
    public function getOAEPparams()
    {
        return $this->oAEPparams;
    }

    /**
     * Sets a new oAEPparams
     *
     * @param mixed $oAEPparams
     * @return self
     */
    public function setOAEPparams($oAEPparams)
    {
        $this->oAEPparams = $oAEPparams;
        return $this;
    }


}

