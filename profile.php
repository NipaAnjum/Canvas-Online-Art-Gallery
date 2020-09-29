<html>
<?php
include "navbar.php";
include_once "config.php";
$query="SELECT * FROM customerac";
$result=mysqli_query($db,$query);
$l = $_SESSION['username'];
if(isset($_POST["submit"])){
    $sql="UPDATE customerac SET buy=buy+1 where username= '$l'";
    $xx=mysqli_query($db,$sql);
}
$upload="";
$abc = "SELECT * FROM artistac";
$a=mysqli_query($db,$abc);

?>
<html>
<head>
<style>
table, td, th {
  background: rgb(238, 234, 234);
    height: 50px;
  border: 2px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  height: 50px;
  vertical-align: bottom;
}
</style>
</head>
<body>
<br><br>
<h3 style="font-weight:bold">My Information</h3>

    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
        if($_SESSION['username']==$rows['username']){
    ?>
    <table>
    <tr>
    <th>Id No.</th>
    <th>Userame</th>
    <th>Orders</th>
    </tr>
    <tr>
    <td><h3 style="text-align:center"><?php echo $rows['id'];?></h3></td>
    <td><h3 style="text-align:center"><?php echo $rows['username'];?></h3></td>
    <td><h3 style="text-align:center"><?php echo $rows['buy'];?></h3></td>
    </tr>
    </table>
    <?php
    }
//}
else{
while($rows=mysqli_fetch_assoc($a))
    {
if($_SESSION['username']==$rows['username']){ ?>
<table>
    <tr>
    <th>Id No.</th>
    <th>Userame</th>
    <th>Uploads</th>
    </tr>
    <tr>
    <td><h3 style="text-align:center"><?php echo $rows['id'];?></h3></td>
    <td><h3 style="text-align:center"><?php echo $rows['username'];?></h3></td>
    <td><h3 style="text-align:center"><?php echo $rows['uploads'];?></h3></td>
    </tr>
    </table>
    <br><br><br>
  <form action="upload.php" method="post" style="margin-left:100px">
  <label for="img"><h3>Choose image to upload.</h3></label> <br>
  <input type="file" name="img" value=""> <br> <br>
  <input type="submit" name="submitup"></form>
<?php } } } }
?>
    
   </body>
</html>