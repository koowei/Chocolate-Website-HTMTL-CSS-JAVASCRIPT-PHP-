<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='../style/theme.css'>
</head>
<body style="margin: 0px;">

<div class="navbar">
  <a href="../home/index.php">Home</a>
  <div class="subnav">
    <button onclick="window.location.href='../item-list/item-list.php'" class="subnavbtn">Products <i class="subItem"></i></button>
    <div class="subnav-content">
      <a href = "../item-list/item-list.php?category=dark chocolate">Dark Chocolates</a>
      <a href = "../item-list/item-list.php?category=white chocolate">White Chocolates</a>
      <a href = "../item-list/item-list.php?category=milk chocolate">Milk Chocolates</a>
    </div>
  </div> 
  <a href="../extras/about.php">About Us</a>
  <a href="../contact/index.php">Contact</a>
    <div class="subnav">
      <?php
      session_start();
      if(isset($_SESSION['logged_status']))
      {
        echo '
        <button class="login subnavbtn">'. $_SESSION['logged_name'].'</button>
          <div class="subnav-content" style="margin-top: 45px;right: 0;">
            <a href="../login/logout.php">Logout</a>
          </div>
        ';
      }
      else
      {
        echo ' 
        <button onclick="window.location.href=\'../login/index.php\';" class="login subnavbtn">LOGIN</button>
          <div class="subnav-content" style="margin-top: 45px;right: 0;">
            <a href="../signup/index.php">Sign Up</a>
          </div>
        ';
      }
      ?>
    </div>
	<div class="subnav">
		<button class="subnavbtn" onclick="window.location.href='../cart/index.php'">Cart <i class="subCart"></i></button>
	</div>
</div>

<div style="padding:0 16px">
  <h1></h1>
</div>

</body>
</html>