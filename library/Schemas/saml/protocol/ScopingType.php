<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing ScopingType
 *
 * 
 * XSD Type: ScopingType
 */
class ScopingType
{

    /**
     * @property integer $proxyCount
     */
    private $proxyCount = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\IDPList $iDPList
     */
    private $iDPList = null;

    /**
     * @property string[] $requesterID
     */
    private $requesterID = null;

    /**
     * Gets as proxyCount
     *
     * @return integer
     */
    public function getProxyCount()
    {
        return $this->proxyCount;
    }

    /**
     * Sets a new proxyCount
     *
     * @param integer $proxyCount
     * @return self
     */
    public function setProxyCount($proxyCount)
    {
        $this->proxyCount = $proxyCount;
        return $this;
    }

    /**
     * Gets as iDPList
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\IDPList
     */
    public function getIDPList()
    {
        return $this->iDPList;
    }

    /**
     * Sets a new iDPList
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\IDPList $iDPList
     * @return self
     */
    public function setIDPList(\BankId\Merchant\Library\Schemas\saml\protocol\IDPList $iDPList)
    {
        $this->iDPList = $iDPList;
        return $this;
    }

    /**
     * Adds as requesterID
     *
     * @return self
     * @param string $requesterID
     */
    public function addToRequesterID($requesterID)
    {
        $this->requesterID[] = $requesterID;
        return $this;
    }

    /**
     * isset requesterID
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequesterID($index)
    {
        return isset($this->requesterID[$index]);
    }

    /**
     * unset requesterID
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequesterID($index)
    {
        unset($this->requesterID[$index]);
    }

    /**
     * Gets as requesterID
     *
     * @return string[]
     */
    public function getRequesterID()
    {
        return $this->requesterID;
    }

    /**
     * Sets a new requesterID
     *
     * @param string $requesterID
     * @return self
     */
    public function setRequesterID(array $requesterID)
    {
        $this->requesterID = $requesterID;
        return $this;
    }


}

