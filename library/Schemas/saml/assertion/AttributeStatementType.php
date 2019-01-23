<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AttributeStatementType
 *
 * 
 * XSD Type: AttributeStatementType
 */
class AttributeStatementType extends StatementAbstractType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     */
    private $attribute = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAttribute[]
     * $encryptedAttribute
     */
    private $encryptedAttribute = null;

    /**
     * Adds as attribute
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Attribute $attribute
     */
    public function addToAttribute(\BankId\Merchant\Library\Schemas\saml\assertion\Attribute $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    /**
     * Adds as encryptedAttribute
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAttribute
     * $encryptedAttribute
     */
    public function addToEncryptedAttribute(\BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAttribute $encryptedAttribute)
    {
        $this->encryptedAttribute[] = $encryptedAttribute;
        return $this;
    }

    /**
     * isset encryptedAttribute
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEncryptedAttribute($index)
    {
        return isset($this->encryptedAttribute[$index]);
    }

    /**
     * unset encryptedAttribute
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEncryptedAttribute($index)
    {
        unset($this->encryptedAttribute[$index]);
    }

    /**
     * Gets as encryptedAttribute
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAttribute[]
     */
    public function getEncryptedAttribute()
    {
        return $this->encryptedAttribute;
    }

    /**
     * Sets a new encryptedAttribute
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAttribute[]
     * $encryptedAttribute
     * @return self
     */
    public function setEncryptedAttribute(array $encryptedAttribute)
    {
        $this->encryptedAttribute = $encryptedAttribute;
        return $this;
    }


}

