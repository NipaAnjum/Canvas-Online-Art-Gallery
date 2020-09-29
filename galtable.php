<?php
require_once "config.php";
$sql ="Create table Galleries(
    gallery_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gallery_name VARCHAR(50) NOT NULL,
    gallery_location VARCHAR(50) NOT NULL
    )" ;
if (mysqli_query($db, $sql)) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}
?>