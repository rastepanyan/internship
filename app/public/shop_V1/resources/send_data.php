<?php

require "connect.php";

$title = $conn->real_escape_string($_REQUEST['title']);
$price = $conn->real_escape_string($_REQUEST['price']);
$description = $conn->real_escape_string($_REQUEST['description']);
$date_of_creation = $conn->real_escape_string($_REQUEST['date_of_creation']);
$images = $conn->real_escape_string($_REQUEST['images']);

$sql = "INSERT INTO products (title, price, description, images, date_of_creation) VALUES ('$title', '$price', '$description', '$images', NOW())";

if ($conn->query($sql) === true) {
    echo "Records successfully added.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
