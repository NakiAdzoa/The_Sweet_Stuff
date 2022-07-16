<?php
require('../Controllers/cart_controller.php');
require('../Settings/core.php');

if (isset($_GET['pid'])) {

    $prodid = $_GET['pid'];
    echo "hi";
    $done = removeFromCartCtrlr($prodid);
    echo "bye";
        header('location: ../View/cart.php');    
}
