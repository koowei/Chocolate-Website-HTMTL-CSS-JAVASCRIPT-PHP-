<?php
    $user_id = $_SESSION['user_id'];

    //check where cookies is created
    $cart = isset($_COOKIES['cart']) ? $_COOKIES['cart'] : array();
    // Database connection to Cart table
    $conn_user = new mysqli('localhost', 'root', '', 'chocosmith_users');
    if ($conn_user->connect_error) {
    die("Connection failed: " . $conn_user->connect_error);
    }
    //select all items in cart of current users
    $sql = "SELECT item_id , item_quantity FROM cart WHERE users_id = '$user_id'";
    $result = mysqli_query($conn_user, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn_user));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        if (array_key_exists($row["item_id"], $cart)) {
            $cart[$row["item_id"]] += $row["item_quantity"];
        } else {
            $cart[$row["item_id"]] = $row["item_quantity"];
        }
    }

    //Save cart to cookies or cookie
    setcookie("cart", json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day
    // Redirect back to the previous page
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
?>