<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing NameIDType
 *
 * 
 * XSD Type: NameIDType
 */
class NameIDType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $nameQualifier
     */
    private $nameQualifier = null;

    /**
     * @property string $sPNameQualifier
     */
    private $sPNameQualifier = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $sPProvidedID
     */
    private $sPProvidedID = null;

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
     * Gets as nameQualifier
     *
     * @return string
     */
    public function getNameQualifier()
    {
        return $this->nameQualifier;
    }

    /**
     * Sets a new nameQualifier
     *
     * @param string $nameQualifier
     * @return self
     */
    public function setNameQualifier($nameQualifier)
    {
        $this->nameQualifier = $nameQualifier;
        return $this;
    }

    /**
     * Gets as sPNameQualifier
     *
     * @return string
     */
    public function getSPNameQualifier()
    {
        return $this->sPNameQualifier;
    }

    /**
     * Sets a new sPNameQualifier
     *
     * @param string $sPNameQualifier
     * @return self
     */
    public function setSPNameQualifier($sPNameQualifier)
    {
        $this->sPNameQualifier = $sPNameQualifier;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as sPProvidedID
     *
     * @return string
     */
    public function getSPProvidedID()
    {
        return $this->sPProvidedID;
    }

    /**
     * Sets a new sPProvidedID
     *
     * @param string $sPProvidedID
     * @return self
     */
    public function setSPProvidedID($sPProvidedID)
    {
        $this->sPProvidedID = $sPProvidedID;
        return $this;
    }


}

