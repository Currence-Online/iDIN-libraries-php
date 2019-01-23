<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing ActivationLimitDurationType
 *
 * 
 * XSD Type: ActivationLimitDurationType
 */
class ActivationLimitDurationType
{

    /**
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as duration
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }


}

