<?php

namespace BankId\Merchant\Library\Internal;

class TransactionResponseBase {
    protected $isError;
    protected $issuerAuthenticationURL;
    protected $transactionID;
    protected $transactionCreateDateTimestamp;
    protected $rawMessage;

    public function __construct() {
    }
    
    /**
     * true if an error occurred, or false when no errors were encountered
     */
    public function getIsError() {
        return $this->isError;
    }

    /**
     * The URL to which to redirect the consumer so they can authorize the transaction
     */
    public function getIssuerAuthenticationURL() {
        return $this->issuerAuthenticationURL;
    }

    /**
     * The transaction ID
     */
    public function getTransactionID() {
        return $this->transactionID;
    }

    /**
     * Date set to when this transaction was created
     */
    public function getTransactionCreateDateTimestamp() {
        return $this->transactionCreateDateTimestamp;
    }

    /**
     * The response XML
     */
    public function getRawMessage() {
        return $this->rawMessage;
    }
}
