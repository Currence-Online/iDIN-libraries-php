<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing KeySharingType
 *
 * 
 * XSD Type: KeySharingType
 */
class KeySharingType
{

    /**
     * @property boolean $sharing
     */
    private $sharing = null;

    /**
     * Gets as sharing
     *
     * @return boolean
     */
    public function getSharing()
    {
        return $this->sharing;
    }

    /**
     * Sets a new sharing
     *
     * @param boolean $sharing
     * @return self
     */
    public function setSharing($sharing)
    {
        $this->sharing = $sharing;
        return $this;
    }


}

