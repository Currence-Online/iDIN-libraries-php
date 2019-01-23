<?php

namespace BankId\Merchant\Library;

/**
 * Base exception used by the Communicator class
 */
class CommunicatorException extends \Exception {
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
