<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing AttributeConsumingServiceType
 *
 * 
 * XSD Type: AttributeConsumingServiceType
 */
class AttributeConsumingServiceType
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
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\ServiceName[]
     * $serviceName
     */
    private $serviceName = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\ServiceDescription[]
     * $serviceDescription
     */
    private $serviceDescription = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\metadata\RequestedAttribute[]
     * $requestedAttribute
     */
    private $requestedAttribute = null;

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

    /**
     * Adds as serviceName
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ServiceName $serviceName
     */
    public function addToServiceName(\BankId\Merchant\Library\Schemas\saml\metadata\ServiceName $serviceName)
    {
        $this->serviceName[] = $serviceName;
        return $this;
    }

    /**
     * isset serviceName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceName($index)
    {
        return isset($this->serviceName[$index]);
    }

    /**
     * unset serviceName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceName($index)
    {
        unset($this->serviceName[$index]);
    }

    /**
     * Gets as serviceName
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\ServiceName[]
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Sets a new serviceName
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ServiceName[] $serviceName
     * @return self
     */
    public function setServiceName(array $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Adds as serviceDescription
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ServiceDescription
     * $serviceDescription
     */
    public function addToServiceDescription(\BankId\Merchant\Library\Schemas\saml\metadata\ServiceDescription $serviceDescription)
    {
        $this->serviceDescription[] = $serviceDescription;
        return $this;
    }

    /**
     * isset serviceDescription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceDescription($index)
    {
        return isset($this->serviceDescription[$index]);
    }

    /**
     * unset serviceDescription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceDescription($index)
    {
        unset($this->serviceDescription[$index]);
    }

    /**
     * Gets as serviceDescription
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\ServiceDescription[]
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * Sets a new serviceDescription
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\ServiceDescription[]
     * $serviceDescription
     * @return self
     */
    public function setServiceDescription(array $serviceDescription)
    {
        $this->serviceDescription = $serviceDescription;
        return $this;
    }

    /**
     * Adds as requestedAttribute
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\RequestedAttribute
     * $requestedAttribute
     */
    public function addToRequestedAttribute(\BankId\Merchant\Library\Schemas\saml\metadata\RequestedAttribute $requestedAttribute)
    {
        $this->requestedAttribute[] = $requestedAttribute;
        return $this;
    }

    /**
     * isset requestedAttribute
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestedAttribute($index)
    {
        return isset($this->requestedAttribute[$index]);
    }

    /**
     * unset requestedAttribute
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestedAttribute($index)
    {
        unset($this->requestedAttribute[$index]);
    }

    /**
     * Gets as requestedAttribute
     *
     * @return \BankId\Merchant\Library\Schemas\saml\metadata\RequestedAttribute[]
     */
    public function getRequestedAttribute()
    {
        return $this->requestedAttribute;
    }

    /**
     * Sets a new requestedAttribute
     *
     * @param \BankId\Merchant\Library\Schemas\saml\metadata\RequestedAttribute[]
     * $requestedAttribute
     * @return self
     */
    public function setRequestedAttribute(array $requestedAttribute)
    {
        $this->requestedAttribute = $requestedAttribute;
        return $this;
    }


}

