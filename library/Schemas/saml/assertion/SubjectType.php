<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing SubjectType
 *
 * 
 * XSD Type: SubjectType
 */
class SubjectType
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
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\SubjectConfirmation[]
     * $subjectConfirmation
     */
    private $subjectConfirmation = null;

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
     * Adds as subjectConfirmation
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\SubjectConfirmation
     * $subjectConfirmation
     */
    public function addToSubjectConfirmation(\BankId\Merchant\Library\Schemas\saml\assertion\SubjectConfirmation $subjectConfirmation)
    {
        $this->subjectConfirmation[] = $subjectConfirmation;
        return $this;
    }

    /**
     * isset subjectConfirmation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubjectConfirmation($index)
    {
        return isset($this->subjectConfirmation[$index]);
    }

    /**
     * unset subjectConfirmation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubjectConfirmation($index)
    {
        unset($this->subjectConfirmation[$index]);
    }

    /**
     * Gets as subjectConfirmation
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\SubjectConfirmation[]
     */
    public function getSubjectConfirmation()
    {
        return $this->subjectConfirmation;
    }

    /**
     * Sets a new subjectConfirmation
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\SubjectConfirmation[]
     * $subjectConfirmation
     * @return self
     */
    public function setSubjectConfirmation(array $subjectConfirmation)
    {
        $this->subjectConfirmation = $subjectConfirmation;
        return $this;
    }


}

