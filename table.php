<?php
require_once "config.php";
$sql="CREATE TABLE CustomerAc (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if (mysqli_query($db, $sql)) {
    echo "Customer account created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}

mysqli_close($db);
?>