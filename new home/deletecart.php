<?php

$pid=$_GET['pid'];
$Quantity=$_GET['Quantity'];


session_start();

for($i=0;$i<COUNT($_SESSION['cart']);$i++)
{
	if($pid==$_SESSION['cart'][$i]["pid"])
	{
		
		if($_GET['delete']!=null)
			unset($_SESSION['cart'][$i]);
		    
	}
}


header('Location: http://localhost/php%20project/project/new%20home/p3.php');

?>