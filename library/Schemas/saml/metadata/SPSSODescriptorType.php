<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing SPSSODescriptorType
 *
 * 
 * XSD Type: SPSSODescriptorType
 */
class SPSSODescriptorType extends SSODescriptorType
{

    /**
     * @property boolean $authnRequestsSigned
     */
    private $authnRequestsSigned = null;

    /**
     * @property boolean $wantAssertionsSigned
     */
    private $wantAssertionsSigned = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionConsumerService[]
     * $assertionConsumerService
     */
    private $assertionConsumerService = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeConsumingService[]
     * $attributeConsumingService
     */
    private $attributeConsumingService = null;

    /**
     * Gets as authnRequestsSigned
     *
     * @return boolean
     */
    public function getAuthnRequestsSigned()
    {
        return $this->authnRequestsSigned;
    }

    /**
     * Sets a new authnRequestsSigned
     *
     * @param boolean $authnRequestsSigned
     * @return self
     */
    public function setAuthnRequestsSigned($authnRequestsSigned)
    {
        $this->authnRequestsSigned = $authnRequestsSigned;
        return $this;
    }

    /**
     * Gets as wantAssertionsSigned
     *
     * @return boolean
     */
    public function getWantAssertionsSigned()
    {
        return $this->wantAssertionsSigned;
    }

    /**
     * Sets a new wantAssertionsSigned
     *
     * @param boolean $wantAssertionsSigned
     * @return self
     */
    public function setWantAssertionsSigned($wantAssertionsSigned)
    {
        $this->wantAssertionsSigned = $wantAssertionsSigned;
        return $this;
    }

    /**
     * Adds as assertionConsumerService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AssertionConsumerService
     * $assertionConsumerService
     */
    public function addToAssertionConsumerService(\BankId\Merchant\Library\Schemas\saml\metadata\AssertionConsumerService $assertionConsumerService)
    {
        $this->assertionConsumerService[] = $assertionConsumerService;
        return $this;
    }

    /**
     * isset assertionConsumerService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssertionConsumerService($index)
    {
        return isset($this->assertionConsumerService[$index]);
    }

    /**
     * unset assertionConsumerService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssertionConsumerService($index)
    {
        unset($this->assertionConsumerService[$index]);
    }

    /**
     * Gets as assertionConsumerService
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionConsumerService[]
     */
    public function getAssertionConsumerService()
    {
        return $this->assertionConsumerService;
    }

    /**
     * Sets a new assertionConsumerService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AssertionConsumerService[]
     * $assertionConsumerService
     * @return self
     */
    public function setAssertionConsumerService(array $assertionConsumerService)
    {
        $this->assertionConsumerService = $assertionConsumerService;
        return $this;
    }

    /**
     * Adds as attributeConsumingService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AttributeConsumingService
     * $attributeConsumingService
     */
    public function addToAttributeConsumingService(\BankId\Merchant\Library\Schemas\saml\metadata\AttributeConsumingService $attributeConsumingService)
    {
        $this->attributeConsumingService[] = $attributeConsumingService;
        return $this;
    }

    /**
     * isset attributeConsumingService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeConsumingService($index)
    {
        return isset($this->attributeConsumingService[$index]);
    }

    /**
     * unset attributeConsumingService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeConsumingService($index)
    {
        unset($this->attributeConsumingService[$index]);
    }

    /**
     * Gets as attributeConsumingService
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeConsumingService[]
     */
    public function getAttributeConsumingService()
    {
        return $this->attributeConsumingService;
    }

    /**
     * Sets a new attributeConsumingService
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeConsumingService[]
     * $attributeConsumingService
     * @return self
     */
    public function setAttributeConsumingService(array $attributeConsumingService)
    {
        $this->attributeConsumingService = $attributeConsumingService;
        return $this;
    }


}

