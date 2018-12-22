<?php
  session_start();

  include("../bowfinity/conn.php");					// include our connection link
  mysqli_select_db($link, "mattdrew") or die("could not select db");	// select correct database after initial link
  
  $username = $_POST[username];						// set initial values needed to verify account
  $password = $_POST[password];
  
  $qry = "SELECT * FROM `bowfinity`";
  $result = mysqli_query($link, $qry);
  $rows = mysqli_num_rows($result);
  
  for($x = 0; $x < $rows; $x++){
  	$qryMember = "SELECT `username`, `password` FROM `bowfinity` WHERE `mem_id` = $x";
  	$resultMember = mysqli_query($link, $qryMember);
  	$row = mysqli_fetch_assoc($resultMember);
  	if($row["username"] == $username){
  		if($row["password"] == $password){
	  		$qryFName = "SELECT `firstname` FROM `bowfinity` WHERE `username` = \"$username\"";
	  		$qryLName = "SELECT `lastname` FROM `bowfinity` WHERE `username` = \"$username\"";
	  		$resultFName = mysqli_query($link, $qryFName);
	  		$resultLName = mysqli_query($link, $qryLName);
	  		$fNameRow = mysqli_fetch_assoc($resultFName);
	  		$lNameRow = mysqli_fetch_assoc($resultLName);
	  		$fname = $fNameRow['firstname'];
	  		$lname = $lNameRow['lastname'];
	  		$_SESSION["firstname"] = $fname;
			$_SESSION["lastname"] = $lname;
	  		break;
	  	}
  	}
  	else{
  		continue;
  	}
  }
  
  
  header("Location: ../bowfinity/index.php");
  
?>