<?php
    if(isset($_POST['history'])){
      $mail=$_POST['name'];
    


    $_SESSION['mail']=$name;
    echo $_SESSION['membername'];

header('location:index.php?link=viewmails');
   
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
  <title>View All mails</title>
  <style type="text/css">
    h2{
      color: #fff;
    }

      </style>
 
 <script type="text/javascript">
        
        function Warn(){

    alert("You are about to permanently delete this mail!!");
    


}
    </script>

</head>
<body>
  <h2>MAILS</h2>
  <table bgcolor="white" width="800px" font-family="arial">
  <tr bgcolor="purple" height="20px"><th>NAME</th><th>SUBJECT</th><th>EMAIL</th><th>PHONE</th><th>MESSAGE</th><th>DELETE</th></tr>
  

<?php
$sql="SELECT * FROM mails";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){

?>

<tr>
    
    <td><?php echo $row["name"];?></td>
    <td bgcolor="orange"> <?php echo $row["subject"];?></td>
    <td><?php echo $row["email"];?></td>
    <TD bgcolor="orange"><?php echo $row["phone"];?></TD>
    <td><?php echo $row["message"];?> </td>
    <td bgcolor="red"> <a href="deletemail.php?mailid=<?php echo $row['mailid']; ?>" onclick="Warn()" class="del"><i class="fa fa-trash-o"></i>REMOVE</a>
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


