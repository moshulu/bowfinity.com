<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/shop.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		@import url('https://fonts.googleapis.com/css?family=Sacramento');
		@import url('https://fonts.googleapis.com/css?family=Heebo:100');
	</style>
<title>BOWfinity | Rhinestone Bows</title>
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bows.css" rel="stylesheet" type="text/css">
</head>


<body>
<header>
      <img class = "logo" src="Images/logo.jpg"/>

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
                		<a href = "https://www.facebook.com/BOWfinityCheerBows/"><img src = "../bowfinity/Images/facebook.png"></a>
                	</td>
                	<td>
                		<a href = "https://www.etsy.com/shop/BOWfinityNBeyond"><img style = "margin-top: 2px" src = "../bowfinity/Images/etsy.png"></a>
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
<div class="bowShop">
<div class="nav2left">
<nav class="nav2">
      <ul>
      	<li><a href="../bowfinity/basic.php">Basic</a></li>
        <li><a href="../bowfinity/glitter.php">Glitter</a></li>       
        <li><a href="../bowfinity/half.php">Half-sized</a></li>     
        <li><a href="../bowfinity/mini.php">Mini Bows</a></li>     
        <li><a href="../bowfinity/rhinestone.php">Rhinestone</a></li>
        <li><a href="../bowfinity/sports.php">Sports</a></li>        
        <li><a href="../bowfinity/sub.php">Sublimated</a></li>
        <li><a href="../bowfinity/tux.php">Tailless Tuxedo Bows</a></li>        
        <li><a href="../bowfinity/other.php">Other</a></li>             
      </ul>
	</div>
  
</nav>
</div>

<style>
	
	.bow{
		margin-top: 10px;
		margin-left: auto;
		margin-right: auto;
	}
	
	.bow input{
		width: 40px;
		height: 25px;
		margin-right: 50px;
	}
	
	.bow a{
		padding-right: 50px;
	}
	
	
</style>

<div class="shopRight">
<h1> Rhinestone Bows </h1>
    <?php
    
    	include("../bowfinity/conn.php");
    	mysqli_select_db($link, "mattdrew") or die("could not select db");
    	
	$qry = "SELECT * FROM `bows` WHERE `type` = \"rhinestone\" ORDER BY `bow_id` ASC";
	$result = mysqli_query($link, $qry);
	$result1 = mysqli_fetch_assoc($result);
	$rows = mysqli_num_rows($result);
    	
    	$current_bow_id = $result1["bow_id"];
    	
    	
    	for($x = 0; $x < ($rows/3); $x++){
    		echo "<div class = \"row\">";
    		$entry = 0;	
    		while($entry < 3){
    			//if the selected bow through current bow id is not basic
    			//go to the next bow
    				$checkQry = "SELECT `type` FROM `bows` WHERE `bow_id` = $current_bow_id";
    				$checkResult = mysqli_query($link, $checkQry);
    				$checkResultRow = mysqli_fetch_assoc($checkResult);
    				$type = $checkResultRow["type"];
    				if($type == "Rhinestone" || $type == "rhinestone"){
    					$bow_qry = "SELECT `bow_id`,`name`,`picture`,`type`,`price`,`width`,`height` FROM `bows` WHERE `bow_id` = $current_bow_id";
		    			$result_bow_query = mysqli_query($link, $bow_qry);
		    			$row = mysqli_fetch_assoc($result_bow_query);	
		    			
		    			$bow_id = $row["bow_id"];
		    			$name = $row["name"];
		    			$img = $row["picture"];
		    			$price = $row["price"];
		    			$width = $row["width"];
		    			$height = $row["height"];
    					
    					echo "<div class=\"col-sm-4 text-center\">";
						echo "<form method = \"POST\" action = \"../bowfinity/shopAction.php\">";
						echo "<h4>$name</h4>";
						echo "<img src=\"$img\" width=\"$width\" height=\"$height\" name = \"picture\"/>";
							echo "<table class = \"bow\">";
								echo "<tr>";
									echo "<td><a href = \"#\">More Details...</a></td>";
									echo "<td>\$$price</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>Quantity: ";
									echo "<input type = \"number\" name = \"qty\">";
									echo "</td>";
									echo "<input type = \"hidden\" name = \"name\" value = \"$name\"></input>";
									echo "<input type = \"hidden\" name = \"picture\" value = \"$img\"></input>";
									echo "<input type = \"hidden\" name = \"price\" value = $price></input>";
									echo "<td><button type = \"submit\" href = \"shopAction.php\">Add to Cart</td>";
								echo "</tr>";
							echo "</table>";
						echo "</form>";
					echo "</div>";
				$current_bow_id++;
		    		$entry++;

		    		}
	    			else{
	    				$current_bow_id++;
	    				$i++;
	    			}
    		}
		echo "</div>";
    	}
    
    ?>
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
