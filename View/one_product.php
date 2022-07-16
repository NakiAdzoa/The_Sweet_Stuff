<!-- add then might add the you may also like part 
and the space to give custom orders (sugargoat) and store that in the order details 
then redirect to products (like Mah Ze Dahr) or give them the option to continue shopping  -->

<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/product_controller.php');
include_once "../View/gen_header.php";

$prodid = isset($_GET['pid']) && is_numeric($_GET['pid']) ? (int)$_GET['pid'] : 1;

if (isset($prodid)) {

    $product = getOneProductCtrlr($prodid);
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../JS/qty_bttn.js"></script>
<link rel="stylesheet" href="../CSS/qty_bttn.css">

<title>The Sweet Stuff | <?php echo $product['product_title'] ?></title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <section id="hero" class="hero hero--no-content hero--gallery hero--fullheight revealable">
            <div class="gallery gallery--fit">
                <li>
                    <div class="gallery__item gallery__item-fallback" style="background-image: url('../Images/thesweetstuff13.jpg?w=1200&fit=max&auto=compress,format');background-position: none;">
                        <img class="sr-only" alt="">
                    </div>
                </li>
        </section>

        <section class="c-split c-split--vcenter revealable">
            <div class="c-split__col c-split__col--empty">
                <div class="c-split__col-inner">
                    <img src="<?php echo $product['product_image']; ?>" width="300" height="300">
                    <div>
                        <p><?php echo $product['product_desc'] ?></p>
                        <br>
                        <p>INGREDIENTS</p>
                        <p><?php echo $product['ingredients'] ?></p>
                        <p>ALLERGENS:</p>
                        <p><?php echo $product['allergens'] ?></p>
                    </div>
                </div>
            </div>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                    <div class="c-split__content content">
                        <h2 class="h2 c-split__heading "><?php echo $product['product_title'] ?></h2>

                        <form action="../Actions/add_to_cart.php" method="POST" class="form">
                            <p>CUSTOMIZE YOUR ORDER!</p>
                            <p> Add or remove ingredients, specify toppings and anything else you want to customise!
                            </p>
                            <input name="details" placeholder="(optional)" rows="4" cols="50">
                            <br><br>

                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="qty" value="1" title="qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <br>
                            <input type="hidden" name="prodid" value="<?= $product['product_id'] ?>">
                            <input type="submit" name="addToCart" value="ADD TO CART" class="btn btn-brand">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-one-col--text content container revealable">
            <h2>Follow Us</h2>
        </section>
    </main>
</div>
<?php include_once "../View/gen_footer.php"; ?>
</body>

</html>