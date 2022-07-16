<?php
require('../Controllers/product_controller.php');

/*-- Add Product -- */
//If the button as been clicked, take the info and pass it through the add brand controller
if (isset($_POST['addProductBttn'])) {

    //get data from form
    $prodcat = $_POST['prodcat'];
    $prodtitle = $_POST['prodtitle'];
    $prodprice = $_POST['prodprice'];
    $proddesc = $_POST['proddesc'];
    $prodkeywrds = $_POST['prodkeywrds'];

    //Declare variables for the image upload
    $targetDir = "../Images/Products/";
    $prodimg = $targetDir . basename($_FILES["prodimg"]["name"]);

    //upload the name of the file into the database
    move_uploaded_file($_FILES["prodimg"]["tmp_name"], $prodimg);

    $result = addProductsCtrlr($prodcat, $prodtitle, $prodprice, $proddesc, $ingredients, $allergens, $prodimg, $prodkeywrds);
    $check = ($result == true) ? header("Location: ../Admin/product_page.php") : print "Insertion failed";
}

/*-- Update Product -- */
//If the button as been clicked, take the info and pass it through the update brand controller
if (isset($_GET['updateProductBttn'])) {
    $prodid = $_GET['prodid'];
    $prodcat = $_GET['prodcat'];
    $prodtitle = $_GET['prodtitle'];
    $prodprice = $_GET['prodprice'];
    $proddesc = $_GET['proddesc'];
    $prodkeywrds = $_GET['prodkeywrds'];

    //Declare variables for the image upload
    $targetDir = "../Images/Products/";
    $prodimg = $targetDir . basename($_FILES["prodimg"]["name"]);
    echo $prodimg;

    // //upload the name of the file into the database
    // move_uploaded_file($_FILES["prodimg"]["tmp_name"], $prodimg);

    // $result = updateProductsCtrlr($prodid, $prodcat, $prodtitle, $prodprice, $proddesc, $prodimg, $prodkeywrds);
    // $check = ($result == true) ? header("Location: ../Admin/product_page.php") : print "Update failed";
}


/*-- Delete Product -- */
//If the button as been clicked, take the info and pass it through the update brand controller
if (isset($_GET['deleteProductBttn'])) {
    $prodid = $_GET['prodid'];

    $result = delProductCls($prodid);
    $check = ($result == true) ? header("Location: ../Admin/product_page.php") : print "Delete failed";
}

