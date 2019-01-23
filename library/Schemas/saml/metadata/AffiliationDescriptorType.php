<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing AffiliationDescriptorType
 *
 * 
 * XSD Type: AffiliationDescriptorType
 */
class AffiliationDescriptorType
{

    /**
     * @property string $affiliationOwnerID
     */
    private $affiliationOwnerID = null;

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
     * @property string[] $affiliateMember
     */
    private $affiliateMember = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\KeyDescriptor[]
     * $keyDescriptor
     */
    private $keyDescriptor = null;

    /**
     * Gets as affiliationOwnerID
     *
     * @return string
     */
    public function getAffiliationOwnerID()
    {
        return $this->affiliationOwnerID;
    }

    /**
     * Sets a new affiliationOwnerID
     *
     * @param string $affiliationOwnerID
     * @return self
     */
    public function setAffiliationOwnerID($affiliationOwnerID)
    {
        $this->affiliationOwnerID = $affiliationOwnerID;
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
     * Adds as affiliateMember
     *
     * @return self
     * @param string $affiliateMember
     */
    public function addToAffiliateMember($affiliateMember)
    {
        $this->affiliateMember[] = $affiliateMember;
        return $this;
    }

    /**
     * isset affiliateMember
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAffiliateMember($index)
    {
        return isset($this->affiliateMember[$index]);
    }

    /**
     * unset affiliateMember
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAffiliateMember($index)
    {
        unset($this->affiliateMember[$index]);
    }

    /**
     * Gets as affiliateMember
     *
     * @return string[]
     */
    public function getAffiliateMember()
    {
        return $this->affiliateMember;
    }

    /**
     * Sets a new affiliateMember
     *
     * @param string $affiliateMember
     * @return self
     */
    public function setAffiliateMember(array $affiliateMember)
    {
        $this->affiliateMember = $affiliateMember;
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


}

