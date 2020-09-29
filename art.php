<html>
<?php
include_once "config.php";
include "navbar.php";
$sq = "CREATE TABLE art(
    (SELECT * FROM painting)
    UNION ALL
    (SELECT * FROM PHOTOGRAPH)
)";