<?php
    if(isset($_POST['history'])){
      $membername=$_POST['hiddenmembername'];
    
    $_SESSION['membername']=$membername;
    echo $_SESSION['membername'];

header('location:index.php?link=memberhistory');
   
}
    ?><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
<!DOCTYPE html>
<html>
<head>
<title>Our Products</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
body{
    max-width: 1240px;
    margin-top:;
    background-color: #f6f6f6;
  }
  .product{
    float: left;
    width: 25%;
    margin-bottom: 50px;
  }
  .product a{
    text-decoration: none;
    color: #000;

  }
  .product-image{
    height: 70%;
    border-bottom: 1px solid #ddd;
  }
  .product-card{
    padding: 2%;
    background-color: #fff;
    box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
  }
  .product-card:hover{
    background: rgba(107,28,11,0.5);
    

  }

@media(max-width: 920px){
  .product-card{
    display: block;
  }
  .product.product-card:first-child,
  .product.product-card:nth-child(2){
    width: 100%;
    display: block;

  }
  .product{
      width: 100%;
      display: block;
      margin-bottom: 10px;
    }
    .product :first-child,.product:nth-child{
      height: 250px;
    }
}
</style> 
</head>
<body>
  <center>
<section class="product" >
      <div class="product-card">
            <div class="product-image">
              <table border="1" width="100%;">
                <tr>
                  <td>Name</td>
                  <td><?php echo $row["username"];?>
</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td> <?php echo $row["phone"];?>
</td>
                </tr>
                <tr>
                  <td>County</td>
                  <td><?php echo $row["county"];?></td>
                </tr>
                <tr>
                  <td>Zone</td>
                  <td><?php echo $row["zone"];?></td>
                </tr>
                <tr>
                  <td>Sell History</td>
                  <td>                 <a href="sellhistory.php?username=<?php echo $row['username']; ?>" class="del"><i class="fa fa-history"></i> SELL HISTORY</a></td>
                </tr>
                <tr>
                  <td>Buy History</td>
                  <td>
                    <a href="buyhistory.php?username=<?php echo $row['username']; ?>" class="del"><i class="fa fa-history"></i> BUY HISTORY</a>
                  </td>
                </tr>
                <tr>
                  <td>Remove</td>
                  <td>
                     <a href="deletemembers.php?username=<?php echo $row['username']; ?>" onclick="Warn()" class="del"><i class="fa fa-trash-o"></i>REMOVE</a>
                  </td>
                </tr>
              </table>
              

             </div>
             
      </div>
</section>
<?php

    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
</center>
</body>
</html>