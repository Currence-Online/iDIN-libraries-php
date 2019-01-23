<?php

namespace BankId\Merchant\Library\Schemas\ds;

/**
 * Class representing SignedInfoType
 *
 * 
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\CanonicalizationMethod
     * $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\ds\Reference[] $reference
     */
    private $reference = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return \BankId\Merchant\Library\Schemas\ds\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \BankId\Merchant\Library\Schemas\ds\CanonicalizationMethod
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\BankId\Merchant\Library\Schemas\ds\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \BankId\Merchant\Library\Schemas\ds\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \BankId\Merchant\Library\Schemas\ds\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\BankId\Merchant\Library\Schemas\ds\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\ds\Reference $reference
     */
    public function addToReference(\BankId\Merchant\Library\Schemas\ds\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \BankId\Merchant\Library\Schemas\ds\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \BankId\Merchant\Library\Schemas\ds\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

