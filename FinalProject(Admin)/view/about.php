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
<h1>About </h1>
      <form method="POST" action="../controller/abtCheck.php" enctype="">
      <input type="text" name="about" class="box" required></br></br>
      <input type="submit" name="submit" value="Submit" class="btn"></br></br>
</fieldset>

<?php include_once 'footer.php';?>