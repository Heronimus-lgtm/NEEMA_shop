<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_GET['submit'])){
  $productid=$_GET['hiddenid'];
  $price=$_GET['hiddenprice'];
  $productname=$_GET['hiddenname'];
 mysql_query("INSERT INTO sales1(productname,productid) VALUES('$productname','$productid')") or die("could not commit the values to database".mysql_error());

}