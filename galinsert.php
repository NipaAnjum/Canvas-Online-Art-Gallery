<?php
require_once "config.php";
$sql = "INSERT INTO Galleries (gallery_name,gallery_location) VALUES ('National Art Gallery','14,3 segun bagicha Rd,Dhaka-1000')";


if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>