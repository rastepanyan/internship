<?php
session_start();
require_once("connect.php");

if (isset($_POST['delete_btn'])) {
    $id = $_POST['product_id'];
    delete_product($conn, $id);
}

if (isset($_POST['add_to_cart_btn'])) {
    add_to_cart();
}

if (isset($_POST['remove_from_cart_btn'])) {
    $delete = $_GET['action'];
    remove_from_cart();
}
