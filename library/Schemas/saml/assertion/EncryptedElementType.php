<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing EncryptedElementType
 *
 * 
 * XSD Type: EncryptedElementType
 */
class EncryptedElementType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\EncryptedData $encryptedData
     */
    private $encryptedData = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\EncryptedKey[] $encryptedKey
     */
    private $encryptedKey = null;

    /**
     * Gets as encryptedData
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\EncryptedData
     */
    public function getEncryptedData()
    {
        return $this->encryptedData;
    }

    /**
     * Sets a new encryptedData
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptedData $encryptedData
     * @return self
     */
    public function setEncryptedData(\BankId\Merchant\Library\Schemas\xmlenc\EncryptedData $encryptedData)
    {
        $this->encryptedData = $encryptedData;
        return $this;
    }

    /**
     * Adds as encryptedKey
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptedKey $encryptedKey
     */
    public function addToEncryptedKey(\BankId\Merchant\Library\Schemas\xmlenc\EncryptedKey $encryptedKey)
    {
        $this->encryptedKey[] = $encryptedKey;
        return $this;
    }

    /**
     * isset encryptedKey
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEncryptedKey($index)
    {
        return isset($this->encryptedKey[$index]);
    }

    /**
     * unset encryptedKey
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEncryptedKey($index)
    {
        unset($this->encryptedKey[$index]);
    }

    /**
     * Gets as encryptedKey
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\EncryptedKey[]
     */
    public function getEncryptedKey()
    {
        return $this->encryptedKey;
    }

    /**
     * Sets a new encryptedKey
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptedKey[] $encryptedKey
     * @return self
     */
    public function setEncryptedKey(array $encryptedKey)
    {
        $this->encryptedKey = $encryptedKey;
        return $this;
    }


}

