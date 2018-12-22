<?php
	include("shopAction.php");
	$cart = array();
	
	array_push($cart,$addToCart);
	echo "we're on the add to cart action page";
	print_r($cart);
?>