<?php

//So we can use the functions created in the customer class file
include('../Classes/product_class.php');

    //-- INSERT --//
    function addProductsCtrlr($prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds)
    {
        $productInstance = new Product();
        return $productInstance->addProductsCls($prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds);
    }

    function addFeaturedProdCtrlr($feature)
    {
        $productInstance = new Product();
        return $productInstance->addFeaturedProdCls($feature);
    }

    function addCategoriesCtrlr($catname)
    {
        $productInstance = new Product();
        return $productInstance->addCategoriesCls($catname);
    }


    //-- SELECT --//
function getAllCategoriesCtrlr()
{
    $productInstance = new Product();
    return $productInstance->getAllCategoriesCls();
}

function getAllProductsCtrlr()
{
    $productInstance = new Product();
    return $productInstance->getAllProductsCls();

}

function getOneProductCtrlr($prodid)
{
    $productInstance = new Product();
    return $productInstance->getOneProductCls($prodid);

}



    //-- UPDATE --//
    function updateProductsCtrlr($prodid, $prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds)
    {
        $productInstance = new Product();
        return $productInstance->updateProductsCls($prodid, $prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds);
    }

    function updateFeaturedProdCtrlr($feature, $fpid)
    {
        $productInstance = new Product();
        return $productInstance->updateFeaturedProdCls($feature, $fpid);
    }

    function updateCategoriesCtrlr($catid, $catname)
    {
        $productInstance = new Product();
        return $productInstance->updateCategoriesCls($catid, $catname);
    }

    //-- DELETE --//
    function delCategoryCtrlr($catid)
    {
        $productInstance = new Product();
        return $productInstance->delCategoryCls($catid);
    }

    function delProductCls($prodid)
    {
        $productInstance = new Product();
        return $productInstance->delProductCls($prodid);
    }

    function delFeaturedProdCtrlr($fpid)
    {
        $productInstance = new Product();
        return $productInstance->delFeaturedProdCls($fpid);
    }