<?php
session_start();
include_once "config.php";
if(isset($_POST["submitup"])){
    $l = $_SESSION['username'];
  $s="UPDATE artistac SET uploads=uploads+1 where username= '$l'";
  //$ss="INSERT INTO product_tbl SET uploads=uploads+1 where username= '$l'";
  $x=mysqli_query($db,$s);

  header('Location:profile.php');
}
?>