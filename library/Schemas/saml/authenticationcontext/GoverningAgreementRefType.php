<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing GoverningAgreementRefType
 *
 * 
 * XSD Type: GoverningAgreementRefType
 */
class GoverningAgreementRefType
{

    /**
     * @property string $governingAgreementRef
     */
    private $governingAgreementRef = null;

    /**
     * Gets as governingAgreementRef
     *
     * @return string
     */
    public function getGoverningAgreementRef()
    {
        return $this->governingAgreementRef;
    }

    /**
     * Sets a new governingAgreementRef
     *
     * @param string $governingAgreementRef
     * @return self
     */
    public function setGoverningAgreementRef($governingAgreementRef)
    {
        $this->governingAgreementRef = $governingAgreementRef;
        return $this;
    }


}

