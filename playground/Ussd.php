
<?php 
$page = 'result';
include('partials/header.php');//this is just to load the bootstrap and css. 



require("../library/Ussd.php");
use Flutterwave\Ussd;
//The data variable holds the payload
$data = array(
        //"public_key": "FLWPUBK-6c4e3dcb21282d44f907c9c9ca7609cb-X"//you can ommit the public key as the key is take from your .env file
        //"tx_ref": "MC-15852309v5050e8",
     "order_id" => "USS_URG_8939829232323",
     "account_bank" => "058",
     "amount"=> "1500",
     "type"=> "qr",
     "currency"=> "NGN",
     "email"=>"ekene@flw.com",
     "phone_number" =>"0902620185",
     "fullname" => "Ekene Eze",
     "client_ip" =>"154.123.220.1",
     "device_fingerprint" =>"62wd23423rq324323qew1",
     "meta" => array(
         "matricno"=> "877656"
     )
        
      
    );

$payment = new Ussd();
$result = $payment->ussd($data);//initiates the charge
$verify = $payment->verifyTransaction();


echo '<div class="alert alert-success role="alert">
        <h1>Charge Result: </h1>
        <p><b> '.print_r($result, true).'</b></p>
      </div>';

echo '<div class="alert alert-primary role="alert">
        <h1>Verified Result: </h1>
        <p><b> '.print_r($verify, true).'</b></p>
      </div>';






include('partials/footer.php');//this is just to load the jquery and js scripts. 

?>


