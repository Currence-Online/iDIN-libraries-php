<?php

namespace BankId\Merchant\Library\Internal;

class StatusRequestBase extends IdxMessageBase {
    protected $transactionID;

    /**
     * The transaction ID to check
     */
    public function getTransactionID() {
        return $this->transactionID;
    }

    /**
     * The transaction ID to check
     */
    public function setTransactionID($transactionID) {
        $this->transactionID = $transactionID;
    }
}
