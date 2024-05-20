const openModalBtn = document.getElementById("openSearchModalBtn");
const modal = document.getElementById("searchModal");
const closeBtn = modal.querySelector(".close");

openModalBtn.addEventListener("click", function() {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

$(document).ready(function() {
  // Initialize Slick Carousel
  $('.news-slider').slick({
    arrows: false, // Show navigation arrows
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000, // Auto slide change interval (in milliseconds)
  });
  $('.prev').click(function(){
    $('.news-slider').slick('slickPrev');
  });

  $('.next').click(function(){
    $('.news-slider').slick('slickNext');
  });
});

$(document).ready(function(){
  $('.home-slider').slick({
    arrows: true, // Show navigation arrows
    prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});


$(document).ready(function(){
  $('.hot-news-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false, // Show navigation arrows
    // prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
    // nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  $('.prev').click(function(){
    $('.hot-news-slider').slick('slickPrev');
  });

  $('.next').click(function(){
    $('.hot-news-slider').slick('slickNext');
  });
});

$(document).ready(function(){
  $('.outstanding-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false, // Show navigation arrows
    prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});