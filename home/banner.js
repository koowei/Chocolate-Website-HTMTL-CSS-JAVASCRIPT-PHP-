var currentBanner = 0;
var banners = document.getElementsByClassName("banner-image");


function showNextBanner() {
  banners[currentBanner].classList.remove("active");
  currentBanner = (currentBanner + 1) % banners.length;
  banners[currentBanner].classList.add("active");
}

setInterval(showNextBanner, 3000);