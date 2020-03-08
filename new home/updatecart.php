<?php

$pid=$_GET['pid'];
$Quantity=$_GET['Quantity'];

session_start();

for($i=0;$i<COUNT($_SESSION['cart']);$i++)
{
	if($pid==$_SESSION['cart'][$i]["pid"])
	{
		if($_GET['update']!=null)
			$_SESSION['cart'][$i]["Quantity"] = $Quantity;
		
		if($_GET['delete']!=null){
			unset($_SESSION['cart'][$i]);
			$_SESSION['cart']=array_values($_SESSION['cart']);
		}
	}
}

header('Location: http://localhost/php%20project/project/new%20home/p3.php');

?>