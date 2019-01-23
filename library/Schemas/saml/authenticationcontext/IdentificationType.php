<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing IdentificationType
 *
 * 
 * XSD Type: IdentificationType
 */
class IdentificationType
{

    /**
     * This attribute indicates whether or not the
     *  Identification mechanisms allow the actions of the Principal to be
     *  linked to an actual end user.
     *
     * @property string $nym
     */
    private $nym = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PhysicalVerification
     * $physicalVerification
     */
    private $physicalVerification = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $writtenConsent
     */
    private $writtenConsent = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     * $governingAgreements
     */
    private $governingAgreements = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $extension
     */
    private $extension = null;

    /**
     * Gets as nym
     *
     * This attribute indicates whether or not the
     *  Identification mechanisms allow the actions of the Principal to be
     *  linked to an actual end user.
     *
     * @return string
     */
    public function getNym()
    {
        return $this->nym;
    }

    /**
     * Sets a new nym
     *
     * This attribute indicates whether or not the
     *  Identification mechanisms allow the actions of the Principal to be
     *  linked to an actual end user.
     *
     * @param string $nym
     * @return self
     */
    public function setNym($nym)
    {
        $this->nym = $nym;
        return $this;
    }

    /**
     * Gets as physicalVerification
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PhysicalVerification
     */
    public function getPhysicalVerification()
    {
        return $this->physicalVerification;
    }

    /**
     * Sets a new physicalVerification
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\PhysicalVerification
     * $physicalVerification
     * @return self
     */
    public function setPhysicalVerification(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\PhysicalVerification $physicalVerification)
    {
        $this->physicalVerification = $physicalVerification;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToWrittenConsent(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->writtenConsent[] = $extension;
        return $this;
    }

    /**
     * isset writtenConsent
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWrittenConsent($index)
    {
        return isset($this->writtenConsent[$index]);
    }

    /**
     * unset writtenConsent
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWrittenConsent($index)
    {
        unset($this->writtenConsent[$index]);
    }

    /**
     * Gets as writtenConsent
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getWrittenConsent()
    {
        return $this->writtenConsent;
    }

    /**
     * Sets a new writtenConsent
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $writtenConsent
     * @return self
     */
    public function setWrittenConsent(array $writtenConsent)
    {
        $this->writtenConsent = $writtenConsent;
        return $this;
    }

    /**
     * Adds as governingAgreementRef
     *
     * @return self
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef
     * $governingAgreementRef
     */
    public function addToGoverningAgreements(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef $governingAgreementRef)
    {
        $this->governingAgreements[] = $governingAgreementRef;
        return $this;
    }

    /**
     * isset governingAgreements
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGoverningAgreements($index)
    {
        return isset($this->governingAgreements[$index]);
    }

    /**
     * unset governingAgreements
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGoverningAgreements($index)
    {
        unset($this->governingAgreements[$index]);
    }

    /**
     * Gets as governingAgreements
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     */
    public function getGoverningAgreements()
    {
        return $this->governingAgreements;
    }

    /**
     * Sets a new governingAgreements
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     * $governingAgreements
     * @return self
     */
    public function setGoverningAgreements(array $governingAgreements)
    {
        $this->governingAgreements = $governingAgreements;
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

