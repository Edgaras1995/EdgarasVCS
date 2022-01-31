

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("banner-slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activedot", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activedot";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function mobileMenu() {
  var x = document.getElementById("mMenu");
  if (x.style.display === "block") {
      x.style.display = "none";
      
  } else {
      x.style.display = "block";
  } 
}

$(document).ready(function(){
  $('#contant').animate({
      scrollTop: $('#contant')[0].scrollHeight}, 2000);
});