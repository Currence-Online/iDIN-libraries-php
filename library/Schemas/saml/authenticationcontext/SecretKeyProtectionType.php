<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing SecretKeyProtectionType
 *
 * 
 * XSD Type: SecretKeyProtectionType
 */
class SecretKeyProtectionType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyActivation
     * $keyActivation
     */
    private $keyActivation = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyStorage
     * $keyStorage
     */
    private $keyStorage = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as keyActivation
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyActivation
     */
    public function getKeyActivation()
    {
        return $this->keyActivation;
    }

    /**
     * Sets a new keyActivation
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyActivation
     * $keyActivation
     * @return self
     */
    public function setKeyActivation(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyActivation $keyActivation)
    {
        $this->keyActivation = $keyActivation;
        return $this;
    }

    /**
     * Gets as keyStorage
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyStorage
     */
    public function getKeyStorage()
    {
        return $this->keyStorage;
    }

    /**
     * Sets a new keyStorage
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyStorage
     * $keyStorage
     * @return self
     */
    public function setKeyStorage(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\KeyStorage $keyStorage)
    {
        $this->keyStorage = $keyStorage;
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

