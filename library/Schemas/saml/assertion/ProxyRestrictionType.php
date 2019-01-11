<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing ProxyRestrictionType
 *
 * 
 * XSD Type: ProxyRestrictionType
 */
class ProxyRestrictionType extends ConditionAbstractType
{

    /**
     * @property integer $count
     */
    private $count = null;

    /**
     * @property string[] $audience
     */
    private $audience = null;

    /**
     * Gets as count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param integer $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

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

