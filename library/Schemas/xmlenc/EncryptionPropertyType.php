<?php

namespace BankId\Merchant\Library\Schemas\xmlenc;

/**
 * Class representing EncryptionPropertyType
 *
 * 
 * XSD Type: EncryptionPropertyType
 */
class EncryptionPropertyType
{

    /**
     * @property string $target
     */
    private $target = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

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


}

