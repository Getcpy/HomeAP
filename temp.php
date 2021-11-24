<?php 
session_start();
include('server.php');
$productid = $_GET['productid'];

$q5 = "SELECT * FROM product WHERE productid = $productid";
$result5 = mysqli_query($con,$q5);
if($result5){
while($row = $result5->fetch_array()){
    $productname = $row['productname'];
  //  echo $productname;
}
}
else{
 //   echo "ERROR";
}


$q0 = "SELECT quantity FROM cart WHERE productid = $productid";
$result0 = mysqli_query($con,$q0);

//echo $userid;
//echo $checkquantity;


$q69 = "SELECT Count(productid) as Count1 FROM cart where productid = $productid";
$result69 = mysqli_query($con,$q69);


$q99 = "SELECT productprice FROM PRODUCT WHERE productid = $productid";
$result99 = mysqli_query($con,$q99);
while($row=$result99->fetch_array()){
  //echo $row['productprice'];
  $price = $row['productprice'];
 // echo $price;
  }

while($row=$result69->fetch_array()){
//echo $row['Count1'];
$counts = $row['Count1'];
}
if($counts == '0'){
  //echo "NOTHING IN ";
  
  $q16="INSERT INTO `cart`(`productid`, `productname`,`productprice`, `quantity`, `totalprice`) VALUES ($productid,'$productname','$price',1,$price)";
  mysqli_query($con,$q16);
 // echo "INSERT1";
  header('Refresh:0.01; url = Kitchen.php');
}
else{
  if($counts==1){
    $q1 = "UPDATE cart SET quantity = quantity + 1 WHERE productid = $productid";
    mysqli_query($con,$q1);
    $q2 = "UPDATE cart SET totalprice = quantity * $price  WHERE productid = $productid";
    mysqli_query($con,$q2);
  // echo "UPDATE";
  }


  //echo "SECOND";
  header('Refresh:0.01; url = Kitchen.php');
}






?>

