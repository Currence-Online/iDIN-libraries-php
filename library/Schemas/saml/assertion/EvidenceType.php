<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing EvidenceType
 *
 * 
 * XSD Type: EvidenceType
 */
class EvidenceType
{

    /**
     * @property string[] $assertionIDRef
     */
    private $assertionIDRef = null;

    /**
     * @property string[] $assertionURIRef
     */
    private $assertionURIRef = null;

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
     * Adds as assertionIDRef
     *
     * @return self
     * @param string $assertionIDRef
     */
    public function addToAssertionIDRef($assertionIDRef)
    {
        $this->assertionIDRef[] = $assertionIDRef;
        return $this;
    }

    /**
     * isset assertionIDRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssertionIDRef($index)
    {
        return isset($this->assertionIDRef[$index]);
    }

    /**
     * unset assertionIDRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssertionIDRef($index)
    {
        unset($this->assertionIDRef[$index]);
    }

    /**
     * Gets as assertionIDRef
     *
     * @return string[]
     */
    public function getAssertionIDRef()
    {
        return $this->assertionIDRef;
    }

    /**
     * Sets a new assertionIDRef
     *
     * @param string $assertionIDRef
     * @return self
     */
    public function setAssertionIDRef(array $assertionIDRef)
    {
        $this->assertionIDRef = $assertionIDRef;
        return $this;
    }

    /**
     * Adds as assertionURIRef
     *
     * @return self
     * @param string $assertionURIRef
     */
    public function addToAssertionURIRef($assertionURIRef)
    {
        $this->assertionURIRef[] = $assertionURIRef;
        return $this;
    }

    /**
     * isset assertionURIRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssertionURIRef($index)
    {
        return isset($this->assertionURIRef[$index]);
    }

    /**
     * unset assertionURIRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssertionURIRef($index)
    {
        unset($this->assertionURIRef[$index]);
    }

    /**
     * Gets as assertionURIRef
     *
     * @return string[]
     */
    public function getAssertionURIRef()
    {
        return $this->assertionURIRef;
    }

    /**
     * Sets a new assertionURIRef
     *
     * @param string $assertionURIRef
     * @return self
     */
    public function setAssertionURIRef(array $assertionURIRef)
    {
        $this->assertionURIRef = $assertionURIRef;
        return $this;
    }

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

