<?php

namespace BankId\Merchant\Library\Validation;

use BankId\Merchant\Library\SamlAttribute;
use BankId\Merchant\Library\ServiceIds;
use BankId\Merchant\Library\Utils;

/**
* Class describing a custom validator (for when a regexp isn't enough)
*/
class CustomValidation {
    public $checkValid;

    /**
    * @param value The value to validate
    * @return true if the value is valid, false otherwise
    */
    public function isValid($value) {
        return call_user_func_array($this->checkValid, func_get_args());
    }
}

class Validator {
    protected static $DateTimestamp = '[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}Z';

    protected static $BankId_MerchantReference = '[a-zA-Z][a-zA-Z0-9]{0,34}';

    protected static $BankId_LOA = 'nl:bvn:bankid:1.0:loa3{1}';

    protected static $BankId_TransactionID = '[0-9]{16}';

    protected static $DocumentId = '[a-zA-Z0-9]{0,256}';


    /**
     * Validates a directory request object
     * @param dirReq the object to validate
     * @throws CommunicatorException
     */
    public static function validateDirectoryReq($dirReq) {
        self::checkByValue($dirReq->getCreateDateTimestamp(), self::$DateTimestamp);
    }

    /**
     * Validates a directory response object
     * @param dirRes the object to validate
     * @throws CommunicatorException 
     */
    public static function validateDirectoryRes($dirRes) {
        $dirRes = $dirRes->children(Utils::NS_BANKID);
        self::checkByValue($dirRes->createDateTimestamp, self::$DateTimestamp);
        self::checkByValue($dirRes->Directory->directoryDateTimestamp, self::$DateTimestamp);
    }
    
    /**
     * Validates a transaction request object
     * @param trxReq the object to validate
     * @throws CommunicatorException 
     */
    public static function validateAcquirerTrxReq($trxReq) {
        self::checkByValue($trxReq->getCreateDateTimestamp(), self::$DateTimestamp);
        self::checkByValueValidation($trxReq->getTransaction()->getExpirationPeriod(), function($value) {
            return self::checkDuration($value);
        });
        self::checkUrl($trxReq->getMerchant()->getMerchantReturnURL());
    }
    
    /**
     * Validates a transaction response object
     * @param trxRes the object to validate
     * @throws CommunicatorException 
     */
    public static function validateAcquirerTrxRes($trxRes) {
        $trxRes = $trxRes->children(Utils::NS_BANKID);
        self::checkByValue($trxRes->createDateTimestamp, self::$DateTimestamp);
        self::checkUrl($trxRes->Issuer->issuerAuthenticationURL);
        self::checkByValue($trxRes->Transaction->transactionCreateDateTimestamp, self::$DateTimestamp);
    }
    
    /**
     * Validates a status request object
     * @param stsReq the object to validate
     * @throws CommunicatorException 
     */
    public static function validateAcquirerStatusReq($stsReq) {
        self::checkByValue($stsReq->getCreateDateTimestamp(), self::$DateTimestamp);
    }
    
    /**
     * Validates a status response object
     * @param stsRes the object to validate
     * @throws CommunicatorException 
     */
    public static function validateAcquirerStatusRes($stsRes) {
        $stsRes = $stsRes->children(Utils::NS_BANKID);
        self::checkByValue($stsRes->createDateTimestamp, self::$DateTimestamp);
    }
    
    /**
     * Validates a SAML AuthnRequest object, part of transaction request
     * @param authnReq the object to validate
     * @throws CommunicatorException 
     */
    public static function validateAuthnRequestType($authnReq) {
        self::checkByValue($authnReq->getID(), self::$BankId_MerchantReference);
        self::checkUrl($authnReq->getAssertionConsumerServiceURL());
        self::checkByValue($authnReq->getRequestedAuthnContext()->getAuthnContextClassRef()[0], self::$BankId_LOA);
        self::checkByValue($authnReq->getRequestedAuthnContext()->getAuthnContextClassRef()[1], self::$DocumentId);
        self::checkByValueValidation($authnReq->getAttributeConsumingServiceIndex(), function($value) {
            return self::checkBankIdServiceId($value);
        });
        self::checkSignService($authnReq->getRequestedAuthnContext()->getAuthnContextClassRef()[1], $authnReq->getAttributeConsumingServiceIndex());
    }
    
    /**
     * Validates an SamlResponse object, part of status response
     * @param accRec the object to validate
     * @throws CommunicatorException 
     */
    public static function validateSamlResponse($accRep) {
        foreach ($accRep->getAttributes() as $attrKey => $attrValue) {

            switch ($attrKey) {

                case SamlAttribute::$ConsumerBin:
                    self::checkByValue($attrValue, '[A-Za-z]{2}[[:print:]]{0,1024}');
                    break;
                case SamlAttribute::$ConsumerTransientID:
                    self::checkByValue($attrValue, 'TRANS[[:print:]]{1,251}');
                    break;
                case SamlAttribute::$ConsumerDeprecatedBin:
                    self::checkByValue($attrValue, '[A-Za-z]{2}[[:print:]]{0,1024}');
                    break;
                case SamlAttribute::$ConsumerGender:
                    self::checkByValue($attrValue, '0|1|2|9');
                    break;
                case SamlAttribute::$ConsumerLegalLastName:
                    self::checkByValue($attrValue, '[[:print:]]{1,200}');
                    break;
                case SamlAttribute::$ConsumerLegalLastNamePrefix:
                    self::checkByValue($attrValue, '[[:print:]]{1,10}');
                    break;
                case SamlAttribute::$ConsumerFirstName:
                    self::checkByValue($attrValue, '[[:print:]]{1,28}');
                    break;
                case SamlAttribute::$ConsumerInitials:
                    self::checkByValue($attrValue, '^[\p{Lu}]{1,24}');
                    break;
                case SamlAttribute::$ConsumerDateOfBirth:
                    self::checkByValue($attrValue, '\d\d\d\d(0[0-9]|1[012])(0[0-9]|[12][0-9]|3[01])');
                    break;
                case SamlAttribute::$ConsumerStreet:
                    self::checkByValue($attrValue, '[[:print:]]{1,43}');
                    break;
                case SamlAttribute::$ConsumerHouseNo:
                    self::checkByValue($attrValue, '[0-9]{1,5}');
                    break;
                case SamlAttribute::$ConsumerAddressExtra:
                    self::checkByValue($attrValue, '[[:print:]]{1,70}');
                    break;
                case SamlAttribute::$ConsumerPostalCode:
                    self::checkByValue($attrValue, '[0-9]{4}[a-zA-Z]{2}');
                    break;
                case SamlAttribute::$ConsumerCity:
                    self::checkByValue($attrValue, '[[:print:]]{1,24}');
                    break;
                case SamlAttribute::$ConsumerCountry:
                    self::checkByValue($attrValue, '[a-zA-Z]{2}');
                    break;
                case SamlAttribute::$ConsumerIban:
                    self::checkByValue($attrValue, '[0-9A-Z]{15,36}');
                    break;
                case SamlAttribute::$ConsumerIs18OrOlder:
                    self::checkByValue($attrValue, 'true|false');
                    break;
                case SamlAttribute::$ConsumerPrefLastName:
                    self::checkByValue($attrValue, '[[:print:]]{1,200}');
                    break;
                case SamlAttribute::$ConsumerPartnerLastName:
                    self::checkByValue($attrValue, '[[:print:]]{1,200}');
                    break;
                case SamlAttribute::$ConsumerPrefLastNamePrefix:
                    self::checkByValue($attrValue, '[[:print:]]{1,10}');
                    break;
                case SamlAttribute::$ConsumerPartnerLastNamePrefix:
                    self::checkByValue($attrValue, '[[:print:]]{1,10}');
                    break;
                case SamlAttribute::$ConsumerIntAddressLine:
                    self::checkByValue($attrValue, '[[:print:]]{1,70}');
                    break;
                case SamlAttribute::$ConsumerTelephone:
                    self::checkByValue($attrValue, '[\d|[:space:]|\+|\-|\,|\(|\)]{1,20}');
                    break;
                case SamlAttribute::$ConsumerEmail:
                    self::checkByValue($attrValue, '[[:print:]]{1,255}');
                    break;
                case SamlAttribute::$DocumentID:
                    self::checkByValue($attrValue, '[[:print:]]{1,255}');
                    break;
            }
        }
    }
    
    protected static function checkByValue($value, $regexp) {
        if (preg_match('/^' . $regexp . '$/u', $value) == FALSE) {
            throw new \BankId\Merchant\Library\CommunicatorException('incorrect value: ' . $value);
        }
    }
    
    protected static function checkByValueValidation($value, $validator) {
        if (!$validator($value)) {
            throw new \BankId\Merchant\Library\CommunicatorException('incorrect value: ' . $value);
        }
    }
    
    protected static function checkDuration($value) {
        if ($value == null) {
            return TRUE;
        }
        try {
            $now = new \DateTime(NULL);
            $then = new \DateTime(NULL);
            $then->add(new \DateInterval($value));
            return (($then->getTimestamp() - $now->getTimestamp()) <= (5 * 60));
        } catch (Exception $ex) {
            return FALSE;
        }
    }

    protected static function checkUrl($value) {
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return TRUE;
        } else {
            $pattern = "/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/";
            if (preg_match($pattern, $value)) {
                return TRUE;
            } else {
                throw new \BankId\Merchant\Library\CommunicatorException("malformed url");
            }
        }
    }
    
    protected static function checkBankIdServiceId($value) {
        $serviceId = intval($value, 10);

        if ($serviceId < 0 || $serviceId > 65535) { // 32767
            return FALSE;
        }

        /*$compositeValues =
                ServiceIds::$None | ServiceIds::$ConsumerTransientId | ServiceIds::$ConsumerBin
                | ServiceIds::$Name | ServiceIds::$Address | ServiceIds::$IsEighteenOrOlder
                | ServiceIds::$DateOfBirth | ServiceIds::$Gender | ServiceIds::$BSN;

        return ((~$compositeValues & $value) == 0);*/

        return TRUE;
    }

    /**
     * @param $DocumentId
     * @param $ServiceId
     * @return bool
     * @throws \BankId\Merchant\Library\CommunicatorException
     */
    protected static function checkSignService($DocumentId, $ServiceId) {

        $ServiceId = intval($ServiceId, 10);

        $compositeValues =
            ServiceIds::$None | ServiceIds::$ConsumerTransientId | ServiceIds::$ConsumerBin
            | ServiceIds::$Name | ServiceIds::$Address | ServiceIds::$IsEighteenOrOlder
            | ServiceIds::$DateOfBirth | ServiceIds::$Gender | ServiceIds::$BSN
            | ServiceIds::$Email | ServiceIds::$Telephone;

		if (empty($DocumentId)) {
            if ($ServiceId === ServiceIds::$Sign || ($ServiceId & ServiceIds::$Sign) !== 0){
                throw new \BankId\Merchant\Library\CommunicatorException("DocumentID should be present.");
            }
        } else {
            if (($ServiceId & ServiceIds::$Sign) !== 0){
                if (($ServiceId & ServiceIds::$ConsumerBin) === 0){
                    throw new \BankId\Merchant\Library\CommunicatorException("ConsumerID BIN attribute should be present.");
                }
            } else {
                if ($ServiceId !== ServiceIds::$Sign){
                    throw new \BankId\Merchant\Library\CommunicatorException("DocumentID should not be filled if the Sign service is not requested.");
                }
            }
        } 

        return TRUE;
    }
}
