<?php
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    if (isset($_POST['add_to_cart'])) {
        $item_id = $_POST['item_id'];
        $quantity = $_POST['quantity'];
    
    // Retrieve cart from cookies or cookie
    if(isset($_COOKIE['cart']))
      $cart = json_decode($_COOKIE['cart'], true);
    else
      $cart = array();
  
    // Add item to cart
    if (array_key_exists($item_id, $cart)) {
      $cart[$item_id] += $quantity;
    } else {
      $cart[$item_id] = $quantity;
    }
  
    //do checking if user logged in , if logged, update database as well

    if (isset($_SESSION['logged_status']) && $_SESSION['logged_status'] == true)
    {
      $user_id = $_SESSION['user_id'];
      $conn = new mysqli('localhost', 'root', '', 'chocosmith_users');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql ="INSERT INTO cart (users_id,item_id,item_quantity) VALUES
      ('$user_id','$item_id','$quantity')";
        if($conn->query($sql) === TRUE){
          $conn->close();
        }
        else{
          echo "<script> alert('Error :' . $sql.'<br>' .$conn->error </script>";
          $conn->close();
        }   
    }
    // Save cart to cookies or cookie
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/");
    
     // Debugging code/
    // Redirect back to the previous page
    //header('Location: ../item-details/item-detail.php?id='.$item_id);
    //header('Location: ../cart/index.php');
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
  }
?>