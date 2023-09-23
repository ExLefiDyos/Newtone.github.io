<?php
	session_start();
	include('../dbconnect.php');
  $username = $_POST['userid'];
  $firstname = $_POST['f_name'];
  $lastname = $_POST['l_name'];
  $pass = $_POST['pass'];
  $city = $_POST['city'];
  $role = "user";
  // $fileName = $_FILES['userfile']['name'];
  // $fileSize = $_FILES['userfile']['size'];
  // $fileTemp = $_FILES['userfile']['tmp_name'];
  // $fileType = $_FILES['userfile']['type'];

  // $file = fopen($fileTemp,"r");
  // $photouser = fread($file,filesize($fileTemp));
  // $photouser = addslashes($photouser);
  // fclose($file);


  // $fileName = addslashes($fileName);

  // $location = "images/$fileName";
  // move_uploaded_file($fileTemp,$location);
  // $query = "INSERT INTO city (username,pass,namefile,typefile,size,picture) VALUES ('$userid','$pass','$fileName','$fileType','$fileSize','$photouser')";
  // mysqli_query($conn,$query);
  // $fileName = addslashes($fileName);
  // $location = "images/$fileName";
  // move_uploaded_file($fileTemp,$location);
  $query = "INSERT INTO customer (username,password,first_name,last_name,city,role) VALUES ('$username','$pass','$firstname','$lastname','$city','$role')";
  $result = mysqli_query($conn,$query);
  if($result){
    echo("<script>alert('Register Sucessful!')</script>");
    echo("<script>window.location = '../login/login.php';</script>");
  }else{
    echo "fail";
  }
  // echo "<div class='menu'><p style='text-align:center'>Register Sucessful!</p></div>";


  // header('location: ../login/login.php');
  // header( "refresh:5;location:../login/login.php"); 
  // echo "<div class='menu alert'><p>Register Successful!</p></div>";
  // die();

  // include '../login/login.php';

  
?>