<?php
    require '../dbconnect.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['customer_id'];
    $delete_query="delete from cart where user_id='$user_id' and item_id='$item_id'";
    $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($con));
    header('location: ../paymentpage.php');
?>