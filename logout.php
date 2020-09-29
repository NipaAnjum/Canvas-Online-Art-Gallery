<?php
setcookie('name_cookie','', time() - 3600);
// Initialize the session
session_start();
// Unset all of the session variables
$_SESSION = array();
// Destroy the session.
session_destroy();
// Redirect to login page
header("location: index.php");
exit;
?>