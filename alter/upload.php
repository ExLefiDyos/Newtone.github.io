<?php

      $fileName = $_FILES['userfile']['name'];
      $fileSize = $_FILES['userfile']['size'];
      $fileTemp = $_FILES['userfile']['tmp_name'];
      $fileType = $_FILES['userfile']['type'];

      $file = fopen($fileTemp,"r");
      $photouser = fread($file,filesize($fileTemp));
      $photouser = addslashes($photouser);
    
    
      // $fileName = addslashes($fileName);

      // $location = "images/$fileName";
      // move_uploaded_file($fileTemp,$location);
      // $query = "INSERT INTO user (username,pass,namefile,typefile,size,picture) VALUES ('$userid','$pass','$fileName','$fileType','$fileSize','$photouser')";
      // mysqli_query($conn,$query);
      $fileName = addslashes($fileName);
      $location = "images/$fileName";
      move_uploaded_file($fileTemp,$location);
      $query = "INSERT INTO upload (user_id,namefile,typefile,size,picture,order_status) VALUES ('$user_id','$fileName','$fileType','$fileSize','$photouser','confirm')";
      mysqli_query($conn,$query);
  
?>