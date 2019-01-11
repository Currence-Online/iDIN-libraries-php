<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerStatusRes;

/**
 * Class representing TransactionAType
 */
class TransactionAType
{

    /**
     * @property string $transactionID
     */
    private $transactionID = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $statusDateTimestamp
     */
    private $statusDateTimestamp = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\TransactionContainerType
     * $container
     */
    private $container = null;

    /**
     * Gets as transactionID
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDateTimestamp
     *
     * @return string
     */
    public function getStatusDateTimestamp()
    {
        return $this->statusDateTimestamp;
    }

    /**
     * Sets a new statusDateTimestamp
     *
     * @param string $statusDateTimestamp
     * @return self
     */
    public function setStatusDateTimestamp($statusDateTimestamp)
    {
        $this->statusDateTimestamp = $statusDateTimestamp;
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

