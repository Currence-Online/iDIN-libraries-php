<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing ReferenceList
 */
class ReferenceList
{

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[] $dataReference
     */
    private $dataReference = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[] $keyReference
     */
    private $keyReference = null;

    /**
     * Adds as dataReference
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType $dataReference
     */
    public function addToDataReference(\BankId\Merchant\Library\Schemas\xmlenc\ReferenceType $dataReference)
    {
        $this->dataReference[] = $dataReference;
        return $this;
    }

    /**
     * isset dataReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataReference($index)
    {
        return isset($this->dataReference[$index]);
    }

    /**
     * unset dataReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataReference($index)
    {
        unset($this->dataReference[$index]);
    }

    /**
     * Gets as dataReference
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[]
     */
    public function getDataReference()
    {
        return $this->dataReference;
    }

    /**
     * Sets a new dataReference
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[] $dataReference
     * @return self
     */
    public function setDataReference(array $dataReference)
    {
        $this->dataReference = $dataReference;
        return $this;
    }

    /**
     * Adds as keyReference
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType $keyReference
     */
    public function addToKeyReference(\BankId\Merchant\Library\Schemas\xmlenc\ReferenceType $keyReference)
    {
        $this->keyReference[] = $keyReference;
        return $this;
    }

    /**
     * isset keyReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeyReference($index)
    {
        return isset($this->keyReference[$index]);
    }

    /**
     * unset keyReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeyReference($index)
    {
        unset($this->keyReference[$index]);
    }

    /**
     * Gets as keyReference
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[]
     */
    public function getKeyReference()
    {
        return $this->keyReference;
    }

    /**
     * Sets a new keyReference
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\ReferenceType[] $keyReference
     * @return self
     */
    public function setKeyReference(array $keyReference)
    {
        $this->keyReference = $keyReference;
        return $this;
    }


}

