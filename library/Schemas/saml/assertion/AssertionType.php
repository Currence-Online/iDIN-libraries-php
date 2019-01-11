<?php

namespace BankId\Merchant\Library\Schemas\saml\assertion;

/**
 * Class representing AssertionType
 *
 * 
 * XSD Type: AssertionType
 */
class AssertionType
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property string $issueInstant
     */
    private $issueInstant = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Issuer $issuer
     */
    private $issuer = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     */
    private $subject = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions
     */
    private $conditions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Advice $advice
     */
    private $advice = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Statement[] $statement
     */
    private $statement = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\AuthnStatement[]
     * $authnStatement
     */
    private $authnStatement = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\assertion\AuthzDecisionStatement[]
     * $authzDecisionStatement
     */
    private $authzDecisionStatement = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\AttributeStatement[]
     * $attributeStatement
     */
    private $attributeStatement = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as issueInstant
     *
     * @return string
     */
    public function getIssueInstant()
    {
        return $this->issueInstant;
    }

    /**
     * Sets a new issueInstant
     *
     * @param string $issueInstant
     * @return self
     */
    public function setIssueInstant($issueInstant)
    {
        $this->issueInstant = $issueInstant;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Issuer
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Issuer $issuer
     * @return self
     */
    public function setIssuer(\BankId\Merchant\Library\Schemas\saml\assertion\Issuer $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Signature $signature
     * @return self
     */
    public function setSignature(\BankId\Merchant\Library\Schemas\ds\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     * @return self
     */
    public function setSubject(\BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as conditions
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Conditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions
     * @return self
     */
    public function setConditions(\BankId\Merchant\Library\Schemas\saml\assertion\Conditions $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as advice
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Advice
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Sets a new advice
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Advice $advice
     * @return self
     */
    public function setAdvice(\BankId\Merchant\Library\Schemas\saml\assertion\Advice $advice)
    {
        $this->advice = $advice;
        return $this;
    }

    /**
     * Adds as statement
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Statement $statement
     */
    public function addToStatement(\BankId\Merchant\Library\Schemas\saml\assertion\Statement $statement)
    {
        $this->statement[] = $statement;
        return $this;
    }

    /**
     * isset statement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatement($index)
    {
        return isset($this->statement[$index]);
    }

    /**
     * unset statement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatement($index)
    {
        unset($this->statement[$index]);
    }

    /**
     * Gets as statement
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Statement[]
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * Sets a new statement
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Statement[] $statement
     * @return self
     */
    public function setStatement(array $statement)
    {
        $this->statement = $statement;
        return $this;
    }

    /**
     * Adds as authnStatement
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AuthnStatement
     * $authnStatement
     */
    public function addToAuthnStatement(\BankId\Merchant\Library\Schemas\saml\assertion\AuthnStatement $authnStatement)
    {
        $this->authnStatement[] = $authnStatement;
        return $this;
    }

    /**
     * isset authnStatement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthnStatement($index)
    {
        return isset($this->authnStatement[$index]);
    }

    /**
     * unset authnStatement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthnStatement($index)
    {
        unset($this->authnStatement[$index]);
    }

    /**
     * Gets as authnStatement
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\AuthnStatement[]
     */
    public function getAuthnStatement()
    {
        return $this->authnStatement;
    }

    /**
     * Sets a new authnStatement
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AuthnStatement[]
     * $authnStatement
     * @return self
     */
    public function setAuthnStatement(array $authnStatement)
    {
        $this->authnStatement = $authnStatement;
        return $this;
    }

    /**
     * Adds as authzDecisionStatement
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AuthzDecisionStatement
     * $authzDecisionStatement
     */
    public function addToAuthzDecisionStatement(\BankId\Merchant\Library\Schemas\saml\assertion\AuthzDecisionStatement $authzDecisionStatement)
    {
        $this->authzDecisionStatement[] = $authzDecisionStatement;
        return $this;
    }

    /**
     * isset authzDecisionStatement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthzDecisionStatement($index)
    {
        return isset($this->authzDecisionStatement[$index]);
    }

    /**
     * unset authzDecisionStatement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthzDecisionStatement($index)
    {
        unset($this->authzDecisionStatement[$index]);
    }

    /**
     * Gets as authzDecisionStatement
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\AuthzDecisionStatement[]
     */
    public function getAuthzDecisionStatement()
    {
        return $this->authzDecisionStatement;
    }

    /**
     * Sets a new authzDecisionStatement
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AuthzDecisionStatement[]
     * $authzDecisionStatement
     * @return self
     */
    public function setAuthzDecisionStatement(array $authzDecisionStatement)
    {
        $this->authzDecisionStatement = $authzDecisionStatement;
        return $this;
    }

    /**
     * Adds as attributeStatement
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AttributeStatement
     * $attributeStatement
     */
    public function addToAttributeStatement(\BankId\Merchant\Library\Schemas\saml\assertion\AttributeStatement $attributeStatement)
    {
        $this->attributeStatement[] = $attributeStatement;
        return $this;
    }

    /**
     * isset attributeStatement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttributeStatement($index)
    {
        return isset($this->attributeStatement[$index]);
    }

    /**
     * unset attributeStatement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttributeStatement($index)
    {
        unset($this->attributeStatement[$index]);
    }

    /**
     * Gets as attributeStatement
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\AttributeStatement[]
     */
    public function getAttributeStatement()
    {
        return $this->attributeStatement;
    }

    /**
     * Sets a new attributeStatement
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\AttributeStatement[]
     * $attributeStatement
     * @return self
     */
    public function setAttributeStatement(array $attributeStatement)
    {
        $this->attributeStatement = $attributeStatement;
        return $this;
    }


}

