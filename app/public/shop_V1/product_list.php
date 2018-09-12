<!-- connect to mysql server -->
<?php require_once("./resources/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HEADER -->
    <?php include(FRONT . DS . "header.php") ?>
</head>
<body>
<!-- NAVBAR -->
<?php include(FRONT . DS . "navbar.php") ?>
<div class="container">
    <div class="jumbotron">
        <div class="container-fluid text-center">
            <h1>Online Shop</h1>
            <p>Quality, Price and Assortment</p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a class="list-group-item active" href="">Product List</a>
                    <a class="list-group-item" href="order_list.php">Order List</a>
                    <hr>
                    <a class="btn btn-danger btn-md text-left" href="add/add_product.php">Add Product</a>
                </div>
            </div>
            <!-- PRODUCT LIST -->
            <div class="col-lg-9">
                <?php get_products($conn); ?>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include(FRONT . DS . "footer.php") ?>
</div>
</body>
</html>