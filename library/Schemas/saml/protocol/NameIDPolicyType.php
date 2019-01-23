<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing NameIDPolicyType
 *
 * 
 * XSD Type: NameIDPolicyType
 */
class NameIDPolicyType
{

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $sPNameQualifier
     */
    private $sPNameQualifier = null;

    /**
     * @property boolean $allowCreate
     */
    private $allowCreate = null;

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as sPNameQualifier
     *
     * @return string
     */
    public function getSPNameQualifier()
    {
        return $this->sPNameQualifier;
    }

    /**
     * Sets a new sPNameQualifier
     *
     * @param string $sPNameQualifier
     * @return self
     */
    public function setSPNameQualifier($sPNameQualifier)
    {
        $this->sPNameQualifier = $sPNameQualifier;
        return $this;
    }

    /**
     * Gets as allowCreate
     *
     * @return boolean
     */
    public function getAllowCreate()
    {
        return $this->allowCreate;
    }

    /**
     * Sets a new allowCreate
     *
     * @param boolean $allowCreate
     * @return self
     */
    public function setAllowCreate($allowCreate)
    {
        $this->allowCreate = $allowCreate;
        return $this;
    }


}

