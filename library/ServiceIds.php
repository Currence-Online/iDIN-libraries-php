<?php

namespace BankId\Merchant\Library;

/**
 * Values used to indicate the purpose of the authentication and/or the attributes requested
 */
class ServiceIds {
    /**
     * Nothing
     */
    public static $None = 0;
    /**
     * The Consumer Transient Id
     */
    public static $ConsumerTransientId = 0;
    /**
     * The Consumer BIN
     */
    public static $ConsumerBin = 16384;
    /**
     * The Consumer Name
     */
    public static $Name = 4096;
    /**
     * The Consumer Address
     */
    public static $Address = 1024;
    /**
     * The value specifying if the Consumer is 18 or older
     */
    public static $IsEighteenOrOlder = 64;
    /**
     * The Consumer's date of birth
     */
    public static $DateOfBirth = 448; // 64 + 128 + 256
    /**
     * The Consumer's gender
     */
    public static $Gender = 16;
    /**
     * The BSN
     */
    public static $BSN = 1;

    /** Consumer's email
     * @var int
     */
    public static $Email = 2;

    /** Consumer's telephone
     * @var int
     */
    public static $Telephone = 4;

    /**
     * Signing Document
     */
    public static $Sign = 8;

}
