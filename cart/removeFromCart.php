<?php
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    $item_id = $_GET['id'];

    if(isset($_COOKIE['cart']))
      $cart = json_decode($_COOKIE['cart'], true);
    else
      $cart = array();

    if (array_key_exists($item_id, $cart)) {
       unset($cart[$item_id]);
       setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");
    } 

    if (isset($_SESSION['logged_status']) && $_SESSION['logged_status'] == true){
      $user_id = $_SESSION['user_id'];
      //echo '<script>alert("item id ='.$item_id .' and user id ='.$user_id .'");</script>'; //debug code
      $conn = new mysqli('localhost', 'root', '', 'chocosmith_users');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
            
      $sql = "DELETE FROM cart WHERE users_id= $user_id AND item_id= $item_id";
      if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      }else {
          echo "Error deleting record: " . mysqli_error($conn);
      }
      $conn->close();
      }
    header('Location: index.php');
?>