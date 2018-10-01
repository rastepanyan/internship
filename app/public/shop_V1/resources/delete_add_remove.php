<?php
session_start();
require_once("connect.php");

$id = $conn->escape_string($_POST['product_id']);

if (isset($_POST['delete_btn'])) {
    delete_product($conn, $id);
}

if (isset($_POST['add_to_cart_btn'])) {
    add_to_cart();
}

if (isset($_POST['remove_from_cart_btn'])) {
    remove_from_cart($id);
}
