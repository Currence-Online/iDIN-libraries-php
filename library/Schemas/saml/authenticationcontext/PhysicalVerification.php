<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing PhysicalVerification
 */
class PhysicalVerification
{

    /**
     * @property string $credentialLevel
     */
    private $credentialLevel = null;

    /**
     * Gets as credentialLevel
     *
     * @return string
     */
    public function getCredentialLevel()
    {
        return $this->credentialLevel;
    }

    /**
     * Sets a new credentialLevel
     *
     * @param string $credentialLevel
     * @return self
     */
    public function setCredentialLevel($credentialLevel)
    {
        $this->credentialLevel = $credentialLevel;
        return $this;
    }


}

