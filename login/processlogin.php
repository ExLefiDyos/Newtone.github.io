<?php
session_start();
include('../dbconnect.php');
$userid = $_POST["userid"];
$pass = $_POST["pass"];

if ($_GET['mod'] == 'login') {
  $query = "SELECT * FROM customer WHERE username='$userid' AND password='$pass'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    // If the user's credentials are valid, set the session variables and redirect them to the appropriate dashboard
    $_SESSION['username'] = $row['username'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['customer_id'] = $row['customer_id'];

    // Check the user's role
    if ($row['role'] == 'admin') {
      header('Location: ../admin/adminindex.php');
      exit;
    } else if ($row['role'] == 'user') {
      header('Location: ../index.php');
      exit;
    } else {
      // Handle unrecognized role
      header('Location: unknown-role.php');
      exit;
    }
  } else {
    // Handle invalid credentials
    header('Location: wrongpassword.php');
    exit;
  }
}
?>
