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

/**
 * @internal
 */
class Messenger implements IMessenger {
    public function sendMessage($xml, $url) {
        $headers = array(
            'Content-type: text/xml; charset=utf-8',
        );
        $ch = \curl_init();
        \curl_setopt($ch, CURLOPT_URL, $url);
        \curl_setopt($ch, CURLOPT_POST, 1);

        //\curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);//default is 2
        //\curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//default is 1
        \curl_setopt($ch, CURLOPT_CAINFO, __DIR__. "/cacert.pem");//make senses when CURLOPT_SSL_VERIFYPEER is 1
        
        \curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        \curl_setopt($ch, CURLOPT_VERBOSE, 0);
        \curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $data = curl_exec($ch);
        
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        if ($data === FALSE) {
            $error = \curl_error($ch);
            \curl_close($ch);

            throw new CommunicatorException($error);
        } else {
            \curl_close($ch);
            if ($statusCode < 400) {
                return $data;
            }
            else {
                throw new CommunicatorException('curl status code: ' . $statusCode);
            }
        }
    }
}
