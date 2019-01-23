<?php

namespace BankId\Merchant\Library;

class ErrorResponse extends Internal\ErrorResponseBase {
    private $additionalInformation;
    
    public function __call($name, $args) {
        if ($name == 'create' && (count($args) == 1)) {
            $obj = $args[0];
            if ($obj instanceof Schemas\idx\AcquirerErrorRes) {
                return $this->getErrorRes($obj);
            }
            else if ($obj instanceof \Exception) {
                return $this->getException($obj);
            }
            else if ($obj instanceof SamlStatus) {
                return $this->getSamlStatus($obj);
            }
        }
    }
    
    public static function get($obj) {
        $err = new ErrorResponse();
        $err->create($obj);
        return $err;
    }
    
    private function getErrorRes($errRes) {
        $errRes = $errRes->children(Utils::NS_BANKID);
        
        $this->errorCode = (string)$errRes->Error->errorCode;
        $this->errorMessage = (string)$errRes->Error->errorMessage;
        $this->errorDetails = (string)$errRes->Error->errorDetail;
        $this->suggestedAction = (string)$errRes->Error->suggestedAction;
        $this->consumerMessage = (string)$errRes->Error->consumerMessage;
        if (isset($errRes->Error->container)) {
            $Response = $errRes->Error->container->children(Utils::NS_PROTOCOL)->Response;
            $this->additionalInformation = new SamlStatus(
                (string)$Response->Status->StatusMessage,
                (string)$Response->Status->StatusCode->attributes()['Value'],
                (string)$Response->Status->StatusCode->StatusCode->attributes()['Value']
            );
        }
    }
    
    private function getException($exception) {
        $this->errorCode = '';
        $this->errorMessage = $exception->getMessage();
        $this->errorDetails = ($exception->getPrevious() != NULL)?
            $exception->getPrevious()->getMessage() : '';
        $this->suggestedAction = '';
        $this->consumerMessage = '';
        $this->additionalInformation = NULL;
    }
    
    public function getSamlStatus($samlStatus) {
        $this->errorCode = '';
        $this->errorMessage = 'SAML specific error.';
        $this->errorDetails = '';
        $this->suggestedAction = '';
        $this->consumerMessage = '';
        $this->additionalInformation = $samlStatus;
    }
    
    /**
     * Details of the SAML status.
     */
    public function getAdditionalInformation() {
        return $this->additionalInformation;
    }
}
