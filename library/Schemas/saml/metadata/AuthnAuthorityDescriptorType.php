<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing AuthnAuthorityDescriptorType
 *
 * 
 * XSD Type: AuthnAuthorityDescriptorType
 */
class AuthnAuthorityDescriptorType extends RoleDescriptorType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\AuthnQueryService[]
     * $authnQueryService
     */
    private $authnQueryService = null;

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
     * Adds as authnQueryService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthnQueryService
     * $authnQueryService
     */
    public function addToAuthnQueryService(\BankId\Merchant\Library\Schemas\saml\metadata\AuthnQueryService $authnQueryService)
    {
        $this->authnQueryService[] = $authnQueryService;
        return $this;
    }

    /**
     * isset authnQueryService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthnQueryService($index)
    {
        return isset($this->authnQueryService[$index]);
    }

    /**
     * unset authnQueryService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthnQueryService($index)
    {
        unset($this->authnQueryService[$index]);
    }

    /**
     * Gets as authnQueryService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\AuthnQueryService[]
     */
    public function getAuthnQueryService()
    {
        return $this->authnQueryService;
    }

    /**
     * Sets a new authnQueryService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthnQueryService[]
     * $authnQueryService
     * @return self
     */
    public function setAuthnQueryService(array $authnQueryService)
    {
        $this->authnQueryService = $authnQueryService;
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


}

