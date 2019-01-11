<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing KeyStorageType
 *
 * 
 * XSD Type: KeyStorageType
 */
class KeyStorageType
{

    /**
     * @property string $medium
     */
    private $medium = null;

    /**
     * Gets as medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Sets a new medium
     *
     * @param string $medium
     * @return self
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }


}

