<?php
session_start();
require_once("connect.php");

if (isset($_POST['register_btn'])) {

    $first_name = $conn->escape_string($_POST['first_name']);
    $last_name = $conn->escape_string($_POST['last_name']);
    $address = $conn->escape_string($_POST['address']);
    $post_code = $conn->escape_string($_POST['post_code']);
    $city = $conn->escape_string($_POST['city']);
    $country_code = $conn->escape_string($_POST['country_code']);
    $username = $conn->escape_string($_POST['username']);
    $password_1 = $conn->escape_string($_POST['password_1']);
    $password_2 = $conn->escape_string($_POST['password_1']);

    register($conn, $errors, $first_name, $last_name, $address, $post_code, $city, $country_code, $username, $password_1, $password_2);
}
