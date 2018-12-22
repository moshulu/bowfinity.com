<?php
  session_start();
  $_SESSION["cart"] = array();
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
	<title>BOWfinity | Home</title>
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

<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style = "background-color: transparent;">
    <div class="item active"><img src="../bowfinity/Images/jaguarsTeam.jpg" width = "500" height = "500" alt="First slide image" class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item"><img src="../bowfinity/Images/fireTeam.jpg" width = "500" height = "500" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item"><img src="../bowfinity/Images/teamPic.jpg" class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="sr-only">Next</span></a> </div>
  
  
  
  
<div class="row">
  <div class="col-sm-4 text-center">
    <h4>News</h4>
    <img  src="../bowfinity/Images/bow_images/RhinestoneBlueWhite.jpg" alt="Blue White Grey Rhinestone Bow" width="300" height="200"/>
    <p>BOWfinity is incredibly proud to announce the launch of their new website! The site features a fully operational online store, in-house customized order forms, and a consise payment system that will serve our needs precisely. Explore the site and let us know what you think!</p>
  </div>
  <div class="text-center col-sm-4">
    <h4>Hot New Items</h4>
    <img  src="../bowfinity/Images/bow_images/GlitterAmerican.jpg" alt="Red White & Blue Fourth of July Bow" width="250" height="200"/>
    <p>We&#39re proud to announce a new bow, the 4th of July bow! Order now to get it by the fourth!</p>
  </div>
  <div class="text-center col-sm-4">
    <h4>Shop</h4>
    <img  src="../bowfinity/Images/bow_images/GlitterWhiteKeansburg.jpg" alt="Glitter White Keansburg Bow" width="300" height="200"/>
    <p>Our newly launched online store has every bow you could ever need for your cheerleader/cheerleading team. If you don&#39t see what you like, make sure to contact us! Your satisfaction is the most important aspect of BOWfinity!</p>
  </div>
</div>






<!-- InstanceEndEditable -->

<footer>

      <p>P.O. Box 501 Keansburg, NJ 07734 &bull; <a href="mailto:BOWfinityCheerBows@gmail.com">Email Us</a></p>
      <p><a href="terms.html">TERMS AND CONDITIONS</a></p>


</footer>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>




<!-- InstanceEnd --></html>
