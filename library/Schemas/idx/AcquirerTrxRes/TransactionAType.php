<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes;

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
     * @property string $transactionCreateDateTimestamp
     */
    private $transactionCreateDateTimestamp = null;

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
     * Gets as transactionCreateDateTimestamp
     *
     * @return string
     */
    public function getTransactionCreateDateTimestamp()
    {
        return $this->transactionCreateDateTimestamp;
    }

    /**
     * Sets a new transactionCreateDateTimestamp
     *
     * @param string $transactionCreateDateTimestamp
     * @return self
     */
    public function setTransactionCreateDateTimestamp($transactionCreateDateTimestamp)
    {
        $this->transactionCreateDateTimestamp = $transactionCreateDateTimestamp;
        return $this;
    }


}

