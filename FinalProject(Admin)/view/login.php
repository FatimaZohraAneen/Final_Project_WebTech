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

{
  box-sizing: border-box;
}

.bg-image {

  background-image: url("../asset/uploads/login.jpg");
  
  
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
  color: white;
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
<script src="../script/admin/login.js"></script>
</head>
<body>

<?php 

    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'invalid'){
            echo "invalde username/password";
        }else if($_GET['msg'] == 'null'){
            echo "null username/password";
        }
    }
?>

<div class="topnav">
<?php include_once 'extraSection.php';?>
</div>
<div class="bg-image"></div>


<div class="bg-text">
<h1>Login</h1>
      <form method="POST" action="../controller/loginCheck.php" enctype="">
      <td><label>Username: </label></td></br>
      <input type="text" name="name" placeholder="enter username" class="box" required></br></br>
      <td><label>Password: </label></td></br>
      <input type="password" name="password" placeholder="enter password" class="box" required></br></br>
      <input type="submit" name="submit" value="Login" class="btn"></br></br>
      <p>don't have an account? <a href="reg.php">register now</a></p>
</div>

<?php include_once 'footer.php';?>
