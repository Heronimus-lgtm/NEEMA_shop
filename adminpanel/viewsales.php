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
  <h2>PLACED ORDERS</h2>
  <table bgcolor="#fff" width="850px">
  <tr bgcolor="purple"><th>Customer Name</th><th>Phone</th><th>ID Number</th><th>Product</th><th>email</th><th>amount paid</th><th>Mpesa Code</th><th>contact customer</th><th>Decline</th></tr>
  

<?php
$sql="SELECT * FROM sales";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){

?>

<tr>
    
    <td><?php echo $row["customername"];?></td>
    <td bgcolor="orange"> <?php echo $row["phone"];?></td>
    <td><?php echo $row["idn"];?></td>
    <TD bgcolor="orange"><?php echo $row["productname"];?></TD>
    <td><?php echo $row["email"];?> </td>
    <td bgcolor="orange"><?php echo $row["paid"];?> </td>
    <td><?php echo $row["code"];?> </td>
    <td><a href="tel:<?php echo $row["phone"];?>" class="single-icon"><img src="../icons/phone.png" height="20" width="30"></a>
              <a href="mailto:<?php echo $row["email"];?>" class="single-icon"><img src="../icons/mail.png" height="20" width="30"></a> <a href="sms:<?php echo $row["phone"];?>"&body="your order has been approved wait for delivery" class="single-icon"><img src="../icons/sms.jpg" height="30" width="30"></a></td>
    <td bgcolor="red"> <a href="deleteorder.php?orderid=<?php echo $row['orderid']; ?>" onclick="Warn()" class="del"><i class="fa fa-trash-o"></i>REMOVE</a>
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


