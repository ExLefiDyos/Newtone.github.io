
<head>
    <title>Newtone Apparel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginpage.css">
  </head>
  <body >
  <div class="menu" style="margin-top:5%" >
      <div class="title">
      <img src="../middle.png" width="150" alt="">
      </div>
      <form method="post" name="login" action="processlogin.php?mod=login">
        <p align="center">You need to log-in before you can order anything</p>
        <br/>
        <table align="center" width="">
          <tr>
            <td width="94">Username</td>
            <td width="9">:</td>
            <td width="145"><input name="userid" type="text" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="pass" type="password" required></td>
          </tr>
          <tr>
            </tr>
          </table>
        <div class="container">
          <div class="button-holder">
            <td><input class="button login" type="submit" name="login" value="Login"></td>
          </div>
          <div class="button-holder">
            <td>
              <a href="../register/register.php"><input class="button register" type="button" name="register" value="Register"></a>
            </td>
          </div>
        </div>
      </form>
    </div>
  </body>