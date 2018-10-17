<?php

/*
 *  HELPER FUNCTIONS
 */

//prevent MYSQL injection
function escape_string($conn, $val)
{
    return mysqli_real_escape_string($conn, trim($val));
}

//query
function query($conn, $sql)
{
    return mysqli_query($conn, $sql);
}

//fetch_assoc
function fetch_assoc($result)
{
    mysqli_fetch_assoc($result);
}

//display errors
function display_error()
{
    $errors = array();
    if (is_array($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

//redirect page
function redirect($location)
{
    sleep(0);
    header("Location: $location");
    exit;
}

/*
 *  END
 */

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

//show product
function show_product($conn, $id)
{
    $sql = "SELECT * FROM products WHERE product_id = '" . $id . "'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include("./resources/templates/front/product_item.php");
    }
}

//add product
function add_product($conn)
{
    $title = $conn->escape_string($_REQUEST['title']);
    $price = $conn->escape_string($_REQUEST['price']);
    $short_description = $conn->escape_string($_REQUEST['short_description']);
    $full_description = $conn->escape_string($_REQUEST['full_description']);
    $date_of_creation = $conn->escape_string($_REQUEST['date_of_creation']);
    $images = $conn->escape_string($_REQUEST['images']);

    $sql = "INSERT INTO products (title, price, short_description, full_description, images, date_of_creation) 
            VALUES ('$title', '$price', '$short_description', '$full_description', '$images', NOW($date_of_creation))";

    if ($conn->query($sql) === true) {
        redirect("../product_list.php");
    } else {
        echo array_push($errors, "ERROR: Product not added!");
    }
}

//edit product
function edit_product($conn, $id)
{
    $sql = "SELECT title, price, short_description, full_description 
            FROM products
            WHERE product_id =  '" . $id . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        include("../editing.php");
    }
}

//save edited product
function save_edited_product($conn, $id)
{
    $title = $conn->escape_string($_POST['title']);
    $price = $conn->escape_string($_POST['price']);
    $short_description = $conn->escape_string($_POST['short_description']);
    $full_description = $conn->escape_string($_POST['full_description']);
    $date_of_creation = $conn->escape_string($_POST['date_of_creation']);
    $images = $conn->escape_string($_POST['images']);

    $sql = "UPDATE products 
            SET title = '$title', price = '$price', short_description = '$short_description', full_description = '$full_description', date_of_creation = '$date_of_creation', images = '$images' 
            WHERE product_id = '" . $id . "'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        redirect("../product_single.php");
    }
}

//delete product
function delete_product($conn, $id)
{
    $sql = "DELETE FROM products WHERE product_id = '" . $id . "'";

    if ($conn->query($sql) === true) {
        redirect("../product_list.php");
    } else {
        array_push($errors, "ERROR: Product not deleted!");
    }
}

//get orders
function get_orders($conn)
{
    $sql = "SELECT orders.order_id, users.user_id, CONCAT(users.first_name, \" \", users.last_name) AS `names`, order_date, amount
            FROM users 
            INNER JOIN orders USING(user_id)
            GROUP BY orders.order_id";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include("./resources/templates/front/orders_all.php");
    }
}

//get single order
function get_single_order($conn, $user_id)
{
    $sql = "SELECT orders.order_id, users.user_id, CONCAT(users.first_name, \" \", users.last_name) AS `names`, order_date, amount
    FROM users 
    INNER JOIN orders USING(user_id)
    WHERE users.user_id = '" . $user_id . "'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 1) {
        while ($row = $result->fetch_assoc()) {
            include("./resources/templates/front/orders_all.php");
        }
    }
}

//show order
function show_order($conn, $id)
{
    $sql = "SELECT title, order_id, `position`, item_price, quantity
            FROM products
            INNER JOIN orderlines USING(product_id)
            WHERE order_id =  '" . $id . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        include("./resources/templates/front/order_item.php");
    }
}

//add to cart
function add_to_cart()
{
    if (isset($_SESSION['cart'])) {
        $id = array_column($_SESSION['cart'], 'product_id');
        if (!in_array($_POST['product_id'], $id)) {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'],
                'position' => sizeof($_SESSION['cart']) + 1,
                'title' => $_POST['hidden_title'],
                'price' => $_POST['hidden_price'],
                'quantity' => $_POST['quantity']
            );
            $_SESSION['cart'][$count] = $item_array;
        } else {
            echo array_push($errors, "Already added!");
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id'],
            'position' => 1,
            'title' => $_POST['hidden_title'],
            'price' => $_POST['hidden_price'],
            'quantity' => $_POST['quantity']
        );
        $_SESSION['cart'][0] = $item_array;
    }
    redirect("../cart.php");
}

//remove from cart
function remove_from_cart($id)
{
    foreach ($_SESSION['cart'] as $keys => $values) {
        if ($values['product_id'] == $id) {
            unset($_SESSION['cart'][$keys]);
        }
    }
    redirect("../cart.php");
}

//login
function login_user($conn, $errors, $username, $password)
{
    if (empty($_POST['username'])) {
        array_push($errors, "User name is required");
    }
    if (empty($_POST['password'])) {
        array_push($errors, "Password is required");
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $logged_in_user = $result->fetch_assoc();

        if ($logged_in_user['user_type'] == 'admin') {

            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "Hello, Admin!";
            redirect("../index.php");

        } else {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "You are now logged in!";
            redirect("../index.php");
        }
    } else {
        array_push($errors, "Wrong Username or Password!");
        redirect("../login.php");
    }
}

//user check
function is_user()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

//admin check
function is_admin()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}

//logout
function logout()
{
    session_destroy();
    unset($_SESSION['user']);
    redirect("../index.php");
}

//register user
function register($conn, $errors, $first_name, $last_name, $address, $post_code, $city, $country_code, $username, $password_1, $password_2)
{

    if (empty($_POST['first_name'])) {
        array_push($errors, "First name is required");
    }
    if (empty($_POST['last_name'])) {
        array_push($errors, "Last name is required");
    }
    if (empty($_POST['address'])) {
        array_push($errors, "Address is required");
    }
    if (empty($_POST['post_code'])) {
        array_push($errors, "Post code is required");
    }
    if (empty($_POST['city'])) {
        array_push($errors, "City is required");
    }
    if (empty($_POST['country_code'])) {
        array_push($errors, "Country code is required");
    }
    if (empty($_POST['username'])) {
        array_push($errors, "User name is required");
    }
    if (empty($_POST['password_1'])) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Password do not match!");
    }


    if (is_array($errors) == 0) {
        $password = md5($password_1);

        if (isset($_POST['user_type'])) {
            $user_type = $conn->escape_string($_POST['user_type']);
            $sql = "INSERT INTO users (first_name, last_name, address, post_code, city, country_code, user_type, username, password) 
					  VALUES('$first_name', '$last_name', '$address', '$post_code', '$city', '$country_code', '$user_type', '$username', '$password')";

            $conn->query($sql);
            redirect("../index.php");

        } else {
            $sql = "INSERT INTO users (first_name, last_name, address, post_code, city, country_code, user_type, username, password)
					  VALUES('$first_name', '$last_name', '$address', '$post_code', '$city', '$country_code', 'user', '$username', '$password')";

            $conn->query($sql);
            redirect("../index.php");
        }
    }
}

//send message
function send_message($conn, $from_name, $email, $subject, $the_message)
{
    $errors = array();
    if (empty($_POST['from_name'])) {
        array_push($errors, "Your name is required");
    }
    if (empty($_POST['email'])) {
        array_push($errors, "Your email is required");
    }
    if (empty($_POST['subject'])) {
        array_push($errors, "Subject is needed");
    }
    if (empty($_POST['the_message'])) {
        array_push($errors, "Please, write your message here");
    }

    $sql = "INSERT INTO messages (from_name, email, subject, the_message) VALUES('$from_name', '$email', '$subject', '$the_message')";

    $conn->query($sql);
    redirect("../contacts.php");
}

//receive message
function receive_message($conn)
{
    $sql = "SELECT * FROM messages";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include("./resources/templates/front/message_view.php");
    }
}

//view message
function view_message($conn, $id)
{
    $sql = "SELECT * FROM messages WHERE message_id = '" . $id . "'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        include("./templates/front/message_read.php");
    }
}

//delete message
function delete_message($conn, $id)
{
    $sql = "DELETE FROM messages WHERE message_id = '" . $id . "'";

    if ($conn->query($sql) === true) {
        redirect("../messages.php");
    }
}
