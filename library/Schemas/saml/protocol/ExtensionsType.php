<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing ExtensionsType
 *
 *
 * XSD Type: ExtensionsType
 */
class ExtensionsType
{
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $attribute
     */
    private $attribute = null;

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
     * Adds as attribute
     *
     * @return self
     * @param string $attribute
     */
    public function addToAttribute($attribute)
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
     * @return string[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param string $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

}

