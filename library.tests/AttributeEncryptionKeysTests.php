<?php

namespace BankId\Merchant\Library;

use RobRichards\XMLSecLibs\XMLSecEnc;
use RobRichards\XMLSecLibs\XMLSecurityKey;
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


/**
 * @group GroupName2
 */
class AttributeEncryptionKeysTests extends BaseTest
{
    public function __construct()
    {
        parent::__construct();
    }

    public function test_no_error_in_sample_message()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        $this->assertFalse($res->getIsError());
        $this->assertNotNull($res->getSamlResponse());

        $this->assertEquals('urn:oasis:names:tc:SAML:2.0:status:Success', $res->getSamlResponse()->getStatus()->getStatusCodeFirstLevel());
    }

    public function test_parsing_the_attributes()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        $attrs = $res->getSamlResponse()->getAttributes();
        $this->assertEquals(9, count($attrs)); //9 attributes and the delivered service id

        $this->assertEquals('Some Subject', $attrs[SamlAttribute::$ConsumerBin]);
        $this->assertEquals('Smith', $attrs[SamlAttribute::$ConsumerLegalLastName]);
        $this->assertEquals('John', $attrs[SamlAttribute::$ConsumerPrefLastName]);
        $this->assertEquals('Jane', $attrs[SamlAttribute::$ConsumerPartnerLastName]);
        $this->assertEquals('Sm', $attrs[SamlAttribute::$ConsumerLegalLastNamePrefix]);
        $this->assertEquals('Jo', $attrs[SamlAttribute::$ConsumerPrefLastNamePrefix]);
        $this->assertEquals('Ja', $attrs[SamlAttribute::$ConsumerPartnerLastNamePrefix]);
        $this->assertEquals('SJĆ', $attrs[SamlAttribute::$ConsumerInitials]);
        $this->assertEquals('4096', $attrs[SamlAttribute::$DeliveredServiceID]);
    }

    public function test_retrieving_AttributesEncryptionKeys_property()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        $keys = $res->getSamlResponse()->getAttributesEncryptionKeys();
        $this->assertNotNull($keys);
    }

    public function test_sample_of_recomputing_subject_based_on_AttributesEncryptionKeys()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        //get the attribute the normal way
        $attrs = $res->getSamlResponse()->getAttributes();
        $this->assertEquals('Some Subject', $attrs[SamlAttribute::$ConsumerBin]);

        //compute the attribute based on the encryption key and the encrypted xml
        $keys = $res->getSamlResponse()->getAttributesEncryptionKeys();

        $key = $keys[0]['AesKey'];
        $attr = $keys[0]['AttributeName'];

        $value = $this->decryptWithEncryptionKey($key, $res->getRawMessage(), 0);

        $this->assertEquals('Some Subject', $value);
        $this->assertEquals(SamlAttribute::$ConsumerBin, $attr);
    }

    public function test_sample_of_recomputing_one_consumer_attribute_value_based_on_AttributesEncryptionKeys()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        //get the attribute the normal way
        $attrs = $res->getSamlResponse()->getAttributes();
        $this->assertEquals('Smith', $attrs[SamlAttribute::$ConsumerLegalLastName]);

        //compute the attribute based on the encryption key and the encrypted xml
        $keys = $res->getSamlResponse()->getAttributesEncryptionKeys();

        $key = $keys[1]['AesKey'];
        $attr = $keys[1]['AttributeName'];

        $value = $this->decryptWithEncryptionKey($key, $res->getRawMessage(), 1);

        $this->assertEquals('Smith', $value);
        $this->assertEquals(SamlAttribute::$ConsumerLegalLastName, $attr);
    }

    public function test_recompute_all_attribute_values_based_on_AttributesEncryptionKeys()
    {
        $res = $this->invoke("StatusResponse-Sample-015");

        $keys = $res->getSamlResponse()->getAttributesEncryptionKeys();
        $this->assertEquals(8, count($keys));

        for ($index = 0; $index < 8; $index++) {
            $key = $keys[$index]['AesKey'];
            $attr = $keys[$index]['AttributeName'];

            $original_value = $res->getSamlResponse()->getAttributes()[$attr];
            $value = $this->decryptWithEncryptionKey($key, $res->getRawMessage(), $index);

            $this->assertEquals($original_value, $value);
        }
    }

    function decryptWithEncryptionKey($key, $rawXml, $index)
    {
        $el =  $this->decryptElement($key, $rawXml, $index);
        $element = new \SimpleXMLElement($el);

        $value =  trim(dom_import_simplexml($element)->textContent);
        return $value;
    }

    private function decryptElement($aesKey, $encrypted, $index)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($encrypted);

        $encryptedData = $doc->getElementsByTagName('EncryptedData')->item($index);

        $key = new XMLSecurityKey(XMLSecurityKey::AES256_CBC);
        $key->key = $aesKey;
        $enc = new XMLSecEnc();

        $enc->setNode($encryptedData);
        $el = $enc->decryptNode($key);

        return $el;
    }

    private function invoke($message)
    {
        $this->messenger = new TestMessenger($message);
        $this->setupConfiguration();

        $sr = new StatusRequest();
        $sr->setTransactionID('1234000000002144');

        $comm = new Communicator();
        return $comm->getResponse($sr);
    }
}
