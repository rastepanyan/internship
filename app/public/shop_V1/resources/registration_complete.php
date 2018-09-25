<?php
session_start();
require_once("../resources/connect.php");

//call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {

    $first_name = escape_string($conn, $_POST['first_name']);
    $last_name = escape_string($conn, $_POST['last_name']);
    $address = escape_string($conn, $_POST['address']);
    $post_code = escape_string($conn, $_POST['post_code']);
    $city = escape_string($conn, $_POST['city']);
    $country_code = escape_string($conn, $_POST['country_code']);
    $username = escape_string($conn, $_POST['username']);
    $password_1 = escape_string($conn, $_POST['password_1']);
    $password_2 = escape_string($conn, $_POST['password_1']);

    register($conn, $errors, $first_name, $last_name, $address, $post_code, $city, $country_code, $username, $password_1, $password_2);
}
