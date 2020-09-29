<!DOCTYPE html>
<html>
<?php
include "navbar.php";
?>
<head>
<script>
function confirmmsg() {
    alert("Congratulations! Your order is placed!");
    header('Location:profile.php');
}
</script>
</head>
<body>
<form name="myform" action="profile.php" onsubmit="return confirmmsg()" method="post">
  <br>
  <h3>Name: </h3><br>
  <input type="text" name="username">
  <br>
  <h3>Address:</h3><br>
  <input type="text" name="address"> <br> <h3>
  <input type="checkbox" name="cash" value="Cash on Delivery" checked>Cash on Delivery<br>
  </h3><br>
  <input type="submit" name="submit" value="Confirm">
</form>
<body>
<br> <br> <br> <br> <br> <br> <br> <br>
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