<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/cart_controller.php');
include_once "../Admin/admin_header.php";

?>
<title>The Sweet Stuff | Orders Page</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">

        <br><br>
        <section style="background-position: none">
            <h1>Order Details</h1>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                <div class="c-split__content content" style="margin-right: 300px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product ID</th>
                                    <th>Order Details</th>
                                    <th>Order Quantity</th>
                                    <th>Order Invoice Number</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th> Actions </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $orders = getAllOrdersCtrlr();
                                foreach ($orders as $o) {
                                ?>


                                    <form method="GET" action="../Actions/order_proc.php" enctype="multipart/form-data">
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Order ID" name="orderid" value="<?php echo $o['order_id'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Product ID" name="prodid" value="<?php echo $o['product_id'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Details" name="specifics" value="<?php echo $o['specifics'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Quantity" name="qty" value="<?php echo $o['qty'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Invoice Number" name="invoice" value="<?php echo $o['invoice_no'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Date" name="odate" value="<?php echo $o['order_date'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Status" name="orderstatus" value="<?php echo $o['order_status'] ?>">
                                            </td>

                                            <td>
                                                <button type="submit" class="btn btn-brand" name="updateStatusBttn">Update Order Status</button><br>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                    </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <section style="background-position: none">
            <h1>Deliveries</h1>
            <div class="c-split__col">
                <div class="c-split__col-inner">
                    <div class="c-split__content content" style="margin-right: 300px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Delivery Date and Time</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th> Order Status </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $deliveries = getAllDeliveriesCtrlr();
                                foreach ($deliveries as $d) {
                                ?>


                                    <form method="GET" action="../Actions/order_proc.php" enctype="multipart/form-data">
                                        <tr>
                                            <td>
                                                <input type="text" name="orderid" value="<?php echo $d['order_id'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" name="cname" value="<?php echo $d['full_name'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" name="cemail" value="<?php echo $d['email'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="datetime" name="ddt" value="<?php echo $d['date_time'] ?>" readonly>
                                            </td>


                                            <td>
                                                <input type="text" name="phnumber" value="<?php echo $d['phone_number'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" name="location" value="<?php echo $d['location'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" name="orderstatus" value="<?php echo $d['order_status'] ?>" readonly>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                    </form>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <section style="background-position: none">
            <h1>Pickups</h1>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                <div class="c-split__content content" style="margin-right: 300px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Phone Number</th>
                                    <th>Pickup Date and Time</th>
                                    <th>Pickup Time</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $pickups = getAllPickupsCtrlr();
                                foreach ($pickups as $p) {
                                ?>


                                    <form method="GET" action="../Actions/order_proc.php" enctype="multipart/form-data">
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Order ID" name="orderid" value="<?php echo $p['order_id'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Customer Name" name="cname" value="<?php echo $p['full_name'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Customer Email" name="cemail" value="<?php echo $p['email'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Phone Number" name="phnumber" value="<?php echo $p['phone_number'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Pickup date and time" name="pickuptime" value="<?php echo $p['date_time'] ?>" readonly>
                                            </td>

                                            <td>
                                                <input type="text" placeholder="Order Status" name="orderstatus" value="<?php echo $p['order_status'] ?>" readonly>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </form>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <br><br>

    </main>
</div>

<?php //include_once "../Admin/admin_footer.php"; 
?>
</body>

</html>