<?php

namespace BankId\Merchant\Library\Schemas\saml\metadata;

/**
 * Class representing EndpointType
 *
 * 
 * XSD Type: EndpointType
 */
class EndpointType
{

    /**
     * @property string $binding
     */
    private $binding = null;

    /**
     * @property string $location
     */
    private $location = null;

    /**
     * @property string $responseLocation
     */
    private $responseLocation = null;

    /**
     * Gets as binding
     *
     * @return string
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Sets a new binding
     *
     * @param string $binding
     * @return self
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as responseLocation
     *
     * @return string
     */
    public function getResponseLocation()
    {
        return $this->responseLocation;
    }

    /**
     * Sets a new responseLocation
     *
     * @param string $responseLocation
     * @return self
     */
    public function setResponseLocation($responseLocation)
    {
        $this->responseLocation = $responseLocation;
        return $this;
    }


}

