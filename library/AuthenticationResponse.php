<?php

namespace BankId\Merchant\Library;

class AuthenticationResponse extends Internal\TransactionResponseBase {
    private $errorResponse;

    /**
     * Default constructor
     */
    public function __construct() {
        parent::__construct();
    }
    
    public function __call($name, $args) {
        if ($name == 'get' && (count($args) == 1)) {
            $obj = $args[0];
            if ($obj instanceof Schemas\idx\AcquirerTrxRes) {
                return $this->getAcquirerTrxRes($obj);
            }
            else if ($obj instanceof Schemas\idx\AcquirerErrorRes) {
                return $this->getErrorRes($obj);
            }
            else if ($obj instanceof \Exception) {
                return $this->getException($obj);
            }
        }
    }
    
    protected function getAcquirerTrxRes($trxRes) {
        $trxRes = $trxRes->children(Utils::NS_BANKID);
        $this->isError = FALSE;
        $this->errorResponse = null;
        $this->issuerAuthenticationURL = (string)$trxRes->Issuer->issuerAuthenticationURL;
        $this->transactionCreateDateTimestamp = (string)$trxRes->Transaction->transactionCreateDateTimestamp;
        $this->transactionID = (string)$trxRes->Transaction->transactionID;
    }
    
    protected function getErrorRes($errRes) {
        $this->isError = TRUE;
        $this->errorResponse = ErrorResponse::get($errRes);
        $this->issuerAuthenticationURL = NULL;
        $this->transactionCreateDateTimestamp = NULL;
        $this->transactionID = NULL;
    }
    
    public static function getException($exception) {
        $ar = new AuthenticationResponse();
        $ar->isError = TRUE;
        $ar->errorResponse = ErrorResponse::get($exception);
        $ar->issuerAuthenticationURL = NULL;
        $ar->transactionCreateDateTimestamp = NULL;
        $ar->transactionID = NULL;
        return $ar;
    }
    
    public static function parse($xml) {
        $oldValue = libxml_disable_entity_loader(true);
        $res = new \SimpleXMLElement($xml);
        $response = NULL;

        if (strcmp($res->getName(), 'AcquirerTrxRes') == 0) {
            $response = new Schemas\idx\AcquirerTrxRes($xml);
            Validation\Validator::validateAcquirerTrxRes($response);
        }
        else if (strcmp($res->getName(), 'AcquirerErrorRes') == 0) {
            $response = new Schemas\idx\AcquirerErrorRes($xml);
        }
        
        $ar = new AuthenticationResponse();
        $ar->rawMessage = $xml;
        $ar->get($response);

        libxml_disable_entity_loader($oldValue);

        return $ar;
    }
    
    /**
     * Object that holds the error if one occurs; when there are no errors, this is set to NULL
     */
    public function getErrorResponse() {
        return $this->errorResponse;
    }
}
