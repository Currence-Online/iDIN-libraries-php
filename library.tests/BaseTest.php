<?php

namespace BankId\Merchant\Library;

class BaseTest extends \PHPUnit\Framework\TestCase
{
    protected $config;
    protected $messenger;
    protected $logger;
    protected $dateTimeRegexp = '/[\d]{4}-[\d]{2}-[\d]{2}T[\d]{2}:[\d]{2}:[\d]{2}.[\d]{3}Z/';
    protected $merchantReturnUrl = 'http://localhost';


    protected function setupConfiguration()
    {
        $this->config = $this->getMockBuilder('\BankId\Merchant\Library\Configuration')
            ->getMock();
        $this->config->MerchantID = '1234567890';
        $this->config->MerchantSubID = '0';
        $this->config->MerchantReturnUrl = $this->merchantReturnUrl;

        $this->config->AcquirerDirectoryUrl = 'http://example.com/directory';
        $this->config->AcquirerTransactionUrl = 'http://example.com/transaction';
        $this->config->AcquirerStatusUrl = 'http://example.com/status';

        $this->config->MerchantCertificateFile = __DIR__ . '/certificates/BankID2020.Libs.sha256.2048.csp.p12';
        $this->config->MerchantCertificatePassword = '123456';

        $this->config->RoutingServiceCertificateFile = __DIR__ . '/certificates/BankID2020.QA.sha256.2048.cer';

        $this->config->SamlCertificateFile = __DIR__ . '/certificates/BankID2020.Libs.sha256.2048.csp.p12';
        $this->config->SamlCertificatePassword = '123456';

        $this->config->LogsEnabled = FALSE;
        $this->config->ServiceLogsEnabled = FALSE;

        $this->config->method('getMessenger')
            ->willReturn($this->messenger);
        $this->logger = new Logger();
        $this->config->method('getLogger')
            ->willReturn($this->logger);

        Configuration::setup($this->config);
    }

    protected function assertMatches($value, $regexp)
    {
        $this->assertEquals(preg_match($regexp, $value), 1, $value . ' does not match ' . $regexp);
    }
}
