<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE html>
<html>
    <head>
        <title>ART GALLERY</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login.php">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\my_project\x">
    </head>

<body>
    <div class="header">
       <h1> <a href="index.php"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
        <li class="dropdown">
                <a href="#" class="dropbtn">Gallery</a>
                <div class="dropdown-content">
                    <a href="gallery.php">Galleries</a>
                    <a href="painter.php">Painting</a>
                    <a href="photographer.php">Photography</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="artistpage.php" class="dropbtn">Artist</a>
                <div class="dropdown-content">
                    <a href="painter.php">Painter</a>
                    <a href="photograpger.php">Photographer</a>
                </div>
            </li>
            <li><a href="#exhibition">Exhibitions</a></li>
            <li class="x"><a href="#buy"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="x"><a href="#search"><i class="fas fa-search"></i></a></li>
            <li class="x"><a href="logout.php" class="tooltip">
            <i class="fas fa-sign-out-alt">
                    <span class="tooltiptext" >Logout <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
            </i></a></li>
        </ul>
    </div>
    <br>
   <div class="div6" style="width: 600px; margin-left:330px">
   <p class="self">
     <b> NAME : </b> <?php echo htmlspecialchars($_SESSION["username"]); ?> <br>
     <a href="reset-password.php" style="text-decoration:none; color: blue" class="btn btn-warning"><b>Reset Password</b></a>
     <br> <b> ID : </b> <?php echo htmlspecialchars($_SESSION["id"]); ?> 
    </p>
   </div>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="dwnld2.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="dwnld3.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="sk.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
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
<br>
<br>
    <div class="about">
        <h2>ABOUT</h2>
        <img src="bd.jpg">
        <p >Canvas features the world's leading galleries,sculptures,artist estates,art fairs,exhibitions,all in one place. Our growing 
database of 1,000,000 works of art,architecture,and artists from our country. Canvas is used by art lovers,students,and 
educators to discover,learn about,and collect art.
        </p>
    <div class="footer" style="background-image:linear-gradient(to right,#333,rgb(117, 112, 112))">
        <div class="newspaper">
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest"></i>
            <br> <br>
            Customer Support <br>
            01720001110 <br>
            returns <br>
            FAQ
        </div>
    </div>

</body>
</html>