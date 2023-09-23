<?php
  session_start(); 
  //to ensure you are using same session
  session_destroy(); 
  //destroy the session

  // echo "<div class='menu alert'><p>Sucessfully Logout</p></div>";
  // echo "<link rel='stylesheet' type='text/css' href='style/styles.css'>";
  // include 'login/login.php';
  header("Location: ../cover.php");
  //to redirect back to "index.php" after logging out
  exit();
?>