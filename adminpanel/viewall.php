<?php
$server="localhost";
$user="root";
$pass="";
$db="ecommerce";
$connection=mysqli_connect($server,$user,$pass,$db);
if(!$connection){
  die("connection failed".mysqli_connect_error());
}
$sql="SELECT * FROM allproductsforsale";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){

?>

<!DOCTYPE html>
<html>
<head>
  <title>View All Products</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  img{
    height: 180px;
  }
     .product{
    float: left;
    width: 20%;
  }
  .product-image img{
    max-width: 100%;
  }
  .product-info{
    text-align: center;
  }
  .product-card{
    height: auto;
    padding: 2%;
    background-color: #fff;
    box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
  }
  .product-card:hover{
    background: rgba(100,100,100,0.5);
    
  }

@media(max-width: 920px){
  .product-card{
    flex:1 50%;
  }
  .product.product-card:first-child,
  .product.product-card:nth-child(2){
    width: 100%;

  }
  .product{
      float: left;
    width: 50%;
    }

}
.del{
  text-decoration: none;
  color: red;
}
a{
  text-decoration: none;
}
</style>
 <script type="text/javascript">
        
        function Warn(){

    alert("You are about to permanently delete this item!!");
    


}
    </script>
  </style>
</head>
<body>



<section class="product">
      <div class="product-card">
            <div class="product-image">
                    <?php  echo "<img src='uploads/".$row["image"]."'>"; ?>
             </div>
          
             <div class="product-info">
    <?php echo "<b>".$row["productname"]."</b>"?><br>
    <?php echo "<b>Ksh. ".$row["price"]."</b>"?><br>
    <?php echo "<b>".$row["timeposted"]."</b>"?>
    <br>
     <a href="delete.php?productid=<?php echo $row['productid']; ?>" onclick="Warn()" class="del">
      <i class="fa fa-close" style="font-size:20px;color:red"></i>Delete
     </a>
    
              </div>
      </div>
</section>

</body>
</html>

<?php

  }
}else {
  echo "0 results found!";
}mysqli_close($connection);
?>


