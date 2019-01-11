<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing RequestedAuthnContextType
 *
 * 
 * XSD Type: RequestedAuthnContextType
 */
class RequestedAuthnContextType
{

    /**
     * @property string $comparison
     */
    private $comparison = null;

    /**
     * @property string[] $authnContextClassRef
     */
    private $authnContextClassRef = null;

    /**
     * @property string[] $authnContextDeclRef
     */
    private $authnContextDeclRef = null;

    /**
     * Gets as comparison
     *
     * @return string
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * Sets a new comparison
     *
     * @param string $comparison
     * @return self
     */
    public function setComparison($comparison)
    {
        $this->comparison = $comparison;
        return $this;
    }

    /**
     * Adds as authnContextClassRef
     *
     * @return self
     * @param string $authnContextClassRef
     */
    public function addToAuthnContextClassRef($authnContextClassRef)
    {
        $this->authnContextClassRef[] = $authnContextClassRef;
        return $this;
    }

    /**
     * isset authnContextClassRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthnContextClassRef($index)
    {
        return isset($this->authnContextClassRef[$index]);
    }

    /**
     * unset authnContextClassRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthnContextClassRef($index)
    {
        unset($this->authnContextClassRef[$index]);
    }

    /**
     * Gets as authnContextClassRef
     *
     * @return string[]
     */
    public function getAuthnContextClassRef()
    {
        return $this->authnContextClassRef;
    }

    /**
     * Sets a new authnContextClassRef
     *
     * @param string $authnContextClassRef
     * @return self
     */
    public function setAuthnContextClassRef(array $authnContextClassRef)
    {
        $this->authnContextClassRef = $authnContextClassRef;
        return $this;
    }

    /**
     * Adds as authnContextDeclRef
     *
     * @return self
     * @param string $authnContextDeclRef
     */
    public function addToAuthnContextDeclRef($authnContextDeclRef)
    {
        $this->authnContextDeclRef[] = $authnContextDeclRef;
        return $this;
    }

    /**
     * isset authnContextDeclRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthnContextDeclRef($index)
    {
        return isset($this->authnContextDeclRef[$index]);
    }

    /**
     * unset authnContextDeclRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthnContextDeclRef($index)
    {
        unset($this->authnContextDeclRef[$index]);
    }

    /**
     * Gets as authnContextDeclRef
     *
     * @return string[]
     */
    public function getAuthnContextDeclRef()
    {
        return $this->authnContextDeclRef;
    }

    /**
     * Sets a new authnContextDeclRef
     *
     * @param string $authnContextDeclRef
     * @return self
     */
    public function setAuthnContextDeclRef(array $authnContextDeclRef)
    {
        $this->authnContextDeclRef = $authnContextDeclRef;
        return $this;
    }


}

