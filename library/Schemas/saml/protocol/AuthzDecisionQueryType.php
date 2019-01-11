<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing AuthzDecisionQueryType
 *
 * 
 * XSD Type: AuthzDecisionQueryType
 */
class AuthzDecisionQueryType extends SubjectQueryAbstractType
{

    /**
     * @property string $resource
     */
    private $resource = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Action[] $action
     */
    private $action = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Evidence $evidence
     */
    private $evidence = null;

    /**
     * Gets as resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * @param string $resource
     * @return self
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as action
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Action $action
     */
    public function addToAction(\BankId\Merchant\Library\Schemas\saml\assertion\Action $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Action[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Action[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as evidence
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Evidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Evidence $evidence
     * @return self
     */
    public function setEvidence(\BankId\Merchant\Library\Schemas\saml\assertion\Evidence $evidence)
    {
        $this->evidence = $evidence;
        return $this;
    }


}

