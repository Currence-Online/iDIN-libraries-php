<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AudienceRestrictionType
 *
 * 
 * XSD Type: AudienceRestrictionType
 */
class AudienceRestrictionType extends ConditionAbstractType
{

    /**
     * @property string[] $audience
     */
    private $audience = null;

    /**
     * Adds as audience
     *
     * @return self
     * @param string $audience
     */
    public function addToAudience($audience)
    {
        $this->audience[] = $audience;
        return $this;
    }

    /**
     * isset audience
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAudience($index)
    {
        return isset($this->audience[$index]);
    }

    /**
     * unset audience
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAudience($index)
    {
        unset($this->audience[$index]);
    }

    /**
     * Gets as audience
     *
     * @return string[]
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Sets a new audience
     *
     * @param string $audience
     * @return self
     */
    public function setAudience(array $audience)
    {
        $this->audience = $audience;
        return $this;
    }


}

