<?php
    require_once 'db.php';
    function forgetpassword($user){
        $con = getconnection();
        $sql = "select * from signup where uname='{$user['uname']}' and email='{$user['email']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    
    
    ?>