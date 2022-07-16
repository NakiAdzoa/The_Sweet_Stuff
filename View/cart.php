<?php

require('../Settings/core.php');
require('../Controllers/cart_controller.php');
include_once "../View/gen_header.php";

?>
<link rel="stylesheet" href="../CSS/popup.css">
<title>The Sweet Stuff | Cravings Satisfied</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <br><br>
        <h1>Your Cart</h1>
        <br><br>
        <div class="container">
            <div class="row">
                <?php
                // if ($products == 0) {
                //     echo "Your Cart is Empty!";
                // } else {
                $cartitems = getAllCartCtrlr($_SESSION['id']);
                foreach ($cartitems as $x) {
                ?>
                    <img src="<?php echo $x["product_image"]; ?>" width="140" height="140">
                    <div class=''>
                        <br><br>
                        <h3><?php echo $x['product_title']; ?></h3>
                        <br><br>
                        <p class='card-text'>GHC: <?php echo $x['product_price']; ?></p>
                        <br><br>
                        <p class='card-text'>Quantity: <?php echo $x['qty']; ?></p>
                        <br><br>
                        <?php $eachAmount = $x['product_price'] * $x['qty'];
                        $_SESSION['totalAmount'] = $_SESSION['totalAmount'] + $eachAmount;

                        ?>
                        <p class='card-text'>Total Amount: <?php echo $eachAmount; ?></p>
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus">
                            <input type="number" step="1" min="1" max="" name="qty" value="1" title="qty" class="input-text qty text" size="4" pattern="" inputmode="">
                            <input type="button" value="+" class="plus">
                        </div>
                        <br><br>
                        <a href='../Actions/remove_from_cart.php?pid=<?= $x['p_id']; ?>' class='btn btn-brand'>Remove from Cart</a>
                        <br><br>
                    </div>
                    <br><br>
            </div>
        </div>
</div>
<?php
                }
?>
<br><br>
<br>
</div>
</div>
<div class="container">
    <label for="total amount" class="form-label">Total Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $_SESSION['totalAmount']; ?>" readonly>
    <br>

    <a href="../View/all_products.php" target="_top" name="continue" class="btn btn-brand">Continue Shopping</a>

    <!-- <button type="submit" class="btn btn-brand" onclick="openPopup()">Checkout</button>
    <div class="popup" id="popup" style="background-image: url('?w=&fit=max&auto=compress,format');background-position: none;">
        <h3>One More Thing </h3> -->
    <a href="../View/get_orders.php" target="_top" class="btn btn-brand">Schedule Pickup / Delivery</a>
</div>
</div>

<script>
    // let popup = document.getElementById("popup");

    // function openPopup() {
    //     popup.classList.add("open-popup");
    //     popup.classList.toggle('active')
    // }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/product_search.js"></script>

<section class="c-one-col--text content container revealable">
    <h2>Follow Us</h2>
</section>
</main>
</div>
<?php include_once "../View/gen_footer.php"; ?>
</body>

</html>