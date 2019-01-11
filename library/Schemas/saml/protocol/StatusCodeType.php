<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing StatusCodeType
 *
 * 
 * XSD Type: StatusCodeType
 */
class StatusCodeType
{

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as statusCode
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(\BankId\Merchant\Library\Schemas\saml\protocol\StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }


}

