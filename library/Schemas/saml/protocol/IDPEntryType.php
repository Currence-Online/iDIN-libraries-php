<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing IDPEntryType
 *
 * 
 * XSD Type: IDPEntryType
 */
class IDPEntryType
{

    /**
     * @property string $providerID
     */
    private $providerID = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $loc
     */
    private $loc = null;

    /**
     * Gets as providerID
     *
     * @return string
     */
    public function getProviderID()
    {
        return $this->providerID;
    }

    /**
     * Sets a new providerID
     *
     * @param string $providerID
     * @return self
     */
    public function setProviderID($providerID)
    {
        $this->providerID = $providerID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as loc
     *
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Sets a new loc
     *
     * @param string $loc
     * @return self
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
        return $this;
    }


}

