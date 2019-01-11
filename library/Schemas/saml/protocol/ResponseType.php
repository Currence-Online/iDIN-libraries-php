<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing ResponseType
 *
 * 
 * XSD Type: ResponseType
 */
class ResponseType extends StatusResponseType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Assertion[] $assertion
     */
    private $assertion = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAssertion[]
     * $encryptedAssertion
     */
    private $encryptedAssertion = null;

    /**
     * Adds as assertion
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Assertion $assertion
     */
    public function addToAssertion(\BankId\Merchant\Library\Schemas\saml\assertion\Assertion $assertion)
    {
        $this->assertion[] = $assertion;
        return $this;
    }

    /**
     * isset assertion
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssertion($index)
    {
        return isset($this->assertion[$index]);
    }

    /**
     * unset assertion
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssertion($index)
    {
        unset($this->assertion[$index]);
    }

    /**
     * Gets as assertion
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Assertion[]
     */
    public function getAssertion()
    {
        return $this->assertion;
    }

    /**
     * Sets a new assertion
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Assertion[] $assertion
     * @return self
     */
    public function setAssertion(array $assertion)
    {
        $this->assertion = $assertion;
        return $this;
    }

    /**
     * Adds as encryptedAssertion
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAssertion
     * $encryptedAssertion
     */
    public function addToEncryptedAssertion(\BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAssertion $encryptedAssertion)
    {
        $this->encryptedAssertion[] = $encryptedAssertion;
        return $this;
    }

    /**
     * isset encryptedAssertion
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEncryptedAssertion($index)
    {
        return isset($this->encryptedAssertion[$index]);
    }

    /**
     * unset encryptedAssertion
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEncryptedAssertion($index)
    {
        unset($this->encryptedAssertion[$index]);
    }

    /**
     * Gets as encryptedAssertion
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAssertion[]
     */
    public function getEncryptedAssertion()
    {
        return $this->encryptedAssertion;
    }

    /**
     * Sets a new encryptedAssertion
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\EncryptedAssertion[]
     * $encryptedAssertion
     * @return self
     */
    public function setEncryptedAssertion(array $encryptedAssertion)
    {
        $this->encryptedAssertion = $encryptedAssertion;
        return $this;
    }


}

