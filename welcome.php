<header>
    <link rel = "stylesheet" type= "text/css" href = "css/hstyle.css">
    <div class="wrapper">
        <div class="logo">
            <img src="http://localhost/3/images/logo.png" alt="">
        </div>
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="http://localhost/3/dncc.html">DNCC</a></li>
<li><a href="http://localhost/3/dscc.html">DSCC</a></li>
<li><a href="hotel/index.php">HOTEL</a></li>
<li><a href="hospital.php">HOSPITAL</a></li>
<li><a href="police_station.php">Police Station</a></li>
<li><a href="http://localhost/3/resturant.html">Resturents</a></li>
<li><a href="http://localhost/3/tour.html">Trips & Tour</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>
</div>
<div class="welcome-text">
        <h2>
Welcome To Smart Dhaka City</h2>


<div>
<link rel = "stylesheet" type= "text/css" href = "css/pstyle.css">



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="http://localhost/3/images/pig1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="http://localhost/3/images/pig2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://localhost/3/images/pig3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="http://localhost/3/images/pig4.jpg" style="width:100%">
  <div class="text">Caption Four</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>

    </div>
</header>
