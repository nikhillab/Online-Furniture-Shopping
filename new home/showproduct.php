<?php

   
$con=mysqli_connect("localhost","root","","home");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     

$RES=mysqli_query($con,"SELECT type,brand,dimension,weight,img,price,colour,pid FROM product");
  echo"<TABLE border='0.5' width='720'>
<tr>
<th> type</th>
<th> brand</th>
<th> dimension</th>
<th> weight</th>
<th> image</th>
<th>price</th>
<th>colour</th>
<th> id</th>
</tr>";
while($row=mysqli_fetch_array($RES))
{
 echo"<tr>";
echo"<th>".$row['type']."</th>";
echo"<th>".$row['brand']."</th>";
echo"<th>".$row['dimension']."</th>";
echo"<th>".$row['weight']."</th>";
echo"<th><IMG SRC='".$row['img']."' width='150' height='150'></th>";
echo"<th>".$row['price']."</th>";
echo"<th>".$row['colour']."</th>";
echo"<th>".$row['pid']."</th>";
echo"</tr>";
}
echo"</table>";
mysqli_close($con);


?>
