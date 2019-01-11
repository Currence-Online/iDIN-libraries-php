<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing AuthnQueryType
 *
 * 
 * XSD Type: AuthnQueryType
 */
class AuthnQueryType extends SubjectQueryAbstractType
{

    /**
     * @property string $sessionIndex
     */
    private $sessionIndex = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     * $requestedAuthnContext
     */
    private $requestedAuthnContext = null;

    /**
     * Gets as sessionIndex
     *
     * @return string
     */
    public function getSessionIndex()
    {
        return $this->sessionIndex;
    }

    /**
     * Sets a new sessionIndex
     *
     * @param string $sessionIndex
     * @return self
     */
    public function setSessionIndex($sessionIndex)
    {
        $this->sessionIndex = $sessionIndex;
        return $this;
    }

    /**
     * Gets as requestedAuthnContext
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     */
    public function getRequestedAuthnContext()
    {
        return $this->requestedAuthnContext;
    }

    /**
     * Sets a new requestedAuthnContext
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext
     * $requestedAuthnContext
     * @return self
     */
    public function setRequestedAuthnContext(\BankId\Merchant\Library\Schemas\saml\protocol\RequestedAuthnContext $requestedAuthnContext)
    {
        $this->requestedAuthnContext = $requestedAuthnContext;
        return $this;
    }


}

