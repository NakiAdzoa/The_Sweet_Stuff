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
                <h2 class="h1">MORE CUSTOMISATION COMING SOON</h2>

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