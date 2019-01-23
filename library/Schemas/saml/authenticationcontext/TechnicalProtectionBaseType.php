<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing TechnicalProtectionBaseType
 *
 * 
 * XSD Type: TechnicalProtectionBaseType
 */
class TechnicalProtectionBaseType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrivateKeyProtection
     * $privateKeyProtection
     */
    private $privateKeyProtection = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecretKeyProtection
     * $secretKeyProtection
     */
    private $secretKeyProtection = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as privateKeyProtection
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrivateKeyProtection
     */
    public function getPrivateKeyProtection()
    {
        return $this->privateKeyProtection;
    }

    /**
     * Sets a new privateKeyProtection
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrivateKeyProtection
     * $privateKeyProtection
     * @return self
     */
    public function setPrivateKeyProtection(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\PrivateKeyProtection $privateKeyProtection)
    {
        $this->privateKeyProtection = $privateKeyProtection;
        return $this;
    }

    /**
     * Gets as secretKeyProtection
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecretKeyProtection
     */
    public function getSecretKeyProtection()
    {
        return $this->secretKeyProtection;
    }

    /**
     * Sets a new secretKeyProtection
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecretKeyProtection
     * $secretKeyProtection
     * @return self
     */
    public function setSecretKeyProtection(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\SecretKeyProtection $secretKeyProtection)
    {
        $this->secretKeyProtection = $secretKeyProtection;
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

