<?php

namespace BankId\Merchant\Library;


/**
 * @group GroupName2
 */
class XmlValidationTests extends BaseTest
{
    public function __construct()
    {
        parent::__construct();
    }

    public function test_Should_generate_valid_xml_request() {
        $this->messenger = new TestMessenger('TransactionResponse-OK-1');
        $this->setupConfiguration();
        $this->config->MerchantSubID = '42';

        $communicator = new Communicator();
        $auth = new AuthenticationRequest();
        $auth->setAssuranceLevel(AssuranceLevel::$Loa3);
        $auth->setEntranceCode('1');
        $auth->setExpirationPeriod('PT2M');
        $auth->setIssuerID('INGBNL2A');
        $auth->setLanguage('nl');
        $auth->setMerchantReference(AuthenticationRequest::generateMerchantReference());
        $auth->setRequestedServiceID(ServiceIds::$Sign|ServiceIds::$ConsumerBin);
        $auth->setDocumentID("SomeDocumentID");
        $communicator->newAuthenticationRequest($auth);

        $reqxml = $this->messenger->RequestDoc->AsXML();

        $this->assertNotNUll($reqxml);

        $valid=$this->validate($reqxml);
        $this->assertEquals(true, $valid);


    }

    function validate($xmlstring){
        // Enable user error handling
        // libxml_use_internal_errors(true);

        $xml = new \DOMDocument();
        $xml->loadXML($xmlstring);

        if (!$xml->schemaValidate(__DIR__ . '/schemas/all.xsd')) {
            echo '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
            $errors = libxml_get_errors();
            foreach ($errors as $error) {
               print libxml_display_error($error);
            }
            libxml_clear_errors();
            return false;
        }
        return true;
    }
    
}
    
function libxml_display_error($error)
{
    $return = "<br/>\n";
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "<b>Warning $error->code</b>: ";
            break;
        case LIBXML_ERR_ERROR:
            $return .= "<b>Error $error->code</b>: ";
            break;
        case LIBXML_ERR_FATAL:
            $return .= "<b>Fatal Error $error->code</b>: ";
            break;
    }
    $return .= trim($error->message);
    if ($error->file) {
        $return .=    " in <b>$error->file</b>";
    }
    $return .= " on line <b>$error->line</b>\n";

    return $return;
}

function libxml_display_errors() {
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        print libxml_display_error($error);
    }
    libxml_clear_errors();
}
