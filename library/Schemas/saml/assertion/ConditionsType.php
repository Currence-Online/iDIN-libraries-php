<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing ConditionsType
 *
 * 
 * XSD Type: ConditionsType
 */
class ConditionsType
{

    /**
     * @property string $notBefore
     */
    private $notBefore = null;

    /**
     * @property string $notOnOrAfter
     */
    private $notOnOrAfter = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Condition[] $condition
     */
    private $condition = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\AudienceRestriction[]
     * $audienceRestriction
     */
    private $audienceRestriction = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\OneTimeUse[]
     * $oneTimeUse
     */
    private $oneTimeUse = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\ProxyRestriction[]
     * $proxyRestriction
     */
    private $proxyRestriction = null;

    /**
     * Gets as notBefore
     *
     * @return string
     */
    public function getNotBefore()
    {
        return $this->notBefore;
    }

    /**
     * Sets a new notBefore
     *
     * @param string $notBefore
     * @return self
     */
    public function setNotBefore($notBefore)
    {
        $this->notBefore = $notBefore;
        return $this;
    }

    /**
     * Gets as notOnOrAfter
     *
     * @return string
     */
    public function getNotOnOrAfter()
    {
        return $this->notOnOrAfter;
    }

    /**
     * Sets a new notOnOrAfter
     *
     * @param string $notOnOrAfter
     * @return self
     */
    public function setNotOnOrAfter($notOnOrAfter)
    {
        $this->notOnOrAfter = $notOnOrAfter;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Condition $condition
     */
    public function addToCondition(\BankId\Merchant\Library\Schemas\saml\assertion\Condition $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Condition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Condition[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as audienceRestriction
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AudienceRestriction
     * $audienceRestriction
     */
    public function addToAudienceRestriction(\BankId\Merchant\Library\Schemas\saml\assertion\AudienceRestriction $audienceRestriction)
    {
        $this->audienceRestriction[] = $audienceRestriction;
        return $this;
    }

    /**
     * isset audienceRestriction
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAudienceRestriction($index)
    {
        return isset($this->audienceRestriction[$index]);
    }

    /**
     * unset audienceRestriction
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAudienceRestriction($index)
    {
        unset($this->audienceRestriction[$index]);
    }

    /**
     * Gets as audienceRestriction
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\AudienceRestriction[]
     */
    public function getAudienceRestriction()
    {
        return $this->audienceRestriction;
    }

    /**
     * Sets a new audienceRestriction
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AudienceRestriction[]
     * $audienceRestriction
     * @return self
     */
    public function setAudienceRestriction(array $audienceRestriction)
    {
        $this->audienceRestriction = $audienceRestriction;
        return $this;
    }

    /**
     * Adds as oneTimeUse
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\OneTimeUse $oneTimeUse
     */
    public function addToOneTimeUse(\BankId\Merchant\Library\Schemas\saml\assertion\OneTimeUse $oneTimeUse)
    {
        $this->oneTimeUse[] = $oneTimeUse;
        return $this;
    }

    /**
     * isset oneTimeUse
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOneTimeUse($index)
    {
        return isset($this->oneTimeUse[$index]);
    }

    /**
     * unset oneTimeUse
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOneTimeUse($index)
    {
        unset($this->oneTimeUse[$index]);
    }

    /**
     * Gets as oneTimeUse
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\OneTimeUse[]
     */
    public function getOneTimeUse()
    {
        return $this->oneTimeUse;
    }

    /**
     * Sets a new oneTimeUse
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\OneTimeUse[] $oneTimeUse
     * @return self
     */
    public function setOneTimeUse(array $oneTimeUse)
    {
        $this->oneTimeUse = $oneTimeUse;
        return $this;
    }

    /**
     * Adds as proxyRestriction
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\ProxyRestriction
     * $proxyRestriction
     */
    public function addToProxyRestriction(\BankId\Merchant\Library\Schemas\saml\assertion\ProxyRestriction $proxyRestriction)
    {
        $this->proxyRestriction[] = $proxyRestriction;
        return $this;
    }

    /**
     * isset proxyRestriction
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProxyRestriction($index)
    {
        return isset($this->proxyRestriction[$index]);
    }

    /**
     * unset proxyRestriction
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProxyRestriction($index)
    {
        unset($this->proxyRestriction[$index]);
    }

    /**
     * Gets as proxyRestriction
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\ProxyRestriction[]
     */
    public function getProxyRestriction()
    {
        return $this->proxyRestriction;
    }

    /**
     * Sets a new proxyRestriction
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\ProxyRestriction[]
     * $proxyRestriction
     * @return self
     */
    public function setProxyRestriction(array $proxyRestriction)
    {
        $this->proxyRestriction = $proxyRestriction;
        return $this;
    }


}

