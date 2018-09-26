<?php
session_start();
require_once("connect.php");

if (isset($_POST['send_btn'])) {

    $to = "email@address.com";
    $from_name = $_POST['your_name'];
    $email = $_POST['email'];
    $the_message = $_POST['your_message'];

    $headers = "From: {$from_name} {$email}";
    $result = mail($to, $the_message, $headers);

    send_message($result);
}
