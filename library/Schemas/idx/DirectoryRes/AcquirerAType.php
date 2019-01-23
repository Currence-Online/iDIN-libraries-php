<?php

namespace BankId\Merchant\Library\Schemas\idx\DirectoryRes;

/**
 * Class representing AcquirerAType
 */
class AcquirerAType
{

    /**
     * @property string $acquirerID
     */
    private $acquirerID = null;

    /**
     * Gets as acquirerID
     *
     * @return string
     */
    public function getAcquirerID()
    {
        return $this->acquirerID;
    }

    /**
     * Sets a new acquirerID
     *
     * @param string $acquirerID
     * @return self
     */
    public function setAcquirerID($acquirerID)
    {
        $this->acquirerID = $acquirerID;
        return $this;
    }


}

