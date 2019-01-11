<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerErrorRes;

/**
 * Class representing ErrorAType
 */
class ErrorAType
{

    /**
     * @property string $errorCode
     */
    private $errorCode = null;

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property string $errorDetail
     */
    private $errorDetail = null;

    /**
     * @property string $suggestedAction
     */
    private $suggestedAction = null;

    /**
     * @property string $consumerMessage
     */
    private $consumerMessage = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\TransactionContainerType
     * $container
     */
    private $container = null;

    /**
     * Gets as errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as errorDetail
     *
     * @return string
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }

    /**
     * Sets a new errorDetail
     *
     * @param string $errorDetail
     * @return self
     */
    public function setErrorDetail($errorDetail)
    {
        $this->errorDetail = $errorDetail;
        return $this;
    }

    /**
     * Gets as suggestedAction
     *
     * @return string
     */
    public function getSuggestedAction()
    {
        return $this->suggestedAction;
    }

    /**
     * Sets a new suggestedAction
     *
     * @param string $suggestedAction
     * @return self
     */
    public function setSuggestedAction($suggestedAction)
    {
        $this->suggestedAction = $suggestedAction;
        return $this;
    }

    /**
     * Gets as consumerMessage
     *
     * @return string
     */
    public function getConsumerMessage()
    {
        return $this->consumerMessage;
    }

    /**
     * Sets a new consumerMessage
     *
     * @param string $consumerMessage
     * @return self
     */
    public function setConsumerMessage($consumerMessage)
    {
        $this->consumerMessage = $consumerMessage;
        return $this;
    }

    /**
     * Gets as container
     *
     * @return \BankId\Merchant\Library\Schemas\idx\TransactionContainerType
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sets a new container
     *
     * @param \BankId\Merchant\Library\Schemas\idx\TransactionContainerType $container
     * @return self
     */
    public function setContainer(\BankId\Merchant\Library\Schemas\idx\TransactionContainerType $container)
    {
        $this->container = $container;
        return $this;
    }


}

