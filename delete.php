<?php 
session_start();
include('server.php');
$productid = $_GET['productid'];
echo $productid;
$q = "DELETE FROM cart WHERE productid = $productid";
mysqli_query($con,$q);

if($q){
  header('Refresh:0.01; url = cart.php');
}
else{
  //  echo "ERROR";
}






?>

