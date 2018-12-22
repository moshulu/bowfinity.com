<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../bowfinity/index.php");
 ?>