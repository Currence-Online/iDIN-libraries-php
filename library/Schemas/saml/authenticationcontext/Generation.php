<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing Generation
 */
class Generation
{

    /**
     * @property string $mechanism
     */
    private $mechanism = null;

    /**
     * Gets as mechanism
     *
     * @return string
     */
    public function getMechanism()
    {
        return $this->mechanism;
    }

    /**
     * Sets a new mechanism
     *
     * @param string $mechanism
     * @return self
     */
    public function setMechanism($mechanism)
    {
        $this->mechanism = $mechanism;
        return $this;
    }


}

