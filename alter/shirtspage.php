
<div class="col-lg-9 mt-4">
<div class="col-lg-3 mt-5 mb-2">
  <form method="GET">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Search by item name">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </div>
    </div>
  </form>
</div>
  <div class="row">
    <?php
      if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $items = mysqli_query($conn, "SELECT * FROM items WHERE name LIKE '%$search%'");
      } else {
        $items = mysqli_query($conn, "SELECT * FROM items");
      }
      foreach ($items as $row) {
        echo '<div class="col-lg-4 col-md-6 mb-4">
          <div class="productcard">
            <a href="#"><img class="card-img-top" src="content/'.$row['namefile'].'" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$row['name'].'</a>
              </h4>
              <h5>'.$row['price'].'$</h5>
              <p class="card-text">'.$row['descript'].'</p>
            </div>
            <div class="card-footer">
              <button class="buy-now-button"><a href="cart/add_cart.php?id='.$row['id'].'">Add to cart</a></button>
            </div>
          </div>
        </div>';
      }
    ?>
  </div>
</div>
