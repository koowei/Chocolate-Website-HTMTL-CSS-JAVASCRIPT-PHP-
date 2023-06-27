<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href='../style/theme.css'>
</head>
<body>
<?php include('../includes/header.php'); ?>
<?php include('../includes/navigation.php'); ?>
  <div class="page-wrapper">
    <h1>CUSTOMER LOGIN</h1>
    <div class="container">
      
    <div class="box left">
      <h2>NEW CUSTOMER</h2>
      <p>By creating a ChocoSmith account, you can gain rewards points to redeem discount vouchers as well as move through the checkout process faster, save multiple shipping addresses, view and track your orders in your account and more.</p>
      <a href="../signup/index.php"><button>Sign Up</button></a>
    </div>
  <div class="box right">
    <h2>LOGIN</h2>
    <p>If you have an account with us, please log in.</p>
    <form action="retrieveAccount.php" method="post">
      <label for="Email">Email Address</label>
      <input type="email" id="Email" name="Email" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Log in">
      <?php 
      if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
      if(isset($_SESSION['login-error-message'])) {
        // If there is, display it in a div element
        echo '<div id="login-error-message" class="login-error-message" style="display:block;margin:10%;">'.$_SESSION['login-error-message'].'</div>';
        // Clear the error message from the session variable
        unset($_SESSION['login-error-message']); 
    }?>
    </form>
  </div>
  </div>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>
