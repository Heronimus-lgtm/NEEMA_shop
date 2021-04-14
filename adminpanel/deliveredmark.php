<?php
mysql_connect("localhost","root","");
mysql_select_db("ecommerce");


$id=$_GET['productid'];
$sql="UPDATE allproductsforsale SET delivered='delivered' WHERE productid='$id'";

mysql_query($sql) or die("cannot update table".mysql_error());

//UPDATE `members` SET `contact_number` = '0759 253 542' WHERE `membership_number` = 1;

header("location:index.php?link=viewsales");

?>