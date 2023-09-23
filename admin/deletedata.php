<?php
// Database credentials
include '../dbconnect.php';

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the row to delete
$id = $_GET['id'];

// SQL query to delete a row from the table
$sql = "DELETE FROM customer WHERE customer_id = $id";

if (mysqli_query($conn, $sql)) {
  header('location: adminmanage.php');
} else {
  echo "Error deleting row: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>