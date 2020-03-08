<?php
$UID=$_POST['uname'];
$PWD=$_POST['psw'];
$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     

$RES=mysqli_query($con,"SELECT Email,Password FROM register where Email='$UID' and Password='$PWD' ");
if($ROW=mysqli_fetch_array($RES))
{
    session_start();
   $_SESSION['UID']=$UID;
  //$_SESSION['un']=$ROW['Email'];
header('Location:http://localhost/php%20project/project/new%20home/UNO.php');

}
else
echo"invalid id/pwd"

?>