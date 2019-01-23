<?php

namespace BankId\Merchant\Library\Schemas\saml\authenticationcontext;

/**
 * Class representing AuthenticatorBaseType
 *
 * 
 * XSD Type: AuthenticatorBaseType
 */
class AuthenticatorBaseType
{

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $previousSession
     */
    private $previousSession = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $resumeSession
     */
    private $resumeSession = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\DigSig
     * $digSig
     */
    private $digSig = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     * $password
     */
    private $password = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     * $restrictedPassword
     */
    private $restrictedPassword = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $zeroKnowledge
     */
    private $zeroKnowledge = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SharedSecretChallengeResponse
     * $sharedSecretChallengeResponse
     */
    private $sharedSecretChallengeResponse = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $sharedSecretDynamicPlaintext
     */
    private $sharedSecretDynamicPlaintext = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $iPAddress
     */
    private $iPAddress = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricDecryption
     * $asymmetricDecryption
     */
    private $asymmetricDecryption = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricKeyAgreement
     * $asymmetricKeyAgreement
     */
    private $asymmetricKeyAgreement = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $subscriberLineNumber
     */
    private $subscriberLineNumber = null;

    /**
     * @property
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $userSuffix
     */
    private $userSuffix = null;

    /**
     * @property \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    private $extension = null;

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToPreviousSession(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->previousSession[] = $extension;
        return $this;
    }

    /**
     * isset previousSession
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPreviousSession($index)
    {
        return isset($this->previousSession[$index]);
    }

    /**
     * unset previousSession
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPreviousSession($index)
    {
        unset($this->previousSession[$index]);
    }

    /**
     * Gets as previousSession
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getPreviousSession()
    {
        return $this->previousSession;
    }

    /**
     * Sets a new previousSession
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $previousSession
     * @return self
     */
    public function setPreviousSession(array $previousSession)
    {
        $this->previousSession = $previousSession;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToResumeSession(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->resumeSession[] = $extension;
        return $this;
    }

    /**
     * isset resumeSession
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResumeSession($index)
    {
        return isset($this->resumeSession[$index]);
    }

    /**
     * unset resumeSession
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResumeSession($index)
    {
        unset($this->resumeSession[$index]);
    }

    /**
     * Gets as resumeSession
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getResumeSession()
    {
        return $this->resumeSession;
    }

    /**
     * Sets a new resumeSession
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $resumeSession
     * @return self
     */
    public function setResumeSession(array $resumeSession)
    {
        $this->resumeSession = $resumeSession;
        return $this;
    }

    /**
     * Gets as digSig
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\DigSig
     */
    public function getDigSig()
    {
        return $this->digSig;
    }

    /**
     * Sets a new digSig
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\DigSig
     * $digSig
     * @return self
     */
    public function setDigSig(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\DigSig $digSig)
    {
        $this->digSig = $digSig;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password
     * $password
     * @return self
     */
    public function setPassword(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Password $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as restrictedPassword
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     */
    public function getRestrictedPassword()
    {
        return $this->restrictedPassword;
    }

    /**
     * Sets a new restrictedPassword
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword
     * $restrictedPassword
     * @return self
     */
    public function setRestrictedPassword(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\RestrictedPassword $restrictedPassword)
    {
        $this->restrictedPassword = $restrictedPassword;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToZeroKnowledge(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->zeroKnowledge[] = $extension;
        return $this;
    }

    /**
     * isset zeroKnowledge
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetZeroKnowledge($index)
    {
        return isset($this->zeroKnowledge[$index]);
    }

    /**
     * unset zeroKnowledge
     *
     * @param scalar $index
     * @return void
     */
    public function unsetZeroKnowledge($index)
    {
        unset($this->zeroKnowledge[$index]);
    }

    /**
     * Gets as zeroKnowledge
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getZeroKnowledge()
    {
        return $this->zeroKnowledge;
    }

    /**
     * Sets a new zeroKnowledge
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $zeroKnowledge
     * @return self
     */
    public function setZeroKnowledge(array $zeroKnowledge)
    {
        $this->zeroKnowledge = $zeroKnowledge;
        return $this;
    }

    /**
     * Gets as sharedSecretChallengeResponse
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SharedSecretChallengeResponse
     */
    public function getSharedSecretChallengeResponse()
    {
        return $this->sharedSecretChallengeResponse;
    }

    /**
     * Sets a new sharedSecretChallengeResponse
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\SharedSecretChallengeResponse
     * $sharedSecretChallengeResponse
     * @return self
     */
    public function setSharedSecretChallengeResponse(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\SharedSecretChallengeResponse $sharedSecretChallengeResponse)
    {
        $this->sharedSecretChallengeResponse = $sharedSecretChallengeResponse;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToSharedSecretDynamicPlaintext(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->sharedSecretDynamicPlaintext[] = $extension;
        return $this;
    }

    /**
     * isset sharedSecretDynamicPlaintext
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSharedSecretDynamicPlaintext($index)
    {
        return isset($this->sharedSecretDynamicPlaintext[$index]);
    }

    /**
     * unset sharedSecretDynamicPlaintext
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSharedSecretDynamicPlaintext($index)
    {
        unset($this->sharedSecretDynamicPlaintext[$index]);
    }

    /**
     * Gets as sharedSecretDynamicPlaintext
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getSharedSecretDynamicPlaintext()
    {
        return $this->sharedSecretDynamicPlaintext;
    }

    /**
     * Sets a new sharedSecretDynamicPlaintext
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $sharedSecretDynamicPlaintext
     * @return self
     */
    public function setSharedSecretDynamicPlaintext(array $sharedSecretDynamicPlaintext)
    {
        $this->sharedSecretDynamicPlaintext = $sharedSecretDynamicPlaintext;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToIPAddress(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->iPAddress[] = $extension;
        return $this;
    }

    /**
     * isset iPAddress
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIPAddress($index)
    {
        return isset($this->iPAddress[$index]);
    }

    /**
     * unset iPAddress
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIPAddress($index)
    {
        unset($this->iPAddress[$index]);
    }

    /**
     * Gets as iPAddress
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }

    /**
     * Sets a new iPAddress
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $iPAddress
     * @return self
     */
    public function setIPAddress(array $iPAddress)
    {
        $this->iPAddress = $iPAddress;
        return $this;
    }

    /**
     * Gets as asymmetricDecryption
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricDecryption
     */
    public function getAsymmetricDecryption()
    {
        return $this->asymmetricDecryption;
    }

    /**
     * Sets a new asymmetricDecryption
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricDecryption
     * $asymmetricDecryption
     * @return self
     */
    public function setAsymmetricDecryption(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricDecryption $asymmetricDecryption)
    {
        $this->asymmetricDecryption = $asymmetricDecryption;
        return $this;
    }

    /**
     * Gets as asymmetricKeyAgreement
     *
     * @return
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricKeyAgreement
     */
    public function getAsymmetricKeyAgreement()
    {
        return $this->asymmetricKeyAgreement;
    }

    /**
     * Sets a new asymmetricKeyAgreement
     *
     * @param
     * \BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricKeyAgreement
     * $asymmetricKeyAgreement
     * @return self
     */
    public function setAsymmetricKeyAgreement(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\AsymmetricKeyAgreement $asymmetricKeyAgreement)
    {
        $this->asymmetricKeyAgreement = $asymmetricKeyAgreement;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToSubscriberLineNumber(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->subscriberLineNumber[] = $extension;
        return $this;
    }

    /**
     * isset subscriberLineNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubscriberLineNumber($index)
    {
        return isset($this->subscriberLineNumber[$index]);
    }

    /**
     * unset subscriberLineNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubscriberLineNumber($index)
    {
        unset($this->subscriberLineNumber[$index]);
    }

    /**
     * Gets as subscriberLineNumber
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getSubscriberLineNumber()
    {
        return $this->subscriberLineNumber;
    }

    /**
     * Sets a new subscriberLineNumber
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $subscriberLineNumber
     * @return self
     */
    public function setSubscriberLineNumber(array $subscriberLineNumber)
    {
        $this->subscriberLineNumber = $subscriberLineNumber;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     */
    public function addToUserSuffix(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->userSuffix[] = $extension;
        return $this;
    }

    /**
     * isset userSuffix
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUserSuffix($index)
    {
        return isset($this->userSuffix[$index]);
    }

    /**
     * unset userSuffix
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUserSuffix($index)
    {
        unset($this->userSuffix[$index]);
    }

    /**
     * Gets as userSuffix
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     */
    public function getUserSuffix()
    {
        return $this->userSuffix;
    }

    /**
     * Sets a new userSuffix
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension[]
     * $userSuffix
     * @return self
     */
    public function setUserSuffix(array $userSuffix)
    {
        $this->userSuffix = $userSuffix;
        return $this;
    }

    /**
     * Gets as extension
     *
     * @return \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension
     * $extension
     * @return self
     */
    public function setExtension(\BankId\Merchant\Library\Schemas\saml\authenticationcontext\Extension $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

