<?php
namespace BankId\Merchant\Library;

class SamlAttribute {
    /**
     * Get the delivered service id (can be the same as RequestedServiceID, a different number, or 0) 
     */
    public static $DeliveredServiceID = "urn:nl:bvn:bankid:1.0:bankid.deliveredserviceid";
    
    /**
     * Get the BIN(Bank Identifying Number) 
     */
    public static $ConsumerBin = "urn:nl:bvn:bankid:1.0:consumer.bin";
    
    /**
     * Get the Consumer TransientID
     */
    public static $ConsumerTransientID = "urn:nl:bvn:bankid:1.0:consumer.transientid";
    
    /**
     * Get the Consumer gender
     */
    public static $ConsumerGender = "urn:nl:bvn:bankid:1.0:consumer.gender";
    
    /**
     * Get the Consumer legal last name 
     */
    public static $ConsumerLegalLastName = "urn:nl:bvn:bankid:1.0:consumer.legallastname";
    
    /**
     * Get the Consumer preferred last name
     */
    public static $ConsumerPrefLastName = "urn:nl:bvn:bankid:1.0:consumer.preferredlastname";
    
    /**
     * Get the Consumer's registered partner last name (analogous to legal last name)
     */
    public static $ConsumerPartnerLastName = "urn:nl:bvn:bankid:1.0:consumer.partnerlastname";
    
    /**
     * Get the last name prefix of Consumer's legal last name
     */
    public static $ConsumerLegalLastNamePrefix = "urn:nl:bvn:bankid:1.0:consumer.legallastnameprefix";
    
    /**
     * Get the last name prefix of Consumer preferred last name (analogous to legal last name prefix)
     */
    public static $ConsumerPrefLastNamePrefix = "urn:nl:bvn:bankid:1.0:consumer.preferredlastnameprefix";
    
    /**
     * Get the initials of the Consumer
     */
    public static $ConsumerInitials = "urn:nl:bvn:bankid:1.0:consumer.initials";
    
    /**
     * Get the date of birth of the Consumer
     */
    public static $ConsumerDateOfBirth = "urn:nl:bvn:bankid:1.0:consumer.dateofbirth";
    
    /**
     * Get the street name of the Consumer's residential address
     */
    public static $ConsumerStreet = "urn:nl:bvn:bankid:1.0:consumer.street";
    
    /**
     * Get the house number of the Consumer's residential address
     */
    public static $ConsumerHouseNo = "urn:nl:bvn:bankid:1.0:consumer.houseno";
    
    /**
     * Get the house number suffix of the Consumer's residential address. Used for NL addresses only
     */
    public static $ConsumerHouseNoSuf = "urn:nl:bvn:bankid:1.0:consumer.housenosuf";
    
    /**
     * Get additional address details of Consumer's residential address. Used for NL addresses only
     */
    public static $ConsumerAddressExtra = "urn:nl:bvn:bankid:1.0:consumer.addressextra";
    
    /**
     * Get the postal code of the Consumer's residential address
     */
    public static $ConsumerPostalCode = "urn:nl:bvn:bankid:1.0:consumer.postalcode";
    
    /**
     * Get the city of the Customer's residential address
     */
    public static $ConsumerCity = "urn:nl:bvn:bankid:1.0:consumer.city";
    
    /**
     * Get the country code of the country where the Consumer resides
     */
    public static $ConsumerCountry = "urn:nl:bvn:bankid:1.0:consumer.country";
    
    /**
     * Get the Deprecated BIN
     */
    public static $ConsumerDeprecatedBin = "urn:nl:bvn:bankid:1.0:consumer.deprecatedbin";
    
    /**
     * Get the first name of the Consumer
     */
    public static $ConsumerFirstName = "urn:nl:bvn:bankid:1.0:consumer.firstname";
    
    /**
     * Get the IBAN of the Consumer
     */
    public static $ConsumerIban = "urn:nl:bvn:bankid:1.0:consumer.iban";
    
    /**
     * Get the value specifying if the Consumer is 18 or older
     */
    public static $ConsumerIs18OrOlder = "urn:nl:bvn:bankid:1.0:consumer.18orolder";

    /** Consumer's email
     * @var string
     */
    public static $ConsumerEmail = "urn:nl:bvn:bankid:1.0:consumer.email";

    /** Consumer's telephone
     * @var string
     */
    public static $ConsumerTelephone = "urn:nl:bvn:bankid:1.0:consumer.telephone";

    /** Consumer's Partner Last Name Prefix
     * @var string
     */
    public static $ConsumerPartnerLastNamePrefix = "urn:nl:bvn:bankid:1.0:consumer.partnerlastnameprefix";

    /** Consumer's Int Address Line
     * @var string
     */
    public static $ConsumerIntAddressLine = "urn:nl:bvn:bankid:1.0:consumer.intaddressline1/2/3";

    /** Specify the document to be signed
     * @var string
     */
    public static $DocumentID = "urn:nl:bvn:bankid:1.0:merchant.documentID";

    private $name;
    private $value;

    /**
     * @return Name of the Saml Attribute
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param name Name of the Saml Attribute
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return Name of the Saml Attribute
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @param value Name of the Saml Attribute
     */
    public function setValue($value) {
        $this->value = $value;
    }
    
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
