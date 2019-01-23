<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing EncryptedKeyType
 *
 * 
 * XSD Type: EncryptedKeyType
 */
class EncryptedKeyType extends EncryptedType
{

    /**
     * @property string $recipient
     */
    private $recipient = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\xmlenc\ReferenceList $referenceList
     */
    private $referenceList = null;

    /**
     * @property string $carriedKeyName
     */
    private $carriedKeyName = null;

    /**
     * Gets as recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param string $recipient
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as referenceList
     *
     * @return \BankId\Merchant\Library\Schemas\xmlenc\ReferenceList
     */
    public function getReferenceList()
    {
        return $this->referenceList;
    }

    /**
     * Sets a new referenceList
     *
     * @param \BankId\Merchant\Library\Schemas\xmlenc\ReferenceList $referenceList
     * @return self
     */
    public function setReferenceList(\BankId\Merchant\Library\Schemas\xmlenc\ReferenceList $referenceList)
    {
        $this->referenceList = $referenceList;
        return $this;
    }

    /**
     * Gets as carriedKeyName
     *
     * @return string
     */
    public function getCarriedKeyName()
    {
        return $this->carriedKeyName;
    }

    /**
     * Sets a new carriedKeyName
     *
     * @param string $carriedKeyName
     * @return self
     */
    public function setCarriedKeyName($carriedKeyName)
    {
        $this->carriedKeyName = $carriedKeyName;
        return $this;
    }


}

