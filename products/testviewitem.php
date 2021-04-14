<?php include("mainnavigation.php"); ?>
<?php

if(!isset($_SESSION)){
	session_start();
}
error_reporting(0);
$server="localhost";
$user="root";
$pass="";
$db="ecommerce";

$conn=mysqli_connect($server,$user,$pass,$db);
$id=$_GET['productid'];
$sql="SELECT * FROM allproductsforsale  WHERE productid='$id'";

mysqli_query($conn,$sql) or die("cannot view table");

//UPDATE `members` SET `contact_number` = '0759 253 542' WHERE `membership_number` = 1;
#header("location:index.php?link=allproducts");
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)<2){
	while($row=mysqli_fetch_assoc($result)){

?>

<html>
<head>
	<title>view item</title>
	<style type="text/css">
    body{
    max-width: 1240px;
    margin:  auto;
    background-color: #f6f6f6;
    background-attachment: fixed;
    background-size: cover;;
  }

	img{
		height: 300px;
	}
    
    .product-image{
      padding: 0px;
      float:left;
      width: 39%; 
    }
    .product-image img{
      height: 350px;
    }
    .product-info{
      padding: 0px;
      float: left;
      width: 60%;
      color: white;

      
    }
    
    @media(max-width: 900px){
      
      .product-image{
        display: inline-block;
        width: 100%;

      }
      .product-info{
        display: inline-block;
        width: 100%;
      }
    }
</style>
</head>
<body background="../icons/bg6.jpg">
  <?php
  if (isset($_POST['finish1'])) {
  header('location: paymentform.php');
}
      ?>
    
<?php
$userid=$_SESSION['loginuser'];
$welcome=$_SESSION['welcome'];
echo $welcome;
echo "         ";
echo $userid;


?>

</div>
<div class="payment-info">
  <strong>
  <p>
  To complete your Order Lipa Na MPESA.
  <ol>
    <li>Lipa na MPSESA</li>
    <li>PayBill Services</li>
    <li>Enter Business No 69422645</li>
    <li>Enter Code Below your Order</li>
  </ol>

</p>
</strong>
</div>
             <div class="product-info">
              <table bgcolor="purple" width="650px">
                <th colspan="2"> Product Details</th>
                <tr>
                  <td>Product Category</td>
                  <td>  <input type="hidden" name="hiddencategory" value="<?php echo $row['productcategory']?>"/><?php echo $row['productcategory']?></td>
                </tr>
                <tr>
                  <td>Product Id</td>
                  <td> <input type="hidden" name="hiddenid" value="<?php echo $row['productid']?>"/><?php echo $row['productid']?></td>
                </tr>
                <tr>
                  <td>Product Name</td>
                  <td> <input type="hidden" name="hiddenname" value="<?php echo $row['productname']?>"/><?php echo $row['productname']?></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td><input type="hidden" name="hiddenprice"><?php echo $row["price"]?></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td><?php echo $row["description"]?></</td>
                </tr>
              </table>
              <form action="" method="POST" action="paymentform.php">
  <input type="submit" name="finish1" value="PLACE ORDER">
  </form>
</div>
             </form>
             <div class="product-image">
                <form method="GET" action="sessiontest.php" style="width: 100%;">

                    <?php  echo "<img src='../adminpanel/uploads/".$row["image"]."'>"; ?>
             </div>
</body>
</html>
<?php

	}
}else {
	echo "0 results found!";
}mysqli_close($conn);
?>
