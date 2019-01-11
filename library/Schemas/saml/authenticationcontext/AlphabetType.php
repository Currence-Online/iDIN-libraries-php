<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing AlphabetType
 *
 * 
 * XSD Type: AlphabetType
 */
class AlphabetType
{

    /**
     * @property string $requiredChars
     */
    private $requiredChars = null;

    /**
     * @property string $excludedChars
     */
    private $excludedChars = null;

    /**
     * @property string $case
     */
    private $case = null;

    /**
     * Gets as requiredChars
     *
     * @return string
     */
    public function getRequiredChars()
    {
        return $this->requiredChars;
    }

    /**
     * Sets a new requiredChars
     *
     * @param string $requiredChars
     * @return self
     */
    public function setRequiredChars($requiredChars)
    {
        $this->requiredChars = $requiredChars;
        return $this;
    }

    /**
     * Gets as excludedChars
     *
     * @return string
     */
    public function getExcludedChars()
    {
        return $this->excludedChars;
    }

    /**
     * Sets a new excludedChars
     *
     * @param string $excludedChars
     * @return self
     */
    public function setExcludedChars($excludedChars)
    {
        $this->excludedChars = $excludedChars;
        return $this;
    }

    /**
     * Gets as case
     *
     * @return string
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * Sets a new case
     *
     * @param string $case
     * @return self
     */
    public function setCase($case)
    {
        $this->case = $case;
        return $this;
    }


}

