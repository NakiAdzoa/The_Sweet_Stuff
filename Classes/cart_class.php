<?php

//inheriting the methods from connection
require('../Settings/db_connection.php');

class Cart extends DbConnection
{

    //-- INSERT --//

    function addCartCls($cartid, $prodid, $qty)
    {
        return $this->query("INSERT INTO cart(cart_id, p_id, qty) VALUES ('$cartid','$prodid','$qty')");
    }

    function addDeliveryInfoCls($deliveryid, $orderid, $name, $email, $ddt, $location, $phnumber)
    {
        return $this->query("INSERT INTO deliveries(delivery_id, order_id, full_name, email, date_time, location, phone_number) VALUES ('$deliveryid','$orderid','$name','$email','$ddt','$location','$phnumber')");
    }

    function addPickupInfoCls($pickupid, $orderid, $name, $email, $pdt, $phnumber)
    {
        return $this->query("INSERT INTO pickup(pickup_id, order_id, full_name, email, date_time, phone_number) VALUES ('$pickupid','$orderid','$name','$email','$pdt','$phnumber')");
    }

    function addOrderDetailsCls($orderid, $prodid, $specifics, $qty)
    {
        return $this->query("INSERT INTO orderdetails(order_id, product_id, specifics, qty) VALUES ('$orderid','$prodid','$specifics','$qty')");
    }

    function addOrdersCls($orderid, $invoice, $odate, $orderstatus)
    {
        return $this->query("INSERT INTO orders(order_id, invoice_no, order_date, order_status) VALUES ('$orderid','$invoice','$odate','$orderstatus')");
    }

    function addPaymentDeetsCls($amount, $orderemail, $orderid, $currency, $odate)
    {
        return $this->query("INSERT INTO payment(amt, order_email, order_id, currency, payment_date) VALUES ('$amount','$orderemail','$orderid','$currency','$odate')");
    }

    //-- SELECT --//
    function selectTotalPriceCls($cartid)
    {
       return $this->fetch("SELECT SUM(products.product_price *cart.qty) FROM cart inner join products on cart.p_id = products.product_id where cart_id = '$cartid'");
    }

    function getAllOrdersCls()
    {
        return $this->fetch("SELECT * FROM orderdetails RIGHT JOIN orders on orderdetails.order_id = orders.order_id");
    }

    function getAllDeliveriesCls()
    {
        return $this->fetch("SELECT * FROM deliveries RIGHT JOIN orders on orders.order_id = deliveries.order_id GROUP BY order_status = 'Pending'");
    }

    function getDeliveryInfoCls($orderid)
    {
        return $this->fetchOne("SELECT * FROM deliveries WHERE order_id = '$orderid'");
    }

    function getDeliveryOrderIdCls($email)
    {
        return $this->fetchOne("SELECT order_id FROM deliveries WHERE email = '$email'");
    }

    function getPickupOrderIdCls($email)
    {
        return $this->fetchOne("SELECT order_id FROM pickup WHERE email = '$email'");
    }

    function getAllPickupsCls()
    {
        return $this->fetch("SELECT * FROM pickup RIGHT JOIN orders on orders.order_id = pickup.order_id WHERE order_status = 'Pending'");
    }

    function getPickupInfoCls($orderid)
    {
        return $this->fetchOne("SELECT * FROM pickup WHERE order_id = '$orderid'");
    }

    function checkCartCls($cartid, $prodid)
    {
        return $this->fetchOne("SELECT * FROM cart WHERE cart_id='$cartid' AND p_id='$prodid'");
    }

    function getAllCartCls($cartid)
    {
        return $this->fetch("SELECT * from cart inner join products on p_id = product_id where cart_id = '$cartid'");
    }

    function getCartIdCls($cartid)
    {
        return $this->fetch("SELECT * from cart WHERE cart_id ='$cartid'");
    }


    //-- UPDATE --//
    function updateOrderdetailsCls($specifics, $qty, $orderid)
    {
        return $this->query("UPDATE orderdetails SET specifics = '$specifics', qty='$qty' WHERE order_id = '$orderid'");
    }

    function updateOrdersCls($orderid, $orderstatus)
    {
        return $this->query("UPDATE orders SET order_status = '$orderstatus' WHERE order_id = '$orderid'");
    }

    function updateProductQtyCls($prodid, $cartid, $qty)
    {
        return $this->query("UPDATE cart SET qty = '$qty' WHERE cart_id = '$cartid' AND p_id='$prodid'");
    }

    //-- DELETE --//
function removeFromCartCls($prodid)
{
    return $this->query("DELETE from cart where p_id='$prodid'");
}
}
