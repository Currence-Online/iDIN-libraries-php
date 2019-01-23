<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AuthnContextType
 *
 * 
 * XSD Type: AuthnContextType
 */
class AuthnContextType
{

    /**
     * @property string $authnContextClassRef
     */
    private $authnContextClassRef = null;

    /**
     * @property mixed $authnContextDecl
     */
    private $authnContextDecl = null;

    /**
     * @property string $authnContextDeclRef
     */
    private $authnContextDeclRef = null;

    /**
     * @property string[] $authenticatingAuthority
     */
    private $authenticatingAuthority = null;

    /**
     * Gets as authnContextClassRef
     *
     * @return string
     */
    public function getAuthnContextClassRef()
    {
        return $this->authnContextClassRef;
    }

    /**
     * Sets a new authnContextClassRef
     *
     * @param string $authnContextClassRef
     * @return self
     */
    public function setAuthnContextClassRef($authnContextClassRef)
    {
        $this->authnContextClassRef = $authnContextClassRef;
        return $this;
    }

    /**
     * Gets as authnContextDecl
     *
     * @return mixed
     */
    public function getAuthnContextDecl()
    {
        return $this->authnContextDecl;
    }

    /**
     * Sets a new authnContextDecl
     *
     * @param mixed $authnContextDecl
     * @return self
     */
    public function setAuthnContextDecl($authnContextDecl)
    {
        $this->authnContextDecl = $authnContextDecl;
        return $this;
    }

    /**
     * Gets as authnContextDeclRef
     *
     * @return string
     */
    public function getAuthnContextDeclRef()
    {
        return $this->authnContextDeclRef;
    }

    /**
     * Sets a new authnContextDeclRef
     *
     * @param string $authnContextDeclRef
     * @return self
     */
    public function setAuthnContextDeclRef($authnContextDeclRef)
    {
        $this->authnContextDeclRef = $authnContextDeclRef;
        return $this;
    }

    /**
     * Adds as authenticatingAuthority
     *
     * @return self
     * @param string $authenticatingAuthority
     */
    public function addToAuthenticatingAuthority($authenticatingAuthority)
    {
        $this->authenticatingAuthority[] = $authenticatingAuthority;
        return $this;
    }

    /**
     * isset authenticatingAuthority
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthenticatingAuthority($index)
    {
        return isset($this->authenticatingAuthority[$index]);
    }

    /**
     * unset authenticatingAuthority
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthenticatingAuthority($index)
    {
        unset($this->authenticatingAuthority[$index]);
    }

    /**
     * Gets as authenticatingAuthority
     *
     * @return string[]
     */
    public function getAuthenticatingAuthority()
    {
        return $this->authenticatingAuthority;
    }

    /**
     * Sets a new authenticatingAuthority
     *
     * @param string $authenticatingAuthority
     * @return self
     */
    public function setAuthenticatingAuthority(array $authenticatingAuthority)
    {
        $this->authenticatingAuthority = $authenticatingAuthority;
        return $this;
    }


}

