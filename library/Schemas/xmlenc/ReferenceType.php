<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing ReferenceType
 *
 * 
 * XSD Type: ReferenceType
 */
class ReferenceType
{

    /**
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }


}

