<?php
session_start();
require_once("../resources/connect.php");

//call the login_user() function if login_btn is clicked
if (isset($_POST['login_btn'])) {

    $username = escape_string($conn, $_POST['username']);
    $password = escape_string($conn, md5($_POST['password']));

    login_user($conn, array(), $username, $password);
}
