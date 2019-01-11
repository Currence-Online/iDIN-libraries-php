<?php

namespace BankId\Merchant\Library;

/**
 * ServiceId class, encapsulating a value that can be represented as string or integer
 */
class ServiceId {
    private $value;
    
    public function setInt($value) {
        $this->value = $value;
    }
    
    public function setString($value) {
        $this->value = intval($value, 10);
    }
    
    public function getValue() {
        return $this->value;
    }
}
