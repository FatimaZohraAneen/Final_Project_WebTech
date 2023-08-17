<?php 
    require_once('db.php');
    
    function login($uname, $password){
        $con = getConnection();
        $sql = "select * from signup where uname='{$uname}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($uname, $password, $email){
        $con = getConnection();
        $sql = "insert into signup values('', '{$uname}', '{$password}', '{$email}', '{$des}')";
        if(mysqli_query($con, $sql)){
           return true;
        }else{
            return false;
        }
    }

 
    
    function getUser($id){
        $con = getConnection();
        $sql = "select * from signup where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }



?>