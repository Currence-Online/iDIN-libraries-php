<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing KeyDescriptorType
 *
 * 
 * XSD Type: KeyDescriptorType
 */
class KeyDescriptorType
{

    /**
     * @property string $use
     */
    private $use = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\EncryptionMethod[]
     * $encryptionMethod
     */
    private $encryptionMethod = null;

    /**
     * Gets as use
     *
     * @return string
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * @param string $use
     * @return self
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \BankId\Merchant\Library\Schemas\ds\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \BankId\Merchant\Library\Schemas\ds\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\BankId\Merchant\Library\Schemas\ds\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as encryptionMethod
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EncryptionMethod
     * $encryptionMethod
     */
    public function addToEncryptionMethod(\BankId\Merchant\Library\Schemas\saml\metadata\EncryptionMethod $encryptionMethod)
    {
        $this->encryptionMethod[] = $encryptionMethod;
        return $this;
    }

    /**
     * isset encryptionMethod
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEncryptionMethod($index)
    {
        return isset($this->encryptionMethod[$index]);
    }

    /**
     * unset encryptionMethod
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEncryptionMethod($index)
    {
        unset($this->encryptionMethod[$index]);
    }

    /**
     * Gets as encryptionMethod
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\EncryptionMethod[]
     */
    public function getEncryptionMethod()
    {
        return $this->encryptionMethod;
    }

    /**
     * Sets a new encryptionMethod
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EncryptionMethod[]
     * $encryptionMethod
     * @return self
     */
    public function setEncryptionMethod(array $encryptionMethod)
    {
        $this->encryptionMethod = $encryptionMethod;
        return $this;
    }


}

