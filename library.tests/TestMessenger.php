<?php

namespace BankId\Merchant\Library;

class TestMessenger implements IMessenger {
    public $Request;
    public $Response;
    public $RequestDoc;
    public $ResponseDoc;
    
    public function __construct($response) {
        $this->Request = '';
        $this->Response = file_get_contents(__DIR__ . '/messages/' . $response . '.xml');
        $this->ResponseDoc = new \SimpleXMLElement($this->Response);
    }

    public function sendMessage($message, $url) {
        $this->Request = $message;
        $this->RequestDoc = new \SimpleXMLElement($this->Request);
        return $this->Response;
    }
}
