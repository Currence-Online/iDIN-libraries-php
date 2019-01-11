<?php

namespace BankId\Merchant\Library;


class IdxMessageBuilder {
    const VERSION = '1.0.0';
    const PRODUCTID = 'NL:BVN:BankID:1.0';
    
    public function getDirectoryRequest(Configuration $config, $directoryReq) {
        $dirReq = new Schemas\idx\DirectoryReq();
        $dirReq->setProductID(self::PRODUCTID);
        $dirReq->setVersion(self::VERSION);
        $dirReq->setCreateDateTimestamp($directoryReq->getCreated());
        
        $dirReq->setMerchant(new Schemas\idx\DirectoryReq\MerchantAType());
        $dirReq->getMerchant()->setMerchantID($config->MerchantID);
        $dirReq->getMerchant()->setSubID($config->MerchantSubID);
        
        Validation\Validator::validateDirectoryReq($dirReq);
        
        return Utils::serializeDirectoryReq($dirReq);
    }
    
    public function getTransactionRequest(Configuration $config, $authenticationRequest, $containedData) {
        $trxReq = new Schemas\idx\AcquirerTrxReq();
        $trxReq->setProductID(self::PRODUCTID);
        $trxReq->setVersion(self::VERSION);
        $trxReq->setCreateDateTimestamp($authenticationRequest->getCreated());
        
        $trxReq->setMerchant(new Schemas\idx\AcquirerTrxReq\MerchantAType());
        $trxReq->getMerchant()->setMerchantID($config->MerchantID);
        $trxReq->getMerchant()->setSubID($config->MerchantSubID);
        $trxReq->getMerchant()->setMerchantReturnURL($config->MerchantReturnUrl);
        
        $trxReq->setIssuer(new Schemas\idx\AcquirerTrxReq\IssuerAType());
        $trxReq->getIssuer()->setIssuerID($authenticationRequest->getIssuerID());
        
        $trxReq->setTransaction(new Schemas\idx\AcquirerTrxReq\TransactionAType());
        $trxReq->getTransaction()->setEntranceCode($authenticationRequest->getEntranceCode());
        $trxReq->getTransaction()->setExpirationPeriod($authenticationRequest->getExpirationPeriod());
        $trxReq->getTransaction()->setLanguage($authenticationRequest->getLanguage());
        $trxReq->getTransaction()->setContainer(new Schemas\idx\TransactionContainerType());
        
        $trxReq->getTransaction()->getContainer()->ContainedData = $containedData;
        
        Validation\Validator::validateAcquirerTrxReq($trxReq);
        
        return Utils::serializeAcquirerTrxReq($trxReq);
    }
    
    public function getStatusRequest(Configuration $config, $statusRequest) {
        $stsReq = new Schemas\idx\AcquirerStatusReq();
        $stsReq->setProductID(self::PRODUCTID);
        $stsReq->setVersion(self::VERSION);
        $stsReq->setCreateDateTimestamp($statusRequest->getCreated());
        
        $stsReq->setMerchant(new Schemas\idx\AcquirerStatusReq\MerchantAType());
        $stsReq->getMerchant()->setMerchantID($config->MerchantID);
        $stsReq->getMerchant()->setSubID($config->MerchantSubID);
        
        $stsReq->setTransaction(new Schemas\idx\AcquirerStatusReq\TransactionAType());
        $stsReq->getTransaction()->setTransactionID($statusRequest->getTransactionID());
        
        Validation\Validator::validateAcquirerStatusReq($stsReq);
        
        return Utils::serializeAcquirerStatusReq($stsReq);
    }
}
