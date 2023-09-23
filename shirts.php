<?php
  session_start();
  if (!isset($_SESSION['username'])){
    header("Location: login/youmustlogin.php");
  }

  include 'dbconnect.php';

  $customer_id = $_SESSION['customer_id'];
  $name = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = '$customer_id'");
  $row = mysqli_fetch_array($name);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'alter/bootstrap.php' ?>
    <title>Newtone Apparel</title>
</head>
<body>
    
<?php include 'alter/navbar.php'; ?>
      
<?php include 'alter/list.php' ?>

<!-- Content -->

<?php include 'alter/shirtspage.php' ?>

</div>
</div>

  <!--Footer-->
  <footer class="bg-dark text-light py-0 fixed-bottom">
      <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; Lemao Apparel. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-right">
              <p>Designed by Lemoa</p>
            </div>
          </div>
      </div>
    </footer>
          
</body>
</html>