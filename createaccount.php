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
<title>BOWfinity | Create an Account</title>
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

<h1 class="createAccount">Create Account</h1>

<table class = "createAccountTable">
<form action = "../bowfinity/createAccountAction.php" method = "POST">

<tr>
 	<td colspan="2">Username: *  </td>
    <td colspan="2"><input type="text" name="username" required></td>
</tr>

<tr>
 	<td colspan="2">Password: *  </td>
    <td colspan="2"><input type="password" name="password" required></td>
</tr>

<tr>
		<td colspan="2" style = "padding-right: 10px">Repeat Password: * </td>
    	<td colspan="2"><input type="password" name="repeatPassword" required></td>
        
</tr>

<tr>
		<td colspan="2">Email: *  </td>
    	<td colspan="2"><input type="text" name="email" required></td>
        
</tr>

<tr>
	<td colspan="2">First Name: *  </td>
   	<td colspan="2"><input type="text" name="firstname" required></td>
    
</tr>


<tr>
	<td colspan="2">Last Name: *  </td>
   	<td colspan="2"><input type="text" name="lastname" required></td>
    
</tr>

<tr>
		<td colspan="2">Organization:</td>
    	<td colspan="2"><input type="text" name="org"></td>
        
</tr>

<tr>
		<td colspan="2">Address:  </td>
    	<td colspan="2"><input type="text" name="address"></td>
       
</tr>

<tr>
		<td colspan="2">City:  </td>
    	<td colspan="2"><input type="text" name="city"></td>
        
</tr>

<tr>
		<td colspan="2">State:  </td>
    	<td colspan="2">
        
        <select name="state" size="1">
            <option selected value="">State</option>
            <option value="ZZ">None</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            </select>
        </td>
        
 	<tr>
	<td colspan="2">Zipcode:  </td>
    	<td colspan="2"><input type="text" name="zip"></td>
	</tr>
		

        


        <tr>
        <td colspan="2"></td>
        <td colspan="2">
        <button type="submit" name="submitButton" href = "../bowfinity/createAccountAction.php">Create Account</button>
	<td>
	</tr>


    

</form>


</table>

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
