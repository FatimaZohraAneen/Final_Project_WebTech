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
  float: right;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: blue;
}

.topnav a.active {
  
  color: black;
}

{
  box-sizing: border-box;
}

.bg-image {

  background-image: url("../asset/uploads/home.jpg");
  
  
  filter: blur(5px);
  -webkit-filter: blur(5px);
  
  
  height: 100%; 
  
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}



</style>
</head>
<body>



<div class="topnav">
    <a href="Home.php">Home</a>
	<a href="reg.php">Sign In</a>
	<a href="login.php">Login</a>
</div>

<div class="bg-image"></div>

<div class="bg-text">
  <h1 style="font-size:50px">National Student Management System</h1>

</div>


<?php include 'footer.php';?>
</body>
</html>
