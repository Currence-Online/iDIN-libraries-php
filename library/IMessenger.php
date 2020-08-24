<?php

namespace BankId\Merchant\Library;

/**
 * IMessenger interface, implemented by Messenger
 */
interface IMessenger {
    /**
     * Sends the specified message to the given url
     */
    public function sendMessage($message, $url);
}
?>