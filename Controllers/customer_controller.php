<?php

//So we can use the functions created in the customer class file
include('../Classes/customer_class.php');

    //-- INSERT --//
function addCustomerCtrlr($customername, $customeremail, $customerpass, $role)
{
    $customerInstance = new Customer();
    return $customerInstance->addCustomerCls($customername, $customeremail, $customerpass, $role);

}

    //-- SELECT --//


    //-- UPDATE --//
    function updateCustomerInfoCtrlr($customerid, $customername, $customeremail, $customerpass, $role)
    {
        $customerInstance = new Customer();
        return $customerInstance->updateCustomerInfo($customerid, $customername, $customeremail, $customerpass, $role);
    
    }

    //-- DELETE --//
function delCustomerCtrlr($customerid)
{
    $customerInstance = new Customer();
    return $customerInstance->delCustomerCls($customerid);
}