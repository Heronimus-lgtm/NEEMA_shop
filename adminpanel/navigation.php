<!DOCTYPE html>
<html>
<head>
	<title>Navigation Page</title>
</head>
<style type="text/css">
	.nav{
		width: 100%;
		height: 70px;	
		background: #d281b5;
	}
	.nav ul li{
		list-style: none;
		float: right;
		padding: 10px 20px;
		padding: 30px 15px;

	}
	.nav ul li i{
		color: white;


</style>
<body>

	<div class="nav">
		<ul>
			<li style="float: left;">
				<i class="material-icons" style="font-size:20px width="40" height="40";">person</i>

    <?php if (isset($_SESSION['success'])) : ?>
      <!--<div class="error success"  >--> 
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
  
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <font color="green" size="5">Welcome<strong><?php echo $_SESSION['username']; ?></strong></font>
    <?php endif ?>	
	</div>
</body>
</html>