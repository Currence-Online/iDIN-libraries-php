<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing IDPListType
 *
 * 
 * XSD Type: IDPListType
 */
class IDPListType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\IDPEntry[] $iDPEntry
     */
    private $iDPEntry = null;

    /**
     * @property string $getComplete
     */
    private $getComplete = null;

    /**
     * Adds as iDPEntry
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\IDPEntry $iDPEntry
     */
    public function addToIDPEntry(\BankId\Merchant\Library\Schemas\saml\protocol\IDPEntry $iDPEntry)
    {
        $this->iDPEntry[] = $iDPEntry;
        return $this;
    }

    /**
     * isset iDPEntry
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIDPEntry($index)
    {
        return isset($this->iDPEntry[$index]);
    }

    /**
     * unset iDPEntry
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIDPEntry($index)
    {
        unset($this->iDPEntry[$index]);
    }

    /**
     * Gets as iDPEntry
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\IDPEntry[]
     */
    public function getIDPEntry()
    {
        return $this->iDPEntry;
    }

    /**
     * Sets a new iDPEntry
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\IDPEntry[] $iDPEntry
     * @return self
     */
    public function setIDPEntry(array $iDPEntry)
    {
        $this->iDPEntry = $iDPEntry;
        return $this;
    }

    /**
     * Gets as getComplete
     *
     * @return string
     */
    public function getGetComplete()
    {
        return $this->getComplete;
    }

    /**
     * Sets a new getComplete
     *
     * @param string $getComplete
     * @return self
     */
    public function setGetComplete($getComplete)
    {
        $this->getComplete = $getComplete;
        return $this;
    }


}

