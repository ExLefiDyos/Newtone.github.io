<?php
  session_start();
  include 'dbconnect.php';
  if (!isset($_SESSION['username'])){
    header("Location: ../login/login.php");
  }
  $price = $_GET['price'];

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
    <?php include 'alter\bootstrap.php' ?>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newtone Apparel</title>
</head>
<body>
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
}
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
    margin-top: 150px;
    padding: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 25vh;
    border: 1px solid black;
    border-radius: 25px;
}
</style>

<?php include 'alter/navbar.php'; ?>

<?php include 'alter/list.php'; ?>

<div class="table-container">
    <div class="information bottom-line">
        <h4>Purchase:</h4>
        <form action="invoice.php?price=<?php echo $price;?>" method="POST" enctype="multipart/form-data">
           
            <table>
                <tr>
                    <td>Proof of Payment</td>
                    <td><input type="file" name="userfile" required/></td>
                    <td>
                    <input class="button button-order bottom-line" type="submit" name="confirm_payment" value="Confirm Payment" style="font-size:30px;">
                    </td>
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