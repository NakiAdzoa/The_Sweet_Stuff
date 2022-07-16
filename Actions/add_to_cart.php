<?php

require('../Settings/core.php');
require("../Controllers/cart_controller.php");

if (isset($_POST['prodid'], $_POST['qty']) && is_numeric($_POST['prodid']) && is_numeric($_POST['qty'])) {

    $prodid = $_POST['prodid'];
    $qty = $_POST['qty'] ?: 1;
    $cartid = $_SESSION['id'];

    $addingitem = addCartCtrlr($cartid, $prodid, $qty);

    //Populate the order details table with the specifics of the order
    $specifics = $_POST['details'];
    $orderid = $cartid;
    addOrderDetailsCtrlr($orderid, $prodid, $specifics, $qty);

    header("Location: ../View/all_products.php");
}
    // function getIPAddress() {  
    //     //whether ip is from the share internet  
    //     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
    //         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];  
    //     }  
    //     //whether ip is from the proxy  
    //     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
    //         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    //     }  
    //     //whether ip is from the remote address  
    //     else{  
    //         $ipaddress = $_SERVER['REMOTE_ADDR'];  
    //     }  
    //      return $ipaddress;  
    // } 