<?php
require("../Settings/core.php");
require('../Controllers/cart_controller.php');

/*-- Process Delivery Info -- */
if (isset($_POST['deli'])) {

    $orderid = $_SESSION['id'];
    $deliveryid = rand(time(), 1000000);
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phnumber = $_POST['phnumber'];
    $datetime = $_POST['ddt'];
    $location = $_POST['location'];

    $result = addDeliveryInfoCtrlr($deliveryid, $orderid, $name, $email, $datetime, $location, $phnumber);
    header("Location: ../View/checkout_delivery.php");
    // echo $result;
    // //Check if the product information has been passed through the add product controller and redirect to the product page or print insertion failed
    // if ($result) {
    //     header("Location: ../View/checkout_delivery.php");
    // } else {
    //     print "Could not schedule delivery";
    // }
}


// /*-- Process Pickup Info -- */
if (isset($_POST['pickup'])) {

$orderid = $_SESSION['id'];
$pickupid = rand(time(), 1000000);
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phnumber = $_POST['phnumber'];
    $pdt = $_POST['pdt'];

    $result = addPickupInfoCtrlr($pickupid, $orderid, $name, $email, $pdt, $phnumber);
    header("Location: ../View/checkout_pickup.php");
 }
