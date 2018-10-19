<?php
session_start();
require_once("connect.php");

if (isset($_POST['login_btn'])) {

    $username = $conn->escape_string($_POST['username']);
    $password = $conn->escape_string(md5($_POST['password']));

    login_user($conn, array(), $username, $password);
}
