<?php
  
?>

<head>
    <title>Newtone Apparel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
  <body >
    <div class="menu" style="margin-top:5%" >
      <div class="title">
        <p>Register</p>
      </div>
      <form method="post" name="register" action="processregister.php">
        <table align="center" width="auto" style="height: 200px;">
          <tr>
            <td width="94">Username</td>
            <td width="9">:</td>
            <td width="145"><input name="userid" type="text" required></td>
          </tr>
          <tr><td height="10"><br/></td></tr>
          <tr>
            <td>First Name</td>
            <td>:</td>
            <td><input name="f_name" type="text" required></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><input name="l_name" type="text" required></td>
          </tr>
          <tr><td height="10"><br/></td></tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="pass" type="password" required></td>
          </tr>
          <tr><td height="10"><br/></td></tr>
          <tr>
            <td>City</td>
            <td>:</td>
            <td><input name="city" type="text" required></td>
          </tr>
          </table>
        <div class="container">
          <div class="button-holder register2">
            <td><input class="button login" type="submit" name="login" value="Register"></td>
          </div>
        </div>
      </form>
    </div>

  </body>