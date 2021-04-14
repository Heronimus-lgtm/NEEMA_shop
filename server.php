<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

// registration form phpside
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $idno = mysqli_real_escape_string($db, $_POST['idno']);
  $county = mysqli_real_escape_string($db, $_POST['county']);
  $zone = mysqli_real_escape_string($db, $_POST['zone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";//verify that only one user exists with the same emeail
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (username,phone,idno,county,zone,email,password) 
          VALUES('$username','$phone','$idno','$county','$zone','$email','$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You can now log in";
    header('location: login.php');
  }
}





//userlogin

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Hi You are now logged in";
      header('location: home.php');
    }else {
      array_push($errors, "Wrong username or password");
    }
  }
}


if(isset($_POST['rem'])) 
    { 
        //Add additional member to cookie array as per requirement 
        setcookie("username", $_SESSION['username'], time()+60*60*24*100, "/"); 
        //setcookie("regno", $_SESSION['regno'], time()+60*60*24*100, "/"); 
        return; 
    }



//mail
if (isset($_POST['send'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($subject)) { array_push($errors, "subject is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($phone)) { array_push($errors, "phone number is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }
 // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
       $query = "INSERT INTO mails (name,subject,email,Phone,message) 
          VALUES('$name','$subject','$email','$phone','$message')";
    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "message sent successfully";
    header('location: mail.php');
  }
}
?>