<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing ActivationPinType
 *
 * 
 * XSD Type: ActivationPinType
 */
class ActivationPinType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Length
     * $length
     */
    private $length = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Alphabet
     * $alphabet
     */
    private $alphabet = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Generation
     * $generation
     */
    private $generation = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimit
     * $activationLimit
     */
    private $activationLimit = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as length
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Length
     * $length
     * @return self
     */
    public function setLength(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Length $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as alphabet
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Alphabet
     */
    public function getAlphabet()
    {
        return $this->alphabet;
    }

    /**
     * Sets a new alphabet
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Alphabet
     * $alphabet
     * @return self
     */
    public function setAlphabet(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Alphabet $alphabet)
    {
        $this->alphabet = $alphabet;
        return $this;
    }

    /**
     * Gets as generation
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Generation
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Sets a new generation
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Generation
     * $generation
     * @return self
     */
    public function setGeneration(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Generation $generation)
    {
        $this->generation = $generation;
        return $this;
    }

    /**
     * Gets as activationLimit
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimit
     */
    public function getActivationLimit()
    {
        return $this->activationLimit;
    }

    /**
     * Sets a new activationLimit
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimit
     * $activationLimit
     * @return self
     */
    public function setActivationLimit(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\ActivationLimit $activationLimit)
    {
        $this->activationLimit = $activationLimit;
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

