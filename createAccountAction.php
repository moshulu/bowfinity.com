<?php
  session_start();
  include("../bowfinity/conn.php");

  mysqli_select_db($link, "mattdrew") or die("could not select db");

  $username = $_POST[username];
  $password = $_POST[password];
  $repeatPassword = $_POST[repeatPassword];
  $email = $_POST[email];
  $fname = $_POST[firstname];
  $lname = $_POST[lastname];
  $org = $_POST[org];
  $address = $_POST[address];
  $city = $_POST[city];
  $state = $_POST[state];
  $zipcode = $_POST[zip];

  $query = "SELECT * FROM `bowfinity`";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);

  //need this to increment mem_id
  $qryHighestMember = "SELECT `mem_id` FROM `bowfinity` ORDER BY `mem_id` DESC LIMIT 1";
  $resultHighestMember = mysqli_query($link, $qryHighestMember);
  $rowHighestMember = mysqli_fetch_assoc($resultHighestMember);
  $highestMemID = $rowHighestMember["mem_id"];
  $highestMemID = $highestMemID+1;

  while($row){
    if($row["username"] == $username){
      echo "that username already exists.";
      break;
  }
    if($row["email"] == $email){
      echo "that email already exists";
      break;
    }
    else{
    //account success!
      $creationQuery = "INSERT INTO `bowfinity`(`mem_id`, `firstname`, `lastname`,`username`, `password`, `organization`, `email`, `address`,`city`,`state`,`zipcode`) VALUES ($highestMemID, \"$fname\", \"$lname\", \"$username\", \"$password\", \"$org\",\"$email\",\"$address\",\"$city\",\"$state\",\"$zipcode\")";
      $creationResult = mysqli_query($link, $creationQuery);
      if($creationResult){
        header("Location: ../bowfinity/index.php");
        echo "account creation success!";
        break;
      }
      else{
        //header("Location: construction.php");
        echo "something went wrong...";
        break;
      }
      $row = false;
    }
  }


 ?>
