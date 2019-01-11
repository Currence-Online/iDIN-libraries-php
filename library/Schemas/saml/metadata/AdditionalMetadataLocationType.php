<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing AdditionalMetadataLocationType
 *
 * 
 * XSD Type: AdditionalMetadataLocationType
 */
class AdditionalMetadataLocationType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }


}

