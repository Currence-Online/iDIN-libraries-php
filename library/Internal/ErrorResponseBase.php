<?php

namespace BankId\Merchant\Library\Internal;

class ErrorResponseBase {
    protected $errorCode;
    protected $errorMessage;
    protected $errorDetails;
    protected $suggestedAction;
    protected $consumerMessage;
    
    /**
     * Unique identification of the error occurring within the iDx transaction
     */
    public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * Descriptive text accompanying Error.errorCode
     */
    public function getErrorMessage() {
        return $this->errorMessage;
    }

    /**
     * Details of the error
     */
    public function getErrorDetails() {
        return $this->errorDetails;
    }

    /**
     * Suggestions aimed at resolving the problem
     */
    public function getSuggestedAction() {
        return $this->suggestedAction;
    }

    /**
     * A (standardized) message that the merchant should show to the consumer
     */
    public function getConsumerMessage() {
        return $this->consumerMessage;
    }
}
