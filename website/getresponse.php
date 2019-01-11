<?php include '_header.php';

require __DIR__ . '/../library/vendor/autoload.php';

use BankId\Merchant\Library\Configuration;
use BankId\Merchant\Library\Communicator;
use BankId\Merchant\Library\StatusRequest;

Configuration::defaultInstance()->load("bankid-config.xml");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*
     * PHP silently converts some characters from the POST requests; here, "." is replaced by "_"
     * So, while underneath we have BankId.Acquirer.DirectoryUrl, here we check for BankId_Acquirer_DirectoryUrl
     */
    if (isset($_POST["BankId_Acquirer_StatusUrl"])) {
        Configuration::defaultInstance()->AcquirerStatusUrl = $_POST["BankId_Acquirer_StatusUrl"];
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
    $s = new StatusRequest();
    $s->setTransactionID($_POST['transactionID']);
    $Model = $comm->getResponse($s);
}
?>

<h2>GetResponse</h2>
<hr/>

<div class="row">
    <form class="form-horizontal" method="post" role="form">
        <div class="form-group">
            <div class="col-xs-5">
                <label for="BankId.Acquirer.DirectoryUrl">BankId.Acquirer.StatusUrl</label>
                <input class="form-control" id="BankId.Acquirer.StatusUrl" name="BankId.Acquirer.StatusUrl" type="text" value="<?php echo Configuration::defaultInstance()->AcquirerStatusUrl; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-3">
                <label for="transactionID">transactionID</label>
                <input class="form-control" id="transactionID" name="transactionID" type="text" value="1234000000002144">
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
        <button type="submit" class="btn btn-primary">Send response request</button>
    </form>
</div>

<hr/>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($Model->GetIsError() == true) { ?>
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
    } else {
?>
    <div class="row">
        <p>Status Codes:</p>
        <pre>StatusCodeFirstLevel = <?php echo $Model->getSamlResponse()->getStatus()->getStatusCodeFirstLevel(); ?></pre>
        <pre>StatusCodeSecondLevel = <?php echo $Model->getSamlResponse()->getStatus()->getStatusCodeSecondLevel(); ?></pre>
    </div>
    <hr/>
<?php
        if (strcasecmp($Model->getStatus(), $Model::$Success) == 0) { ?>
<div class="row">
    <p>Attributes:</p>
    <?php foreach ($Model->getSamlResponse()->getAttributes() as $key => $value) { ?>
        <pre><?php echo $key . ' = ' . $value; ?></pre>
    <?php } ?>
</div>
<?php
        } else {
?> 
<div class="row">
    <pre>Status = <?php echo $Model->getStatus(); ?></pre>
</div>        
<?php
        }
?>

<div class="row">
    <textarea readonly="true" class="form-control" rows="10"><?php echo $Model->getRawMessage(); ?></textarea>
</div>
<?php
    }
}
?>

<?php include '_footer.php'; ?>