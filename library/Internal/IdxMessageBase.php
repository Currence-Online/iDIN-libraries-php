<?php

namespace BankId\Merchant\Library\Internal;

class IdxMessageBase {
    protected $created;
    
    public function __construct() {
        date_default_timezone_set('UTC');
        $this->created = date('Y-m-d\TH:i:s'.substr((string)microtime(), 1, 4).'\Z');
    }
    
    public function getCreated() {
        return $this->created;
    }
}
