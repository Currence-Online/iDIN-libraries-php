<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing ContactType
 *
 * 
 * XSD Type: ContactType
 */
class ContactType
{

    /**
     * @property string $contactType
     */
    private $contactType = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property string $company
     */
    private $company = null;

    /**
     * @property string $givenName
     */
    private $givenName = null;

    /**
     * @property string $surName
     */
    private $surName = null;

    /**
     * @property string[] $emailAddress
     */
    private $emailAddress = null;

    /**
     * @property string[] $telephoneNumber
     */
    private $telephoneNumber = null;

    /**
     * Gets as contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets a new contactType
     *
     * @param string $contactType
     * @return self
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions
     * @return self
     */
    public function setExtensions(\BankId\Merchant\Library\Schemas\saml\metadata\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Gets as givenName
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets a new givenName
     *
     * @param string $givenName
     * @return self
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
        return $this;
    }

    /**
     * Gets as surName
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Sets a new surName
     *
     * @param string $surName
     * @return self
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * Adds as emailAddress
     *
     * @return self
     * @param string $emailAddress
     */
    public function addToEmailAddress($emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }

    /**
     * isset emailAddress
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmailAddress($index)
    {
        return isset($this->emailAddress[$index]);
    }

    /**
     * unset emailAddress
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmailAddress($index)
    {
        unset($this->emailAddress[$index]);
    }

    /**
     * Gets as emailAddress
     *
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress(array $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Adds as telephoneNumber
     *
     * @return self
     * @param string $telephoneNumber
     */
    public function addToTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber[] = $telephoneNumber;
        return $this;
    }

    /**
     * isset telephoneNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephoneNumber($index)
    {
        return isset($this->telephoneNumber[$index]);
    }

    /**
     * unset telephoneNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephoneNumber($index)
    {
        unset($this->telephoneNumber[$index]);
    }

    /**
     * Gets as telephoneNumber
     *
     * @return string[]
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Sets a new telephoneNumber
     *
     * @param string $telephoneNumber
     * @return self
     */
    public function setTelephoneNumber(array $telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }


}

