<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing GoverningAgreementsType
 *
 * 
 * XSD Type: GoverningAgreementsType
 */
class GoverningAgreementsType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     * $governingAgreementRef
     */
    private $governingAgreementRef = null;

    /**
     * Adds as governingAgreementRef
     *
     * @return self
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef
     * $governingAgreementRef
     */
    public function addToGoverningAgreementRef(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef $governingAgreementRef)
    {
        $this->governingAgreementRef[] = $governingAgreementRef;
        return $this;
    }

    /**
     * isset governingAgreementRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGoverningAgreementRef($index)
    {
        return isset($this->governingAgreementRef[$index]);
    }

    /**
     * unset governingAgreementRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGoverningAgreementRef($index)
    {
        unset($this->governingAgreementRef[$index]);
    }

    /**
     * Gets as governingAgreementRef
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     */
    public function getGoverningAgreementRef()
    {
        return $this->governingAgreementRef;
    }

    /**
     * Sets a new governingAgreementRef
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\GoverningAgreementRef[]
     * $governingAgreementRef
     * @return self
     */
    public function setGoverningAgreementRef(array $governingAgreementRef)
    {
        $this->governingAgreementRef = $governingAgreementRef;
        return $this;
    }


}

