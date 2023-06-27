<!DOCTYPE html>
<html>
<head>
	<title>Item List Page</title>
	<link rel="stylesheet" href="css/itemList.css">
</head>
<body>
<?php include('../includes/header.php'); ?>
<?php include('../includes/navigation.php'); ?>
	
	<br><h1>ALL PRODUCT</h1><br><br>
	<div class = "all_container">
		<div class="filter">
		<label for="category">Filter by category: </label>
		<?php $category = $_GET['category'] ?? 'all'; ?>
		<select id="category" name="category" onchange="window.location.href = '?category=' + this.value">
			<option value="all" <?= $category === 'all' ? 'selected' : '' ?>>All</option>
			<option value="dark chocolate" <?= $category === 'dark chocolate' ? 'selected' : '' ?>>Dark Chocolate</option>
			<option value="milk chocolate" <?= $category === 'milk chocolate' ? 'selected' : '' ?>>Milk Chocolate</option>
			<option value="white chocolate" <?= $category === 'white chocolate' ? 'selected' : '' ?>>White Chocolate</option>
		</select>
		</div>
		<div class="list_container">
			<div id="items-list">
			<?php 
				if (session_status() === PHP_SESSION_NONE) {
					session_start();
				  }
				$category = isset($_GET['category']) ? $_GET['category'] : 'all';
				$search = isset($_GET['search']) ? $_GET['search'] : '';
				$conn = new mysqli('localhost', 'root', '', 'chocosmith_items');
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// Set number of results to display per page
				$results_per_page = 3;

				// Determine current page number
				if (isset($_GET['page']))
					$current_page = $_GET['page'];
				else
					$current_page = 1;

				// Calculate starting and ending limit for results
				$start_limit = ($current_page - 1) * $results_per_page;
				$end_limit = $start_limit + $results_per_page;

				// Retrieve total number of results from database
				if ($category === 'all') {
					$sql = "SELECT COUNT(*) as total FROM items WHERE name LIKE '%$search%'";
				} else {
					$sql = "SELECT COUNT(*) as total FROM items WHERE category = '$category' AND name LIKE '%$search%'";
				}
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$total_results = $row['total'];

				// Calculate total number of pages
				$total_pages = ceil($total_results / $results_per_page);

				// Retrieve results from database for current page
				if ($category === 'all') {
					$sql = "SELECT * FROM items WHERE name LIKE '%$search%' LIMIT $start_limit, $results_per_page";
				} else {
					$sql = "SELECT * FROM items WHERE category = '$category' AND name LIKE '%$search%' LIMIT $start_limit, $results_per_page";
				}
				$result = mysqli_query($conn, $sql);

				// Display items
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<div class='item'>";
						echo "<a href='../item-details/item-detail.php?id=" . $row["id"] . "'><img src='" . $row["image1"] . "' alt='" . $row["name"] . "' /></a>";
						echo "<h2>" . $row["name"] . "</h2>";
						echo "<p>" . $row["description"] . "</p>";
						echo "<p>Price: $ " . $row["price"] . "</p>";
						echo "</div>";
					}
				} else {
					echo "No items found.";
				}
			?>
			</div>
			<div class="pagination">
			<p>Pages: </p>
			<button class="btn1" onclick="prevPage()"><img src="images/arrow1.jpg"></button>
			<ul class=ul-item>
				<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					if ($i == $current_page) {
						echo '<li class="link active">' . $i . '</li>';
					} else {
						echo '<li class="link"><a href="?page=' . $i . '&category=' . $category . '&search=' . $search .'">' . $i . '</a></li>';
					}
				}
				$conn->close();
				?>
			</ul>
			<button class="btn2" onclick="nextPage()"><img src="images/arrow2.jpg"></button>
			</div>
			</div>
	</div>

	<script>
	function prevPage() {
    var currentPage = <?php echo $current_page ?>;
    var category = '<?php echo $category ?>';
    var search = '<?php echo $search ?>';
    if (currentPage > 1) {
        window.location.href = "?page=" + (currentPage - 1) + "&category=" + category + "&search=" + search;
    }
}

function nextPage() {
    var currentPage = <?php echo $current_page ?>;
    var totalPages = <?php echo $total_pages ?>;
    var category = '<?php echo $category ?>';
    var search = '<?php echo $search ?>';
    if (currentPage < totalPages) {
        window.location.href = "?page=" + (currentPage + 1) + "&category=" + category + "&search=" + search;
    }
}
	</script>
<?php include('../includes/footer.php'); ?>
</body>
</html>