<nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
          <a class="navbar-brand" href="cover.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="Brand Logo">
            Newtone Apparel
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
    <a class="nav-link hover-underline-animation" href="https://www.instagram.com/netona_apparel/">IG</a>
  </li>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="aboutus.php">About Us</a>
  </li>
  <?php
    if(isset($_SESSION['username'])){
  ?>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </li>
  <?php
    }else{
  ?>
  <li class="nav-item">
    <a class="nav-link hover-underline-animation" href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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