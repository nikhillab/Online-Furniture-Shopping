<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
   
    <title>Furniture Shopping | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
 
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight"> Online Furniture Shopping </span></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
			 <li><a href="#">Category</a></li>
			<li><a href="singup.html">SIGNUP</a></li>
            <li><a href="logins.html">LOG IN</a></li>
			<li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            </ul>
        </nav>
      </div>
    </header>

<?php

   
$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     

$RES=mysqli_query($con,"SELECT img,price,Quantity,pid FROM cart");
  echo"<table style='font-size:30px'>";


for($i=0;$i<=2;$i++)
{
echo"<tr>";

for($j=0;$j<2;$j++)
{
     if($row=mysqli_fetch_array($RES))
      {
	echo "<th>
        <form  action='cartpg.php' method='post'>

		<IMG SRC='" . $row['img'] . "' width='350' height='350'><br><br><br>";
		echo "MRP:".$row['price']."<br>";

			echo "Quantity:".$row['Quantity']."<br>";

		echo "Pid:".$row['pid']."<br>";
        echo "<input type='hidden' value='" . $row['pid'] . "' name='pid'>";
	echo "<input type='hidden' value='" . $row['img'] . "' name='img'>";
	echo "<input type='hidden' value='" . $row['price'] . "' name='price'>";

        echo "
	
 Quantity
	   <select name='Quantity'>
	  
   	        <option value='1'> 1</option>
                <option value='2'> 2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
            <select><br><br>
                   <input type='submit' value='ADD TO CART' >
    </form>
	</th>";
       }
}
echo "</tr>";
}
echo"</table>";
mysqli_close($con);


?>