<?php

namespace BankId\Merchant\Library;

/**
 * Description of Configuration
 */
class Configuration {
    
    private static $_instance;
    
    /**
     * Gets the active Configuration instance
     */
    public static function defaultInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new Configuration();
        }
        return self::$_instance;
    }
    
    /**
     * Merchant Id
     */
    public $MerchantID;
    /**
     * BankID contract registration number sub of the Merchant. The SubID that uniquely defines a trade name of the Merchant to be used for display.
     */
    public $MerchantSubID;
    /**
     * A valid URL to which the Consumer is redirected to after authentication
     */
    public $MerchantReturnUrl;
    
    /**
     * The URL to which the library sends GetDirectory request messages
     */
    public $AcquirerDirectoryUrl;
    /**
     * The URL to which the library sends authentication request messages
     */
    public $AcquirerTransactionUrl;
    /**
     * The URL to which the library sends Status request messages
     */
    public $AcquirerStatusUrl;
    
    /**
     * A string which specifies the certificate to use to sign messages to the Routing Service.
     */
    public $MerchantCertificateFile;
    /**
     * A string which specifies the certificate to use to validate messages from the Routing Service.
     */
    public $RoutingServiceCertificateFile;
    /**
     * A string which specifies the alternative certificate to use to validate messages from the Routing Service.
     */
    public $RoutingServiceCertificateFileAlternative;
    /**
     * A string which specifies the certificate necesary to decrypt the SAML request - may be identical to the Merchant Certificate
     */
    public $SamlCertificateFile;
    /**
     * You may overwrite the signing certificate, if you want to load it using a different method.
     */
    public $MerchantCertificate;
    /**
     * The password for the private key of the MerchantCertificate
     */
    public $MerchantCertificatePassword;
    /**
     * You may overwrite the acquirer certificate, if you want to load it using a different method.
     */
    public $RoutingServiceCertificate;
    /**
     * You may overwrite the alternative acquirer certificate, if you want to load it using a different method.
     */
    public $RoutingServiceCertificateAlternative;
    /**
     * You may overwrite the SAML certificate, if you want to load it using a different method.
     */
    public $SamlCertificate;
    /**
     * The password for the private key of the SamlCertificate
     */
    public $SamlCertificatePassword;
    
    /**
     * Enable/disable logging
     */
    public $LogsEnabled;

    /**
     * A directory on the disk where the library saves internal log messages.
     */
    public $LogsLocation;

    /**
     *  A string that describes a pattern to distinguish internal log messages.
     *    %Y = current year
     *    %M = current month
     *    %D = current day
     *    %h = current hour
     *    %m = current minute
     *    %s = current second
     */
    public $LogsPattern;

     /**
     * A file where library saves internal log messages.
     */
    public $LogsFileName;
    /**
     * A directory on the disk where the library saves ISO pain raw messages.
     */
    public $ServiceLogsLocation;
    /**
     * This tells the library that it should save ISO pain raw messages or not. Default is true.
     */


    public $ServiceLogsEnabled;
    /**
     *  A string that describes a pattern to distinguish the ISO pain raw messages. For example,
     *    %Y-%M-%D\%h%m%s.%f-%a.xml -> 102045.924-AcquirerTrxReq.xml
     *    %Y = current year
     *    %M = current month
     *    %D = current day
     *    %h = current hour
     *    %m = current minute
     *    %s = current second
     *    %f = current millisecond
     *    %a = current action
     */
    public $ServiceLogsPattern;
    
    private $logger;
    private $messenger;

    /** Configuration constructor.
     * Similar to set() method, optionally pass an array of options to set properties for this instance.
     *
     * ```PHP
     * $options = [
     *      "BankId.Merchant.MerchantID" => "0123456789",
     *      "BankId.Merchant.SubID" => "0",
     *      "BankId.Merchant.ReturnUrl" => "https://my.web.shop/transaction/return",
     *
     *      "BankId.Acquirer.DirectoryUrl" => "https://my.bank/url_for_directory_requests",
     *      "BankId.Acquirer.TransactionUrl" => "https://my.bank/url_for_transaction_requests",
     *      "BankId.Acquirer.StatusUrl" => "https://my.bank/url_for_status_requests",
     *
     *      "BankId.Merchant.Certificate.File" => "cert/bankid.library.p12",
     *      "BankId.Merchant.Certificate.Password" => "password",
     *      "BankId.RoutingService.Certificate.File" => "routing_service_certificate.cer",
     *      "BankId.RoutingService.Certificate.File.Alternative" => "routing_service_certificate_alternative.cer",
     *      "BankId.SAML.Certificate.File" => "my_saml_certificate.p12",
     *      "BankId.SAML.Certificate.Password" => "password",
     *
     *      "BankId.Logs.Enabled" => true,
     *      "BankId.Logs.Location" => "./Logs",
     *      "BankId.Logs.Pattern" => "%Y-%M-%D/",
     *      "BankId.Logs.FileName" => "iDIN.txt",
     *
     *      "BankId.ServiceLogs.Enabled" => true,
     *      "BankId.ServiceLogs.Location" => "ServiceLogs",
     *      "BankId.ServiceLogs.Pattern" => "%Y-%M-%D/%h%m%s.%f-%a.xml",
     *
     *      "BankId.Merchant.Certificate" => null,
     *      "BankId.RoutingService.Certificate" => null,
     *      "BankId.RoutingService.Certificate.Alternative" => null,
     *      "BankId.SAML.Certificate" => null,
     * ];
     *
     * ```
     *
     * @param array $options
     */
    public function __construct($options = []) {
        $this->logger = new Logger();
        $this->messenger = new Messenger();

        if (is_array($options) && !empty($options)) {
            if (isset($options['BankId.Merchant.MerchantID'])) {
                $this->MerchantID = $options['BankId.Merchant.MerchantID'];
            }
            if (isset($options['BankId.Merchant.SubID'])) {
                $this->MerchantSubID = $options['BankId.Merchant.SubID'];
            }
            if (isset($options['BankId.Merchant.ReturnUrl'])) {
                $this->MerchantReturnUrl = $options['BankId.Merchant.ReturnUrl'];
            }

            if (isset($options['BankId.Acquirer.DirectoryUrl'])) {
                $this->AcquirerDirectoryUrl = $options['BankId.Acquirer.DirectoryUrl'];
            }
            if (isset($options['BankId.Acquirer.TransactionUrl'])) {
                $this->AcquirerTransactionUrl = $options['BankId.Acquirer.TransactionUrl'];
            }
            if (isset($options['BankId.Acquirer.StatusUrl'])) {
                $this->AcquirerStatusUrl = $options['BankId.Acquirer.StatusUrl'];
            }

            if (isset($options['BankId.Merchant.Certificate.File'])) {
                $this->MerchantCertificateFile = $options['BankId.Merchant.Certificate.File'];
            }
            if (isset($options['BankId.Merchant.Certificate.Password'])) {
                $this->MerchantCertificatePassword = $options['BankId.Merchant.Certificate.Password'];
            }
            if (isset($options['BankId.RoutingService.Certificate.File'])) {
                $this->RoutingServiceCertificateFile = $options['BankId.RoutingService.Certificate.File'];
            }
            if (isset($options['BankId.RoutingService.Certificate.File.Alternative'])) {
                $this->RoutingServiceCertificateFileAlternative = $options['BankId.RoutingService.Certificate.File.Alternative'];
            }
            if (isset($options['BankId.SAML.Certificate.File'])) {
                $this->SamlCertificateFile = $options['BankId.SAML.Certificate.File'];
            }
            if (isset($options['BankId.SAML.Certificate.Password'])) {
                $this->SamlCertificatePassword = $options['BankId.SAML.Certificate.Password'];
            }

            if (isset($options['BankId.Logs.Enabled'])) {
                $this->LogsEnabled = $options['BankId.Logs.Enabled'];
            }
            if (isset($options['BankId.Logs.Pattern'])) {
                $this->LogsPattern = $options['BankId.Logs.Pattern'];
            }
            if (isset($options['BankId.Logs.FileName'])) {
                $this->LogsFileName = $options['BankId.Logs.FileName'];
            }
            if (isset($options['BankId.Logs.Location'])) {
                $this->LogsLocation = $options['BankId.Logs.Location'];
            }





            if (isset($options['BankId.ServiceLogs.Enabled'])) {
                $this->ServiceLogsEnabled = $options['BankId.ServiceLogs.Enabled'];
            }
            if (isset($options['BankId.ServiceLogs.Location'])) {
                $this->ServiceLogsLocation = $options['BankId.ServiceLogs.Location'];
            }
            if (isset($options['BankId.ServiceLogs.Pattern'])) {
                $this->ServiceLogsPattern = $options['BankId.ServiceLogs.Pattern'];
            }



            if (isset($this->MerchantCertificateFile) && isset($this->RoutingServiceCertificateFile) && isset($this->SamlCertificateFile)) {
                $this->loadCertificates();
            }

            // Prevent overwriting - as values have been assigned in $this->loadCertificates()
            // Assign value only if passed params are not empty
            if (!empty($options['BankId.Merchant.Certificate'])) {
                $this->MerchantCertificate = $options['BankId.Merchant.Certificate'];
            }

            if (!empty($options['BankId.RoutingService.Certificate'])) {
                $this->RoutingServiceCertificate = $options['BankId.RoutingService.Certificate'];
            }

            if (!empty($options['BankId.RoutingService.Certificate.Alternative'])) {
                $this->RoutingServiceCertificateAlternative = $options['BankId.RoutingService.Certificate.Alternative'];
            }

            if (!empty($options['BankId.SAML.Certificate'])) {
                $this->SamlCertificate = $options['BankId.SAML.Certificate'];
            }

            $this->ensureIsValid();
        }
    }
    
    /**
     * Set all members for this Configuration instance using this function
     */
    public function set($merchantID,
                        $merchantSubID,
                        $merchantReturnUrl,

                        $acquirerDirectoryUrl,
                        $acquirerTransactionUrl,
                        $acquirerStatusUrl,

                        $merchantCertificateFile,
                        $routingCertificateFile,
                        $routingCertificateFileAlternative,
                        $samlCertificateFile,
                        $merchantCertificate,
                        $merchantCertificatePassword,
                        $routingCertificate,
                        $routingCertificateAlternative,
                        $samlCertificate,
                        $samlCertificatePassword,

                        $logsEnabled,
                        $logsPattern,
                        $logsFileName,
                        $logsLocation,

                        $serviceLogsLocation,
                        $serviceLogsEnabled,
                        $serviceLogsPattern){

        $this->MerchantID = $merchantID;
        $this->MerchantSubID = $merchantSubID;
        $this->MerchantReturnUrl = $merchantReturnUrl;
        $this->AcquirerDirectoryUrl = $acquirerDirectoryUrl;
        $this->AcquirerTransactionUrl = $acquirerTransactionUrl;
        $this->AcquirerStatusUrl = $acquirerStatusUrl;
        $this->MerchantCertificateFile = $merchantCertificateFile;
        $this->RoutingServiceCertificateFile = $routingCertificateFile;
        $this->RoutingServiceCertificateFileAlternative = $routingCertificateFileAlternative;
        $this->SamlCertificateFile = $samlCertificateFile;
        $this->MerchantCertificatePassword = $merchantCertificatePassword;
        $this->SamlCertificatePassword = $samlCertificatePassword;

        $this->LogsEnabled = $logsEnabled;
        $this->LogsPattern = $logsPattern;
        $this->LogsFileName = $logsFileName;
        $this->LogsLocation = $logsLocation;

        $this->ServiceLogsEnabled = $serviceLogsEnabled;
        $this->ServiceLogsLocation = $serviceLogsLocation;
        $this->ServiceLogsPattern = $serviceLogsPattern;

        if (isset($this->MerchantCertificateFile) && isset($this->RoutingServiceCertificateFile) && isset($this->SamlCertificateFile)) {
            $this->loadCertificates();
        }

        // Prevent overwriting - as values has been assigned in $this->loadCertificates() method
        // Assign value only if passed params are not empty
        if (!empty($merchantCertificate)) {
            $this->MerchantCertificate = $merchantCertificate;

        }
        if (!empty($routingCertificate)) {
            $this->RoutingServiceCertificate = $routingCertificate;
        }
        if (!empty($routingCertificateAlternative)) {
            $this->RoutingServiceCertificateAlternative = $routingCertificateAlternative;
        }

        if (!empty($samlCertificate)) {
            $this->SamlCertificate = $samlCertificate;
        }

        $this->ensureIsValid();
    }
    
    /**
     * Sets the Configuration object to be used by Communicator instances
     */
    public static function setup($configuration) {
        self::$_instance = $configuration;
        
        self::$_instance->loadCertificates();
        
        self::$_instance->MerchantCertificate = $configuration->MerchantCertificate;
        self::$_instance->RoutingServiceCertificate = $configuration->RoutingServiceCertificate;
        self::$_instance->RoutingServiceCertificateAlternative = $configuration->RoutingServiceCertificateAlternative;
        self::$_instance->SamlCertificate = $configuration->SamlCertificate;
        
        self::$_instance->ensureIsValid();
    }
    
    private function loadCertificates() {
        $certs = array();
        $pkcs12 = file_get_contents($this->MerchantCertificateFile, FILE_USE_INCLUDE_PATH);
        openssl_pkcs12_read($pkcs12, $certs, $this->MerchantCertificatePassword);
        $this->MerchantCertificate = $certs;
        
        $this->RoutingServiceCertificate =
            Utils::normalizeCertificate(file_get_contents($this->RoutingServiceCertificateFile, FILE_USE_INCLUDE_PATH));
        
        if(file_exists($this->RoutingServiceCertificateFileAlternative))
        {
            $this->RoutingServiceCertificateAlternative =
                Utils::normalizeCertificate(file_get_contents($this->RoutingServiceCertificateFileAlternative, FILE_USE_INCLUDE_PATH));
        }
        
        $pkcs12 = file_get_contents($this->SamlCertificateFile, FILE_USE_INCLUDE_PATH);
        openssl_pkcs12_read($pkcs12, $certs, $this->SamlCertificatePassword);
        $this->SamlCertificate = $certs;
    }
    
    /**
     * Attempts to load the settings from the application's configuration
     */
    public static function load($configXml) {
        $configuration = new \SimpleXMLElement(file_get_contents($configXml), FILE_USE_INCLUDE_PATH);
        foreach ($configuration->appSettings->add as $item) {
            $key = (string) $item['key'];
            $value = (string) $item['value'];
            switch ($key) {
                case 'BankId.Merchant.MerchantID': self::defaultInstance()->MerchantID = $value; break;
                case 'BankId.Merchant.SubID': self::defaultInstance()->MerchantSubID = $value; break;
                case 'BankId.Merchant.ReturnUrl': self::defaultInstance()->MerchantReturnUrl = $value; break;
                
                case 'BankId.Acquirer.DirectoryUrl': self::defaultInstance()->AcquirerDirectoryUrl = $value; break;
                case 'BankId.Acquirer.TransactionUrl': self::defaultInstance()->AcquirerTransactionUrl = $value; break;
                case 'BankId.Acquirer.StatusUrl': self::defaultInstance()->AcquirerStatusUrl = $value; break;
                
                case 'BankId.Merchant.Certificate.File': self::defaultInstance()->MerchantCertificateFile = $value; break;
                case 'BankId.Merchant.Certificate.Password': self::defaultInstance()->MerchantCertificatePassword = $value; break;
                case 'BankId.RoutingService.Certificate.File': self::defaultInstance()->RoutingServiceCertificateFile = $value; break;
                case 'BankId.RoutingService.Certificate.File.Alternative': self::defaultInstance()->RoutingServiceCertificateFileAlternative = $value; break;
                case 'BankId.SAML.Certificate.File': self::defaultInstance()->SamlCertificateFile = $value; break;
                case 'BankId.SAML.Certificate.Password': self::defaultInstance()->SamlCertificatePassword = $value; break;

                case 'BankId.Logs.Enabled': self::defaultInstance()->LogsEnabled = $value; break;
                case 'BankId.Logs.Pattern': self::defaultInstance()->LogsPattern = $value; break;
                case 'BankId.Logs.FileName': self::defaultInstance()->LogsFileName = $value; break;
                case 'BankId.Logs.Location': self::defaultInstance()->LogsLocation = $value; break;

                case 'BankId.ServiceLogs.Enabled': self::defaultInstance()->ServiceLogsEnabled = $value; break;
                case 'BankId.ServiceLogs.Location': self::defaultInstance()->ServiceLogsLocation = $value; break;
                case 'BankId.ServiceLogs.Pattern': self::defaultInstance()->ServiceLogsPattern = $value; break;
            }
        }
        
        self::defaultInstance()->loadCertificates();
        self::defaultInstance()->ensureIsValid();
    }

    private function ensureIsValid() {
        $checkNullOrWhitespace = function($value, $name) {
            if (!isset($value) || $value === '') {
                $ex = new CommunicatorException('The configuration parameter is not configured: ' . $name);
                var_dump($ex);
                throw $ex;
            }
        };
        
        $checkNullOrWhitespace($this->MerchantID, 'MerchantID');
        $checkNullOrWhitespace($this->RoutingServiceCertificate, 'RoutingServiceCertificate');
        $checkNullOrWhitespace($this->MerchantCertificate, 'MerchantCertificate');
        $checkNullOrWhitespace($this->SamlCertificate, 'SamlCertificate');
        $checkNullOrWhitespace($this->MerchantReturnUrl, 'MerchantReturnUrl');
        $checkNullOrWhitespace($this->AcquirerDirectoryUrl, 'AcquirerDirectoryUrl');
        $checkNullOrWhitespace($this->AcquirerTransactionUrl, 'AcquirerTransactionUrl');
        $checkNullOrWhitespace($this->AcquirerStatusUrl, 'AcquirerStatusUrl');
    }
    
    /**
     * Gets the default Logger instance
     */
    public function getLogger() {
        return $this->logger;
    }
    
    /**
     * Gets the default Messenger instance
     */
    public function getMessenger() {
        return $this->messenger;
    }
}
