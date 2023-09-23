<?php
session_start();
include '../dbconnect.php';

// execute a SELECT query
$result = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = 1");

// fetch the row and assign it to $row variable
$row = mysqli_fetch_assoc($result);

// close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title>Finals</title>
</head>
<body>
<style>
table, tr, td {
    height: 30px;
}
table {
    border: 1px solid black;
    padding: 75px;
    border-radius: 50px;
    width: 100%;
    text-align: center;
}
.table-container {
    margin-top: 25px;
    padding: 75px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    border: 1px solid black;
    border-radius: 25px;
}
</style>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
          <a class="navbar-brand" href="../cover.php">
            <img src="../logo.png" width="30" height="30" class="d-inline-block align-top" alt="Brand Logo">
            Newtone Apparel Admin Page
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link hover-underline-animation" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="inputfield.php">Input</a>
  </li>
  <li class="nav-item">
  <a class="nav-link hover-underline-animation" href="adminmanage.php">Manage</a>
  </li>
  <?php
    if(isset($_SESSION['username'])){
  ?>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </li>
  <?php
    }else{
  ?>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
  </li>
  <?php
    }
  ?>
</ul>

            </ul>
          </div>
          <hr>
        </div>
      </nav>

  <div class="container">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-lg-3">
      <h1 class="my-4">Newtone Apparel</h1>
      <div class="list-group mr-3">
        <a href="adminshirts.php" class="list-group-item">T Shirts</a>
        <a href="#" class="list-group-item">Raw Design</a>
      </div>
    </div>

    <div class="col-lg-9 middle-text">
      <div class="table-container">
<table>
<form action="updatedata.php" method="post" name="register">
            <input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>" />
            <table align="center" width="270" border="1">
                <tr>
                    <td width="94">First Name</td>
                    <td width="9">:</td>
                    <td width="145"><input name="first_name" type="text" value="<?php echo $row['first_name'];?>" ></td>
                </tr>
                <tr>
                    <td width="94">Last Name</td>
                    <td width="9">:</td>
                    <td width="145"><input name="last_name" type="text" value="<?php echo $row['last_name'];?>" ></td>
                </tr>
                <tr>
                    <td width="94">City</td>
                    <td width="9">:</td>
                    <td width="145"><input name="city" type="text" value="<?php echo $row['city'];?>" ></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    </div>

  </div>
</div>


  <!--Footer-->
    <footer class="bg-dark text-light py-0">
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