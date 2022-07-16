<?php
//require or include the neccessary files
require("../Settings/core.php");
require('../Controllers/cart_controller.php');
include_once "../View/gen_header.php";

//take the cart id and from the page url and pass it through some controllers 
$id = $_SESSION['id'];
$dinfo = getPickupInfoCtrlr($_SESSION['id']);
?>

<title>The Sweet Stuff | Almost There</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">
        <div class="site-footer-desktop-secondary">
        </div>

        <h1 class="sr-only">Home</h1>
        <span id="main-content" class="sr-only">Main content starts here, tab to start navigating</span>
        <br><br>
        <h1>CHECKOUT</h1>
        <br><br>
        <section class="c-split c-split--vcenter revealable">
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                    <div class="c-split__content content">
                    <h3>PICKUP INFO</h3>

                        <form>
                            <form action="../Actions/get_orders_proc.php" method="post">
                                <label for="fullname">First name:</label>
                                <input type="text" name="fullname" id="fullname" value="<?php echo $dinfo['full_name']; ?>" readonly required>
                                <br>
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" value="<?php echo $dinfo['email']; ?>" required>
                                <br>
                                <label for="phnumber">Phone Number:</label>
                                <input type="text" name="phnumber" id="phnumber" value="<?php echo $dinfo['phone_number']; ?>" readonly required>
                                <br>
                                <label for="ddt">Pickup Date & Time:</label>
                                <input type="datetime-local" name="pdt" id="pdt" value="<?php echo $dinfo['date_time']?>"readonly>
                                <br>
                    </div>
                </div>
            </div>
            <div class="c-split__col c-split__col--empty">
                <div class="c-split__col-inner">
                    <img src="../Images/thesweetstuff22.jpg" width="" height="">

                </div>
            </div>
        </section>

        <section class="c-split c-split--vcenter revealable">
            <div class="c-split__col c-split__col--empty">
                <div class="c-split__col-inner">
                    <img src="../Images/sweetstuff12.jpeg" width="" height="">

                </div>
            </div>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                    <div class="c-split__content content">

                        <form id="paymentForm">
                            <div>
                                <h3>PAYMENT</h3>
                                <p><?php //echo $_SESSION['totalAmount'];?></p>
                                <input type="text" class="" name="email" id="email" value="<?php echo $dinfo['email']; ?>" readonly required>
                                <br><br>
                                <input type="text" class="" id="amount" name="amount" value="<?php echo $_SESSION['totalAmount'] ?>" readonly required />
                            </div>
                            <button type="button" class="btn btn-primary" onclick="payWithPaystack()">Pay with PayStack</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php include_once "../View/gen_footer.php"; ?>

<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="../JS/paystack.js"></script>

</body>

</html>