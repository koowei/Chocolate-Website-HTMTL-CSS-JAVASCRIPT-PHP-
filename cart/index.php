<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart Page</title>
	<link rel="stylesheet" href='../style/theme.css'>
    <link rel="stylesheet" href='style/cart.css'>
</head>
<body>
<?php include('../includes/header.php'); ?>
<?php include('../includes/navigation.php'); ?>
<div class="page-wrapper">
<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['logged_status']) && $_SESSION['logged_status'] == true) {
	include('retrieveCart.php');
}
if(!(isset($_COOKIE['cart'])))
{
    $cart = array();
	$cookie_name = "cart";
	setcookie($cookie_name, json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day
    $cart = json_decode($_COOKIE['cart'], true);
}
else
{
    $cart = json_decode($_COOKIE['cart'], true);
}
if (!empty($cart)): ?>
            <div class="container" style="justify-content: unset">
                <h1>SHOPPING CART</h1>
            </div>  
            <div class="container">
            <table>
                <thead>
                    <tr>
                        <td colspan="2">Item</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td colspan="2">Total</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $conn_user = new mysqli('localhost', 'root', '', 'chocosmith_items');
                    if ($conn_user->connect_error) {
                    die("Connection failed: " . $conn_user->connect_error);
                    }
                    $subtotal = 0;
                    foreach ($cart as $item_id => $item_quantity): 
                        $sql = "SELECT * FROM items WHERE id = '$item_id'";
                        $result = $conn_user->query($sql);
                        // Check if query returned any results
                        if ($result->num_rows > 0) {
                            // Fetch the data and store it in variables
                            $row = $result->fetch_assoc();
                            $id = $row["id"];
                            $image1 = $row["image1"];
                            $name = $row["name"];
                            $price = $row["price"];
                        }
                    ?>
                            <tr>
                                <td class="img">
                                    <a href="../item-details/item-detail.php?id=<?php echo $id; ?>">
                                        <img src="../item-list/<?php echo $image1; ?>" alt="<?php echo $name; ?>">
                                    </a>
                                </td>
                                <td>
                                    <a href="../item-details/item-detail.php?id=<?php echo $id; ?>" id = item-name ><?php echo $name; ?></a>
                                </td>
                                
                                <td class="price">&dollar;<?php echo number_format($price, 2); ?></td>
                                <td class="quantity">
                                    <?php echo $item_quantity?>
                                </td>
                                <td class="price">&dollar;<?php echo number_format($price * $item_quantity, 2); ?></td>
                                <td>
                                    <a href='removeFromCart.php?id=<?php echo $id; ?>' class = "remove">Remove</a>
                                </td>
                            </tr>
                    <?php $subtotal += $price * $item_quantity;
                endforeach; 
                $conn_user->close();?>
                </tbody>
            </table>
            </div>
            <div class="container" style="justify-content: end">
				<div class="subtotal" style="margin-right: 30px;">
					<span class="text">Order Total Price :</span>
					<span class="price">&dollar;<?php echo number_format($subtotal, 2); ?></span>
				</div>
            </div>
            <div class="container" style="justify-content: end">
				<div class="buttons" style="margin-right: 30px;">
					<button onclick="window.location.href='makePayment.php'" value="Place Order" name="makePayment" >Checkout Cart</button>
				</div>
            </div>
 
    <?php else:?>
        <div class="container" >
            <h2 style="padding: 10% 0;">Your cart is empty.</h2>
        </div>


<?php endif; ?>
</div>
<?php include("../includes/footer.php");?>
</body>
</html>