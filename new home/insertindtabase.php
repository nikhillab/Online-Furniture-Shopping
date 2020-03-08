<?php
$type=$_POST['type'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$dimension=$_POST['dimension'];
$weight=$_POST['weight'];
$colour=$_POST['colour'];
$pid=$_POST['pid'];


$img = "upload/".$pid . ".jpg";

    if($_FILES["file"]["error"]>0) 
	echo"Error:".$_FILE["file"]["error"]."<br>"  ;                                         
      else
{

move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $pid . ".jpg");

}


$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     


$sql="INSERT INTO product(type,brand,dimension,weight,price,colour,pid,img)
VALUES('$type','$brand','$dimension','$weight','$price','$colour','$pid','$img' )";

if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));

}
echo "1 record added";
mysqli_close($con);

?>