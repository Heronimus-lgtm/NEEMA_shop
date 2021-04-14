<?php
session_start();
// Unset all of the session variables $_SESSION = array(); // Destroy the session. session_destroy(); /************ OR Delete the sessions****************/
unset($_SESSION['username']); 
unset($_SESSION['password']); 
header("Location: login.php");
?>