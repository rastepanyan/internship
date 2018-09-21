<?php
ob_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("FRONT") ? null : define("FRONT", __DIR__ . DS . "templates/front");
defined("BACK") ? null : define("BACK", __DIR__ . DS . "templates/back");

$SERVER_NAME = "mysql-db";
$USER_NAME = "root";
$PASSWORD = "123456";
$DB_NAME = "myDB";

$conn = new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DB_NAME);

require_once("function.php");
