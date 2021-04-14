<?php
    if(isset($_POST['history'])){
      $membername=$_POST['hiddenmembername'];
    


    $_SESSION['membername']=$membername;
    echo $_SESSION['membername'];

header('location:index.php?link=memberhistory');
   
}
    ?>

<?php

$server="localhost";
$user="root";
$pass="";
$db="ecommerce";
$connection=mysqli_connect($server,$user,$pass,$db);
if(!$connection){
  die("connection failed".mysqli_connect_error());
}



?>


<!DOCTYPE html>
<html>
<head>
  <title>View All Users</title>
  <style type="text/css">
h2{
  color: #fff;
}

a{
  text-decoration: none;
}
</style>
 <script type="text/javascript">
        
        function Warn(){

    alert("You are about to permanently remove this member!!");
    


}
    </script>
  </style>
</head>
<body>
  <h2>REGISTERED MEMBERS</h2>
  <table bgcolor="#fff" width="800px">
  <tr bgcolor="purple"><th>Member Name</th><th>Phone</th><th>County</th><th>Zone</th><th>email</th><th>Remove</th></tr>
  

<?php
$sql="SELECT * FROM users";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){

?>

<tr>
    
    <td><?php echo $row["username"];?></td>
    <td bgcolor="orange"> <?php echo $row["phone"];?></td>
    <td><?php echo $row["county"];?></td>
    <TD bgcolor="orange"><?php echo $row["zone"];?></TD>
    <td><?php echo $row["email"];?> </td>
      

    <td bgcolor="red"> <a href="deletemembers.php?userid=<?php echo $row['userid']; ?>" onclick="Warn()" class="del"><i class="fa fa-trash-o"></i>REMOVE</a>
</td>
 

<?php

  }
}else {
  echo "0 results found!";
}mysqli_close($connection);
?>
 </tr>
   
</table>


</body>
</html>


