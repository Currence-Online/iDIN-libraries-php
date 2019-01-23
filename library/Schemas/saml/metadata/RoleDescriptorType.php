<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing RoleDescriptorType
 *
 * 
 * XSD Type: RoleDescriptorType
 */
class RoleDescriptorType
{

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property string $validUntil
     */
    private $validUntil = null;

    /**
     * @property \DateInterval $cacheDuration
     */
    private $cacheDuration = null;

    /**
     * @property string[] $protocolSupportEnumeration
     */
    private $protocolSupportEnumeration = null;

    /**
     * @property string $errorURL
     */
    private $errorURL = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor[]
     * $keyDescriptor
     */
    private $keyDescriptor = null;

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
     * Adds as protocolSupportEnumeration
     *
     * @return self
     * @param string $protocolSupportEnumeration
     */
    public function addToProtocolSupportEnumeration($protocolSupportEnumeration)
    {
        $this->protocolSupportEnumeration[] = $protocolSupportEnumeration;
        return $this;
    }

    /**
     * isset protocolSupportEnumeration
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProtocolSupportEnumeration($index)
    {
        return isset($this->protocolSupportEnumeration[$index]);
    }

    /**
     * unset protocolSupportEnumeration
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProtocolSupportEnumeration($index)
    {
        unset($this->protocolSupportEnumeration[$index]);
    }

    /**
     * Gets as protocolSupportEnumeration
     *
     * @return string[]
     */
    public function getProtocolSupportEnumeration()
    {
        return $this->protocolSupportEnumeration;
    }

    /**
     * Sets a new protocolSupportEnumeration
     *
     * @param string[] $protocolSupportEnumeration
     * @return self
     */
    public function setProtocolSupportEnumeration(array $protocolSupportEnumeration)
    {
        $this->protocolSupportEnumeration = $protocolSupportEnumeration;
        return $this;
    }

    /**
     * Gets as errorURL
     *
     * @return string
     */
    public function getErrorURL()
    {
        return $this->errorURL;
    }

    /**
     * Sets a new errorURL
     *
     * @param string $errorURL
     * @return self
     */
    public function setErrorURL($errorURL)
    {
        $this->errorURL = $errorURL;
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
     * Adds as keyDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor
     * $keyDescriptor
     */
    public function addToKeyDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor $keyDescriptor)
    {
        $this->keyDescriptor[] = $keyDescriptor;
        return $this;
    }

    /**
     * isset keyDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeyDescriptor($index)
    {
        return isset($this->keyDescriptor[$index]);
    }

    /**
     * unset keyDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeyDescriptor($index)
    {
        unset($this->keyDescriptor[$index]);
    }

    /**
     * Gets as keyDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor[]
     */
    public function getKeyDescriptor()
    {
        return $this->keyDescriptor;
    }

    /**
     * Sets a new keyDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor[]
     * $keyDescriptor
     * @return self
     */
    public function setKeyDescriptor(array $keyDescriptor)
    {
        $this->keyDescriptor = $keyDescriptor;
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


}

