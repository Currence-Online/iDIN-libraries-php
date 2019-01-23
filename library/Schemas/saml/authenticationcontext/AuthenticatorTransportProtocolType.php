<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing AuthenticatorTransportProtocolType
 *
 * 
 * XSD Type: AuthenticatorTransportProtocolType
 */
class AuthenticatorTransportProtocolType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $hTTP
     */
    private $hTTP = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $sSL
     */
    private $sSL = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkNoEncryption
     */
    private $mobileNetworkNoEncryption = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkRadioEncryption
     */
    private $mobileNetworkRadioEncryption = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkEndToEndEncryption
     */
    private $mobileNetworkEndToEndEncryption = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $wTLS
     */
    private $wTLS = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $iPSec
     */
    private $iPSec = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $pSTN
     */
    private $pSTN = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $iSDN
     */
    private $iSDN = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[] $aDSL
     */
    private $aDSL = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToHTTP(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->hTTP[] = $extension;
        return $this;
    }

    /**
     * isset hTTP
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHTTP($index)
    {
        return isset($this->hTTP[$index]);
    }

    /**
     * unset hTTP
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHTTP($index)
    {
        unset($this->hTTP[$index]);
    }

    /**
     * Gets as hTTP
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getHTTP()
    {
        return $this->hTTP;
    }

    /**
     * Sets a new hTTP
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $hTTP
     * @return self
     */
    public function setHTTP(array $hTTP)
    {
        $this->hTTP = $hTTP;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToSSL(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->sSL[] = $extension;
        return $this;
    }

    /**
     * isset sSL
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSSL($index)
    {
        return isset($this->sSL[$index]);
    }

    /**
     * unset sSL
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSSL($index)
    {
        unset($this->sSL[$index]);
    }

    /**
     * Gets as sSL
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getSSL()
    {
        return $this->sSL;
    }

    /**
     * Sets a new sSL
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $sSL
     * @return self
     */
    public function setSSL(array $sSL)
    {
        $this->sSL = $sSL;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToMobileNetworkNoEncryption(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->mobileNetworkNoEncryption[] = $extension;
        return $this;
    }

    /**
     * isset mobileNetworkNoEncryption
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMobileNetworkNoEncryption($index)
    {
        return isset($this->mobileNetworkNoEncryption[$index]);
    }

    /**
     * unset mobileNetworkNoEncryption
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMobileNetworkNoEncryption($index)
    {
        unset($this->mobileNetworkNoEncryption[$index]);
    }

    /**
     * Gets as mobileNetworkNoEncryption
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getMobileNetworkNoEncryption()
    {
        return $this->mobileNetworkNoEncryption;
    }

    /**
     * Sets a new mobileNetworkNoEncryption
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkNoEncryption
     * @return self
     */
    public function setMobileNetworkNoEncryption(array $mobileNetworkNoEncryption)
    {
        $this->mobileNetworkNoEncryption = $mobileNetworkNoEncryption;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToMobileNetworkRadioEncryption(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->mobileNetworkRadioEncryption[] = $extension;
        return $this;
    }

    /**
     * isset mobileNetworkRadioEncryption
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMobileNetworkRadioEncryption($index)
    {
        return isset($this->mobileNetworkRadioEncryption[$index]);
    }

    /**
     * unset mobileNetworkRadioEncryption
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMobileNetworkRadioEncryption($index)
    {
        unset($this->mobileNetworkRadioEncryption[$index]);
    }

    /**
     * Gets as mobileNetworkRadioEncryption
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getMobileNetworkRadioEncryption()
    {
        return $this->mobileNetworkRadioEncryption;
    }

    /**
     * Sets a new mobileNetworkRadioEncryption
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkRadioEncryption
     * @return self
     */
    public function setMobileNetworkRadioEncryption(array $mobileNetworkRadioEncryption)
    {
        $this->mobileNetworkRadioEncryption = $mobileNetworkRadioEncryption;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToMobileNetworkEndToEndEncryption(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->mobileNetworkEndToEndEncryption[] = $extension;
        return $this;
    }

    /**
     * isset mobileNetworkEndToEndEncryption
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMobileNetworkEndToEndEncryption($index)
    {
        return isset($this->mobileNetworkEndToEndEncryption[$index]);
    }

    /**
     * unset mobileNetworkEndToEndEncryption
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMobileNetworkEndToEndEncryption($index)
    {
        unset($this->mobileNetworkEndToEndEncryption[$index]);
    }

    /**
     * Gets as mobileNetworkEndToEndEncryption
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getMobileNetworkEndToEndEncryption()
    {
        return $this->mobileNetworkEndToEndEncryption;
    }

    /**
     * Sets a new mobileNetworkEndToEndEncryption
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $mobileNetworkEndToEndEncryption
     * @return self
     */
    public function setMobileNetworkEndToEndEncryption(array $mobileNetworkEndToEndEncryption)
    {
        $this->mobileNetworkEndToEndEncryption = $mobileNetworkEndToEndEncryption;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToWTLS(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->wTLS[] = $extension;
        return $this;
    }

    /**
     * isset wTLS
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWTLS($index)
    {
        return isset($this->wTLS[$index]);
    }

    /**
     * unset wTLS
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWTLS($index)
    {
        unset($this->wTLS[$index]);
    }

    /**
     * Gets as wTLS
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getWTLS()
    {
        return $this->wTLS;
    }

    /**
     * Sets a new wTLS
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $wTLS
     * @return self
     */
    public function setWTLS(array $wTLS)
    {
        $this->wTLS = $wTLS;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToIPSec(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->iPSec[] = $extension;
        return $this;
    }

    /**
     * isset iPSec
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIPSec($index)
    {
        return isset($this->iPSec[$index]);
    }

    /**
     * unset iPSec
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIPSec($index)
    {
        unset($this->iPSec[$index]);
    }

    /**
     * Gets as iPSec
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getIPSec()
    {
        return $this->iPSec;
    }

    /**
     * Sets a new iPSec
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $iPSec
     * @return self
     */
    public function setIPSec(array $iPSec)
    {
        $this->iPSec = $iPSec;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToPSTN(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->pSTN[] = $extension;
        return $this;
    }

    /**
     * isset pSTN
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPSTN($index)
    {
        return isset($this->pSTN[$index]);
    }

    /**
     * unset pSTN
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPSTN($index)
    {
        unset($this->pSTN[$index]);
    }

    /**
     * Gets as pSTN
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getPSTN()
    {
        return $this->pSTN;
    }

    /**
     * Sets a new pSTN
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $pSTN
     * @return self
     */
    public function setPSTN(array $pSTN)
    {
        $this->pSTN = $pSTN;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToISDN(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->iSDN[] = $extension;
        return $this;
    }

    /**
     * isset iSDN
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetISDN($index)
    {
        return isset($this->iSDN[$index]);
    }

    /**
     * unset iSDN
     *
     * @param scalar $index
     * @return void
     */
    public function unsetISDN($index)
    {
        unset($this->iSDN[$index]);
    }

    /**
     * Gets as iSDN
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getISDN()
    {
        return $this->iSDN;
    }

    /**
     * Sets a new iSDN
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $iSDN
     * @return self
     */
    public function setISDN(array $iSDN)
    {
        $this->iSDN = $iSDN;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToADSL(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->aDSL[] = $extension;
        return $this;
    }

    /**
     * isset aDSL
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetADSL($index)
    {
        return isset($this->aDSL[$index]);
    }

    /**
     * unset aDSL
     *
     * @param scalar $index
     * @return void
     */
    public function unsetADSL($index)
    {
        unset($this->aDSL[$index]);
    }

    /**
     * Gets as aDSL
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getADSL()
    {
        return $this->aDSL;
    }

    /**
     * Sets a new aDSL
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $aDSL
     * @return self
     */
    public function setADSL(array $aDSL)
    {
        $this->aDSL = $aDSL;
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

