<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing EncryptionPropertiesType
 *
 * 
 * XSD Type: EncryptionPropertiesType
 */
class EncryptionPropertiesType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperty[]
     * $encryptionProperty
     */
    private $encryptionProperty = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as encryptionProperty
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperty
     * $encryptionProperty
     */
    public function addToEncryptionProperty(\BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperty $encryptionProperty)
    {
        $this->encryptionProperty[] = $encryptionProperty;
        return $this;
    }

    /**
     * isset encryptionProperty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEncryptionProperty($index)
    {
        return isset($this->encryptionProperty[$index]);
    }

    /**
     * unset encryptionProperty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEncryptionProperty($index)
    {
        unset($this->encryptionProperty[$index]);
    }

    /**
     * Gets as encryptionProperty
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperty[]
     */
    public function getEncryptionProperty()
    {
        return $this->encryptionProperty;
    }

    /**
     * Sets a new encryptionProperty
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperty[]
     * $encryptionProperty
     * @return self
     */
    public function setEncryptionProperty(array $encryptionProperty)
    {
        $this->encryptionProperty = $encryptionProperty;
        return $this;
    }


}

