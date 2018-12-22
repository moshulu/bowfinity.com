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
<title>BOWfinity | FAQ</title>
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bows.css" rel="stylesheet" type="text/css">
</head>


<body id = "faq">
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


<h1>Frequently Asked Questions</h1>

<div>
	<h3>Is my bow waterproof?</h3>		
		<p>
			Do not get your bow wet!
		</p>
		
		<p>
			Our bows are not waterproof! Special adhesive is used to allow materials to adhere and bond to each other. Our adhesive allows the bow to freely move and flow. 
			If the adhesive gets wet, the bonding agent will release causing the materials to come apart or fall off.
		</p>
	<h3>Is my bow one-of-a-kind?</h3>
		<p>
			Each bow is unique and requires special care in order to extend the life of the product! We do not want you to damage such a special bow, and we&#39re sure you don&#39t either.
		</p>
	
	<h3>How do you make them?</h3>
		<p>
			Each bow is hand made by the BOWfinity team. We&#39re serious about quality!
		</p>
	
	<h3>How should I wear my BOWfinity bow?</h3>
		<p>
			Put hair up with a separate pony holder FIRST!
		</p>
		
		<p>
			Our pony holders are heavy duty and built for all types of hair. However, it is recommended that you put your hair into a separate pony tail holder first. 
			This makes it easier to place your hair product into your hair and guaranteeing no damage to your bow.
		</p>
</div>
	
<div>
	<h3>I just ordered my BOWfinity bows! When will I get them?</h3>
		
		<p>
			All BOWfinity bows are handmade, by the BOWfinity team. Please keep in mind that your order can take upwards of 2 weeks (14 days) to complete in full. This includes the gathering of materials, assembly, and the preparation of shipping.
			From there, it should be 2-3 days.
		</p>
		
		<p>
			We reserve the right to choose the best shipping method for your order.
		</p>
		
		<p>
			Standard shipping is UPS or FedEx ground delivery and usually takes 2-3 days, please note that USPS will not guarantee a shipping date. 
			Each order we ship includes a standard insurance rate of $50 worth of coverage and <a href = "https://tools.usps.com/go/TrackConfirmAction_input"> a tracking number that can be tracked here.</a>
		</p>
		
		<p>
			Please note that BOWfinity Cheer Bows is NOT responsible for shipping delays in transit. Please be advised of weather conditions in or around your country/state before placing your order to 
			assure an on time scheduled delivery. All shipping services are not guaranteed if weather or natural disasters delay transit. Once your order has left our shop and has entered into transit, 
			we cannot change or re-route a package. Any errors made by USPS should be handled with them by calling them directly and providing them with the tracking number for your package. 
			BOWfinity will not be held liable for USPS errors or delays.
		</p>
</div>













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
