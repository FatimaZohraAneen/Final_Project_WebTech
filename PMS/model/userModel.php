<?php 
    require_once('db.php');
    
    function login($uname, $password){
        $con = getConnection();
        $sql = "select * from login where uname='{$uname}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    ?>