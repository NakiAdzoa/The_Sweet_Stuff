<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/product_controller.php');
include_once "../View/gen_header.php";

?>
<title>The Sweet Stuff | Cravings Satisfied</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <section id="hero" class="hero hero--no-content hero--gallery hero--fullheight revealable">
            <div class="gallery gallery--fit">
                <li>
                    <div class="gallery__item gallery__item-fallback" style="background-image: url('../Images/thesweetstuff14.jpg?w=1200&fit=max&auto=compress,format');background-position: none;">
                        <img class="sr-only" alt="">
                    </div>
                    <span class="sr-only">Slide 1 of 3</span>
                </li>
                <li>
                    <div class="gallery__item gallery__item-fallback" style="background-image: url('../Images/thesweetstuff17.jpg?w=1200&fit=max&auto=compress,format');background-position: none;">
                        <img class="sr-only" alt="">
                    </div>
                    <span class="sr-only">Slide 2 of 3</span>
                </li>
                <li>
                    <div class="gallery__item gallery__item-fallback" style="background-image: url('../Images/thesweetstuff12.jpg?w=1200&fit=max&auto=compress,format');background-position: none;">
                        <img class="sr-only" alt="">
                    </div>
                    <span class="sr-only">Slide 3 of 3</span>
                </li>
        </section>
        <section class="c-tout-overlay c-tout-overlay--dimmed revealable" style="background-image: url('');background-position: none">
            <div class="container">
                <h2 class="h1">Since 2021</h2>
                <p> This is what The Sweet Stuff is about and they offer</p>

            </div>
        </section>
        <section class="c-split c-split--vcenter revealable">
            <div class="c-split__col c-split__col--empty">
                <div class="c-split__col-inner">
                    <h2 class="h1">Our Products</h2>

                    <img src="../Images/sweetstuff6.jpeg" width="140" height="140">
                    <img src="https://cdn.shopify.com/s/files/1/0565/9757/7916/collections/brownies_500x600_crop_center.png?v=1632993284" width="140" height="140">
                    <a href="" class="btn btn-brand">View More</a>
                </div>
            </div>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                    <div class="c-split__content content">
                        <h2 class="h2 c-split__heading">Order NOW</h2>
                        <!-- <form method="POST" action="../Actions/get_unique.php">
                            <input type="submit" name="session" id="session" value="ORDER NOW" class="btn btn-brand">
                        </form> -->
                        <a href="../View/all_products.php" class="btn btn-brand">Order NOW</a>
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