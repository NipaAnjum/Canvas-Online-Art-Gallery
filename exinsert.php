<?php
require_once "config.php";
$sql = "INSERT INTO Exhibitions (ex_name,s_date,e_date,ex_location) VALUES ('RA kajol''s Greedom and Free Faces','2019-03-15','2019-03-28','Shilpangan,Dhaka');";
if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>