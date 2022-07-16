<?php

//inheriting the methods from connection
require('../Settings/db_connection.php');

class Customer extends DbConnection
{

    //-- INSERT --//

    function addCustomerCls($customername, $customeremail, $customerpass, $role)
    {
        return $this->query("INSERT INTO customer(customer_name, customer_email, customer_pass, user_role) VALUES '$customername','$customeremail','$customerpass','$role'");
    }

    //-- SELECT --//


    //-- UPDATE --//
    function updateCustomerInfo($customerid, $customername, $customeremail, $customerpass, $role)
    {
        return $this->query("UPDATE customer SET customer_name='$customername', customer_email='$customeremail', customer_pass='$customerpass', user_role='$role' WHERE customer_id='$customerid'");
    }

    //-- DELETE --//

    function delCustomerCls($customerid)
    {
        return $this->query("DELETE FROM customers WHERE customer_id='$customerid'");
    }
}
