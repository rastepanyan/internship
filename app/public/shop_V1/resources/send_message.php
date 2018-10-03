<?php
session_start();
require_once("connect.php");

if (isset($_POST['send_btn'])) {

    $from_name = $conn->escape_string($_POST['your_name']);
    $email = $conn->escape_string($_POST['email']);
    $subject = $conn->escape_string($_POST['subject']);
    $the_message = $conn->escape_string($_POST['your_message']);

    send_message($conn, $from_name, $email, $subject, $the_message);
}
