<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing PDPDescriptorType
 *
 * 
 * XSD Type: PDPDescriptorType
 */
class PDPDescriptorType extends RoleDescriptorType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\AuthzService[]
     * $authzService
     */
    private $authzService = null;

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
     * Adds as authzService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthzService $authzService
     */
    public function addToAuthzService(\BankId\Merchant\Library\Schemas\saml\metadata\AuthzService $authzService)
    {
        $this->authzService[] = $authzService;
        return $this;
    }

    /**
     * isset authzService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthzService($index)
    {
        return isset($this->authzService[$index]);
    }

    /**
     * unset authzService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthzService($index)
    {
        unset($this->authzService[$index]);
    }

    /**
     * Gets as authzService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\AuthzService[]
     */
    public function getAuthzService()
    {
        return $this->authzService;
    }

    /**
     * Sets a new authzService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\AuthzService[]
     * $authzService
     * @return self
     */
    public function setAuthzService(array $authzService)
    {
        $this->authzService = $authzService;
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

