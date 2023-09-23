<?php
    require '../dbconnect.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['customer_id'];
    $add_to_cart_query= "insert into cart(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result= mysqli_query($conn,$add_to_cart_query) or die(mysqli_error($conn));
    header('location: ../shirts.php');
?>