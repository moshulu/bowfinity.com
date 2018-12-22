<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		@import url('https://fonts.googleapis.com/css?family=Sacramento');
		@import url('https://fonts.googleapis.com/css?family=Heebo:100');
	</style>
<title>BOWfinity | My Cart</title>
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bows.css" rel="stylesheet" type="text/css">
</head>


<body>
<header>
      <img class = "logo" src="Images/logo.jpg" alt = "BOWfinity logo"/>

      <div class="banner">
      		<h1>BOWfinity</h1>
      		<h3>CHEER BOWS</h3>
      </div>
       		<table>
            	<tr><td>
            	
            	      <?php
        		if(!isset($_SESSION['firstname']) || (trim($_SESSION['lastname']) == '')){
          			echo "<a href = \"../bowfinity/login.php\">Log In</a>
          			            	</td></tr>
                
                <tr><td><a href = \"../bowfinity/createaccount.php\">Create An Account</a></td></tr>";
        		}
       			 else{
      if(isset($_SESSION['firstname'])){
        echo "<p> Welcome, {$_SESSION['firstname']} {$_SESSION['lastname']}.</p>";
      }
         			 echo "<a href = \"../bowfinity/logout.php\">Log Out</a>";
       			}
       			?>
            	
            	</td></tr>
                <tr>
                	<td>
                		<a href = "https://www.facebook.com/BOWfinityCheerBows/"><img src = "../bowfinity/Images/facebook.png" alt = "facebook logo"></a>
                	</td>
                	<td>
                		<a href = "https://www.etsy.com/shop/BOWfinityNBeyond"><img style = "margin-top: 2px" src = "../bowfinity/Images/etsy.png" alt = "etsy logo"></a>
                	</td>
                </tr>
            </table>
</header>

<!-- Nav bar start -->
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
</div>
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
      	<li><a href="../bowfinity/index.php">HOME</a></li>
        <li><a href="../bowfinity/aboutus.php">ABOUT US</a></li>       
        <li><a href="../bowfinity/shop.php">SHOP</a></li>     
        <li><a href="../bowfinity/contactform.php">CUSTOMIZED ORDERS</a></li> 
        <li><a href="../bowfinity/faq.php">FAQ</a></li>        
        <li><a href="../bowfinity/mycart.php">MY CART</a></li>          
      </ul>
	</div>
  </div>
</nav>



<!-- InstanceBeginEditable name="EditRegion1" -->

<style>
	.cart table{
		width: 100%;
	}
	
	.cart{
		margin-left: 200px;
		margin-right: 200px;
	}
	
	.cart tr, .cart th {
		border: 1px solid black;
	}
	
	.cart th{
		text-align: center;
	}
	
	.cart img{
		width: 100px;
		height: 100px;
		margin-top: 25px;
		margin-bottom: 25px;
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
</style>

<h1>My Cart</h1>
<table class = "cart">
  
  
  
  <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Quantity</th> 
    <th>Price</th>
  </tr>
  
  <?php
  	$total = 0;
  	for($x = 0; $x < count($_SESSION["cart"]); $x++){
  		echo "<tr>";
  		for($y = 0; $y < count($_SESSION["cart"][$x]); $y++){
  			if($y == 0){
			    echo "<td class = \"thumb\">";
			    	  echo "<img src = \"";
			    	  echo $_SESSION["cart"][$x][$y];
			    	  echo "\">";
			    echo "</td>";
			 }
			 else if($y == 3){
			    echo "<td>$";
			    	 echo $_SESSION["cart"][$x][$y];
			    echo "</td>";
			 }
			 else {
			    echo "<td>";
			    	 echo $_SESSION["cart"][$x][$y];
			    echo "</td>";
			}

  		}
			  echo "</tr>";
			  echo "<tr>";
			    echo "<td></td>";
			    echo "<td></td>";
			    echo "<td class = \"total\">Subtotal</td>";
			    echo "<td>$";
			    	$subtotal = $_SESSION["cart"][$x][2] * $_SESSION["cart"][$x][3];
			    	$total = $total + $subtotal;
				      echo $subtotal;
			    echo "</td>";
			  echo "</tr>";
  	}
  	
	  echo "<tr>";
	    echo "<td></td>";
	    echo "<td></td>";
	    echo "<td class = \"total\">Grand Total</td>";
	    echo "<td>$";
	    	echo $total;
	    echo "</td>";
	  echo "</tr>";	
	  $total = "$total";
  	
  ?>

</table>

<form class = "paypalButton" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <div class="paypal-donations">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="amount" value="<?php echo $total ?>">
                    <input type="hidden" name="business" value="Bcbhq@gmail.com">
                    <input type="hidden" name="rm" value="2">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="item_name" value = "Bowfinity Order">
                    <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-pill-paypal-60px.png" alt="PayPal image" name="submit">
                </div>
</form>

<!-- InstanceEndEditable -->
<div class="line">
</div>

<footer>
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <p>P.O. Box 501 Keansburg, NJ 07734 &bull; <a href="mailto:BOWfinityCheerBows@gmail.com">Email Us</a></p>
      <p><a href="terms.html">TERMS AND CONDITIONS</a></p>
    </div>
  </div>
</footer>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>




<!-- InstanceEnd --></html>
