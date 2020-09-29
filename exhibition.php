<html>
<?php
include "navbar.php";
include_once "config.php";
$query="SELECT * FROM Exhibitions";
$result=mysqli_query($db,$query);
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
    <table>
    <tr>
    <th>Exhibition Name</th>
    <th>Start Date</th>
    <th>End Location</th>
    <th>Location</th>
    </tr>
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
    <td><?php echo $rows['ex_name'];?></td>
    <td><?php echo $rows['s_date'];?></td>
    <td><?php echo $rows['e_date'];?></td>
    <td><?php echo $rows['ex_location'];?></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <br>
    <br>
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