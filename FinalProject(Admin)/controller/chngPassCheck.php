<?php
    require_once '../model/chngPassModels.php';
    $uname = $_POST["name"];
    $email = $_POST["email"];

    if(empty($uname) || empty($email)){
        if(empty($uname)){
            $_SESSION["emtname"] ="*Must provide username";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must provide the email";
        }
        header("location: ../views/chngPass.php");
    }

    else{
        $user=['uname'=>$uname, 'email'=>$email];
        $status=forgetpassword($user);
        if(isset($_SESSION['user'])){
            $password=$_SESSION['user']['password'];
            $_SESSION['password']="Your password is : {$password}";
            header('location: ../views/Dashboard.php');
        }
        else{
            $_SESSION['password']="Invalid Username or Email";
            header('location: ../views/chngPass.php');
        }
    }
?>