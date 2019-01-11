<?php

namespace BankId\Merchant\Library\Internal;

class StatusResponseBase {
    public static $Open      = 'Open';
    public static $Pending   = 'Pending';
    public static $Success   = 'Success';
    public static $Failure   = 'Failure';
    public static $Expired   = 'Expired';
    public static $Cancelled = 'Cancelled';
    
    protected $isError;
    protected $transactionID;
    protected $status;
    protected $statusDateTimestamp;
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
     * The transaction ID
     */
    public function getTransactionID() {
        return $this->transactionID;
    }
    
    /**
     * Possible values: Open, Pending, Success, Failure, Expired, Cancelled
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Date set to when this transaction was created
     */
    public function getstatusDateTimestamp() {
        return $this->statusDateTimestamp;
    }

    /**
     * The response XML
     */
    public function getRawMessage() {
        return $this->rawMessage;
    }
}
