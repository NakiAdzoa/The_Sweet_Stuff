<?php

//inheriting the methods from connection
require('../Settings/db_connection.php');

class Product extends DbConnection
{

    //-- INSERT --//
    function addProductsCls($prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds)
    {
        return $this->query("INSERT INTO products( product_cat, product_title, product_price, product_desc, ingredients, allergens, product_image, product_keywords) VALUES ('$prodcat','$prodtitle','$prodprice','$proddesc','$ingredients','$allergens','$prodimg','$prodkeywrds')");
    }

    // function addFeaturedProdCls($feature)
    // {
    //     return $this->query("INSERT INTO featuredprod(feature) VALUES ('$feature')");
    // }

    function addCategoriesCls($catname)
    {
        return $this->query("INSERT INTO categories(cat_name) VALUES ('$catname')");
    }


    //-- SELECT --//
function getAllCategoriesCls()
{
    return $this->fetch("SELECT * FROM categories");
}

function getAllProductsCls()
{
    return $this->fetch("SELECT * FROM products");
}

function getProductImagesCls()
{
    return $this->fetch("SELECT product_image FROM products");
}

function getOneProductCls($prodid)
{
    return $this->fetchOne("SELECT * FROM products WHERE product_id='$prodid'");
}


    //-- UPDATE --//
    function updateProductsCls($prodid, $prodcat, $prodtitle, $prodprice, $proddesc, $prodimg, $prodkeywrds)
    {
        return $this->query("UPDATE products SET product_cat='$prodcat', product_title='$prodtitle', product_price='$prodprice', product_desc='$proddesc', product_image='$prodimg', product_keywords='$prodkeywrds' WHERE product_id='$prodid'");
    }

    // function updateFeaturedProdCls($feature, $fpid)
    // {
    //     return $this->query("UPDATE featuredprod SET feature='$feature' WHERE fpid = '$fpid'");
    // }

    function updateCategoriesCls($catid, $catname)
    {
        return $this->query("UPDATE categories SET cat_name = '$catname' WHERE cat_id = '$catid'");
    }



    //-- DELETE --//

    function delCategoryCls($catid)
    {
        return $this->query("DELETE FROM categories WHERE cat_id='$catid'");
    }

    function delProductCls($prodid)
    {
        return $this->query("DELETE FROM products WHERE product_id='$prodid'");
    }

//     function delFeaturedProdCls($fpid)
// {
//     return $this->query("DELETE FROM featuredprod WHERE fpid = '$fpid'");
// }

}
