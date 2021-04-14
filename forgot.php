
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<style type="text/css">

  
  .form-container{
    border: 2px solid #f1f1f1;
    max-width: 450px;
    box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
    margin-top: 50px;
  }
  .btn-send{
    background-color:  #4CAF50;
    width: 95%;
    color: white;
    margin-bottom: 10px;
    padding: 15px;
    border: none;
  }
  .btn-close{
    background-color: red;
    width: 95%;
    color: white;
    margin-bottom: 10px;
    opacity: 0.8;
    padding: 16px 20px;
    border: none;
  }
  .select-menu,input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
  }
input[type=text], .form-container input[type=password] {
    background-color: #f1f1f1;
    width: 90%;
    border: none;
    margin: 0px 0px 10px 0px;
    padding: 15px 0px;
  }


</style>
<body>
  <center>
  	

	<form class="form-container" method="POST" action="">
    <center>
    <h1>RESET PASSWORD</h1>
    <i class="material-icons" style="font-size:60px;color: ">person</i>
		<input type="text" name="name" placeholder="UserName">
     <input type="text" name="mail" placeholder="Email Address">
    <br>
		<br>
		<button type="submit" class="btn-send" name="submit">SUBMIT</button>
		<button type="reset" class="btn-close" >CLEAR</button>
    </center>
    <p><a href="register.php" target="_blank">Sign up here</a>||<a href="forgot.php" target="_blank">Forgot Password?</a></p>
	</form>
	
  </center>
</body>
</html><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>