<?php
session_start();
require_once("./resources/connect.php");

if (!is_user()) {
    ?>
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
                    <h1><strong>Log in first!</strong></h1>
                    <!-- HOME INFO -->
                </div>
                <?php include(FRONT . DS . "home.php") ?>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include(FRONT . DS . "footer.php") ?>
    </div>
    </body>
    </html>

    <?php
} else {
    ?>
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
                <!-- HOME INFO -->
                <?php include(FRONT . DS . "home.php") ?>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include(FRONT . DS . "footer.php") ?>
    </div>
    </div>
    </body>
    </html>
    <?php
}
?>

