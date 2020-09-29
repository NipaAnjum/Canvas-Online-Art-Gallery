<?php
require_once "config.php";
$sql="CREATE TABLE Exhibitions (
    ex_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ex_name VARCHAR(50) NOT NULL,
    s_date DATE,
    e_date DATE,
    ex_location VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if (mysqli_query($db, $sql)) {
    echo "Table Exhibitions created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}

mysqli_close($db);
?>