<?php

include '_header.php';

require __DIR__ . '/../vendor/autoload.php';

use BankId\Merchant\Library\Configuration;
use BankId\Merchant\Library\Communicator;
use BankId\Merchant\Library\AuthenticationRequest;
use BankId\Merchant\Library\AssuranceLevel;

Configuration::defaultInstance()->load("bankid-config.xml");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*
     * PHP silently converts some characters from the POST requests; here, "." is replaced by "_"
     * So, while underneath we have BankId.Acquirer.DirectoryUrl, here we check for BankId_Acquirer_DirectoryUrl
     */
    if (isset($_POST["BankId_Acquirer_TransactionUrl"])) {
        Configuration::defaultInstance()->AcquirerTransactionUrl = $_POST["BankId_Acquirer_TransactionUrl"];
    }
    if (isset($_POST["BankId_Merchant_MerchantID"])) {
        Configuration::defaultInstance()->MerchantID = $_POST["BankId_Merchant_MerchantID"];
    }
    if (isset($_POST["BankId_Merchant_SubID"])) {
        Configuration::defaultInstance()->MerchantSubID = $_POST["BankId_Merchant_SubID"];
    }
    if (isset($_POST["BankId_Merchant_ReturnUrl"])) {
        Configuration::defaultInstance()->MerchantReturnUrl = $_POST["BankId_Merchant_ReturnUrl"];
    }
    
    $comm = new Communicator();
    
    $a = new AuthenticationRequest();
    $a->setIssuerID($_POST['issuerID']);
    $a->setLanguage($_POST['language']);
    $a->setExpirationPeriod($_POST['expirationPeriod']);
    $a->setEntranceCode($_POST['entranceCode']);
    $a->setMerchantReference($_POST['BankId_MerchantReference']);
    $a->setRequestedServiceID($_POST['BankId_RequestedServiceId']);
    $a->setAssuranceLevel($_POST['BankId_LOA']);
    $a->setDocumentID($_POST['DocumentID']);
    $Model = $comm->newAuthenticationRequest($a);
}
?>

<h2>Authenticate</h2>
<hr/>

<div class="row">
    <form class="form-horizontal" method="post" role="form">
        <div class="form-group">
            <div class="col-xs-5">
                <label for="BankId.Acquirer.DirectoryUrl">BankId.Acquirer.TransactionUrl</label>
                <input class="form-control" id="BankId.Acquirer.TransactionUrl" name="BankId.Acquirer.TransactionUrl" type="text" value="<?php echo Configuration::defaultInstance()->AcquirerTransactionUrl; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-3">
                <label for="issuerID">issuerID</label>
                <input class="form-control" id="issuerID" name="issuerID" type="text" value="INGBNL2A">
            </div>
            <div class="col-xs-3">
                <label for="issuerID">expirationPeriod</label>
                <input class="form-control" id="expirationPeriod" name="expirationPeriod" type="text" value="PT5M">
            </div>
            <div class="col-xs-3">
                <label for="Language">language</label>
                <select class="form-control" id="Language" name="language">
                    <option>en</option>
                    <option selected="selected">nl</option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="issuerID">entranceCode</label>
                <input class="form-control" id="entranceCode" name="entranceCode" type="text" value="entranceCode">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-3">
                <label for="issuerID">BankId.MerchantReference</label>
                <input class="form-control" id="BankId.MerchantReference" name="BankId.MerchantReference" type="text" value="merchantReference">
            </div>
            <div class="col-xs-3">
                <label for="issuerID">BankId.RequestedServiceId</label>
                <input class="form-control" id="BankId.RequestedServiceId" name="BankId.RequestedServiceId" type="text" value="21968">
            </div>
            <div class="col-xs-3">
                <label for="Language">BankId.LOA</label>
                <select class="form-control" id="BankId.LOA" name="BankId.LOA">
                    <option selected="selected"><?php echo AssuranceLevel::$Loa3; ?></option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="issuerID">DocumentID</label>
                <input class="form-control" id="DocumentID" name="DocumentID" type="text" value="">
            </div>
        </div>
            
        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Toggle more options</button>
        <div id="demo" class="collapse">
            <div class="form-group">
                <div class="col-xs-3">
                    <label for="BankId.Merchant.MerchantID">BankId.Merchant.MerchantID</label>
                    <input class="form-control" id="BankId.Merchant.MerchantID" name="BankId.Merchant.MerchantID" type="text" value="<?php echo Configuration::defaultInstance()->MerchantID; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3">
                    <label for="BankId.Merchant.SubID">BankId.Merchant.SubID</label>
                    <input class="form-control" id="BankId.Merchant.SubID" name="BankId.Merchant.SubID" type="text" value="<?php echo Configuration::defaultInstance()->MerchantSubID; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-3">
                    <label for="BankId.Merchant.SubID">BankId.Merchant.ReturnUrl</label>
                    <input class="form-control" id="BankId.Merchant.ReturnUrl" name="BankId.Merchant.ReturnUrl" type="text" value="<?php echo Configuration::defaultInstance()->MerchantReturnUrl; ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Send authentication request</button>
    </form>
</div>

<hr/>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($Model);
    if ($Model->getIsError() == true) { ?>
<div class="row alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    
    <p>(iDx) Code: <?php echo $Model->getErrorResponse()->getErrorCode(); ?></p>
    <p>(iDx) Message: <?php echo $Model->getErrorResponse()->getErrorMessage(); ?></p>
    <p>(iDx) Details: <?php echo $Model->getErrorResponse()->getErrorDetails(); ?></p>
    <p>(iDx) Consumer message: <?php echo $Model->getErrorResponse()->getConsumerMessage(); ?></p>
    <p>(iDx) Suggested action: <?php echo $Model->getErrorResponse()->getSuggestedAction(); ?></p>
    <?php if ($Model->getErrorResponse()->getAdditionalInformation() != NULL) { ?>
        <p>(saml) Status code (1): <?php echo $Model->getErrorResponse()->getAdditionalInformation()->getStatusCodeFirstLevel(); ?></p>
        <p>(saml) Status code (2): <?php echo $Model->getErrorResponse()->getAdditionalInformation()->getStatusCodeSecondLevel(); ?></p>
        <p>(saml) Status message: <?php echo $Model->getErrorResponse()->getAdditionalInformation()->getStatusMessage(); ?></p>
    <?php } ?>
</div>
<?php
    } else { ?>
<div class="row">
    <pre>IssuerAuthenticationUrl = <?php echo $Model->getIssuerAuthenticationURL(); ?></pre>
    <pre>TransactionID = <?php echo $Model->getTransactionID(); ?></pre>
    <pre>TransactionCreateDateTimestamp = <?php echo $Model->getTransactionCreateDatetimestamp(); ?></pre>
</div>

<hr/>

<div class="row">
    <textarea readonly="true" class="form-control" rows="10"><?php echo $Model->getRawMessage(); ?></textarea>
</div>
<?php
    }
}
?>

<?php include '_footer.php'; ?>