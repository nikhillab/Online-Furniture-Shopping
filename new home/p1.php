<?php 
       session_start();
   
   {
/*is_array($_SESSION['cart'])==false)
   {
	$_SESSION['cart']=array();
	$_SESSION['cart']['0']["Quantity"]=$_POST['Quantity'];
        $_SESSION['cart']['0']["pid"]=$_POST['pid'];
        $_SESSION['cart']['0']["img"]=$_POST['img'];
        $_SESSION['cart']['0']["price"]=$_POST['price'];
	
}
else
     {     
       */     
        	   $c=COUNT($_SESSION['cart']);
              $_SESSION['cart'][$c]["Quantity"]=$_POST['Quantity'];
              $_SESSION['cart'][$c]["pid"]=$_POST['pid'];
              $_SESSION['cart'][$c]["img"]=$_POST['img'];
              $_SESSION['cart'][$c]["price"]=$_POST['price'];
            
       header('Location: http://localhost/php%20project/project/new%20home/p3.php');
}

?>