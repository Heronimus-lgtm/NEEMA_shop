<?php
$username = "";
$password="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(isset($_POST['submit_item'])){
	$productcategory=$_POST['productcategory'];
	$productname=$_POST['productname'];
	$price=$_POST['price'];
	$description=$_POST['description'];

	$image = $_FILES['image']['name'];
  	$target = "uploads/".basename($image);

	$query= "INSERT INTO allproductsforsale(productcategory,productname,price,description,image) VALUES('$productcategory','$productname','$price','$description','$image')";
 mysqli_query($db, $query);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Form</title>
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

			<select name="productcategory" class="prodcat">
				<option>--SELECT CATEGORY--</option>
				<option>clothings</option>
				<option>foods</option>
				<option>electronic</option>
				<option>groceries</option>
				<option>funiture</option>
				<option>stationary</option>
				<option>offer</option>
				
			</select>
			<input type="text" name="productname" placeholder="PRODUCT NAME">
			<input type="text" name="price" placeholder="PRODUCT PRICE">
			<input type="file" class="file" name="image" placeholder="select image">
			
			<br>
			<textarea name="description" placeholder="WRITE SOME MORE INFO ON THIS"></textarea>
			<button name="submit_item" class="btn-send" value="style">SUBMIT</button>
			<button name="CLEAR" class="btn-clear" value="clear">CLEAR</button>		
		</form>
		
	</div>
</center>

</body>
</html>