<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "To access this page, Login is required";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
</head>
<style type="text/css">
body{
  margin: 50px 50px;
  background-attachment: fixed;
  background-size: cover;

}
</style>
<body background="../icons/bg5.jpg">
<div class="main-container">
    <?php include("header.php");?>
  <?php include("navigation.php");?>
<?php include("mainbody.php"); ?>
</div>
</body>
</html>