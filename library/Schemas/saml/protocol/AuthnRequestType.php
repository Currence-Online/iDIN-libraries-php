<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing AuthnRequestType
 *
 * 
 * XSD Type: AuthnRequestType
 */
class AuthnRequestType extends RequestAbstractType
{

    /**
     * @property boolean $forceAuthn
     */
    private $forceAuthn = null;

    /**
     * @property boolean $isPassive
     */
    private $isPassive = null;

    /**
     * @property string $protocolBinding
     */
    private $protocolBinding = null;

    /**
     * @property integer $assertionConsumerServiceIndex
     */
    private $assertionConsumerServiceIndex = null;

    /**
     * @property string $assertionConsumerServiceURL
     */
    private $assertionConsumerServiceURL = null;

    /**
     * @property integer $attributeConsumingServiceIndex
     */
    private $attributeConsumingServiceIndex = null;

    /**
     * @property string $providerName
     */
    private $providerName = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     */
    private $subject = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy
     * $nameIDPolicy
     */
    private $nameIDPolicy = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions
     */
    private $conditions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     * $requestedAuthnContext
     */
    private $requestedAuthnContext = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\Scoping $scoping
     */
    private $scoping = null;

    /**
     * Gets as forceAuthn
     *
     * @return boolean
     */
    public function getForceAuthn()
    {
        return $this->forceAuthn;
    }

    /**
     * Sets a new forceAuthn
     *
     * @param boolean $forceAuthn
     * @return self
     */
    public function setForceAuthn($forceAuthn)
    {
        $this->forceAuthn = $forceAuthn;
        return $this;
    }

    /**
     * Gets as isPassive
     *
     * @return boolean
     */
    public function getIsPassive()
    {
        return $this->isPassive;
    }

    /**
     * Sets a new isPassive
     *
     * @param boolean $isPassive
     * @return self
     */
    public function setIsPassive($isPassive)
    {
        $this->isPassive = $isPassive;
        return $this;
    }

    /**
     * Gets as protocolBinding
     *
     * @return string
     */
    public function getProtocolBinding()
    {
        return $this->protocolBinding;
    }

    /**
     * Sets a new protocolBinding
     *
     * @param string $protocolBinding
     * @return self
     */
    public function setProtocolBinding($protocolBinding)
    {
        $this->protocolBinding = $protocolBinding;
        return $this;
    }

    /**
     * Gets as assertionConsumerServiceIndex
     *
     * @return integer
     */
    public function getAssertionConsumerServiceIndex()
    {
        return $this->assertionConsumerServiceIndex;
    }

    /**
     * Sets a new assertionConsumerServiceIndex
     *
     * @param integer $assertionConsumerServiceIndex
     * @return self
     */
    public function setAssertionConsumerServiceIndex($assertionConsumerServiceIndex)
    {
        $this->assertionConsumerServiceIndex = $assertionConsumerServiceIndex;
        return $this;
    }

    /**
     * Gets as assertionConsumerServiceURL
     *
     * @return string
     */
    public function getAssertionConsumerServiceURL()
    {
        return $this->assertionConsumerServiceURL;
    }

    /**
     * Sets a new assertionConsumerServiceURL
     *
     * @param string $assertionConsumerServiceURL
     * @return self
     */
    public function setAssertionConsumerServiceURL($assertionConsumerServiceURL)
    {
        $this->assertionConsumerServiceURL = $assertionConsumerServiceURL;
        return $this;
    }

    /**
     * Gets as attributeConsumingServiceIndex
     *
     * @return integer
     */
    public function getAttributeConsumingServiceIndex()
    {
        return $this->attributeConsumingServiceIndex;
    }

    /**
     * Sets a new attributeConsumingServiceIndex
     *
     * @param integer $attributeConsumingServiceIndex
     * @return self
     */
    public function setAttributeConsumingServiceIndex($attributeConsumingServiceIndex)
    {
        $this->attributeConsumingServiceIndex = $attributeConsumingServiceIndex;
        return $this;
    }

    /**
     * Gets as providerName
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     * @return self
     */
    public function setSubject(\BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as nameIDPolicy
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy
     */
    public function getNameIDPolicy()
    {
        return $this->nameIDPolicy;
    }

    /**
     * Sets a new nameIDPolicy
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy $nameIDPolicy
     * @return self
     */
    public function setNameIDPolicy(\BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy $nameIDPolicy)
    {
        $this->nameIDPolicy = $nameIDPolicy;
        return $this;
    }

    /**
     * Gets as conditions
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Conditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions
     * @return self
     */
    public function setConditions(\BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as requestedAuthnContext
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     */
    public function getRequestedAuthnContext()
    {
        return $this->requestedAuthnContext;
    }

    /**
     * Sets a new requestedAuthnContext
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     * $requestedAuthnContext
     * @return self
     */
    public function setRequestedAuthnContext(\BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext $requestedAuthnContext)
    {
        $this->requestedAuthnContext = $requestedAuthnContext;
        return $this;
    }

    /**
     * Gets as scoping
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\Scoping
     */
    public function getScoping()
    {
        return $this->scoping;
    }

    /**
     * Sets a new scoping
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\Scoping $scoping
     * @return self
     */
    public function setScoping(\BankId\Merchant\Library\Schemas\saml\protocol\Scoping $scoping)
    {
        $this->scoping = $scoping;
        return $this;
    }

}

