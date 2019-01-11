<?php

namespace BankId\Merchant\Library\Schemas\ds;

/**
 * Class representing SignaturePropertiesType
 *
 * 
 * XSD Type: SignaturePropertiesType
 */
class SignaturePropertiesType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\SignatureProperty[]
     * $signatureProperty
     */
    private $signatureProperty = null;

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
     * Adds as signatureProperty
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\ds\SignatureProperty $signatureProperty
     */
    public function addToSignatureProperty(\BankId\Merchant\Library\Schemas\ds\SignatureProperty $signatureProperty)
    {
        $this->signatureProperty[] = $signatureProperty;
        return $this;
    }

    /**
     * isset signatureProperty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignatureProperty($index)
    {
        return isset($this->signatureProperty[$index]);
    }

    /**
     * unset signatureProperty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignatureProperty($index)
    {
        unset($this->signatureProperty[$index]);
    }

    /**
     * Gets as signatureProperty
     *
     * @return \BankId\Merchant\Library\Schemas\ds\SignatureProperty[]
     */
    public function getSignatureProperty()
    {
        return $this->signatureProperty;
    }

    /**
     * Sets a new signatureProperty
     *
     * @param \BankId\Merchant\Library\Schemas\ds\SignatureProperty[]
     * $signatureProperty
     * @return self
     */
    public function setSignatureProperty(array $signatureProperty)
    {
        $this->signatureProperty = $signatureProperty;
        return $this;
    }


}

