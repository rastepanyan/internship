<?php
session_start();
require_once("connect.php");

$id = $conn->escape_string($_POST['message_id']);

if (isset($_POST['remove_message_btn'])) {
    delete_message($conn, $id);
}
