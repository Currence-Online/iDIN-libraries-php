<?php

namespace BankId\Merchant\Library\Schemas\idx\AcquirerTrxReq;

/**
 * Class representing TransactionAType
 */
class TransactionAType
{

    /**
     * @property string $expirationPeriod
     */
    private $expirationPeriod = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property string $entranceCode
     */
    private $entranceCode = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\idx\TransactionContainerType
     * $container
     */
    private $container = null;

    /**
     * Gets as expirationPeriod
     *
     * @return string
     */
    public function getExpirationPeriod()
    {
        return $this->expirationPeriod;
    }

    /**
     * Sets a new expirationPeriod
     *
     * @param string $expirationPeriod
     * @return self
     */
    public function setExpirationPeriod($expirationPeriod)
    {
        $this->expirationPeriod = $expirationPeriod;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as entranceCode
     *
     * @return string
     */
    public function getEntranceCode()
    {
        return $this->entranceCode;
    }

    /**
     * Sets a new entranceCode
     *
     * @param string $entranceCode
     * @return self
     */
    public function setEntranceCode($entranceCode)
    {
        $this->entranceCode = $entranceCode;
        return $this;
    }

    /**
     * Gets as container
     *
     * @return \BankId\Merchant\Library\Schemas\idx\TransactionContainerType
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sets a new container
     *
     * @param \BankId\Merchant\Library\Schemas\idx\TransactionContainerType $container
     * @return self
     */
    public function setContainer(\BankId\Merchant\Library\Schemas\idx\TransactionContainerType $container)
    {
        $this->container = $container;
        return $this;
    }


}

