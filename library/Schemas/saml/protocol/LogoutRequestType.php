<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing LogoutRequestType
 *
 * 
 * XSD Type: LogoutRequestType
 */
class LogoutRequestType extends RequestAbstractType
{

    /**
     * @property string $reason
     */
    private $reason = null;

    /**
     * @property string $notOnOrAfter
     */
    private $notOnOrAfter = null;

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
     * @property string[] $sessionIndex
     */
    private $sessionIndex = null;

    /**
     * Gets as reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as notOnOrAfter
     *
     * @return string
     */
    public function getNotOnOrAfter()
    {
        return $this->notOnOrAfter;
    }

    /**
     * Sets a new notOnOrAfter
     *
     * @param string $notOnOrAfter
     * @return self
     */
    public function setNotOnOrAfter($notOnOrAfter)
    {
        $this->notOnOrAfter = $notOnOrAfter;
        return $this;
    }

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
     * Adds as sessionIndex
     *
     * @return self
     * @param string $sessionIndex
     */
    public function addToSessionIndex($sessionIndex)
    {
        $this->sessionIndex[] = $sessionIndex;
        return $this;
    }

    /**
     * isset sessionIndex
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSessionIndex($index)
    {
        return isset($this->sessionIndex[$index]);
    }

    /**
     * unset sessionIndex
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSessionIndex($index)
    {
        unset($this->sessionIndex[$index]);
    }

    /**
     * Gets as sessionIndex
     *
     * @return string[]
     */
    public function getSessionIndex()
    {
        return $this->sessionIndex;
    }

    /**
     * Sets a new sessionIndex
     *
     * @param string $sessionIndex
     * @return self
     */
    public function setSessionIndex(array $sessionIndex)
    {
        $this->sessionIndex = $sessionIndex;
        return $this;
    }


}

