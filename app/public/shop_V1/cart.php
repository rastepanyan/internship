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
                <!-- GROUP SHORTCUTS -->
                <?php include(FRONT . DS . "group_shortcut.php") ?>
            </div>
            <!-- ADD TO CART -->
            <?php include(FRONT . DS . "add_cart.php") ?>
        </div>
        <!-- FOOTER -->
        <?php include(FRONT . DS . "footer.php") ?>
    </div>
</div>
</body>
</html>