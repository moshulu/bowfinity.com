<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cache-control" content="no-cache">

	<style>
		@import url('https://fonts.googleapis.com/css?family=Sacramento');
		@import url('https://fonts.googleapis.com/css?family=Heebo:100');
	</style>
<title>BOWfinity | Customized Order</title>
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../bowfinity/css/bows.css" rel="stylesheet" type="text/css">
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

<h1>Customized Order</h1>

<div>
	<p>
		When ordering a custom bow from BOWfinity Cheer Bows, you will need to fill out the form below. 
		After the order form is submitted, a BOWfinity employee will contact you through your provided email to confirm  and ask any questions relevant to the custom order. 
		At that point, BOWfinity will start working on a mock up of your bow requests. After the mock up is completed, they will be sent to you for approval. 
		Production will begin once BOWfinity has your approval and payment is recieved in full.
	</p>
	
	<p>
		At the end of the form is a Custom Bow Vision Form for you to download. On it, we ask you to design the bow and email it to our email when BOWfinity contacts you to confirm the recieved order. 
		It is designed to help you and BOWfinity create the perfect bow for your organization.
	</p>
	<p>
		Again, the Custom Bow Vision Form can be emailed to  <a href="mailto:BOWfinityCheerBows@gmail.com">BOWfinityCheerBows@gmail.com</a>. Please insert your name and or gym name in the subject line.
	</p>
	<p>
		If you need your item by a certain date within normal shipping times, please include the date so we can accommodate you. 
		This date needs to be BEFORE your event, competition or game. Note: these arrangements cannot be made without a specific date.
	</p>
</div>
	<h3>Custom Bow Order Form</h3>
	<table class = "table">
		
			<tr>
				<td colspan="2">First Name:</td>
		    	<td> </td>
		   		<td colspan="2">Last Name:</td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2"><input type="text" name="fname"></td>
		    	<td> </td>
		    	<td colspan="2"><input type="text" name="lname"></td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
				<td colspan="2">Email:</td>
		    	<td> </td>
		    	<td colspan="2">Phone number:</td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2"><input type="text" name="email"></td>
		    	<td> </td>	
		    	<td colspan="2"><input type="text" name="phone"></td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
				<td colspan="2">Name of organization:</td>
		    	<td> </td>
		   		<td colspan="2">Quantity of Bows:</td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2"><input type="text" name="gym"></td>
		    	<td> </td>
		    	<td colspan="2"><input type="number" name="bows"></td>
		    	<td> </td>
			</tr>
		    
		    <tr>
				<td colspan="2">Budget per bow:</td>
		    	<td> </td>
		    	<td colspan="2">Date bows are needed by:</td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2"><input type="number" name="budget"></td>
		    	<td> </td>
		    	<td colspan="2"><input type="date" name="date"></td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
				<td colspan="2">Requested colors:</td>
		    	<td> </td>
		    	<td colspan="2">Team Name:</td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2"><input type="text" name="color"></td>
		    	<td> </td>
		    	<td colspan="2"><input type="text" name="teamname"></td>
		    	<td> </td>
		    </tr>
		    
		    <tr>
		    	<td colspan="2">Any other additional features:</td>
		   		<td> </td>
		        <td colspan="2"></td>
		   		<td> </td>
			</tr>
		    
		    <tr>
		    	<td colspan="2"><input type="text" name="extras"></td>
		        <td> </td>
		        <td colspan="2"><a href="customform.docx">Click here for the Custom Bow Form</a></td>
		   		<td> </td>
		    </tr>
		
		
	</table>



<footer>
      <p>P.O. Box 501 Keansburg, NJ 07734 &bull; <a href="mailto:BOWfinityCheerBows@gmail.com">Email Us</a></p>
      <p><a href="terms.html">TERMS AND CONDITIONS</a></p>
</footer>


</body>

</html>
