<?php 
    include_once('../model/adminModels.php');

    session_start();
    
    if(isset($_POST['submit']))
    {
        $uname = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        


        $status = addUser($uname, $password, $email);

        if($status){
            header('location: ../view/login.php');
        }else{
            header('location: ../view/signup.php');
        }
    }else{
        header('location: ../view/login.php');
    }
?>