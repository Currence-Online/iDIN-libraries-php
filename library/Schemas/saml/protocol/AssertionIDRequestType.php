<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing AssertionIDRequestType
 *
 * 
 * XSD Type: AssertionIDRequestType
 */
class AssertionIDRequestType extends RequestAbstractType
{

    /**
     * @property string[] $assertionIDRef
     */
    private $assertionIDRef = null;

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


}

