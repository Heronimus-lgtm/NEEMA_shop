<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='copyright' content=''>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NEEMA||SIGN IN PAGE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="icon" type="image/png" href="images/icon.jpg">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- StyleSheet -->
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
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
 
    <style type="text/css">
body{
    max-width: 1240px;
    margin:  auto;
    background-color: #f6f6f6;
     background-size: cover;
    background-attachment: fixed;

  }
  .form-container{
    border: 2px solid #f1f1f1;
    max-width: 450px;
    box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
    
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
  <body background="icons/bg6.jpg">
  <center>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3&appId=353037955610868&autoLogAppEvents=1"></script> 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{353037955610868}',
      cookie     : true,
      xfbml      : true,
      version    : '{v3.3}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

  
  <form class="form-container" method="post" action="login.php">
    <h1>Customers Login Form</h1>
    <i class="material-icons" style="font-size:60px;color: ">person</i>
    <?php include('errors.php'); ?>
      
      <input type="text" name="username"  placeholder="Username">
  
      <input type="password" name="password" placeholder="Password">

      <button type="submit" class="btn-send" name="login_user">LOGIN</button>
      <script>

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
  </script>


<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
<div class="fb-login-button" data-width="" data-size="" data-button-type="" data-auto-logout-link="" data-use-continue-as=""></div>
      <button type="reset" class="btn-close" name="reset">RESET</button>
    <p>
       <a href="register.php" >Sign up here</a>|| <a href="forgot.php" target="_blank">forgot password?</a>
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
