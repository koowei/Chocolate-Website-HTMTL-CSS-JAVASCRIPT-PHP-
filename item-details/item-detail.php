<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/itemDetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  </head>
  <body>
    
   <?php
   include('../includes/header.php'); 
   include('../includes/navigation.php');
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
    $conn = new mysqli('localhost', 'root', '', 'chocosmith_items');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM items WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row["id"];
            $image1 = $row["image1"];
            $image2 = $row["image2"];
            $name = $row["name"];
            $description = $row["description"];
            $price = $row["price"];
            $quantity = $row["quantity"];
  ?>
  <main>
  <div class="product-details">
    <div class="product-image">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo $image1; ?>" onclick="showImage(this)"></div>
                <div class="swiper-slide"><img src="<?php echo $image2; ?>" onclick="showImage(this)"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>
    <div class="product-description">
      <h2 class="product-title"><?php echo $name; ?></h2>
      <p class="product-price"><?php echo "$ " . $price; ?></p>
      <p class="product-info"><?php echo $description; ?></p>
      <form id="myform" method="POST" class="quantity" action="../cart/cart.php">
        <input type="hidden" name="item_id" value="<?php echo $id;?>">
        <label for="quantity">Quantity : </label>
        <input type="button" value="-" class="qtyminus minus" field="quantity" />
        <input type="text" name="quantity" value="<?php echo $quantity; ?>" class="qty" style="width: 40px;
      height: 25px;
      text-align: center;
      display:inline;
      margin: 0px; 
      ">
        <input type="button" value="+" class="qtyplus plus" field="quantity" />
        <div class="product-buttons">
            <button class="product-button add-to-cart" type="submit" name="add_to_cart" style="margin-top: 20px;" onclick="window.alert('Item Added to Cart Successfully !')">Add to Cart</button>
        </div>
      </form>
    </div>
  </div>
</main>
<?php
    } else {
        echo "0 results";
    }
} else {
    echo "No item selected.";
}
$conn->close();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="javascript/quantitySelector.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" charset="utf-8"></script>
<script src="javascript/imageSwiper.js" charset="utf-8"></script>
<script src="javascript/zoom.js" charset="utf-8"></script>
<?php include('../includes/footer.php'); ?>
</body>
</html>