<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing AttributeQueryType
 *
 * 
 * XSD Type: AttributeQueryType
 */
class AttributeQueryType extends SubjectQueryAbstractType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     */
    private $attribute = null;

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


}

