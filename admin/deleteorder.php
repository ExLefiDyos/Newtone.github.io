<?php
include '../dbconnect.php'; // include your database connection file

$id = $_GET['id'];

$purchase_id = $id; // replace with the purchase ID you want to update
$new_order_status = 'approved'; // replace with the new order status you want to set

$sql = "UPDATE upload SET order_status='$new_order_status' WHERE purchase_id=$purchase_id";

if (mysqli_query($conn, $sql)) {
  header('location: adminvieworder.php ');
} else {
  echo "Error updating order status: " . mysqli_error($conn);
}

mysqli_close($conn); // close the database connection
?>
