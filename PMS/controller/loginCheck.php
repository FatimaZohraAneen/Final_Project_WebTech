<?php 
   
    require_once('../model/userModel.php');

    // session_start();
    
    if(isset($_POST['submit']))
    {

        $uname = $_POST['name'];
        $password = $_POST['password'];

        $status = login($uname, $password);

        if($uname == "admin" && $password == "admin"){

            header('location: ../view/adminDash.php');
        }else if($uname == "analyst" && $password == "analyst"){

            // $_SESSION['flag'] = 'true';
            header('location: ../view/analystDash.php');
        }else{

            header('location: ../view/login.php?msg=invalid');
        }
    }
?>