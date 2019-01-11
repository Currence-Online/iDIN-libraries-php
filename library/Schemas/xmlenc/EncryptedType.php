<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing EncryptedType
 *
 * 
 * XSD Type: EncryptedType
 */
class EncryptedType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $mimeType
     */
    private $mimeType = null;

    /**
     * @property string $encoding
     */
    private $encoding = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\EncryptionMethodType
     * $encryptionMethod
     */
    private $encryptionMethod = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\CipherData $cipherData
     */
    private $cipherData = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperties
     * $encryptionProperties
     */
    private $encryptionProperties = null;

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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Sets a new mimeType
     *
     * @param string $mimeType
     * @return self
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * Gets as encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * @param string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Gets as encryptionMethod
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\EncryptionMethodType
     */
    public function getEncryptionMethod()
    {
        return $this->encryptionMethod;
    }

    /**
     * Sets a new encryptionMethod
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptionMethodType
     * $encryptionMethod
     * @return self
     */
    public function setEncryptionMethod(\BankId\Merchant\Library\Schemas\xmlenc\EncryptionMethodType $encryptionMethod)
    {
        $this->encryptionMethod = $encryptionMethod;
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
     * Gets as cipherData
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\CipherData
     */
    public function getCipherData()
    {
        return $this->cipherData;
    }

    /**
     * Sets a new cipherData
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\CipherData $cipherData
     * @return self
     */
    public function setCipherData(\BankId\Merchant\Library\Schemas\xmlenc\CipherData $cipherData)
    {
        $this->cipherData = $cipherData;
        return $this;
    }

    /**
     * Gets as encryptionProperties
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperties
     */
    public function getEncryptionProperties()
    {
        return $this->encryptionProperties;
    }

    /**
     * Sets a new encryptionProperties
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperties
     * $encryptionProperties
     * @return self
     */
    public function setEncryptionProperties(\BankId\Merchant\Library\Schemas\xmlenc\EncryptionProperties $encryptionProperties)
    {
        $this->encryptionProperties = $encryptionProperties;
        return $this;
    }


}

