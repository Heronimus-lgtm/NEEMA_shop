<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='copyright' content=''>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIGN IN PAGE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="icon" type="image/png" href="images/icon.jpg">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- StyleSheet -->
  
  <!-- Bootstrap -->
 <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min">
  <link rel="stylesheet" href="css/bootstrap.css.map">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap.grid.css.map">
  <link rel="stylesheet" href="css/bootstrap.js.map">
  <link rel="stylesheet" href="css/bootstrap.bundle">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Fancybox -->
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
  <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
  <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
  
  <!-- Eshop StyleSheet -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
 
<body background="../icons/bg4.jpg">
  
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
   height: 500px;
    
  }
  .btn-send{
    background-color:  #4CAF50;
    width: 90%;
    color: white;
    margin-bottom: 10px;
    padding: 15px;
    border: none;
  }
  .btn-close{
    background-color: red;
    width: 90%;
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

  <center>
  <form class="form-container" method="post" action="login.php">
    <h1>SuperAdmin Login Form</h1>
    <i class="material-icons" style="font-size:60px;color: ">person</i>
    <?php include('errors.php'); ?>
      
      <input type="text" name="username"  placeholder="Username">
  
      <input type="password" name="password" placeholder="Password">

      <button type="submit" class="btn-send" name="login_user">LOGIN</button>
  
<div class="fb-login-button" data-width="" data-size="" data-button-type="" data-auto-logout-link="" data-use-continue-as=""></div>
      <button type="reset" class="btn-close" name="reset">RESET</button>
    <p>
       <a href="../mails1.php" onclick="return confirm_alert(this);">Sign up here</a>|| <a href="forgot.php" target="_blank">  forgot password?</a>
       <script type="text/javascript">
  function confirm_alert(node){
    return confirm("please contact SuperAdmin to access the page.");
    if (answer)
      window.location = "../index.php";
  }
</script>
    </p>
  </form>
 </center>
</body>
</html>
