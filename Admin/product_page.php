<?php
//include the necceary files 
require("../Settings/core.php");
require('../Controllers/product_controller.php');
include_once "../Admin/admin_header.php";

?>
<title>The Sweet Stuff | Admin Page</title>

<div class="site-content">
    <main class="site-content__main page-id--68769">

        <br><br>
        <section style="background-position: none">
            <h1>Category Section</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- INSERT ROW STARTS -->

                    <form method="POST" action="../Actions/category_proc.php" id="form">
                        <tr>
                            <td></td>

                            <td>
                                <input class="form-control" type="text" placeholder="Category Name" name='catname' id='catname'>
                            </td>

                            <td class="btn btn-brand">
                                <button type="submit" name="addCaterBttn">Add Category</button><br>
                            </td>
                        </tr>
                    </form>

                    <!-- UPDATE/DELETE ROW STARTS -->
                    <?php
                    $categories = getAllCategoriesCtrlr();
                    foreach ($categories as $c) {
                    ?>
                        <form method="GET" action="../Actions/category_proc.php" id="form">
                            <tr>
                                <td>
                                    <input type='hidden' name='catid' value="<?php echo $c['cat_id'] ?>">
                                </td>
                                <td>
                                    <input type='text' name='catname' value="<?php echo $c['cat_name'] ?>">
                                </td>

                                <td class="btn btn-brand">
                                    <button type="submit" name="updateCategoryBttn">Update</button>
                                </td>
                                <td class="btn btn-brand">
                                    <button type="submit" name="deleteCategoryBttn">Delete</button>
                                </td>
                            </tr>
                        </form>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </section>

        <br><br>
        <section style="background-position: none">
            <h1>Product Section</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Product Category</th>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product Desc</th>
                        <th>Product Image</th>
                        <th>Product Keywords</th>
                        <th> Actions </th>
                    </tr>
                </thead>

                <tbody>

                    <!-- INSERT ROW STARTS -->
                    <form method="POST" action="../Actions/product_proc.php" enctype="multipart/form-data">
                        <tr>
                            <td></td>

                            <td>
                                <select class="form-control" name="prodcat" aria-label="Default select example">
                                    <option value="">--Select Product Category--</option>
                                    <?php
                                    $categories = getAllCategoriesCtrlr();
                                    foreach ($categories as $c) {
                                    ?>
                                        <option value="<?php echo $c['cat_id']; ?>"> <?php echo $c['cat_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>

                            <td>
                                <input class="form-control" type="text" placeholder="Product title" name="prodtitle" id="prodtitle">
                            </td>

                            <td>
                                <input class="form-control" type="text" placeholder="Product price" name="prodprice" id="prodprice">
                            </td>

                            <td>
                                <input class="form-control" type="text" placeholder="Product description" name="proddesc" id="proddesc">
                            </td>

                            <td>
                                <input class="form-control" type="file" placeholder="Product image" name="prodimg" id="prodimg">
                            </td>

                            <td>
                                <input class="form-control" type="text" placeholder="Product keywords" name="prodkeywrds" id="prodkeywrds">
                            </td>

                            <td class="btn btn-brand">
                                <button type="submit" name="addProductBttn">Add Product</button><br>
                            </td>
                        </tr>
                    </form>

                    <!-- UPDATE/DELETE ROW STARTS -->
                    <?php
                    $products = getAllProductsCtrlr();
                    foreach ($products as $p) {
                    ?>
                        <form method="GET" action="../Actions/product_proc.php" enctype="multipart/form-data">
                            <tr>
                                <td>
                                    <input type='hidden' name='prodid' value="<?php echo $p['product_id'] ?>">
                                </td>
                                <td>
                                    <select class="form-control" name="prodcat" aria-label="Default select example">
                                        <option value="<?php echo $p['product_cat']; ?>"> <?php echo $p['product_cat']; ?></option>
                                        <?php
                                        $categories = getAllCategoriesCtrlr();
                                        foreach ($categories as $c) {
                                        ?>
                                            <option value="<?php echo $c['cat_name']; ?>"> <?php echo $c['cat_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>

                                <td>
                                    <input type="text" placeholder="Product title" name="prodtitle" value="<?php echo $p['product_title'] ?>">
                                </td>

                                <td>
                                    <input type="text" placeholder="Product price" name="prodprice" value="<?php echo $p['product_price'] ?>">
                                </td>

                                <td>
                                    <input type="text" placeholder="Product description" name="proddesc" value="<?php echo $p['product_desc'] ?>">
                                </td>

                                <td>
                                    <input type="file" placeholder="Product image" name="prodimg" value="<?php echo $p['product_image']; ?>">
                                </td>

                                <td>
                                    <input type="text" placeholder="Product keywords" name="prodkeywrds" value="<?php echo $p['product_keywords'] ?>">
                                </td>

                                <td class="btn btn-brand">
                                    <button type="submit" name="updateProductBttn">Update Product Info</button><br>
                                </td>

                                <td class="btn btn-brand">
                                    <button type="submit" name="deleteProductBttn">Delete Product</button><br>
                                </td>
                            </tr>
                        <?php } ?>
                        </form>
                </tbody>
            </table>
        </section>

        <br><br>

        <section style="background-position: none">
            <h1>Feature Header Section</h1>
            <div class="c-split__col ">
                <div class="c-split__col-inner">
                    <div class="c-split__content content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>First Feature Image</th>
                                    <th>Second Feature Image</th>
                                    <th>Third Feature Image</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- INSERT ROW STARTS -->

                                <form method="POST" action="../Actions/product_proc.php" enctype="multipart/form-data">
                                    <tr>
                                        <td></td>

                                        <td>
                                            <input class="form-control" type="file" placeholder="First Feature Image" name="featureone" id="featureone">
                                        </td>

                                        <td>
                                            <input class="form-control" type="file" placeholder="Second Feature Image" name="featuretwo" id="featuretwo">
                                        </td>

                                        <td>
                                            <input class="form-control" type="file" placeholder="Third Feature Image" name="featurethree" id="featurethree">
                                        </td>


                                        <td class="btn btn-brand">
                                            <button type="submit" name="addFeatureBttn">Add Features</button><br>
                                        </td>
                                    </tr>
                                </form>

                                <!-- UPDATE/DELETE ROW STARTS -->
                                <?php
                                $categories = getAllCategoriesCtrlr();
                                foreach ($categories as $c) {
                                ?>
                                    <form method="GET" action="../Actions/category_proc.php" id="form">
                                        <tr>
                                            <td>
                                                <input type='hidden' name='catid' value="<?php echo $c['cat_id'] ?>">
                                            </td>
                                            <td>
                                                <input type='text' name='catname' value="<?php echo $c['cat_name'] ?>">
                                            </td>

                                            <td class="btn btn-brand">
                                                <button type="submit" name="updateCategoryBttn">Update</button>
                                            </td>
                                            <td class="btn btn-brand">
                                                <button type="submit" name="deleteCategoryBttn">Delete</button>
                                            </td>
                                        </tr>
                                    </form>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php //include_once "../Admin/admin_footer.php"; 
?>
</body>

</html>