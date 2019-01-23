<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing IndexedEndpointType
 *
 * 
 * XSD Type: IndexedEndpointType
 */
class IndexedEndpointType extends EndpointType
{

    /**
     * @property integer $index
     */
    private $index = null;

    /**
     * @property boolean $isDefault
     */
    private $isDefault = null;

    /**
     * Gets as index
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * @param integer $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * @param boolean $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }


}

