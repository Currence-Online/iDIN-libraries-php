<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing StatusResponseType
 *
 * 
 * XSD Type: StatusResponseType
 */
class StatusResponseType extends \SimpleXMLElement 
{

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property string $inResponseTo
     */
    private $inResponseTo = null;

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property string $issueInstant
     */
    private $issueInstant = null;

    /**
     * @property string $destination
     */
    private $destination = null;

    /**
     * @property string $consent
     */
    private $consent = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Issuer $issuer
     */
    private $issuer = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\Extensions $extensions
     */
    private $extensions = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\Status $status
     */
    private $status = null;

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
     * Gets as inResponseTo
     *
     * @return string
     */
    public function getInResponseTo()
    {
        return $this->inResponseTo;
    }

    /**
     * Sets a new inResponseTo
     *
     * @param string $inResponseTo
     * @return self
     */
    public function setInResponseTo($inResponseTo)
    {
        $this->inResponseTo = $inResponseTo;
        return $this;
    }

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
     * Gets as destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * @param string $destination
     * @return self
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as consent
     *
     * @return string
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Sets a new consent
     *
     * @param string $consent
     * @return self
     */
    public function setConsent($consent)
    {
        $this->consent = $consent;
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
     * Gets as extensions
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\Extensions $extensions
     * @return self
     */
    public function setExtensions(\BankId\Merchant\Library\Schemas\saml\protocol\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\Status $status
     * @return self
     */
    public function setStatus(\BankId\Merchant\Library\Schemas\saml\protocol\Status $status)
    {
        $this->status = $status;
        return $this;
    }


}

