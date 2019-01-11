<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing OperationalProtectionType
 *
 * 
 * XSD Type: OperationalProtectionType
 */
class OperationalProtectionType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecurityAudit
     * $securityAudit
     */
    private $securityAudit = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $deactivationCallCenter
     */
    private $deactivationCallCenter = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as securityAudit
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecurityAudit
     */
    public function getSecurityAudit()
    {
        return $this->securityAudit;
    }

    /**
     * Sets a new securityAudit
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecurityAudit
     * $securityAudit
     * @return self
     */
    public function setSecurityAudit(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecurityAudit $securityAudit)
    {
        $this->securityAudit = $securityAudit;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToDeactivationCallCenter(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->deactivationCallCenter[] = $extension;
        return $this;
    }

    /**
     * isset deactivationCallCenter
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeactivationCallCenter($index)
    {
        return isset($this->deactivationCallCenter[$index]);
    }

    /**
     * unset deactivationCallCenter
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeactivationCallCenter($index)
    {
        unset($this->deactivationCallCenter[$index]);
    }

    /**
     * Gets as deactivationCallCenter
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getDeactivationCallCenter()
    {
        return $this->deactivationCallCenter;
    }

    /**
     * Sets a new deactivationCallCenter
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $deactivationCallCenter
     * @return self
     */
    public function setDeactivationCallCenter(array $deactivationCallCenter)
    {
        $this->deactivationCallCenter = $deactivationCallCenter;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToExtension(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

