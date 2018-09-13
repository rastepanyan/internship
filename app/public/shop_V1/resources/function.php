<?php

//check connection
if (!$conn->connect_errno) {

    echo "Connection established";
}

//get products
function get_products($conn)
{
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $counter = 0;

    while ($row = $result->fetch_assoc()) {
        if ($counter == 0 || $counter % 3 == 0) {
            echo "<div class='row'>";
        }

        include("./resources/templates/front/products_all.php");
        $counter++;

        if ($counter % 3 == 0) {
            echo "</div>";
        }
    }
}

//show products
function show_product($conn, $id)
{
    $sql = "SELECT * FROM products WHERE product_id = " . $id;
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include_once("./resources/templates/front/product_item.php");
    }
}

//get orders
function get_orders($conn)
{
    $sql = "SELECT orders.order_id, users.user_id, CONCAT(first_name, \" \", last_name) AS names, order_date, amount
            FROM users INNER JOIN orders USING(user_id)
            GROUP BY orders.order_id";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include("./resources/templates/front/orders_all.php");
    }
}

//show orders
function show_order($conn, $id)
{
    $sql = "SELECT order_id, positions, product_id, quantity, item_price 
            FROM orderlines
            INNER JOIN orders USING(order_id)
            WHERE order_id =  " . $id;
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include_once("./resources/templates/front/order_item.php");
    }
}

