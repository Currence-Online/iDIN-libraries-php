<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

use BankId\Merchant\Library\Schemas\saml\assertion\AttributeType;

/**
 * Class representing RequestedAttributeType
 *
 * 
 * XSD Type: RequestedAttributeType
 */
class RequestedAttributeType extends AttributeType
{

    /**
     * @property boolean $isRequired
     */
    private $isRequired = null;

    /**
     * Gets as isRequired
     *
     * @return boolean
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * Sets a new isRequired
     *
     * @param boolean $isRequired
     * @return self
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
        return $this;
    }


}

