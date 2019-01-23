<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing SubjectQueryAbstractType
 *
 * 
 * XSD Type: SubjectQueryAbstractType
 */
class SubjectQueryAbstractType extends RequestAbstractType
{

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     */
    private $subject = null;

    /**
     * Gets as subject
     *
     * @return \BankId\Merchant\Library\Schemas\saml\assertion\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param \BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject
     * @return self
     */
    public function setSubject(\BankId\Merchant\Library\Schemas\saml\assertion\Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }


}

