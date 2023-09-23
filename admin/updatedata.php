<?php
// get the submitted form data
$customer_id = $_POST['customer_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city = $_POST['city'];

// connect to the database
include '../dbconnect.php';
// check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// build the SQL update statement
$sql = "UPDATE customer SET first_name='$first_name', last_name='$last_name', city='$city' WHERE customer_id=$customer_id";

// execute the SQL statement
if ($conn->query($sql) === TRUE) {
    header('Location: adminmanage.php');
} else {
    echo "Error updating record: " . $conn->error;
    include 'updateform.php';
}

// close the database connection
$conn->close();
?>
