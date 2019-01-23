<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing KeyActivationType
 *
 * 
 * XSD Type: KeyActivationType
 */
class KeyActivationType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationPin
     * $activationPin
     */
    private $activationPin = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as activationPin
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationPin
     */
    public function getActivationPin()
    {
        return $this->activationPin;
    }

    /**
     * Sets a new activationPin
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationPin
     * $activationPin
     * @return self
     */
    public function setActivationPin(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationPin $activationPin)
    {
        $this->activationPin = $activationPin;
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

