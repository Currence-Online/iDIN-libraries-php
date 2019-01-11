<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AuthnStatementType
 *
 * 
 * XSD Type: AuthnStatementType
 */
class AuthnStatementType extends StatementAbstractType
{

    /**
     * @property string $authnInstant
     */
    private $authnInstant = null;

    /**
     * @property string $sessionIndex
     */
    private $sessionIndex = null;

    /**
     * @property string $sessionNotOnOrAfter
     */
    private $sessionNotOnOrAfter = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\SubjectLocality
     * $subjectLocality
     */
    private $subjectLocality = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\AuthnContext
     * $authnContext
     */
    private $authnContext = null;

    /**
     * Gets as authnInstant
     *
     * @return string
     */
    public function getAuthnInstant()
    {
        return $this->authnInstant;
    }

    /**
     * Sets a new authnInstant
     *
     * @param string $authnInstant
     * @return self
     */
    public function setAuthnInstant($authnInstant)
    {
        $this->authnInstant = $authnInstant;
        return $this;
    }

    /**
     * Gets as sessionIndex
     *
     * @return string
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
    public function setSessionIndex($sessionIndex)
    {
        $this->sessionIndex = $sessionIndex;
        return $this;
    }

    /**
     * Gets as sessionNotOnOrAfter
     *
     * @return string
     */
    public function getSessionNotOnOrAfter()
    {
        return $this->sessionNotOnOrAfter;
    }

    /**
     * Sets a new sessionNotOnOrAfter
     *
     * @param string $sessionNotOnOrAfter
     * @return self
     */
    public function setSessionNotOnOrAfter($sessionNotOnOrAfter)
    {
        $this->sessionNotOnOrAfter = $sessionNotOnOrAfter;
        return $this;
    }

    /**
     * Gets as subjectLocality
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\SubjectLocality
     */
    public function getSubjectLocality()
    {
        return $this->subjectLocality;
    }

    /**
     * Sets a new subjectLocality
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\SubjectLocality
     * $subjectLocality
     * @return self
     */
    public function setSubjectLocality(\BankId\Merchant\Library\Schemas\saml\assertion\SubjectLocality $subjectLocality)
    {
        $this->subjectLocality = $subjectLocality;
        return $this;
    }

    /**
     * Gets as authnContext
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\AuthnContext
     */
    public function getAuthnContext()
    {
        return $this->authnContext;
    }

    /**
     * Sets a new authnContext
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AuthnContext
     * $authnContext
     * @return self
     */
    public function setAuthnContext(\BankId\Merchant\Library\Schemas\saml\assertion\AuthnContext $authnContext)
    {
        $this->authnContext = $authnContext;
        return $this;
    }


}

