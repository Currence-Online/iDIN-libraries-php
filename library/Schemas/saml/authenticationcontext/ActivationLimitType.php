<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing ActivationLimitType
 *
 * 
 * XSD Type: ActivationLimitType
 */
class ActivationLimitType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitDuration
     * $activationLimitDuration
     */
    private $activationLimitDuration = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitUsages
     * $activationLimitUsages
     */
    private $activationLimitUsages = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitSession
     * $activationLimitSession
     */
    private $activationLimitSession = null;

    /**
     * Gets as activationLimitDuration
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitDuration
     */
    public function getActivationLimitDuration()
    {
        return $this->activationLimitDuration;
    }

    /**
     * Sets a new activationLimitDuration
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitDuration
     * $activationLimitDuration
     * @return self
     */
    public function setActivationLimitDuration(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitDuration $activationLimitDuration)
    {
        $this->activationLimitDuration = $activationLimitDuration;
        return $this;
    }

    /**
     * Gets as activationLimitUsages
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitUsages
     */
    public function getActivationLimitUsages()
    {
        return $this->activationLimitUsages;
    }

    /**
     * Sets a new activationLimitUsages
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitUsages
     * $activationLimitUsages
     * @return self
     */
    public function setActivationLimitUsages(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitUsages $activationLimitUsages)
    {
        $this->activationLimitUsages = $activationLimitUsages;
        return $this;
    }

    /**
     * Gets as activationLimitSession
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitSession
     */
    public function getActivationLimitSession()
    {
        return $this->activationLimitSession;
    }

    /**
     * Sets a new activationLimitSession
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitSession
     * $activationLimitSession
     * @return self
     */
    public function setActivationLimitSession(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimitSession $activationLimitSession)
    {
        $this->activationLimitSession = $activationLimitSession;
        return $this;
    }


}

