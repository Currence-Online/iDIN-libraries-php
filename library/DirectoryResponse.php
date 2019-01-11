<?php

namespace BankId\Merchant\Library;

class DirectoryResponse extends Internal\DirectoryResponseBase {
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
            if ($obj instanceof Schemas\idx\DirectoryRes) {
                return $this->getDirectoryRes($obj);
            }
            else if ($obj instanceof Schemas\idx\AcquirerErrorRes) {
                return $this->getErrorRes($obj);
            }
            else if ($obj instanceof \Exception) {
                return $this->getException($obj);
            }
        }
    }
    
    protected function getDirectoryRes($dirRes) {
        $dirRes = $dirRes->children(Utils::NS_BANKID);
        
        $this->isError = FALSE;
        $this->errorResponse = null;
        $this->directoryDateTimestamp = (string)$dirRes->Directory->directoryDateTimestamp;
        foreach ($dirRes->Directory->Country as $c) {
            foreach ($c->Issuer as $i) {
                $db = new Internal\Issuer((string)$c->countryNames, (string)$i->issuerName, (string)$i->issuerID);
                array_push($this->issuers, $db);
            }
        }
    }
    
    protected function getErrorRes($errRes) {
        $this->isError = TRUE;
        $this->errorResponse = ErrorResponse::get($errRes);
        $this->directoryDateTimestamp = NULL;
        $this->issuers = array();
    }
    
    public static function getException($exception) {
        $dr = new DirectoryResponse();
        $dr->isError = TRUE;
        $dr->errorResponse = ErrorResponse::get($exception);
        $dr->directoryDateTimestamp = NULL;
        $dr->issuers = array();
        return $dr;
    }

    public static function parse($xml) {
        $res = new \SimpleXMLElement($xml);
        $response = NULL;
        
        if (strcmp($res->getName(), 'DirectoryRes') == 0) {
            $response = new Schemas\idx\DirectoryRes($xml);
            Validation\Validator::validateDirectoryRes($response);
        }
        else if (strcmp($res->getName(), 'AcquirerErrorRes') == 0) {
            $response = new Schemas\idx\AcquirerErrorRes($xml);
        }
        
        $dr = new DirectoryResponse();
        $dr->rawMessage = $xml;
        $dr->get($response);
        
        //var_dump($dr);
        
        return $dr;
    }
    
    /**
     * Object that holds the error if one occurs; when there are no errors, this is set to NULL
     */
    public function getErrorResponse() {
        return $this->errorResponse;
    }
}
