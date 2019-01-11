<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing StatusType
 *
 * 
 * XSD Type: StatusType
 */
class StatusType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * @property string $statusMessage
     */
    private $statusMessage = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\protocol\StatusDetail
     * $statusDetail
     */
    private $statusDetail = null;

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

    /**
     * Gets as statusMessage
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * Sets a new statusMessage
     *
     * @param string $statusMessage
     * @return self
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * Gets as statusDetail
     *
     * @return \BankId\Merchant\Library\Schemas\saml\protocol\StatusDetail
     */
    public function getStatusDetail()
    {
        return $this->statusDetail;
    }

    /**
     * Sets a new statusDetail
     *
     * @param \BankId\Merchant\Library\Schemas\saml\protocol\StatusDetail $statusDetail
     * @return self
     */
    public function setStatusDetail(\BankId\Merchant\Library\Schemas\saml\protocol\StatusDetail $statusDetail)
    {
        $this->statusDetail = $statusDetail;
        return $this;
    }


}

