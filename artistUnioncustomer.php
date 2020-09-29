<?php
require_once "config.php";
/*$sql="CREATE TABLE arunioncu (
    id INT NOT NULL ,
    username VARCHAR(50) NOT NULL  ,
    password VARCHAR(255) NOT NULL ,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";*/
    $sql="CREATE TABLE arunioncu 
    (SELECT id,username,password FROM customerac)
    UNION
    (SELECT id,username,password FROM artistac)";
    //$as = mysqli_query($db,$s);
if (mysqli_query($db, $sql)) {
    echo "Inserted successfully";
} else {
    echo "Error : " . mysqli_error($db);
}

mysqli_close($db);
?>