

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

  background-image: url("../uploads/login.jpg");
  
  
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
</head>
<body>

<div class="topnav">
<?php include_once 'extraSection.php';?>
</div>
<div class="bg-image"></div>
<div class="bg-text">
      <form method="POST" action="../controller/regCheck.php" enctype="multipart/form-data">
      <h1>Registration Form</h1>
      <td><label>Username: </label></td></br>
      <input type="text" name="name" placeholder="enter username" value="" onkeyup="f1()" id='na1'required>
      <?php
         if(isset($_SESSION["emtname"])){
         echo $_SESSION["emtname"];
         unset($_SESSION["emtname"]);
      }
         if(isset($_SESSION['nameerr'])){
         echo $_SESSION['nameerr'];
         unset($_SESSION['nameerr']);
     }
       ?>  <p></p> 
    </br></br>
      <td><label>Email: </label></td></br>
      <input type="email" name="email" placeholder="enter email"  value="" onkeyup="f2()" id='em1'required>
      <?php
        if(isset($_SESSION["emtemail"])){
      echo $_SESSION["emtemail"];
       unset($_SESSION["emtemail"]);
      }
        if(isset($_SESSION['emailerr'])){
        echo $_SESSION['emailerr'];
        unset($_SESSION['emailerr']);
       }
       ?>   <p></p>
    </br></br>
      <td><label>Password: </label></td></br>
      <input type="password" name="password" placeholder="enter password" value="" onkeyup="f3()" id='pass1'required>
      <?php
        if(isset($_SESSION["emtpass"])){
           echo $_SESSION["emtpass"];
           unset($_SESSION["emtpass"]);
          }
      if(isset($_SESSION['passerr'])){
            echo $_SESSION['passerr'];
            unset($_SESSION['passerr']);
        }
       ?>   <p></p>
    </br></br>
      <td><label>Confirm Password: </label></td></br>
      <input type="password" name="cpassword" placeholder="confirm password" value="" onkeyup="f4()" id='con1'required>
      <?php
          if(isset($_SESSION["emtconpass"])){
             echo $_SESSION["emtconpass"];
             unset($_SESSION["emtconpass"]);
          }
          if(isset($_SESSION['conpasseerr'])){
            echo $_SESSION['conpasseerr'];
             unset($_SESSION['conpasseerr']);
          }
   ?>   <p></p>
    </br></br>

      <input type="submit" name="submit" value="Submit" class="btn"></br></br>
      <p>already have an account? <a href="login.php">login now</a></p>
</div>

<?php include_once 'footer.php';?>


<script>
        function f1() {
            let name = document.getElementById('na1').value;
            if (name.length < 8) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
            }
            else {
                document.getElementsByTagName('p')[0].style.display = 'none';
            }
        }
        function f2() {
            let email = document.getElementById('em1').value;
            if (email.length < 12) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid email";
            }
            else {
                document.getElementsByTagName('p')[0].innerHTML = "";
            }
        }
        function f3() {
            let password = document.getElementById('pass1').value;
            if (password.length < 12) {
                document.getElementsByTagName('p')[0].innerHTML = "weak password";
            }
            else {
                document.getElementsByTagName('p')[0].innerHTML = "password is strong";
            }
        }
        function f4() {
            let password = document.getElementById('pass1').value;

            let cpassword = document.getElementById('con1').value;
            if (cpassword != password) {
                document.getElementsByTagName('p')[0].innerHTML = "Password didn't match";
            }
            else {
                document.getElementsByTagName('p')[0].innerHTML = "";
            }
        }

        </script>
</body>