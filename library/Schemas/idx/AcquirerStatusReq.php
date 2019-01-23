<?php

namespace BankId\Merchant\Library\Schemas\idx;

/**
 * Class representing AcquirerStatusReq
 */
class AcquirerStatusReq
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property string $productID
     */
    private $productID = null;

    /**
     * @property string $createDateTimestamp
     */
    private $createDateTimestamp = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\MerchantAType
     * $merchant
     */
    private $merchant = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\TransactionAType
     * $transaction
     */
    private $transaction = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as productID
     *
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * @param string $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as createDateTimestamp
     *
     * @return string
     */
    public function getCreateDateTimestamp()
    {
        return $this->createDateTimestamp;
    }

    /**
     * Sets a new createDateTimestamp
     *
     * @param string $createDateTimestamp
     * @return self
     */
    public function setCreateDateTimestamp($createDateTimestamp)
    {
        $this->createDateTimestamp = $createDateTimestamp;
        return $this;
    }

    /**
     * Gets as merchant
     *
     * @return \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\MerchantAType
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * Sets a new merchant
     *
     * @param \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\MerchantAType
     * $merchant
     * @return self
     */
    public function setMerchant(\BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\MerchantAType $merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    /**
     * Gets as transaction
     *
     * @return \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\TransactionAType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param \BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\TransactionAType
     * $transaction
     * @return self
     */
    public function setTransaction(\BankId\Merchant\Library\Schemas\idx\AcquirerStatusReq\TransactionAType $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Signature $signature
     * @return self
     */
    public function setSignature(\BankId\Merchant\Library\Schemas\ds\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

