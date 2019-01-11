<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq;

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


}

