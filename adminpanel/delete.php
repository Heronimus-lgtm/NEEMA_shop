<?php
$servername="localhost";
$username="username";
$password="";
$dbname="ecommerce";
$conn = new mysqli('localhost', 'root', '', 'ecommerce');
if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

$id=$_GET['productid'];
$sql="DELETE FROM allproductsforsale WHERE productid='$id'";
 if($conn->query($sql)== TRUE){
 	echo "record deleted";
 } else{
 	echo "error deleting" . $conn->error;
 }
 $conn->close();
//header("location:recordmarks.php");
//include("pag.php");
header("location:index.php?link=allproducts");
?>