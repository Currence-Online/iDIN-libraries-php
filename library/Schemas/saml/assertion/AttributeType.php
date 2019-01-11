<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AttributeType
 *
 * 
 * XSD Type: AttributeType
 */
class AttributeType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $nameFormat
     */
    private $nameFormat = null;

    /**
     * @property string $friendlyName
     */
    private $friendlyName = null;

    /**
     * @property mixed[] $attributeValue
     */
    private $attributeValue = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nameFormat
     *
     * @return string
     */
    public function getNameFormat()
    {
        return $this->nameFormat;
    }

    /**
     * Sets a new nameFormat
     *
     * @param string $nameFormat
     * @return self
     */
    public function setNameFormat($nameFormat)
    {
        $this->nameFormat = $nameFormat;
        return $this;
    }

    /**
     * Gets as friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * Sets a new friendlyName
     *
     * @param string $friendlyName
     * @return self
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }

    /**
     * Adds as attributeValue
     *
     * @return self
     * @param mixed $attributeValue
     */
    public function addToAttributeValue($attributeValue)
    {
        $this->attributeValue[] = $attributeValue;
        return $this;
    }

    /**
     * isset attributeValue
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeValue($index)
    {
        return isset($this->attributeValue[$index]);
    }

    /**
     * unset attributeValue
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeValue($index)
    {
        unset($this->attributeValue[$index]);
    }

    /**
     * Gets as attributeValue
     *
     * @return mixed[]
     */
    public function getAttributeValue()
    {
        return $this->attributeValue;
    }

    /**
     * Sets a new attributeValue
     *
     * @param mixed $attributeValue
     * @return self
     */
    public function setAttributeValue(array $attributeValue)
    {
        $this->attributeValue = $attributeValue;
        return $this;
    }


}

