<?php
session_start();
require_once("resources/connect.php");
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
                <img class="card-img-top img-fluid" src="img/contacts.jpg" alt="Contacts">
            </div>
            <!-- MESSAGES -->
            <div class="col-lg-9">
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h5><strong>Contact Us</strong></h5>
                    </div>
                    <?php receive_message($conn); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include(FRONT . DS . "footer.php") ?>
</div>
</div>
</body>
</html>