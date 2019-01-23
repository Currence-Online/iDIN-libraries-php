<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing OrganizationType
 *
 * 
 * XSD Type: OrganizationType
 */
class OrganizationType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationName[]
     * $organizationName
     */
    private $organizationName = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationDisplayName[]
     * $organizationDisplayName
     */
    private $organizationDisplayName = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationURL[]
     * $organizationURL
     */
    private $organizationURL = null;

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
     * Adds as organizationName
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationName
     * $organizationName
     */
    public function addToOrganizationName(\BankId\Merchant\Library\Schemas\saml\metadata\OrganizationName $organizationName)
    {
        $this->organizationName[] = $organizationName;
        return $this;
    }

    /**
     * isset organizationName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganizationName($index)
    {
        return isset($this->organizationName[$index]);
    }

    /**
     * unset organizationName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganizationName($index)
    {
        unset($this->organizationName[$index]);
    }

    /**
     * Gets as organizationName
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationName[]
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Sets a new organizationName
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationName[]
     * $organizationName
     * @return self
     */
    public function setOrganizationName(array $organizationName)
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    /**
     * Adds as organizationDisplayName
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationDisplayName
     * $organizationDisplayName
     */
    public function addToOrganizationDisplayName(\BankId\Merchant\Library\Schemas\saml\metadata\OrganizationDisplayName $organizationDisplayName)
    {
        $this->organizationDisplayName[] = $organizationDisplayName;
        return $this;
    }

    /**
     * isset organizationDisplayName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganizationDisplayName($index)
    {
        return isset($this->organizationDisplayName[$index]);
    }

    /**
     * unset organizationDisplayName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganizationDisplayName($index)
    {
        unset($this->organizationDisplayName[$index]);
    }

    /**
     * Gets as organizationDisplayName
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationDisplayName[]
     */
    public function getOrganizationDisplayName()
    {
        return $this->organizationDisplayName;
    }

    /**
     * Sets a new organizationDisplayName
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationDisplayName[]
     * $organizationDisplayName
     * @return self
     */
    public function setOrganizationDisplayName(array $organizationDisplayName)
    {
        $this->organizationDisplayName = $organizationDisplayName;
        return $this;
    }

    /**
     * Adds as organizationURL
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationURL
     * $organizationURL
     */
    public function addToOrganizationURL(\BankId\Merchant\Library\Schemas\saml\metadata\OrganizationURL $organizationURL)
    {
        $this->organizationURL[] = $organizationURL;
        return $this;
    }

    /**
     * isset organizationURL
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganizationURL($index)
    {
        return isset($this->organizationURL[$index]);
    }

    /**
     * unset organizationURL
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganizationURL($index)
    {
        unset($this->organizationURL[$index]);
    }

    /**
     * Gets as organizationURL
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationURL[]
     */
    public function getOrganizationURL()
    {
        return $this->organizationURL;
    }

    /**
     * Sets a new organizationURL
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\OrganizationURL[]
     * $organizationURL
     * @return self
     */
    public function setOrganizationURL(array $organizationURL)
    {
        $this->organizationURL = $organizationURL;
        return $this;
    }


}

