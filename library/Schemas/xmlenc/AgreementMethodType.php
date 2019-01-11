<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing AgreementMethodType
 *
 * 
 * XSD Type: AgreementMethodType
 */
class AgreementMethodType
{

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * @property mixed $kANonce
     */
    private $kANonce = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\KeyInfoType $originatorKeyInfo
     */
    private $originatorKeyInfo = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\KeyInfoType $recipientKeyInfo
     */
    private $recipientKeyInfo = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as kANonce
     *
     * @return mixed
     */
    public function getKANonce()
    {
        return $this->kANonce;
    }

    /**
     * Sets a new kANonce
     *
     * @param mixed $kANonce
     * @return self
     */
    public function setKANonce($kANonce)
    {
        $this->kANonce = $kANonce;
        return $this;
    }

    /**
     * Gets as originatorKeyInfo
     *
     * @return \BankId\Merchant\Library\Schemas\ds\KeyInfoType
     */
    public function getOriginatorKeyInfo()
    {
        return $this->originatorKeyInfo;
    }

    /**
     * Sets a new originatorKeyInfo
     *
     * @param \BankId\Merchant\Library\Schemas\ds\KeyInfoType $originatorKeyInfo
     * @return self
     */
    public function setOriginatorKeyInfo(\BankId\Merchant\Library\Schemas\ds\KeyInfoType $originatorKeyInfo)
    {
        $this->originatorKeyInfo = $originatorKeyInfo;
        return $this;
    }

    /**
     * Gets as recipientKeyInfo
     *
     * @return \BankId\Merchant\Library\Schemas\ds\KeyInfoType
     */
    public function getRecipientKeyInfo()
    {
        return $this->recipientKeyInfo;
    }

    /**
     * Sets a new recipientKeyInfo
     *
     * @param \BankId\Merchant\Library\Schemas\ds\KeyInfoType $recipientKeyInfo
     * @return self
     */
    public function setRecipientKeyInfo(\BankId\Merchant\Library\Schemas\ds\KeyInfoType $recipientKeyInfo)
    {
        $this->recipientKeyInfo = $recipientKeyInfo;
        return $this;
    }


}

