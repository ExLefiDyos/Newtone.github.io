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

<form action="process.php?" method="POST" enctype="multipart/form-data">
  <div class="table-container">
  <table align="center" width="270" border="1">
    <tr>
      <td width="94">Name</td>
      <td width="9">:</td>
      <td width="145"><input name="userid" type="text"></td>
    </tr>
    <tr>
      <td>Desc</td>
      <td>:</td>
      <td><input name="pass" type="text"></td>
    </tr>
    <tr>
      <td>Price</td>
      <td>:</td>
      <td><input name="price" type="text"></td>
    </tr>
<!-- 
    <tr>
      <td colspan="3"><input type="submit" name="login" value="Submit"></td>
    </tr>
     -->
    <tr>
      <td>Filename</td>
      <td>:</td>
      <td> <input type="file" name="userfile" required/></td>
    </tr>	
    <tr>
      <td></td>
      <td></td>
      <td> <input type="submit" value="Upload"/></td>
    </tr>
    </tr>
  </table>
  </div>
</form>

