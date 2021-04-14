<?php

if(!isset($_SESSION)){
  session_start();
}

if(isset($_POST['sublog'])){
	$loginuser=$_POST['username'];
	$loginpass=$_POST['password'];



	if(!empty($loginuser)&& !empty($loginpass)){
		mysql_connect("localhost","root","");
		mysql_select_db("ecommerce");
		$query="SELECT * FROM users WHERE username='$loginuser' AND password='$loginpass'";
		$results=mysql_query($query) or die(" error validating user". mysql_error());
		if (mysql_num_rows($results)==1) {
			$_SESSION['loginuser']=$loginuser;
			$_SESSION['welcome']="Welcome";
			echo "Login success";
			
		}else{
			echo "Error";
		}
	}
}



?>