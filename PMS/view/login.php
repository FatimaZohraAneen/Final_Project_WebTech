<fieldset>
<h1>Login</h1>
      <form method="POST" action="../controller/loginCheck.php" enctype="">
      <td><label>Username: </label></td></br>
      <input type="text" name="name" placeholder="enter username" class="box" required></br></br>
      <td><label>Password: </label></td></br>
      <input type="password" name="password" placeholder="enter password" class="box" required></br></br>
      <input type="submit" name="submit" value="Login" class="btn"></br></br>

</fieldset>
<?php include_once 'footer.php';?>