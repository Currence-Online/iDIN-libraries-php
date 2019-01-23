<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing PrincipalAuthenticationMechanismType
 *
 * 
 * XSD Type: PrincipalAuthenticationMechanismType
 */
class PrincipalAuthenticationMechanismType
{

    /**
     * @property integer $preauth
     */
    private $preauth = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     * $password
     */
    private $password = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     * $restrictedPassword
     */
    private $restrictedPassword = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Token
     * $token
     */
    private $token = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $smartcard
     */
    private $smartcard = null;

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
     * Gets as preauth
     *
     * @return integer
     */
    public function getPreauth()
    {
        return $this->preauth;
    }

    /**
     * Sets a new preauth
     *
     * @param integer $preauth
     * @return self
     */
    public function setPreauth($preauth)
    {
        $this->preauth = $preauth;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     * $password
     * @return self
     */
    public function setPassword(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as restrictedPassword
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     */
    public function getRestrictedPassword()
    {
        return $this->restrictedPassword;
    }

    /**
     * Sets a new restrictedPassword
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     * $restrictedPassword
     * @return self
     */
    public function setRestrictedPassword(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword $restrictedPassword)
    {
        $this->restrictedPassword = $restrictedPassword;
        return $this;
    }

    /**
     * Gets as token
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets a new token
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Token $token
     * @return self
     */
    public function setToken(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Token $token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToSmartcard(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->smartcard[] = $extension;
        return $this;
    }

    /**
     * isset smartcard
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSmartcard($index)
    {
        return isset($this->smartcard[$index]);
    }

    /**
     * unset smartcard
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSmartcard($index)
    {
        unset($this->smartcard[$index]);
    }

    /**
     * Gets as smartcard
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getSmartcard()
    {
        return $this->smartcard;
    }

    /**
     * Sets a new smartcard
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $smartcard
     * @return self
     */
    public function setSmartcard(array $smartcard)
    {
        $this->smartcard = $smartcard;
        return $this;
    }

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

