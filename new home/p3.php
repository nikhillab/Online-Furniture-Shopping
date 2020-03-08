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
			<li><a href="singup.html">SIGNUP</a></li>
            <li><a href="logins.html">LOG IN</a></li>
			<li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            </ul>
        </nav>
      </div>
    </header>

   
	
     <body>

<?php

		session_start();
		
		echo "<h1 align='center'>My Cart</h1><hr>";
		if (($_SESSION['cart'])==null)
			echo "<h1 align='center'>NO ITEM</h1><hr>";
		else
		{
			echo "<table width='1500' border='0'>";
			echo" <thead>
				<tr>
					<th>IMAGE</th>  
					<th>QUANTITY</th>
					<th>PRICE</th>
					<th>TOTAL PRICE</th>
				</tr>
			 <thead>";
			$t = 0; 
			
			for($i=0;$i<COUNT($_SESSION['cart']);$i++)
			{
				echo"<tr> <form action='updatecart.php' method='get'>" ;
                      
				echo "<th><img src='".$_SESSION['cart'][$i]["img"]."' width='350' height='350'>"."<br>";
			
				echo "<br>Product Id:".$_SESSION['cart'][$i]["pid"]."<br>";
   	  
				echo "<th>Quantity
					<select name='Quantity'>";
					$q=array("1","2","3","4");
					for($j=0;$j<4;$j++)
					{
						if($_SESSION['cart'][$i]["Quantity"]==$q[$j])
							echo "<option value='$q[$j]' selected>$q[$j]</option>";
						else
							echo "<option value='$q[$j]'>$q[$j]</option>";
					}
				echo "<select></th><br>";
				echo "<th>Rs:&nbsp&nbsp".$_SESSION['cart'][$i]["price"]."</th>";
				echo "<th>Rs:&nbsp&nbsp".($_SESSION['cart'][$i]["price"] * $_SESSION['cart'][$i]["Quantity"])."</th>";

				echo"<th><input type='hidden' value='" . $_SESSION['cart'][$i]['pid'] . "' name='pid'>
						<input type='submit' value='UPDATE' name='update' ><br><br>
					<input name='delete' type='submit' value='DELETE' ></th>
				</form>";         
          
				$t = $t + $_SESSION['cart'][$i]["price"] * $_SESSION['cart'][$i]["Quantity"]; 
					echo"</tr>" ;
			}
           
			echo"<tr>" ;
			echo "<th colspan='4'>TOTAL COST</th><th>$t</th>";
  
			echo"</tr></table>" ;
		
		}
  ?>

       <form action="checkout.html" align="right">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type='submit' value='BUY NOW' ></th>
</form>  
		
</body>
  
	
</html>