<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing ManageNameIDRequestType
 *
 * 
 * XSD Type: ManageNameIDRequestType
 */
class ManageNameIDRequestType extends RequestAbstractType
{

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
     * @property string $newID
     */
    private $newID = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\NewEncryptedID
     * $newEncryptedID
     */
    private $newEncryptedID = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\Terminate $terminate
     */
    private $terminate = null;

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
     * Gets as newID
     *
     * @return string
     */
    public function getNewID()
    {
        return $this->newID;
    }

    /**
     * Sets a new newID
     *
     * @param string $newID
     * @return self
     */
    public function setNewID($newID)
    {
        $this->newID = $newID;
        return $this;
    }

    /**
     * Gets as newEncryptedID
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\NewEncryptedID
     */
    public function getNewEncryptedID()
    {
        return $this->newEncryptedID;
    }

    /**
     * Sets a new newEncryptedID
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\NewEncryptedID
     * $newEncryptedID
     * @return self
     */
    public function setNewEncryptedID(\BankId\Merchant\Library\Schemas\saml\protocol\NewEncryptedID $newEncryptedID)
    {
        $this->newEncryptedID = $newEncryptedID;
        return $this;
    }

    /**
     * Gets as terminate
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\Terminate
     */
    public function getTerminate()
    {
        return $this->terminate;
    }

    /**
     * Sets a new terminate
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\Terminate $terminate
     * @return self
     */
    public function setTerminate(\BankId\Merchant\Library\Schemas\saml\protocol\Terminate $terminate)
    {
        $this->terminate = $terminate;
        return $this;
    }


}

