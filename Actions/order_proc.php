<?php
require('../Controllers/cart_controller.php');

/*-- Update Order Status -- */
//If the button as been clicked, take the info and pass it through the add brand controller
if (isset($_GET['updateStatusBttn'])) {

    //get data from form
    $orderid = $_GET['orderid'];
    $orderstatus = $_GET['orderstatus'];

    $result = updateOrdersCtrlr($orderid, $orderstatus);

    //Check if the product information has been passed through the add product controller and redirect to the product page or print insertion failed
    $check = ($result == true) ? header("Location: ../Admin/order_page.php") : print "Insertion failed";
}
