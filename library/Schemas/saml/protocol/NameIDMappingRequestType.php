<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing NameIDMappingRequestType
 *
 * 
 * XSD Type: NameIDMappingRequestType
 */
class NameIDMappingRequestType extends RequestAbstractType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\BaseID $baseID
     */
    private $baseID = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\NameID $nameID
     */
    private $nameID = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedID
     * $encryptedID
     */
    private $encryptedID = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy
     * $nameIDPolicy
     */
    private $nameIDPolicy = null;

    /**
     * Gets as baseID
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\BaseID
     */
    public function getBaseID()
    {
        return $this->baseID;
    }

    /**
     * Sets a new baseID
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\BaseID $baseID
     * @return self
     */
    public function setBaseID(\BankId\Merchant\Library\Schemas\saml\assertion\BaseID $baseID)
    {
        $this->baseID = $baseID;
        return $this;
    }

    /**
     * Gets as nameID
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\NameID
     */
    public function getNameID()
    {
        return $this->nameID;
    }

    /**
     * Sets a new nameID
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\NameID $nameID
     * @return self
     */
    public function setNameID(\BankId\Merchant\Library\Schemas\saml\assertion\NameID $nameID)
    {
        $this->nameID = $nameID;
        return $this;
    }

    /**
     * Gets as encryptedID
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedID
     */
    public function getEncryptedID()
    {
        return $this->encryptedID;
    }

    /**
     * Sets a new encryptedID
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedID $encryptedID
     * @return self
     */
    public function setEncryptedID(\BankId\Merchant\Library\Schemas\saml\assertion\EncryptedID $encryptedID)
    {
        $this->encryptedID = $encryptedID;
        return $this;
    }

    /**
     * Gets as nameIDPolicy
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy
     */
    public function getNameIDPolicy()
    {
        return $this->nameIDPolicy;
    }

    /**
     * Sets a new nameIDPolicy
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy $nameIDPolicy
     * @return self
     */
    public function setNameIDPolicy(\BankId\Merchant\Library\Schemas\saml\protocol\NameIDPolicy $nameIDPolicy)
    {
        $this->nameIDPolicy = $nameIDPolicy;
        return $this;
    }


}

