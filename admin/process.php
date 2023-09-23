<?php
	session_start();
	include('../dbconnect.php');
  $username = $_POST['userid'];
  $desc = $_POST['pass'];
  $price = $_POST['price'];
      $fileName = $_FILES['userfile']['name'];
      $fileSize = $_FILES['userfile']['size'];
      $fileTemp = $_FILES['userfile']['tmp_name'];
      $fileType = $_FILES['userfile']['type'];

      $file = fopen($fileTemp,"r");
      $photouser = fread($file,filesize($fileTemp));
      $photouser = addslashes($photouser);
      fclose($file);
    
    
      // $fileName = addslashes($fileName);

      // $location = "images/$fileName";
      // move_uploaded_file($fileTemp,$location);
      // $query = "INSERT INTO user (username,pass,namefile,typefile,size,picture) VALUES ('$userid','$pass','$fileName','$fileType','$fileSize','$photouser')";
      // mysqli_query($conn,$query);
      $fileName = addslashes($fileName);
      $location = "../content/$fileName";
      move_uploaded_file($fileTemp,$location);
      $query = "INSERT INTO items (name,price,namefile,typefile,size,picture,descript) VALUES ('$username','$price','$fileName','$fileType','$fileSize','$photouser','$desc')";
      mysqli_query($conn,$query);
      
      echo 'Upload Sucessful!';
      header('location:adminindex.php');
      // header('location: input.php');

  
?>