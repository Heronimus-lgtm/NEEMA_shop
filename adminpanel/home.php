<?php
				$server="localhost";
                $user="root";
                $pass="";
                $db="ecommerce";
                $connection=mysqli_connect($server,$user,$pass,$db);
                ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin|Home</title>
	<style type="text/css">
.home-main-container{
	margin-top: 10px;
	width: 95%;
	margin-left: 10px;
	
		}
		.home-box1{
			padding: 20px;
			flex-basis: 25%;
			background-color:#68bbe5;
			 box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
			 color: black;
			 border-radius: 5px 5px;
			 height: 140px;
			width: 270px;
		}
		.home-box2{
			padding: 20px;
			flex-basis: 30%;
			background-color: #f6ffee;
			 box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
			 color: black;
			 border-radius: 5px 5px;
			 height: 140px;
			width: 100px;
		}
		.home-box3{
			padding: 20px;
			flex-basis: 20%;
			background-color: #0683d7;
			  box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
			 color: black;
			 border-radius: 5px 5px;
			 height: 140px;
			width: 250px;
		}
		hr{
			color: #f6f6f6;

		}
		@media(min-width: 900px){
			.home-main-container{
				display: flex;
				justify-content: space-around;
			}
			.home-box1{
				margin-bottom: 20px;
			}
			h5{
				color: white;
			}
a{
	color: #fff;
}
		}
	</style>
</head>
<body>
	<center>
	<h5>SUMMARY OVERVIEW</h5>
	<hr>
	<a href="../home.php" target="_blank">GO BACK TO USER SIDE</a>
	</center>
	<div class="home-main-container">
		<div class="home-box1">
			<p style="font-size: 30px;text-align: center;">
				<img src="../icons/people.png" height="30" width="40">
				<?php
				$result=mysqli_query($connection,"SELECT count(*) as totalmembers from users");
               $data=mysqli_fetch_assoc($result);
               echo $data['totalmembers'];
			?>
			</p>
			<hr>
			<font>No of Members Registered On This Platform</font>
		 </div>
		<div class="home-box2">
			<p style="font-size: 30px;text-align: center;">
					<img src="../icons/cart.png" height="30" width="40">
			<?php
				$result=mysqli_query($connection,"SELECT count(*) as totalproducts from Sales");
               $data=mysqli_fetch_assoc($result);
               echo $data['totalproducts'];
			?>
			</p>
			<hr>
			<font>Total Products sold on this platform</font>
		 </div>
		<div class="home-box3">
			<p style="font-size: 30px;text-align: center;">
				<img src="../icons/mail.png" height="30" width="40">
				<?php
				$result=mysqli_query($connection,"SELECT count(*) as totalmails from mails");
               $data=mysqli_fetch_assoc($result);
               echo $data['totalmails'];
			?>
			</p>
			<hr>
			<font>No of Mails Received On This Platform</font>
		 </div>

	</div>
	<div class="home-main-container">
		<div class="home-box2">
			<img src="../icons/products.png" height="30" width="40">
			<p style="font-size: 30px;text-align: center;">
				<?php
				$result=mysqli_query($connection,"SELECT SUM(price) as totaltransaction from allproductsforsale");
               $data=mysqli_fetch_assoc($result);
               echo "Ksh.".$data['totaltransaction'];
			?>
			</p>
			<hr>
			<font>Total Monetary Value of all the Products</font>
		 </div>	 
		 <div class="home-box2">
			<img src="../icons/fd4.jpg" height="30" width="40">
			<p style="font-size: 30px;text-align: center;">
				<?php
				$result=mysqli_query($connection,"SELECT SUM(paid) as totaltransaction from sales");
               $data=mysqli_fetch_assoc($result);
               echo "Ksh.".$data['totaltransaction'];
			?>
			</p>
			<hr>
			<font>Total Monetary Value of all the Sales</font>
		 </div>	 
	</div>
	 </body>
</html>
<?php mysqli_close($connection);?>