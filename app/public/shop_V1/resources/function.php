<?php

/*/check connection
if (!$conn->connect_errno) {

    echo "Connection established";
}
*/

//prevent MYSQL injection
function escape_string($conn, $val)
{
    return mysqli_real_escape_string($conn, trim($val));
}

function display_error($errors) {

    if (is_array($errors) > 0){
        echo '<div class="error">';
        foreach ($errors as $error){
            echo $error .'<br>';
        }
        echo '</div>';
    }
}

//redirect page
function redirect($location)
{
    sleep(0);
    return header("Location: $location", true,  301);
    exit;
}

//set message
function set_message($msg)
{

    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

//display message
function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

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

//add product
function add_product($conn)
{
    $title = $conn->escape_string($_REQUEST['title']);
    $price = $conn->escape_string($_REQUEST['price']);
    $description = $conn->escape_string($_REQUEST['description']);
    $date_of_creation = $conn->escape_string($_REQUEST['date_of_creation']);
    $images = $conn->escape_string($_REQUEST['images']);

    $sql = "INSERT INTO products (title, price, description, images, date_of_creation) VALUES ('$title', '$price', '$description', '$images', NOW($date_of_creation))";

    if ($conn->query($sql) === true) {
        redirect("../product_list.php");
    } else {
        echo "ERROR: Record not added $sql. " . $conn->error;
    }
}

//add to cart
function add_to_cart()
{
    if (empty($_SESSION['title'])) {
        $_SESSION['title'] = array();
        $_SESSION['price'] = array();
        $_SESSION['vat'] = array();
        $_SESSION['quantity'] = array();
        $_SESSION['subtotal'] = array();
    }

    array_push($_SESSION['title']);
    array_push($_SESSION['quantity']);

    $details = explode("|", S_POST[item]);
    array_push($_SESSION['title'], $details[0]);
}

//login user
function login_user($conn, $errors, $username, $password)
{
    if (empty($username)) {
        array_push($errors, "User name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $logged_in_user = $result->fetch_assoc();

            if ($logged_in_user['user_type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                //set_message("Welcome {$username}!");
                redirect("/shop_V1/admin/home.php");

            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                //set_message("Welcome {$username}!");
                redirect("/shop_V1/index.php");
            }
        } else {
            set_message("Username or Password are wrong!");
            redirect("login.php");
        }
}

function is_user()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

function is_admin()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

//register user
function register($conn, $errors, $first_name, $last_name, $address, $post_code, $city, $country_code, $username, $password_1, $password_2)
{

    if (empty($first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($last_name)) {
        array_push($errors, "Last name is required");
    }
    if (empty($address)) {
        array_push($errors, "Address is required");
    }
    if (empty($post_code)) {
        array_push($errors, "Post code is required");
    }
    if (empty($city)) {
        array_push($errors, "City is required");
    }
    if (empty($country_code)) {
        array_push($errors, "Country code is required");
    }
    if (empty($username)) {
        array_push($errors, "User name is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Password do not match!");
    }


    if (is_array($errors) == 0) {
        $password = md5($password_1);

        if (isset($_POST['user_type'])) {
            $user_type = escape_string($_POST['user_type']);
            $sql = "INSERT INTO users (first_name, last_name, address, post_code, city, country_code, user_type, username, password) 
					  VALUES('$first_name', '$last_name', '$address', '$post_code', '$city', '$country_code', '$user_type', '$username', '$password')";

            $conn->query($sql);
            redirect("home.php");
        } else {
            $sql = "INSERT INTO users (first_name, last_name, address, post_code, city, country_code, user_type, username, password)
					  VALUES('$first_name', '$last_name', '$address', '$post_code', '$city', '$country_code', 'user', '$username', '$password')";
            $conn->query($sql);
            redirect("home.php");
        }
    }
}

function send_message()
{
    if (isset($_POST['send_btn'])) {
        echo "It's working.";
    }
}
