<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing TokenType
 *
 * 
 * XSD Type: TokenType
 */
class TokenType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TimeSyncToken
     * $timeSyncToken
     */
    private $timeSyncToken = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as timeSyncToken
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TimeSyncToken
     */
    public function getTimeSyncToken()
    {
        return $this->timeSyncToken;
    }

    /**
     * Sets a new timeSyncToken
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TimeSyncToken
     * $timeSyncToken
     * @return self
     */
    public function setTimeSyncToken(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\TimeSyncToken $timeSyncToken)
    {
        $this->timeSyncToken = $timeSyncToken;
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

