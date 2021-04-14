<?php
if(!isset($_SESSION)){
	session_start();
}
error_reporting(0);
$username = "";
$password="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(isset($_POST['finish'])){
	$customername=$_POST['customername'];
	$idn=$_POST['idn'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$productname=$_POST['productname'];
	$paid=$_POST['paid'];
    $code=$_POST['code'];

	$query= "INSERT INTO sales(customername,idn,phone,email,productname,paid,code) VALUES('$customername','$idn',
	'$phone','$email','$productname','$paid','$code')";
  mysqli_query($db, $query);
    $_SESSION['customername'] = $customername;
    $_SESSION['success'] = "order placed successfully";
    header('location: items.php');
}

?>
 <?php include("navigation.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min">
  <link rel="stylesheet" href="css/bootstrap.css.map">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap.grid.css.map">
  <link rel="stylesheet" href="css/bootstrap.js.map">
  <link rel="stylesheet" href="css/bootstrap.bundle">
	<style type="text/css">
		body{
    max-width: 1240px;
    margin:  auto;
   
  }
		.form-container{
			width: 100%;

		}
		form{
					width: 400px;
		}
		input[type=text],textarea{
			padding: 10px;
			width: 83.5%;
			margin-bottom: 10px;
			background: #68bbe5;
			color: black;
		}
		.btn-send{
    background-color:  #4CAF50;
    width: 90%;
    color: white;
    margin-bottom: 10px;
    padding: 15px;
    border: none;
		}
		select{
			padding: 30px;
			background: olivedrab;
		}
		input[type=file]{
			width: 50%;
		}
		.btn-clear{
    background-color:  #6f63ad;
    width: 90%;
    color: white;
    margin-bottom: 10px;
    padding: 15px;
    border: none;
}
		.prodcat{
			width: 90%;
			padding: 10px;
			margin-bottom: 10px;
		}
		h2{
			color: #fff;
		}
		.file{
			background: olivedrab;
		}

	</style>
</head>
<body>
	
	<center>
	<div class="form-container">
		<form method="POST" action="" enctype="multipart/form-data">
			<h2>Product Upload Form</h2>
            <input type="text" name="customername" placeholder="OFFICIAL NAME">
            <input type="text" name="idn" placeholder="ID NUMBER">
            <input type="text" name="Phone" placeholder="Phone number">
			<input type="text" name="email" placeholder="EMAIL">
			<input type="text" name="productname" placeholder="PRODUCT NAME">
			<input type="text" name="paid" placeholder="AMOUNT PAID">
			<input type="text" name="code" placeholder="MPESA CODE">
			<button name="finish" class="btn-send" value="style">SUBMIT</button>
			<button name="CLEAR" class="btn-clear" value="clear">CLEAR</button>		
		</form>
		
	</div>
</center>

</body>
</html>