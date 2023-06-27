<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href='../style/theme.css'>
    <script src="banner.js"></script>
    <script src="searchBar.js"></script>
</head>

<body>
    <script>
        function searchItems() {
    var searchInput = document.getElementById("search").value;
    console.log(searchInput);
    var category = 'all';
    window.location.href = "../item-list/item-list.php?category=" + category + "&search=" + searchInput;
  }</script>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/navigation.php'); ?>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-2"></div>
                    <div class="btn btn-primary col-xs-2 pull-right mar">
                        <div class="search-box">
                            <form action="../item-list/item-list.php"class="search" onsubmit="searchItems()">
                                <input type="text" id="search" name="search" placeholder="Search">
                                <input type="submit" id = "searchButton">
                            </form>
	                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="banner">
                    <img class="banner-image active" src="../resource/img/banner1.jpg">
                    <img class="banner-image" src="../resource/img/banner2.jpg">
                    <img class="banner-image" src="../resource/img/banner3.jpg">
                </div>
            </div>
        </div>
    </div>
	<div class="pic_container">
		<img class="home-img-left" src="../resource/img/home11.jpg">
		<h3><span class="firstLine">PURE CHOCOLATE<br><br><span class="secLine">WE ARE "PURELY" ADDICTED</h3>
		<h3><span class="firstLine">NAMA<br><br><span class="secLine">LUXURIOUSLY SOFT AND CREAMY</h3>
	</div>
	<video style ="margin-top: -80px;" width="100%" height="500" controls autoplay muted loop >
		<source src="../resource/video/home1.mp4" type="video/mp4">
	</video>
	<div class="home_container">
		<img class="home_img" src="../resource/img/home1.jpg">
		<img class="home_img" src="../resource/img/home2.jpg">
		<img class="home_img" src="../resource/img/home3.jpg">
		<img class="home_img" src="../resource/img/home4.jpg">
	</div>
    <div>
    <?php include('../includes/footer.php'); ?>
    </div>
</body>
</html>