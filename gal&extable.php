<?php
/*
// Include config file
require_once "config.php";

$sql ="Create table Galleries(
    gallery_id number(9),
    gallery_name nchar(100),
    gallery_location nchar(100),
    primary key (gallery_id)
    )";
    
$sql2="create table exhibitions(
    exhibition_id number(9),
    exhibition_name nchar(100),
    start_date date,
    end_date date,
    exhibition_location nchar(100),
    primary key (exhibition_id)
    )";

if(mysqli_query($db, $sql)){
    echo "Table galleries created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
if(mysqli_query($db, $sql2)){
    echo "Table exhibitions created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($db);
}

// Close connection
mysqli_close($db);

$errors = [];

$sql1="Create table Galleries(
    gallery_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gallery_name VARCHAR(50) NOT NULL,
    gallery_location VARCHAR(50) NOT NULL
    )";
$sql2="create table exhibitions(
    exhibition_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    exhibition_name VARCHAR(50) NOT NULL,
    strt_date date,
    end_date date,
    exhibition_location VARCHAR(50) NOT NULL
    )";
$sql=[$sql1,$sql2];
foreach($sql as $k=>$db){
    $q=@$conn->query($db);
    if(!$q)
        $errors[]="table $k : creation failed(mysqli_connect_error())";
    else 
        $errors[]="table $k : done";
}
foreach($errors as $msg){
    echo "$msg <br>";
}
$q = file_get_contents('queries.mysql');
if(mysqli_query($db, $q)==TRUE){
    echo "success<br>";
}
else {
    echo "error ".mysqli_error($db);
}


?>*/

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

mysqli_close($db);
?>