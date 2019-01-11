<?php

namespace BankId\Merchant\Library\Schemas\idx;

/**
 * Class representing AcquirerTrxRes
 */
class AcquirerTrxRes extends \SimpleXMLElement
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
     * @property \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\AcquirerAType
     * $acquirer
     */
    private $acquirer = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\IssuerAType
     * $issuer
     */
    private $issuer = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\TransactionAType
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
     * Gets as acquirer
     *
     * @return \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\AcquirerAType
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }

    /**
     * Sets a new acquirer
     *
     * @param \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\AcquirerAType
     * $acquirer
     * @return self
     */
    public function setAcquirer(\BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\AcquirerAType $acquirer)
    {
        $this->acquirer = $acquirer;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * @return \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\IssuerAType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * @param \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\IssuerAType $issuer
     * @return self
     */
    public function setIssuer(\BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\IssuerAType $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as transaction
     *
     * @return \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\TransactionAType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param \BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\TransactionAType
     * $transaction
     * @return self
     */
    public function setTransaction(\BankId\Merchant\Library\Schemas\idx\AcquirerTrxRes\TransactionAType $transaction)
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

