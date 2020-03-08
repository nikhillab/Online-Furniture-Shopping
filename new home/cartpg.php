<?php
$Quantity=$_POST['Quantity'];
$price=$_POST['price'];
$pid=$_POST['pid'];
$img =$_POST['img'];


$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     


$sql="INSERT INTO cart(img,Quantity,price,pid)VALUES('$img','$Quantity','$price','$pid')";

if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));

}
else
	echo "recode_file added";
mysqli_close($con);

?>