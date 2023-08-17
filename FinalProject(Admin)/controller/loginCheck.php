<?php 
   
    require_once('../model/adminModels.php');

    session_start();
    
    if(isset($_POST['submit']))
    {

        $uname = $_POST['name'];
        $password = $_POST['password'];

        $status = login($uname, $password);

        if($uname == "" || $password == ""){

            header('location: ../view/login.php?msg=null');
        }else if($status){

            $_SESSION['flag'] = 'true';
            header('location: ../view/Dashboard.php');
        }else{

            header('location: ../view/login.php?msg=invalid');
        }
    }else{
        header('location: ../view/login.php');
    }
?>