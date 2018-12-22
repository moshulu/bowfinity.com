<?php
	session_start();
	array_push($_SESSION["cart"], array($_POST["picture"],$_POST["name"],$_POST["qty"],$_POST["price"]));
	print_r($_SESSION["cart"]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>