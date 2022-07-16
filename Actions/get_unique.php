<?php 

if(isset($_POST["session"])){
    $_SESSION['id'] = $_SERVER['REMOTE_ADDR'];
    $id = $_SESSION['id'];
    header("Location: ../View/all_products.php");

}
?>