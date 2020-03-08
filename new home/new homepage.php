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
			<li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
			
            </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
	  
	   <p><marquee direction="right" behavior="alternate"onmouseover="this.stop()" 
                     onmouseout="this.start()">Welcome !! SHOP AND GET 50% OFF !</marquee></p> 
        </div>
    </section>

 
      <body>

	  <?php
 
   
	$con=mysqli_connect("localhost","root","","home");  
	if(mysqli_connect_error())
	{
          echo"failed to connect".mysqli_connect_error();
	}                                     

	$RES=mysqli_query($con,"SELECT type,brand,dimension,weight,img,price,colour,pid FROM product");
		 echo"<table>";


	for($i=0;$i<=4;$i++)
	{
		for($j=0;$j<4;$j++)
	{
		echo"<tr>";

	
		if($row=mysqli_fetch_array($RES))
		{
			echo "<th>
			<form  action='p1.php' method='post' >

			<IMG SRC='" . $row['img'] . "' width='450' height='350'><br>
			 </th>";
			
			echo "<th>MRP:".$row['price']."<br>";
			echo "Room Type:".$row['type']."<br>";
		    echo "Brand:".$row['brand']."<br>";
			echo "Product ID:".$row['pid']."<br>";
			echo "Dimension:".$row['dimension']."<br>";
			echo "Colour:".$row['colour']."<br>"."Sku:".$row['pid']."<br>";
			echo "<input type='hidden' value='" . $row['pid'] . "' name='pid'>";
			echo "<input type='hidden' value='" . $row['img'] . "' name='img'>";
			echo "<input type='hidden' value='" . $row['price'] . "' name='price'>";

			echo "Weight:".$row['weight']."<br><br>
	Quantity
	     <select name='Quantity'>
	  
		<option value='1' selected> 1</option>
                <option value='2'> 2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
            <select><br><br>
                   <input  type='submit' value='ADD TO CART'  >
		</form>
	</th>";
       }
	  
	}
		echo "</tr>";
		
	}
		echo"</table>";
						mysqli_close($con);


?>
	  </body>
  
	
	   <section id="newsletter">
      <div class="container">
        <h1>Subscribe </h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <footer>
   
				        <h1>ABOUT SHOP</h1>
					    <p>We possess within us two minds. So far I have written only of the conscious mind.We further know that the subconscious has recorded every event. This is just perfect theme.</p>
					
						<div id="001">
							<h1>Information</h1>
								<ul>
									<a href="#">Our Stores</a><br>
									<a href="#">Delivery Information</a><br>
									<a href="#">About Us</a><br>
									<a href="#">Terms and Conditions</a><br>
									<a href="#">Privacy Policy</a><br>
									<a href="#">Contact Us</a><br>
									<a href="#">Returns</a><br>
								</ul>
							</div>
							
			        	<div id="002">
				       		<h1>My Account</h1>
								<ul>
									<a href="#">My Account</a><br>
									<a href="#">Order History</a><br>
									<a href="#">My Wishlist</a><br>
									<a href="#">Specials</a><br>
									<a href="#">Track Order</a><br>
									<a href="#">Gift Vouchers</a><br>
									
								</ul>
						</div>
						<div>
							     <h1>Get in Touch with us</h1>
								<p> GUNUPUR 766101  Online Furniture Shop inc.</p>
								<p>918 4084 694</p>
								<p>MARNteam@gmail.com</p>
							
						</div>
					
			<div>
	           <a href="#top">Back to Top</a>
	        </div>
			</div>
			<!-- end contanir & inner-footer -->
			<div >
				
				
							© 2019 Online Furniture Shop  |  Designed by MARN						
					
    </footer>
	</html>