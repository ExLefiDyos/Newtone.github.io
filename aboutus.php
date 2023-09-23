<?php
session_start();
if (!isset($_SESSION['username'])){
  header("Location: login/youmustlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'alter/bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <title>Newtone Apparel</title>
</head>
<body>

<?php include 'alter/navbar.php'; ?>
    
    <div class="aboutus-container">
        <div class="aboutus-title">
        <h2>About Newtone Apparel</h2>
        </div>
        <div class="aboutus-content">
        <p>Newtone Apparel was established in 2023 with a vision to make a revolution to the apparel industry. Our mission is to provide high-quality products with the new wave of design</p>
        <p>Our team comprises of dedicated professionals who are passionate about the clothing industry. At Newtone Apparel, we believe in our design will satisfy your need in clothing.</p>
        <p>We are constantly exploring new technologies and ideas to better serve our customers and stay ahead of the curve. We pride ourselves on our commitment to innovation and excellence.</p>
        <p>Thank you for choosing Newtone Apparel. We are committed to exceeding your expectations and look forward to serving you.</p>
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