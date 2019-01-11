<?php

namespace BankId\Merchant\Library\Schemas\idx;

/**
 * Class representing DirectoryRes
 */
class DirectoryRes extends \SimpleXMLElement
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
     * @property \BankId\Merchant\Library\Schemas\idx\DirectoryRes\AcquirerAType
     * $acquirer
     */
    private $acquirer = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType
     * $directory
     */
    private $directory = null;

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
     * @return \BankId\Merchant\Library\Schemas\idx\DirectoryRes\AcquirerAType
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }

    /**
     * Sets a new acquirer
     *
     * @param \BankId\Merchant\Library\Schemas\idx\DirectoryRes\AcquirerAType $acquirer
     * @return self
     */
    public function setAcquirer(\BankId\Merchant\Library\Schemas\idx\DirectoryRes\AcquirerAType $acquirer)
    {
        $this->acquirer = $acquirer;
        return $this;
    }

    /**
     * Gets as directory
     *
     * @return \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Sets a new directory
     *
     * @param \BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType
     * $directory
     * @return self
     */
    public function setDirectory(\BankId\Merchant\Library\Schemas\idx\DirectoryRes\DirectoryAType $directory)
    {
        $this->directory = $directory;
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

