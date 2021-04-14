<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>NEEMA||SIGN UP PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<style type="text/css">

  body{
    max-width: 1240px;
    margin:  auto;
    background-color: #f6f6f6;
     background-size: cover;
    background-attachment: fixed;

  }
  .form-container{
    max-width: 450px;
    
  
  }
  .btn-send{
    background-color:  #4CAF50;
    width: 90%;
    color: white;
    margin-bottom: 10px;
    padding: 10px;
    border: none;
  }
  .btn-clear{
    background-color: red;
    width: 90%;
    color: white;
    margin-bottom: 10px;
    opacity: 0.8;
    padding: 10px 10px;
    border: none;
  }
  .select-menu,input[type=email]:focus,input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
  }
input[type=email],input[type=text], .form-container input[type=password] {

    background-color: #f1f1f1;
    width: 90%;
    border: none;
    margin: 0px 0px 10px 0px;
    padding: 10px 0px;

  }
   .select-menu{
     background-color: #f1f1f1;
    width: 45%;
    border: none;
    margin: 0px 0px 10px 0px;
    padding: 10px 0px;
  }


</style>
<body background="Icons/bg6.jpg">
  <center>
   
  <form class="form-container" method="post" action="register.php">
    

    <h1>Registration Form</h1>
    <i class="material-icons" style="font-size:60px;color: ">person</i>
    <?php include('errors.php'); ?>
      <input type="text" name="username" value="<?php echo $username; ?>" required autofocus  placeholder="Username">
      <input type="email" name="email" value="<?php echo $email; ?>" required autofocus placeholder="email">
    
      <input type="password" name="password_1" required autofocus placeholder="Password">
      <input type="password" name="password_2" required autofocus placeholder="Confirm Password">
    
      <button type="submit" class="btn-send" name="reg_user">REGISTER</button>
    
      <button type="reset" class="btn-clear" name="reset">RESET</button>
    
    <p>
      Already Registered?<a href="login.php">Sign in</a>
    </p>

  </form>
   </center>
</body>
</html>