<?php
//Require neccessary files
require('../Controllers/product_controller.php');
require('../Settings/core.php');

/*-- Add Category -- */
    //If the button as been clicked, add the new category to the database
    if(isset($_POST['addCaterBttn'])){
        $catname = $_POST['catname'];

        if (!empty($catname)){
        $result = addCategoriesCtrlr($catname); 
        $check = ($result == true) ? header("Location: ../View/test.php") : print "insertion failed";
        }
    }


/*-- Update Category -- */
    //THe new category name is gotten and changed in the database
    if(isset($_GET['updateCategoryBttn'])){
        $catid = $_GET['catid'];
        $catname = $_GET['catname'];

        $result = updateCategoriesCtrlr($catid, $catname);
       $check = ($result == true) ? header("Location: ../View/test.php") : print "Update failed";

    }


    /*-- Delete Category -- */
    //If the button as been clicked, take the info and pass it through the update brand controller
    if(isset($_GET['deleteCategoryBttn'])){
        $catid = $_GET['catid'];
        $result = delCategoryCtrlr($catid);

        $check = ($result == true) ? header("Location: ../View/test.php") : print "Delete failed";

    }

?>
