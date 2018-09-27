<?php
session_start();
require_once("connect.php");

$id = $_POST['product_id'];

if (isset($_POST['delete_btn'])) {

    delete_product($conn, $id);
}

if (isset($_POST['add_to_cart_btn'])) {

    add_to_cart();
}
