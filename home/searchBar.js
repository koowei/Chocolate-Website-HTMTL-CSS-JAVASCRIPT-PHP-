function searchItems() {
    var searchInput = document.getElementById("search").value;
    console.log(searchInput);
    var category = 'all';
    window.location.href = "../item-list/item-list.php?category=" + category + "&search=" + searchInput;
  }