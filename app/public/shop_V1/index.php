<?php
session_start();
require_once("./resources/connect.php");

if (is_admin()) {
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
                <h1>Online Shop Admin Panel</h1>
                <p>Quality, Price and Assortment</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <!-- GROUP SHORTCUTS -->
                    <?php include(FRONT . DS . "group_shortcut.php") ?>
                    <br>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
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
} elseif (is_user()) {
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
                    <br>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
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
    <?php include(FRONT . DS . "nav_usr.php") ?>
    <div class="container">
        <div class="jumbotron">
            <div class="container-fluid text-center">
                <h1>Online Shop</h1>
                <p>Quality, Price and Assortment</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h3><strong>Please, log in or register!</strong></h3>
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
}
?>

