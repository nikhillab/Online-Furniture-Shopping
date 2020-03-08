<?php
$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Email=$_POST['email'];
$pass=$_POST['pass'];
$mob=$_POST['mob'];
$gender=$_POST['Gender'];
$sql="INSERT INTO register(Firstname,Lastname,Email,Password,Contact,Gender)VALUES('$fname','$lname',
'$Email','$pass','$mob','$gender')";
if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));

}
header('Location: http://localhost/php%20project/project/new%20home/new%20homepage.php');
mysqli_close($con);
?>