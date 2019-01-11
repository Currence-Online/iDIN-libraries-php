<?php

namespace BankId\Merchant\Library\Schemas\ds;

/**
 * Class representing SignatureType
 *
 * 
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Object[] $object
     */
    private $object = null;

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
     * Gets as signedInfo
     *
     * @return \BankId\Merchant\Library\Schemas\ds\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \BankId\Merchant\Library\Schemas\ds\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\BankId\Merchant\Library\Schemas\ds\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \BankId\Merchant\Library\Schemas\ds\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \BankId\Merchant\Library\Schemas\ds\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\BankId\Merchant\Library\Schemas\ds\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
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
     * Adds as object
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\ds\Object $object
     */
    public function addToObject(\BankId\Merchant\Library\Schemas\ds\Object $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param scalar $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Object[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Object[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

