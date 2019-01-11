<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing EntityDescriptorType
 *
 * 
 * XSD Type: EntityDescriptorType
 */
class EntityDescriptorType
{

    /**
     * @property string $entityID
     */
    private $entityID = null;

    /**
     * @property string $validUntil
     */
    private $validUntil = null;

    /**
     * @property \DateInterval $cacheDuration
     */
    private $cacheDuration = null;

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\RoleDescriptor[]
     * $roleDescriptor
     */
    private $roleDescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\IDPSSODescriptor[]
     * $iDPSSODescriptor
     */
    private $iDPSSODescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\SPSSODescriptor[]
     * $sPSSODescriptor
     */
    private $sPSSODescriptor = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AuthnAuthorityDescriptor[]
     * $authnAuthorityDescriptor
     */
    private $authnAuthorityDescriptor = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeAuthorityDescriptor[]
     * $attributeAuthorityDescriptor
     */
    private $attributeAuthorityDescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\PDPDescriptor[]
     * $pDPDescriptor
     */
    private $pDPDescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\AffiliationDescriptor
     * $affiliationDescriptor
     */
    private $affiliationDescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Organization
     * $organization
     */
    private $organization = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\ContactPerson[]
     * $contactPerson
     */
    private $contactPerson = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\AdditionalMetadataLocation[]
     * $additionalMetadataLocation
     */
    private $additionalMetadataLocation = null;

    /**
     * Gets as entityID
     *
     * @return string
     */
    public function getEntityID()
    {
        return $this->entityID;
    }

    /**
     * Sets a new entityID
     *
     * @param string $entityID
     * @return self
     */
    public function setEntityID($entityID)
    {
        $this->entityID = $entityID;
        return $this;
    }

    /**
     * Gets as validUntil
     *
     * @return string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Sets a new validUntil
     *
     * @param string $validUntil
     * @return self
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * Gets as cacheDuration
     *
     * @return \DateInterval
     */
    public function getCacheDuration()
    {
        return $this->cacheDuration;
    }

    /**
     * Sets a new cacheDuration
     *
     * @param \DateInterval $cacheDuration
     * @return self
     */
    public function setCacheDuration(\DateInterval $cacheDuration)
    {
        $this->cacheDuration = $cacheDuration;
        return $this;
    }

    /**
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Signature $signature
     * @return self
     */
    public function setSignature(\BankId\Merchant\Library\Schemas\ds\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     * @return self
     */
    public function setExtensions(\BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * Adds as roleDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\RoleDescriptor
     * $roleDescriptor
     */
    public function addToRoleDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\RoleDescriptor $roleDescriptor)
    {
        $this->roleDescriptor[] = $roleDescriptor;
        return $this;
    }

    /**
     * isset roleDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoleDescriptor($index)
    {
        return isset($this->roleDescriptor[$index]);
    }

    /**
     * unset roleDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoleDescriptor($index)
    {
        unset($this->roleDescriptor[$index]);
    }

    /**
     * Gets as roleDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\RoleDescriptor[]
     */
    public function getRoleDescriptor()
    {
        return $this->roleDescriptor;
    }

    /**
     * Sets a new roleDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\RoleDescriptor[]
     * $roleDescriptor
     * @return self
     */
    public function setRoleDescriptor(array $roleDescriptor)
    {
        $this->roleDescriptor = $roleDescriptor;
        return $this;
    }

    /**
     * Adds as iDPSSODescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\IDPSSODescriptor
     * $iDPSSODescriptor
     */
    public function addToIDPSSODescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\IDPSSODescriptor $iDPSSODescriptor)
    {
        $this->iDPSSODescriptor[] = $iDPSSODescriptor;
        return $this;
    }

    /**
     * isset iDPSSODescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIDPSSODescriptor($index)
    {
        return isset($this->iDPSSODescriptor[$index]);
    }

    /**
     * unset iDPSSODescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIDPSSODescriptor($index)
    {
        unset($this->iDPSSODescriptor[$index]);
    }

    /**
     * Gets as iDPSSODescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\IDPSSODescriptor[]
     */
    public function getIDPSSODescriptor()
    {
        return $this->iDPSSODescriptor;
    }

    /**
     * Sets a new iDPSSODescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\IDPSSODescriptor[]
     * $iDPSSODescriptor
     * @return self
     */
    public function setIDPSSODescriptor(array $iDPSSODescriptor)
    {
        $this->iDPSSODescriptor = $iDPSSODescriptor;
        return $this;
    }

    /**
     * Adds as sPSSODescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SPSSODescriptor
     * $sPSSODescriptor
     */
    public function addToSPSSODescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\SPSSODescriptor $sPSSODescriptor)
    {
        $this->sPSSODescriptor[] = $sPSSODescriptor;
        return $this;
    }

    /**
     * isset sPSSODescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSPSSODescriptor($index)
    {
        return isset($this->sPSSODescriptor[$index]);
    }

    /**
     * unset sPSSODescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSPSSODescriptor($index)
    {
        unset($this->sPSSODescriptor[$index]);
    }

    /**
     * Gets as sPSSODescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\SPSSODescriptor[]
     */
    public function getSPSSODescriptor()
    {
        return $this->sPSSODescriptor;
    }

    /**
     * Sets a new sPSSODescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SPSSODescriptor[]
     * $sPSSODescriptor
     * @return self
     */
    public function setSPSSODescriptor(array $sPSSODescriptor)
    {
        $this->sPSSODescriptor = $sPSSODescriptor;
        return $this;
    }

    /**
     * Adds as authnAuthorityDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthnAuthorityDescriptor
     * $authnAuthorityDescriptor
     */
    public function addToAuthnAuthorityDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\AuthnAuthorityDescriptor $authnAuthorityDescriptor)
    {
        $this->authnAuthorityDescriptor[] = $authnAuthorityDescriptor;
        return $this;
    }

    /**
     * isset authnAuthorityDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthnAuthorityDescriptor($index)
    {
        return isset($this->authnAuthorityDescriptor[$index]);
    }

    /**
     * unset authnAuthorityDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthnAuthorityDescriptor($index)
    {
        unset($this->authnAuthorityDescriptor[$index]);
    }

    /**
     * Gets as authnAuthorityDescriptor
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AuthnAuthorityDescriptor[]
     */
    public function getAuthnAuthorityDescriptor()
    {
        return $this->authnAuthorityDescriptor;
    }

    /**
     * Sets a new authnAuthorityDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthnAuthorityDescriptor[]
     * $authnAuthorityDescriptor
     * @return self
     */
    public function setAuthnAuthorityDescriptor(array $authnAuthorityDescriptor)
    {
        $this->authnAuthorityDescriptor = $authnAuthorityDescriptor;
        return $this;
    }

    /**
     * Adds as attributeAuthorityDescriptor
     *
     * @return self
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeAuthorityDescriptor
     * $attributeAuthorityDescriptor
     */
    public function addToAttributeAuthorityDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\AttributeAuthorityDescriptor $attributeAuthorityDescriptor)
    {
        $this->attributeAuthorityDescriptor[] = $attributeAuthorityDescriptor;
        return $this;
    }

    /**
     * isset attributeAuthorityDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeAuthorityDescriptor($index)
    {
        return isset($this->attributeAuthorityDescriptor[$index]);
    }

    /**
     * unset attributeAuthorityDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeAuthorityDescriptor($index)
    {
        unset($this->attributeAuthorityDescriptor[$index]);
    }

    /**
     * Gets as attributeAuthorityDescriptor
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeAuthorityDescriptor[]
     */
    public function getAttributeAuthorityDescriptor()
    {
        return $this->attributeAuthorityDescriptor;
    }

    /**
     * Sets a new attributeAuthorityDescriptor
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\AttributeAuthorityDescriptor[]
     * $attributeAuthorityDescriptor
     * @return self
     */
    public function setAttributeAuthorityDescriptor(array $attributeAuthorityDescriptor)
    {
        $this->attributeAuthorityDescriptor = $attributeAuthorityDescriptor;
        return $this;
    }

    /**
     * Adds as pDPDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\PDPDescriptor
     * $pDPDescriptor
     */
    public function addToPDPDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\PDPDescriptor $pDPDescriptor)
    {
        $this->pDPDescriptor[] = $pDPDescriptor;
        return $this;
    }

    /**
     * isset pDPDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPDPDescriptor($index)
    {
        return isset($this->pDPDescriptor[$index]);
    }

    /**
     * unset pDPDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPDPDescriptor($index)
    {
        unset($this->pDPDescriptor[$index]);
    }

    /**
     * Gets as pDPDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\PDPDescriptor[]
     */
    public function getPDPDescriptor()
    {
        return $this->pDPDescriptor;
    }

    /**
     * Sets a new pDPDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\PDPDescriptor[]
     * $pDPDescriptor
     * @return self
     */
    public function setPDPDescriptor(array $pDPDescriptor)
    {
        $this->pDPDescriptor = $pDPDescriptor;
        return $this;
    }

    /**
     * Gets as affiliationDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\AffiliationDescriptor
     */
    public function getAffiliationDescriptor()
    {
        return $this->affiliationDescriptor;
    }

    /**
     * Sets a new affiliationDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AffiliationDescriptor
     * $affiliationDescriptor
     * @return self
     */
    public function setAffiliationDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\AffiliationDescriptor $affiliationDescriptor)
    {
        $this->affiliationDescriptor = $affiliationDescriptor;
        return $this;
    }

    /**
     * Gets as organization
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\Organization $organization
     * @return self
     */
    public function setOrganization(\BankId\Merchant\Library\Schemas\saml\metadata\Organization $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Adds as contactPerson
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ContactPerson
     * $contactPerson
     */
    public function addToContactPerson(\BankId\Merchant\Library\Schemas\saml\metadata\ContactPerson $contactPerson)
    {
        $this->contactPerson[] = $contactPerson;
        return $this;
    }

    /**
     * isset contactPerson
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactPerson($index)
    {
        return isset($this->contactPerson[$index]);
    }

    /**
     * unset contactPerson
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactPerson($index)
    {
        unset($this->contactPerson[$index]);
    }

    /**
     * Gets as contactPerson
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\ContactPerson[]
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ContactPerson[]
     * $contactPerson
     * @return self
     */
    public function setContactPerson(array $contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * Adds as additionalMetadataLocation
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AdditionalMetadataLocation
     * $additionalMetadataLocation
     */
    public function addToAdditionalMetadataLocation(\BankId\Merchant\Library\Schemas\saml\metadata\AdditionalMetadataLocation $additionalMetadataLocation)
    {
        $this->additionalMetadataLocation[] = $additionalMetadataLocation;
        return $this;
    }

    /**
     * isset additionalMetadataLocation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalMetadataLocation($index)
    {
        return isset($this->additionalMetadataLocation[$index]);
    }

    /**
     * unset additionalMetadataLocation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalMetadataLocation($index)
    {
        unset($this->additionalMetadataLocation[$index]);
    }

    /**
     * Gets as additionalMetadataLocation
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\AdditionalMetadataLocation[]
     */
    public function getAdditionalMetadataLocation()
    {
        return $this->additionalMetadataLocation;
    }

    /**
     * Sets a new additionalMetadataLocation
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\AdditionalMetadataLocation[]
     * $additionalMetadataLocation
     * @return self
     */
    public function setAdditionalMetadataLocation(array $additionalMetadataLocation)
    {
        $this->additionalMetadataLocation = $additionalMetadataLocation;
        return $this;
    }


}

