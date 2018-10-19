<?php
session_start();
require_once("connect.php");
if (isset($_GET['logout'])) {

    $logout = escape_string($conn, $_POST['logout']);
    logout($conn);
}
