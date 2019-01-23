<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing SubjectConfirmationType
 *
 * 
 * XSD Type: SubjectConfirmationType
 */
class SubjectConfirmationType
{

    /**
     * @property string $method
     */
    private $method = null;

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
     * @property mixed $subjectConfirmationData
     */
    private $subjectConfirmationData = null;

    /**
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
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
     * Gets as subjectConfirmationData
     *
     * @return mixed
     */
    public function getSubjectConfirmationData()
    {
        return $this->subjectConfirmationData;
    }

    /**
     * Sets a new subjectConfirmationData
     *
     * @param mixed $subjectConfirmationData
     * @return self
     */
    public function setSubjectConfirmationData($subjectConfirmationData)
    {
        $this->subjectConfirmationData = $subjectConfirmationData;
        return $this;
    }


}

