<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing LocalizedURIType
 *
 * 
 * XSD Type: localizedURIType
 */
class LocalizedURIType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\LocalizedNameType\LangAType $lang
     */
    private $lang = null;

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
     * Gets as lang
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\LocalizedNameType\LangAType
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\LocalizedNameType\LangAType $lang
     * @return self
     */
    public function setLang(\BankId\Merchant\Library\Schemas\saml\metadata\LocalizedNameType\LangAType $lang)
    {
        $this->lang = $lang;
        return $this;
    }


}

