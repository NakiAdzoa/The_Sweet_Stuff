<?php
require('../Controllers/cart_controller.php');
require('../Settings/core.php');

// set options for the curl session insluding the url, headers, timeout, etc
$url = "https://api.paystack.co/transaction/initialize";

$fields = [
    $email = $_GET['email'],
    $amount = $_GET['amount'],
    //$reference = $_GET['reference']
];
$fieldsString = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsString);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
//if (isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success') {

$orderid = $_SESSION['id'];
$invoice = mt_rand(100, 1000);
$odate = date('Y/m/d');
$orderstatus = 'pending';

$addOrder = addOrdersCtrlr($orderid, $invoice, $odate, $orderstatus);

if ($addOrder) {
    // call a function that stores an array of the customer's details

    // call controller function to insert into the payment table
    $paymentResults = addPaymentDeetsCtrlr($amount, $email, $orderid, "GHC", $odate);


    if ($paymentResults) {
        $cart = getAllCartCtrlr($orderid);

        foreach ($cart as $x) {
            removeFromCartCtrlr($x['p_id']);
            echo "payment verified successfully and insertion complete";
        }
    } else {
        //execute post
        $result = curl_exec($ch);
        echo $result;
    }
}
//}

// // get the response and store
// $response = curl_exec($ch);
// // if there are any errors
// $err = curl_error($ch);
// // close the session
// curl_close($ch);

// //convert the response to PHP object
// $decodedResponse = json_decode($response);
