<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
     margin-top:10px;
    margin-left:auto;
    margin-right:auto;
    background-color: #e7e9f0;
  }
		.menu-container{
			padding: 0px;
			flex-basis: 20%;
			background: #535f80;
			
		}
		.items-container{
			padding: 0px;
			flex-basis: 75%;
			
			
		}
		

		.menu-container ul li{
			list-style: none;
			padding:20px;
			color: white;
		}
		.menu-container ul li a{
			text-decoration: none;
				color: white;
			
		}
		.menu-container ul li a i{
			color: #d281b5;
		}
	@media(min-width: 900px){
			.body-container{
				display: flex;
				width: 100%;
				justify-content: space-around;
				
			}
		}

		
	</style>
</head>
<body>
	<div class="body-container">
	<div class="menu-container">
		<ul>
			<li><a href="index.php?link=home" title="Admin|Home"><i class="fa fa-home" style="font-size:36px"></i> Home</a></li>
			<li><a href="index.php?link=allproducts" title="Admin|All Products"><i class="fa fa-shopping-basket" style="font-size:36px;"></i> All Products</a></li>
			<li><a href="index.php?link=viewmails" title="Admin|view mails"><i class="fa fa-envelope" style="font-size:36px"></i> View Mails</a></li>
			<li><a href="index.php?link=viewsales" title="Admin|ViewSales"><i class="fa fa-cart-arrow-down" style="font-size:36px"></i>View sales </a></li>
			<li><a href="index.php?link=viewmembers" title="Admin|View Members"><i class="fa fa-group" style="font-size:36px;"></i> View Members</a></li>
            <li><a href="index.php?link=makesale" title="Admin|Make sale"><i class="fa fa-group" style="font-size:36px;"></i> Post Product</a></li>
			<li><a href="logout.php" title="Admin|Logged Out"><i class="fa fa-power-off" style="font-size:36px"></i> Logout</a></li>
		</ul>
	</div>
	<div class="items-container">
		<?php
		if (@$_GET['link']=="allproducts") {
			include("viewall.php");
		}elseif (@$_GET['link']=="viewsales") {
			include("viewsales.php");
			}elseif (@$_GET['link']=="viewmails") {
			include("viewmails.php");
		}elseif (@$_GET['link']=="viewmembers") {
			include("viewmembers.php");
		}elseif(@$_GET['link']=="logout"){
			include("logout.php");
		}
		elseif(@$_GET['link']=="memberhistory"){
			include("memberhistory.php");
		}
		elseif(@$_GET['link']=="buyhistory"){
			include("buyhistory.php");
		}
        elseif(@$_GET['link']=="makesale"){
			include("productform.php");
		}
					else{
			include("home.php");
		}


		?>
	</div>
	</div>

</body>
</html>