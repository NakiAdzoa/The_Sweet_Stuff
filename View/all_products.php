<!-- 
a page redirect (Mah Ze Dahr) to the one product page
- add the ingredients and allegry info to the desciption

When the add to cart is selected, it processes and saves and shows the count with the cart button then redirects to the view cart page side pop up 
Then we have pick up tab, then we have delivery tab to fill. 
then after each, we have proceed to check out 
if the user selects checkout then there is a popup to select delivery or pickup

WHen you select the cart, its a side pop up (Lost larson) too 
- When checkout is selected, if, there is a checkout_delivery page and a check out pick up page 
 -->

<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/product_controller.php');
include_once "../View/gen_header.php";

// $id = $_SESSION['id'];
?>

<title>The Sweet Stuff | Cravings Satisfied</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <br><br>
        <h1>Our Yummy Brownies</h1>
        <?php

        // $current_page = isset($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 1;
        $products = getAllProductsCtrlr();
        ?>
    
        <br><br>
        <div class='products-wrapper'>
            <?php foreach ($products as $x) : ?>

                <a href="../View/one_product.php?pid=<?= $x['product_id'] ?>" class="product">
                    <img src="<?php echo $x['product_image']; ?>" width="200" height="200" alt="<?= $x['product_title'] ?>">
                    <br><br>
                    <span class="name"><?= $x['product_title'] ?></span>
                    <br><br>
                    <span class="description"><?= $x['product_desc'] ?></span>
                    <br><br>
                    <span class="price">
                        GHC: <?= $x['product_price'] ?>
                    </span>
                    <br><br>
                </a>
                <a href="../View/one_product.php?pid=<?= $x['product_id'] ?>" class="btn btn-brand">VIEW MORE</a>
        </div>
        <br><br>
</div>
<?php endforeach; ?>
</main>
</div>

</div>

<!-- other scripts needed to for the products display page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/product_search.js"></script>

<section class="c-one-col--text content container revealable">
    <h2>Follow Us</h2>
</section>

<?php include_once "../View/gen_footer.php"; ?>
</body>

</html>