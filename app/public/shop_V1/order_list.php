<?php
session_start();
require_once("resources/connect.php");

if (!is_admin()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- HEADER -->
        <?php include(FRONT . DS . "header.php") ?>
    </head>
    <body>
    <!-- NAVBAR -->
    <?php include(FRONT . DS . "nav_usr.php") ?>
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
                <!-- ORDER LIST -->
                <div class="col-lg-9">
                    <?php get_single_order($conn, $_SESSION['user']['user_id']); ?>
                </div>
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
    <?php include(FRONT . DS . "nav_adm.php") ?>
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
                <!-- ORDER LIST -->
                <div class="col-lg-9">
                    <?php get_orders($conn); ?>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include(FRONT . DS . "footer.php") ?>
    </div>
    </body>
    </html>
    <?php
}
?>