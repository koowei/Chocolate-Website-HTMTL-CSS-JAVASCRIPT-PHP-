<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='../style/theme.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<?php include('../includes/header.php'); ?>
<?php include('../includes/navigation.php'); ?>
<script>
function validateForm() {
  var fname = document.getElementById("fname").value;
  var email = document.getElementById("email").value;
  var adr = document.getElementById("adr").value;
  var city = document.getElementById("city").value;
  var state = document.getElementById("state").value;
  var zip = document.getElementById("zip").value;
  var cname = document.getElementById("cname").value;
  var ccnum = document.getElementById("ccnum").value;
  var expmonth = document.getElementById("expmonth").value;
  var expyear = document.getElementById("expyear").value;
  var cvv = document.getElementById("cvv").value;
  
  // Validate that all fields are filled out
  if (fname == "" || email == "" || adr == "" || city == "" || state == "" || zip == "" || cname == "" || ccnum == "" || expmonth == "" || expyear == "" || cvv == "") {
    alert("All fields must be filled out");
    return false;
  }
  
  // Validate credit card number format
  var ccnumRegex = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
  if (!ccnumRegex.test(ccnum)) {
    alert("Credit card number must be in the format '1111-2222-3333-4444'");
    return false;
  }
  
  // Validate email format
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+\.com$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address");
    return false;
  }
  
  return true;
}

function myFunction() {
  alert("Your Order Has Been Placed.\nThank you for ordering with us! We'll contact you by email with your order details.");
  location.href="../home";
}

</script>
    <div class="page-wrapper">
    <div class="container">
      <div class= "box">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname"required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email"required>
            <label for="adr"><i class="	fa fa-home"></i> Address</label>
            <input type="text" id="adr" name="address" required>
            <label for="city">City</label>
            <input type="text" id="city" name="city"required>
            <label for="state">State</label>
            <input type="text" id="state" name="state"required> 
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip"required>
                 
       </div>
      <div class="box">
    
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="font-size: 30px;color:navy;"></i>
              <i class="fab fa-cc-paypal" style="font-size: 30px;color:blue;"></i>
              <i class="fab fa-cc-mastercard" style="font-size: 30px;color:red;"></i>
              <i class="fab fa-alipay" style="font-size: 30px;color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname"required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth"required>
            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear"required>
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv"required>
            <input type="checkbox" checked="checked" name="sameadr">
            <label for="sameadr" class=checkboxtext> Shipping address same as billing </label> <br>
			<button onclick="myFunction()">Continue To Order</button>
       </div>
       </div>
        
      
</div>
</html>