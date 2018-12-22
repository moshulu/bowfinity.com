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
<title>BOWfinity | About Us</title>
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link href="../bowfinity/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../bowfinity/css/bows.css" rel="stylesheet" type="text/css">
<meta http-equiv="cache-control" content="no-cache">
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
<h1>About Us</h1>

<table class = "aboutText">
	<tbody>
		<tr>
			<td>
				<p>We started out as the usual cheer moms and coaches attending 
				competitions and events with our girls buying overpriced, low quality bows. 
				We decided as a team we would try to give bow making a shot and 4 years later 
				we’re still here.</p>
			</td>
			<td>
			<p>We pride ourselves in making the best quality bow at affordable prices, without sacrificing your design ideas! We specialize in cheer bows for every sport of occasion with INFINITE design possibilities.</p>

			</td>
		</tr>
	</tbody>
</table>

<img class = "aboutImg" src="../bowfinity/Images/about.jpg" alt = "collage of bows" style = "display: block;margin: 0 auto;">


<!-- InstanceEndEditable -->

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
</html>
