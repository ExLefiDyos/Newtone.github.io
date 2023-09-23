<?php
    require 'dbconnect.php';
    if(!isset($_SESSION['username'])){
        header('location: login/login.php');
    }


    $user_id = $_SESSION['customer_id'];
    $user_products_query = "SELECT it.id, it.name, it.price
                        FROM cart ut
                        INNER JOIN items it ON it.id = ut.item_id
                        WHERE ut.user_id = '$user_id' AND ut.status = 'Added to cart'";


    $user_products_result = mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
    $no_of_user_products = mysqli_num_rows($user_products_result);
    $price=0;

    if($no_of_user_products==0){
        //
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $price=$price+$row['price']; 
       }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/MF.jpg" />
        <title>Newtone Apparel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/style.css">   
    </head>
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    table, tr, td{
      padding-bottom: 10px;
      height: 30px;
    }
    table{
        border: 1px solid black;
      padding: 20px;
      border-radius: 25px;
      width: 100%;
      text-align: center;
    }
    .menu{
        width: 500px;
    }
  </style>
    <body>
    <div class="menu" style="margin-top:5%; background-color: transparent; border: 2px solid #ccc; border-radius: 10px; padding: 20px;">
        <a href="shirts.php"><input class="button-r" type="button" value="Back" style="margin-bottom:10px;"></a>

        <table class="table">
            <tbody>
                <tr>
                    <th>No.</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php 
                $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($con));
                $no_of_user_products= mysqli_num_rows($user_products_result);
                $counter=1;
                while($row=mysqli_fetch_array($user_products_result)){
                ?>
                <tr>
                    <td><?php echo $counter ?></td>
                    <td><?php echo $row['name']?></td>
                    <td>$<?php echo $row['price']?></td>
                    <td><a href='cart/cart_delete.php?id=<?php echo $row['id'] ?>' class="button-r button-remove">Remove</a></td>
                </tr>
                <?php $counter=$counter+1;}?>
                <tr>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td><strong> $<?php echo $price;?>/-</strong></td>
                    <td><a href="purchase.php?price=<?php echo $price?>" class="button-r">Confirm Order</a></td>
                </tr>
            </tbody>

        </table>
    </div>
</body>
</html>
