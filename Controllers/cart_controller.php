<?php

//So we can use the functions created in the customer class file
include('../Classes/cart_class.php');

//-- INSERT --//
function addCartCtrlr($cartid, $prodid, $qty)
{
    $cartInstance = new Cart();
    return $cartInstance->addCartCls($cartid, $prodid, $qty);
}

function addDeliveryInfoCtrlr($deliveryid, $orderid, $name, $email, $ddt, $location, $phnumber)
{
    $cartInstance = new Cart();
    return $cartInstance->addDeliveryInfoCls($deliveryid, $orderid, $name, $email, $ddt, $location, $phnumber);
}

function addPickupInfoCtrlr($pickupid, $orderid, $name, $email, $pdt, $phnumber)
{
    $cartInstance = new Cart();
    return $cartInstance->addPickupInfoCls($pickupid, $orderid, $name, $email, $pdt, $phnumber);
}

function addOrderDetailsCtrlr($orderid, $prodid, $specifics, $qty)
{
    $cartInstance = new Cart();
    return $cartInstance->addOrderDetailsCls($orderid, $prodid, $specifics, $qty);
}

function addOrdersCtrlr($orderid, $invoice, $odate, $orderstatus)
{
    $cartInstance = new Cart();
    return $cartInstance->addOrdersCls($orderid, $invoice, $odate, $orderstatus);
}

function addPaymentDeetsCtrlr($amount, $orderemail, $orderid, $currency, $pdate)
{
    $cartInstance = new Cart();
    return $cartInstance->addPaymentDeetsCls($amount, $orderemail, $orderid, $currency, $pdate);
}

//-- SELECT --//
function getAllOrdersCtrlr()
{
    $cartInstance = new Cart();
    return $cartInstance->getAllOrdersCls();
}

function getCartIdCtrlr($cartid)
{
    $cartInstance = new Cart();
   return $cartInstance->getCartIdCls($cartid);
}

function getAllDeliveriesCtrlr()
{
    $cartInstance = new Cart();
    return $cartInstance->getAllDeliveriesCls();
}

function getDeliveryInfoCtrlr($orderid)
{
    $cartInstance = new Cart();
   return $cartInstance->getDeliveryInfoCls($orderid);
}

function getPickupOrderIdCls($email)
{
    $cartInstance = new Cart();
    return $cartInstance->getPickupOrderIdCls($email);
}

function getDeliveryOrderIdCls($email)
{
    $cartInstance = new Cart();
    return $cartInstance->getDeliveryOrderIdCls($email);
}


function selectTotalPriceCtrlr($cartid)
{
    $cartInstance = new Cart();
    return $cartInstance->selectTotalPriceCls($cartid);
}

function getAllPickupsCtrlr()
{
    $cartInstance = new Cart();
    return $cartInstance->getAllPickupsCls();
}

function getPickupInfoCtrlr($orderid)
{
    $cartInstance = new Cart();
    return $cartInstance->getPickupInfoCls($orderid);
}

function checkCartCtrlr($cartid, $prodid)
{
    $cartInstance = new Cart();
    return $cartInstance->checkCartCls($cartid, $prodid);
}

function getAllCartCtrlr($cartid)
{
    $cartInstance = new Cart();
    return $cartInstance->getAllCartCls($cartid);
}

//-- UPDATE --//
function updateOrderdetailsCtrlr($specifics, $qty, $orderid)
{
    $cartInstance = new Cart();
    return $cartInstance->updateOrderdetailsCls($specifics, $qty, $orderid);
}

function updateOrdersCtrlr($orderid, $orderstatus)
{
    $cartInstance = new Cart();
    return $cartInstance->updateOrdersCls($orderid, $orderstatus);
}

function updateProductQtyCtrlr($prodid, $cartid, $qty)
{
    $cartInstance = new Cart();
    return $cartInstance->updateProductQtyCls($prodid, $cartid, $qty);
}


    //-- DELETE --//
function removeFromCartCtrlr($prodid)
{
    $cartInstance = new Cart();
    return $cartInstance->removeFromCartCls($prodid);

}