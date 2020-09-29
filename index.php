<html>
<?php
$z = "";
include "navbar.php";
include "slide.php";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true){
    $z='<p> <h3 style="color: #333 ">
    To buy or upload amaizing painting and photograph , please <a href="login.php" style="text-decoration:none ;color: blue">
    Login Here </a>
    </h3>
    </p>';
}
?>
 <body>
 
<br>
<br>
<br>
<div>
<?php
echo $z;
?>
</div>
    <div class="about">
        <h2>ABOUT</h2>
        <img src="bd.jpg">
        <p>Canvas features the world's leading galleries,sculptures,artist estates,art fairs,exhibitions,all in one place. Our growing 
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