<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HEADER -->
    <?php include(FRONT . DS . "header_edit.php") ?>
</head>
<body>
<!-- NAVBAR -->
<?php include(FRONT . DS . "nav_adm_edit.php") ?>
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
            <!-- EDIT PRODUCT -->
            <div class="col-lg-9">
                <?php include(FRONT . DS . "edit_product.php") ?>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<?php include(FRONT . DS . "footer.php") ?>
</div>
</body>
</html>
