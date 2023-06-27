<?php
session_start(); // start the session

// check if the user is logged in
if(isset($_SESSION['logged_status'])) {
  // unset all session variables
  //session_unset();

  // destroy the session
  session_destroy();

  // redirect the user to the login page
  header('Location: ../login/index.php');
  exit;
}
?>