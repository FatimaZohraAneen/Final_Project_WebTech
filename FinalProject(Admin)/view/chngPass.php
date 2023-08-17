<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  color: white;
}

</style>
</head>

<fieldset>
<div class="topnav">
<p><a href="Dashboard.php">Dashboard</a></p>
</div>
</fieldset>
<fieldset>
<h1>Change Password</h1>
      <form method="POST" action="../controller/chngPassCheck.php" enctype="">
      <td><label>Username: </label></td></br>
      <input type="text" name="name" class="box" value="" required>
      <?php
            if(isset($_SESSION['emtname'])){
            echo $_SESSION['emtname'];
            unset($_SESSION['emtname']);
        }
       ?>
    </br></br>
      <td><label>Email: </label></td></br>
      <input type="text" name="email" class="box" value="" required>
      <?php
        if(isset($_SESSION['emtemail'])){
            echo $_SESSION['emtemail'];
            unset($_SESSION['emtemail']);
         }
      ?>   
    </br></br>
      <input type="submit" name="submit" value="Submit" class="btn"></br></br>
</fieldset>

<?php include_once 'footer.php';?>