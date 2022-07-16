<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/cart_controller.php');
include_once "../View/gen_header.php";

?>
<title>The Sweet Stuff | Cravings Satisfied</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <div class="site-footer-desktop-secondary">
            <div class="site-powered-by">
                <a rel="noopener">We ONLY Delivery Within Accra!</a>
            </div>
        </div>

        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <br><br>

        <!-- START OF THE DELIVERY SECTION -->
        <section style="background-position: none">
            <h2>Delivery</h2>

            <form action="../Actions/get_orders_proc.php" method="post">
                <label for="fullname">First name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter Your Name Please..." required>
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter Your Email Please..." required>
                <br>
                <label for="phnumber">Phone Number:</label>
                <input type="text" name="phnumber" id="phnumber" placeholder="Enter Your Phone Number Please..." required>
                <br>
                <label for="ddt">Delivery Date & Time:</label>
                <input type="datetime-local" name="ddt" id="ddt" placeholder="Please Select the Delivery Date" required>
                <br>
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" placeholder="Sakumono, Community 18, Landmark" required>
                <br>

                <input type="submit" value="Submit" name="deli" value="PROCEED TO CHECKOUT" class="btn btn-brand">
            </form>
        </section>

        <br><br>

        <!-- START OF THE PICKUP SECTION -->
        <section style="background-position: none">
            <h2>Pickup</h2>
            <form action="../Actions/get_orders_proc.php" method="post">
                <label for="fullname">First name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter Your Name Please..." required>
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter Your Email Please..." required>
                <br>
                <label for="phnumber">Phone Number:</label>
                <input type="text" name="phnumber" id="phnumber" placeholder="Enter Your Phone Number Please..." required>
                <br>
                <label for="pdt">Pickup Date & Time:</label>
                <input type="datetime-local" name="pdt" id="pdt" placeholder="Please Select the Delivery Date" required>
                <br>

                <input type="submit" value="Submit" name="pickup" value="PROCEED TO CHECKOUT" class="btn btn-brand">
            </form>

        </section>

        <section class="c-one-col--text content container revealable">
            <h2>Follow Us</h2>
        </section>
    </main>
</div>

<?php include_once "../View/gen_footer.php"; ?>
</body>

</html>