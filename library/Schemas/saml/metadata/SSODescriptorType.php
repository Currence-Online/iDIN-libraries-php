<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing SSODescriptorType
 *
 * 
 * XSD Type: SSODescriptorType
 */
class SSODescriptorType extends RoleDescriptorType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\metadata\ArtifactResolutionService[]
     * $artifactResolutionService
     */
    private $artifactResolutionService = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\SingleLogoutService[]
     * $singleLogoutService
     */
    private $singleLogoutService = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\ManageNameIDService[]
     * $manageNameIDService
     */
    private $manageNameIDService = null;

    /**
     * @property string[] $nameIDFormat
     */
    private $nameIDFormat = null;

    /**
     * Adds as artifactResolutionService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ArtifactResolutionService
     * $artifactResolutionService
     */
    public function addToArtifactResolutionService(\BankId\Merchant\Library\Schemas\saml\metadata\ArtifactResolutionService $artifactResolutionService)
    {
        $this->artifactResolutionService[] = $artifactResolutionService;
        return $this;
    }

    /**
     * isset artifactResolutionService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArtifactResolutionService($index)
    {
        return isset($this->artifactResolutionService[$index]);
    }

    /**
     * unset artifactResolutionService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArtifactResolutionService($index)
    {
        unset($this->artifactResolutionService[$index]);
    }

    /**
     * Gets as artifactResolutionService
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\metadata\ArtifactResolutionService[]
     */
    public function getArtifactResolutionService()
    {
        return $this->artifactResolutionService;
    }

    /**
     * Sets a new artifactResolutionService
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\metadata\ArtifactResolutionService[]
     * $artifactResolutionService
     * @return self
     */
    public function setArtifactResolutionService(array $artifactResolutionService)
    {
        $this->artifactResolutionService = $artifactResolutionService;
        return $this;
    }

    /**
     * Adds as singleLogoutService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SingleLogoutService
     * $singleLogoutService
     */
    public function addToSingleLogoutService(\BankId\Merchant\Library\Schemas\saml\metadata\SingleLogoutService $singleLogoutService)
    {
        $this->singleLogoutService[] = $singleLogoutService;
        return $this;
    }

    /**
     * isset singleLogoutService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSingleLogoutService($index)
    {
        return isset($this->singleLogoutService[$index]);
    }

    /**
     * unset singleLogoutService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSingleLogoutService($index)
    {
        unset($this->singleLogoutService[$index]);
    }

    /**
     * Gets as singleLogoutService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\SingleLogoutService[]
     */
    public function getSingleLogoutService()
    {
        return $this->singleLogoutService;
    }

    /**
     * Sets a new singleLogoutService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\SingleLogoutService[]
     * $singleLogoutService
     * @return self
     */
    public function setSingleLogoutService(array $singleLogoutService)
    {
        $this->singleLogoutService = $singleLogoutService;
        return $this;
    }

    /**
     * Adds as manageNameIDService
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ManageNameIDService
     * $manageNameIDService
     */
    public function addToManageNameIDService(\BankId\Merchant\Library\Schemas\saml\metadata\ManageNameIDService $manageNameIDService)
    {
        $this->manageNameIDService[] = $manageNameIDService;
        return $this;
    }

    /**
     * isset manageNameIDService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetManageNameIDService($index)
    {
        return isset($this->manageNameIDService[$index]);
    }

    /**
     * unset manageNameIDService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetManageNameIDService($index)
    {
        unset($this->manageNameIDService[$index]);
    }

    /**
     * Gets as manageNameIDService
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\ManageNameIDService[]
     */
    public function getManageNameIDService()
    {
        return $this->manageNameIDService;
    }

    /**
     * Sets a new manageNameIDService
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ManageNameIDService[]
     * $manageNameIDService
     * @return self
     */
    public function setManageNameIDService(array $manageNameIDService)
    {
        $this->manageNameIDService = $manageNameIDService;
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

