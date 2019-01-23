<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing EntitiesDescriptorType
 *
 * 
 * XSD Type: EntitiesDescriptorType
 */
class EntitiesDescriptorType
{

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
     * @property string $name
     */
    private $name = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\EntityDescriptor[]
     * $entityDescriptor
     */
    private $entityDescriptor = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\EntitiesDescriptor[]
     * $entitiesDescriptor
     */
    private $entitiesDescriptor = null;

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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Adds as entityDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EntityDescriptor
     * $entityDescriptor
     */
    public function addToEntityDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\EntityDescriptor $entityDescriptor)
    {
        $this->entityDescriptor[] = $entityDescriptor;
        return $this;
    }

    /**
     * isset entityDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEntityDescriptor($index)
    {
        return isset($this->entityDescriptor[$index]);
    }

    /**
     * unset entityDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEntityDescriptor($index)
    {
        unset($this->entityDescriptor[$index]);
    }

    /**
     * Gets as entityDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\EntityDescriptor[]
     */
    public function getEntityDescriptor()
    {
        return $this->entityDescriptor;
    }

    /**
     * Sets a new entityDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EntityDescriptor[]
     * $entityDescriptor
     * @return self
     */
    public function setEntityDescriptor(array $entityDescriptor)
    {
        $this->entityDescriptor = $entityDescriptor;
        return $this;
    }

    /**
     * Adds as entitiesDescriptor
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EntitiesDescriptor
     * $entitiesDescriptor
     */
    public function addToEntitiesDescriptor(\BankId\Merchant\Library\Schemas\saml\metadata\EntitiesDescriptor $entitiesDescriptor)
    {
        $this->entitiesDescriptor[] = $entitiesDescriptor;
        return $this;
    }

    /**
     * isset entitiesDescriptor
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEntitiesDescriptor($index)
    {
        return isset($this->entitiesDescriptor[$index]);
    }

    /**
     * unset entitiesDescriptor
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEntitiesDescriptor($index)
    {
        unset($this->entitiesDescriptor[$index]);
    }

    /**
     * Gets as entitiesDescriptor
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\EntitiesDescriptor[]
     */
    public function getEntitiesDescriptor()
    {
        return $this->entitiesDescriptor;
    }

    /**
     * Sets a new entitiesDescriptor
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\EntitiesDescriptor[]
     * $entitiesDescriptor
     * @return self
     */
    public function setEntitiesDescriptor(array $entitiesDescriptor)
    {
        $this->entitiesDescriptor = $entitiesDescriptor;
        return $this;
    }


}

