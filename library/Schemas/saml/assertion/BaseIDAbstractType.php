<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing BaseIDAbstractType
 *
 * 
 * XSD Type: BaseIDAbstractType
 */
class BaseIDAbstractType
{

    /**
     * @property string $nameQualifier
     */
    private $nameQualifier = null;

    /**
     * @property string $sPNameQualifier
     */
    private $sPNameQualifier = null;

    /**
     * Gets as nameQualifier
     *
     * @return string
     */
    public function getNameQualifier()
    {
        return $this->nameQualifier;
    }

    /**
     * Sets a new nameQualifier
     *
     * @param string $nameQualifier
     * @return self
     */
    public function setNameQualifier($nameQualifier)
    {
        $this->nameQualifier = $nameQualifier;
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


}

