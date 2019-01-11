<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing AuthnMethodBaseType
 *
 * 
 * XSD Type: AuthnMethodBaseType
 */
class AuthnMethodBaseType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrincipalAuthenticationMechanism
     * $principalAuthenticationMechanism
     */
    private $principalAuthenticationMechanism = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Authenticator
     * $authenticator
     */
    private $authenticator = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthenticatorTransportProtocol
     * $authenticatorTransportProtocol
     */
    private $authenticatorTransportProtocol = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as principalAuthenticationMechanism
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrincipalAuthenticationMechanism
     */
    public function getPrincipalAuthenticationMechanism()
    {
        return $this->principalAuthenticationMechanism;
    }

    /**
     * Sets a new principalAuthenticationMechanism
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrincipalAuthenticationMechanism
     * $principalAuthenticationMechanism
     * @return self
     */
    public function setPrincipalAuthenticationMechanism(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrincipalAuthenticationMechanism $principalAuthenticationMechanism)
    {
        $this->principalAuthenticationMechanism = $principalAuthenticationMechanism;
        return $this;
    }

    /**
     * Gets as authenticator
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Authenticator
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * Sets a new authenticator
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Authenticator
     * $authenticator
     * @return self
     */
    public function setAuthenticator(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Authenticator $authenticator)
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Gets as authenticatorTransportProtocol
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthenticatorTransportProtocol
     */
    public function getAuthenticatorTransportProtocol()
    {
        return $this->authenticatorTransportProtocol;
    }

    /**
     * Sets a new authenticatorTransportProtocol
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthenticatorTransportProtocol
     * $authenticatorTransportProtocol
     * @return self
     */
    public function setAuthenticatorTransportProtocol(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthenticatorTransportProtocol $authenticatorTransportProtocol)
    {
        $this->authenticatorTransportProtocol = $authenticatorTransportProtocol;
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

