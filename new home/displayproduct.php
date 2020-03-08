
<?php

   
$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     

$RES=mysqli_query($con,"SELECT type,brand,dimension,weight,image,price,colour,id FROM product");
  echo"<table style='font-size:30px'>";


for($i=0;$i<=4;$i++)
{
echo"<tr>";

for($j=0;$j<4;$j++)
{
     if($row=mysqli_fetch_array($RES))
      {
	echo "<th>
        <form  action='p1.php' method='post'>

		<IMG SRC='" . $row['image'] . "' width='350' height='350'><br><br><br>".
		"Room Type:".$row['type']."<br>".

		"Brand:".$row['brand']."<br>".

		"Dimension:".$row['dimension']."<br>".

		"MRP:".$row['price']."<br>".

		"Colour:".$row['colour']."<br>".

		"Sku:".$row['id']."<br>";
        echo "<input type='hidden' value='" . $row['id'] . "' name='Sku'>";
	echo "<input type='hidden' value='" . $row['image'] . "' name='image'>";

        echo "Weight:".$row['weight']."<br><br>
	
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
