<?php
$servername="localhost";
$username="username";
$password="";
$dbname="ecommerce";
$conn = new mysqli('localhost', 'root', '', 'ecommerce');
if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

$id=$_GET['userid'];
$sql="DELETE FROM users WHERE userid='$id'";
 if($conn->query($sql)== TRUE){
 	echo "record deleted";
 } else{
 	echo "error deleting" . $conn->error;
 }
 $conn->close();

header("location:index.php?link=viewmembers");
?>