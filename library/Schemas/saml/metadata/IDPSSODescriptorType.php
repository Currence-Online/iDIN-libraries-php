<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing IDPSSODescriptorType
 *
 * 
 * XSD Type: IDPSSODescriptorType
 */
class IDPSSODescriptorType extends SSODescriptorType
{

    /**
     * @property boolean $wantAuthnRequestsSigned
     */
    private $wantAuthnRequestsSigned = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\SingleSignOnService[]
     * $singleSignOnService
     */
    private $singleSignOnService = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\NameIDMappingService[]
     * $nameIDMappingService
     */
    private $nameIDMappingService = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AssertionIDRequestService[]
     * $assertionIDRequestService
     */
    private $assertionIDRequestService = null;

    /**
     * @property string[] $attributeProfile
     */
    private $attributeProfile = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Attribute[] $attribute
     */
    private $attribute = null;

    /**
     * Gets as wantAuthnRequestsSigned
     *
     * @return boolean
     */
    public function getWantAuthnRequestsSigned()
    {
        return $this->wantAuthnRequestsSigned;
    }

    /**
     * Sets a new wantAuthnRequestsSigned
     *
     * @param boolean $wantAuthnRequestsSigned
     * @return self
     */
    public function setWantAuthnRequestsSigned($wantAuthnRequestsSigned)
    {
        $this->wantAuthnRequestsSigned = $wantAuthnRequestsSigned;
        return $this;
    }

    /**
     * Adds as singleSignOnService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SingleSignOnService
     * $singleSignOnService
     */
    public function addToSingleSignOnService(\BankId\Merchant\Library\Schemas\saml\metadata\SingleSignOnService $singleSignOnService)
    {
        $this->singleSignOnService[] = $singleSignOnService;
        return $this;
    }

    /**
     * isset singleSignOnService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSingleSignOnService($index)
    {
        return isset($this->singleSignOnService[$index]);
    }

    /**
     * unset singleSignOnService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSingleSignOnService($index)
    {
        unset($this->singleSignOnService[$index]);
    }

    /**
     * Gets as singleSignOnService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\SingleSignOnService[]
     */
    public function getSingleSignOnService()
    {
        return $this->singleSignOnService;
    }

    /**
     * Sets a new singleSignOnService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SingleSignOnService[]
     * $singleSignOnService
     * @return self
     */
    public function setSingleSignOnService(array $singleSignOnService)
    {
        $this->singleSignOnService = $singleSignOnService;
        return $this;
    }

    /**
     * Adds as nameIDMappingService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\NameIDMappingService
     * $nameIDMappingService
     */
    public function addToNameIDMappingService(\BankId\Merchant\Library\Schemas\saml\metadata\NameIDMappingService $nameIDMappingService)
    {
        $this->nameIDMappingService[] = $nameIDMappingService;
        return $this;
    }

    /**
     * isset nameIDMappingService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNameIDMappingService($index)
    {
        return isset($this->nameIDMappingService[$index]);
    }

    /**
     * unset nameIDMappingService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNameIDMappingService($index)
    {
        unset($this->nameIDMappingService[$index]);
    }

    /**
     * Gets as nameIDMappingService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\NameIDMappingService[]
     */
    public function getNameIDMappingService()
    {
        return $this->nameIDMappingService;
    }

    /**
     * Sets a new nameIDMappingService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\NameIDMappingService[]
     * $nameIDMappingService
     * @return self
     */
    public function setNameIDMappingService(array $nameIDMappingService)
    {
        $this->nameIDMappingService = $nameIDMappingService;
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

