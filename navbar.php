<!DOCTYPE html>
<html>
    <head>
        <title>ART GALLERY</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login.php">
        <link rel="stylesheet" href="imagestyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\my_project\x">
    </head>

<body>
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true){
    $ca = "Create Artist";
    $cc = "Create Customer";
    $li = "New folder/logo/signin.png";
    $tk = "Login";
    $logcheck = "login.php";
    $un = "";
    $buy = "New folder/logo/box.png";
    $search = "New folder/logo/box.png";
    $upload = "";
}
else {
    $ca = "";
    $cc = "";
    $li = "New folder/logo/signout.png";
    $buy = "New folder/logo/cart.png";
    $tk = "Logout";
    $logcheck = "logout.php";
    $un = " Welcome, ".$_SESSION["username"];
    $search = "New folder/logo/search.png";
    $upload = "New folder/logo/up.png";
}
   ?>
    <div class="header">
       <h1> <a href="index.php"><i class="fas fa-palette"></i>  CANVAS</a></h1>
       <div class="x" style="color:white ;size:5px"><a href="profile.php" style="text-decoration:none"> <?php echo $un ?> </a></div>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
            <li class="dropdown">
                <a href="#" class="dropbtn">Gallery</a>
                <div class="dropdown-content">
                    <a href="gallery.php">Galleries</a>
                    <a href="painting.php">Painting</a>
                    <a href="photography.php">Photography</a>
                </div>
            </li>
            <li><a href="artistpage.php">Artists</a></li>
            <li><a href="exhibition.php">Exhibitions</a></li>
            <li><a href="create_account.php"><?php echo $ca ?></a></li>
            <li><a href="create_account2.php"><?php echo $cc ?></a></li>
            <li class="x"><a href="<?php echo $logcheck ?>" class="tooltip">
            <img src ="<?php echo $li ?>" height="25px" width="auto" style="margin-top:-4px">
                    <span class="tooltiptext" ><?php echo $tk ?></span>
            </a></li>
            <li class="x"><a href="buypage.php"><img src="<?php echo $buy ?>" height="25px" width="auto" style="margin-top:-4px"></a></li>
            
        </ul>
    </div>
    </body>
    </html>