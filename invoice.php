<?php 
  include 'dbconnect.php';
  session_start();
  if (!isset($_SESSION['username'])){
    header("Location: login/login.php");
  }
  $username = $_SESSION['username'];

  $user_id=$_SESSION['customer_id'];
  $price=$_GET['price'];

  $name = mysqli_query($conn, "SELECT first_name,last_name,city FROM customer WHERE username = '$username'");
  $row = mysqli_fetch_array($name);

  $user_products_query="select it.id,it.name,it.price from cart ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
  // echo $user_products_query;exit;
  $user_products_result = mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
  $no_of_user_products = mysqli_num_rows($user_products_result);

  if (isset($_POST['confirm_payment'])) {
    $user_id = $_SESSION['customer_id'];
    $empty_cart_query = "DELETE FROM cart WHERE user_id = '$user_id'";
    mysqli_query($conn, $empty_cart_query) or die(mysqli_error($conn));
}


  include 'alter/calculation.php';
  include 'alter/upload.php';
?>

<html>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Newtone Apparel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/invoice.css">
  </head>
  <body>
    <div class="menu">
      <h2 align="center">Newtone</h2>
      <table>
        <tr>
          <td><p>Name</p></td>
          <td><p><?php echo $row['first_name'].' '.$row['last_name']; ?></p></td>
        </tr>
        <tr>
          <td><p>Address</p></td>
          <td><p><?php echo $row['city']; ?></p></td>
        </tr>
        <tr class="items" >
          <td><p>Items</p></td>
          <td>
            <hr class="order">
            <?php 
              while($row=mysqli_fetch_array($user_products_result)){
                echo "<p>".$row['name']."</p>";
              };
            ?>
            <hr class="order">
          </td>
        </tr>
        <tr>
          <td><p>Total </p></td>
          <td><p>$ <?php echo $price; ?></p></td>
        </tr>
        <tr>
          <td><p>Tax (10%)</p></td>
          <td><p>$ <?php echo $tax; ?></p></td>
        </tr>
        <tr>
          <td><hr class="order"></td> 
          <td><hr class="order"></td>  
        </tr>
        <tr class="grand-total" >
          <td><strong><p>Grand Total </p></strong></td>
          <td>
            <p class="grand-total"><strong>$ <?php echo $gtotal; ?></strong></p>
          </td>
        </tr>
        <tr class="order-status" >
          <td><p></p></td>
          <td>
            <hr class="bottom-line" >
            <p>Order Status : Confirm</p>
          </td>
        </tr>
      </table>
      <a href="print.php?price=<?php echo $price?>" target="_blank">
        <input class="button button-order" type="button" value="Print">
      </a>
      <a href="Logout.php"><input class="button-r" type="button" value="Log Out"></a>
    </div>
  </body>
</html>
