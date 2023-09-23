<?php
session_start();
include '../dbconnect.php';

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
    <title>Newtone Apparel</title>
</head>
<body>
    
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
          <a class="nav-link hover-underline-animation" href="adminindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="admininput.php">Input</a>
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
        <a href="../shirts.php" class="list-group-item">T Shirts</a>
        <a href="adminrawdesign.php" class="list-group-item">Raw Design</a>
      </div>
    </div>

    <div class="col-lg-9 mt-4">
    <div class="row">
<?php
$items = mysqli_query($conn, "SELECT * FROM items");
            foreach ($items as $row){
        echo'<div class="col-lg-4 col-md-6 mb-4">
            <div class="productcard">
                <a href="#"><img class="card-img-top" src="../content/'.$row['namefile'].'" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">'.$row['name'].'</a>
                    </h4>
                    <h5>'.$row['price'].'$</h5>
                    <p class="card-text">'.$row['descript'].'</p>
                </div>
                <div class="card-footer">
                <button class="buy-now-button"> <a href="cart/add_cart.php?id='.$row['id'].'"> Add</button>
                <button class="buy-now-button"><a href="deleteshirt.php?id='. $row['id'].'">Delete</a></button>
                </div>
            </div>
        </div>';}
    ?>
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