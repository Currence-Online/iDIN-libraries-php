<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing AttributeAuthorityDescriptorType
 *
 * 
 * XSD Type: AttributeAuthorityDescriptorType
 */
class AttributeAuthorityDescriptorType extends RoleDescriptorType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\AttributeService[]
     * $attributeService
     */
    private $attributeService = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService[]
     * $assertionIDRequestService
     */
    private $assertionIDRequestService = null;

    /**
     * @property string[] $nameIDFormat
     */
    private $nameIDFormat = null;

    /**
     * @property string[] $attributeProfile
     */
    private $attributeProfile = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     */
    private $attribute = null;

    /**
     * Adds as attributeService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AttributeService
     * $attributeService
     */
    public function addToAttributeService(\BankId\Merchant\Library\Schemas\saml\metadata\AttributeService $attributeService)
    {
        $this->attributeService[] = $attributeService;
        return $this;
    }

    /**
     * isset attributeService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeService($index)
    {
        return isset($this->attributeService[$index]);
    }

    /**
     * unset attributeService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeService($index)
    {
        unset($this->attributeService[$index]);
    }

    /**
     * Gets as attributeService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\AttributeService[]
     */
    public function getAttributeService()
    {
        return $this->attributeService;
    }

    /**
     * Sets a new attributeService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AttributeService[]
     * $attributeService
     * @return self
     */
    public function setAttributeService(array $attributeService)
    {
        $this->attributeService = $attributeService;
        return $this;
    }

    /**
     * Adds as assertionIDRequestService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService
     * $assertionIDRequestService
     */
    public function addToAssertionIDRequestService(\BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService $assertionIDRequestService)
    {
        $this->assertionIDRequestService[] = $assertionIDRequestService;
        return $this;
    }

    /**
     * isset assertionIDRequestService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssertionIDRequestService($index)
    {
        return isset($this->assertionIDRequestService[$index]);
    }

    /**
     * unset assertionIDRequestService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssertionIDRequestService($index)
    {
        unset($this->assertionIDRequestService[$index]);
    }

    /**
     * Gets as assertionIDRequestService
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService[]
     */
    public function getAssertionIDRequestService()
    {
        return $this->assertionIDRequestService;
    }

    /**
     * Sets a new assertionIDRequestService
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService[]
     * $assertionIDRequestService
     * @return self
     */
    public function setAssertionIDRequestService(array $assertionIDRequestService)
    {
        $this->assertionIDRequestService = $assertionIDRequestService;
        return $this;
    }

    /**
     * Adds as nameIDFormat
     *
     * @return self
     * @param string $nameIDFormat
     */
    public function addToNameIDFormat($nameIDFormat)
    {
        $this->nameIDFormat[] = $nameIDFormat;
        return $this;
    }

    /**
     * isset nameIDFormat
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNameIDFormat($index)
    {
        return isset($this->nameIDFormat[$index]);
    }

    /**
     * unset nameIDFormat
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNameIDFormat($index)
    {
        unset($this->nameIDFormat[$index]);
    }

    /**
     * Gets as nameIDFormat
     *
     * @return string[]
     */
    public function getNameIDFormat()
    {
        return $this->nameIDFormat;
    }

    /**
     * Sets a new nameIDFormat
     *
     * @param string $nameIDFormat
     * @return self
     */
    public function setNameIDFormat(array $nameIDFormat)
    {
        $this->nameIDFormat = $nameIDFormat;
        return $this;
    }

    /**
     * Adds as attributeProfile
     *
     * @return self
     * @param string $attributeProfile
     */
    public function addToAttributeProfile($attributeProfile)
    {
        $this->attributeProfile[] = $attributeProfile;
        return $this;
    }

    /**
     * isset attributeProfile
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeProfile($index)
    {
        return isset($this->attributeProfile[$index]);
    }

    /**
     * unset attributeProfile
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeProfile($index)
    {
        unset($this->attributeProfile[$index]);
    }

    /**
     * Gets as attributeProfile
     *
     * @return string[]
     */
    public function getAttributeProfile()
    {
        return $this->attributeProfile;
    }

    /**
     * Sets a new attributeProfile
     *
     * @param string $attributeProfile
     * @return self
     */
    public function setAttributeProfile(array $attributeProfile)
    {
        $this->attributeProfile = $attributeProfile;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Attribute $attribute
     */
    public function addToAttribute(\BankId\Merchant\Library\Schemas\saml\assertion\Attribute $attribute)
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
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

