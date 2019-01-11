<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing AuthnContextDeclarationBaseType
 *
 * 
 * XSD Type: AuthnContextDeclarationBaseType
 */
class AuthnContextDeclarationBaseType
{

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Identification
     * $identification
     */
    private $identification = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TechnicalProtection
     * $technicalProtection
     */
    private $technicalProtection = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\OperationalProtection
     * $operationalProtection
     */
    private $operationalProtection = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthnMethod
     * $authnMethod
     */
    private $authnMethod = null;

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
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as identification
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Identification
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Identification
     * $identification
     * @return self
     */
    public function setIdentification(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Identification $identification)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Gets as technicalProtection
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TechnicalProtection
     */
    public function getTechnicalProtection()
    {
        return $this->technicalProtection;
    }

    /**
     * Sets a new technicalProtection
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\TechnicalProtection
     * $technicalProtection
     * @return self
     */
    public function setTechnicalProtection(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\TechnicalProtection $technicalProtection)
    {
        $this->technicalProtection = $technicalProtection;
        return $this;
    }

    /**
     * Gets as operationalProtection
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\OperationalProtection
     */
    public function getOperationalProtection()
    {
        return $this->operationalProtection;
    }

    /**
     * Sets a new operationalProtection
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\OperationalProtection
     * $operationalProtection
     * @return self
     */
    public function setOperationalProtection(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\OperationalProtection $operationalProtection)
    {
        $this->operationalProtection = $operationalProtection;
        return $this;
    }

    /**
     * Gets as authnMethod
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthnMethod
     */
    public function getAuthnMethod()
    {
        return $this->authnMethod;
    }

    /**
     * Sets a new authnMethod
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthnMethod
     * $authnMethod
     * @return self
     */
    public function setAuthnMethod(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\AuthnMethod $authnMethod)
    {
        $this->authnMethod = $authnMethod;
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

