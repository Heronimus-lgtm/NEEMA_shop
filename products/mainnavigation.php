<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
	}
	nav{
		width: 100%;
		background:rgb(105,96,87);
	}
	ul{
		width: 100%;
		margin: 0 auto;
		padding: 0;
	}
	ul li{
		list-style: none;
		display: inline-block;
		padding: 15px;
	}
	ul li:hover{
		background: #00000;
	}
	ul li a{
		color: #fff;
		text-decoration: none;
	}
	.toggle{
		width: 100%;
		padding: 10px 20px;
		text-align: right;
		box-sizing: border-box;
		color: #f5f5f5;
		font-size: 30px;
		display: none;
	}
	@media(max-width: 768px){
		.toggle{
			display: block;
		}
		ul{
		width: 100%;
		display: none;
	}
	ul li{
		display: block;
		text-align: center;
	}
	}
	
	.active{
		display: block;
	}
</style>
<body>
<nav>
	<div class="toggle">
		<div class="menu"><i class="fas fa-bars" menu></i></div>
	</div>
	<ul>
			<li><a href="../home.php"><i class="fa fa-home" ></i>HOME</a></li>
			<li><a href="items.php"><i class="fa fa-gender" ></i>OTHER PRODUCTS</a></li>
			
		</ul>
	
</nav>
</body>
</html>