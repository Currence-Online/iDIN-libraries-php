<?php

namespace BankId\Merchant\Library;

/**
 * Represents a status response
 */
class StatusResponse extends Internal\StatusResponseBase {
    private $samlResponse;
    private $errorResponse;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function __call($name, $args) {
        if ($name == 'get' && (count($args) == 2)) {
            $config = $args[0];
            $obj = $args[1];
            if ($obj instanceof Schemas\idx\AcquirerStatusRes) {
                return $this->getAcquirerStatusRes($config, $obj);
            }
            else if ($obj instanceof Schemas\idx\AcquirerErrorRes) {
                return $this->getErrorRes($obj);
            }
            else if ($obj instanceof \Exception) {
                return $this->getException($obj);
            }
        }
    }
    
    protected function getAcquirerStatusRes(Configuration $config, $stsRes) {
        $stsRes = $stsRes->children(Utils::NS_BANKID);
        
        $this->isError = FALSE;
        $this->errorResponse = null;
        $this->transactionID = (string)$stsRes->Transaction->transactionID;
        $this->status = (string)$stsRes->Transaction->status;
        
        if (strcasecmp($this->status, self::$Success) == 0) {
            $this->statusDateTimestamp = (string)$stsRes->Transaction->statusDateTimestamp;
            $samlResponse = SamlResponse::parse(
                $config, $stsRes->Transaction->container->children(Utils::NS_PROTOCOL)->Response);
            Validation\Validator::validateSamlResponse($samlResponse);
            $this->samlResponse = $samlResponse;
            
            if ($samlResponse->getStatus()->getStatusCodeFirstLevel() != SamlStatus::$Success) {
                $this->isError = TRUE;
                $this->errorResponse = ErrorResponse::get(new SamlStatus(
                    $samlResponse->getStatus()->getStatusMessage(),
                    $samlResponse->getStatus()->getStatusCodeFirstLevel(),
                    $samlResponse->getStatus()->getStatusCodeSecondLevel()
                ));
            }
        }
        else {
            if ($stsRes->Transaction->container != NULL && $stsRes->Transaction->container->children != NULL) {
                throw new CommunicatorException("Response should not have a BankId signature.");
            }
        }
    }
    
    protected function getErrorRes($errRes) {
        $this->isError = TRUE;
        $this->errorResponse = ErrorResponse::get($errRes);
        $this->transactionID = NULL;
        $this->status = NULL;
        $this->statusDateTimestamp = NULL;
        $this->samlResponse = NULL;
    }
    
    public static function getException($exception) {
        $sr = new StatusResponse();
        $sr->isError = TRUE;
        $sr->errorResponse = ErrorResponse::get($exception);
        $sr->transactionID = NULL;
        $sr->status = NULL;
        $sr->statusDateTimestamp = NULL;
        $sr->samlResponse = NULL;
        return $sr;
    }
    
    public static function parse(Configuration $config, $xml) {
        $res = new \SimpleXMLElement($xml);
        $response = NULL;
        
        if (strcmp($res->getName(), 'AcquirerStatusRes') == 0) {
            $response = new Schemas\idx\AcquirerStatusRes($xml);
            Validation\Validator::validateAcquirerStatusRes($response);
        }
        else if (strcmp($res->getName(), 'AcquirerErrorRes') == 0) {
            $response = new Schemas\idx\AcquirerErrorRes($xml);
        }
        
        $sr = new StatusResponse();
        $sr->rawMessage = $xml;
        $sr->get($config, $response);

        return $sr;
    }
    
    public function getSamlResponse() {
        return $this->samlResponse;
    }
    
    public function getErrorResponse() {
        return $this->errorResponse;
    }
}
