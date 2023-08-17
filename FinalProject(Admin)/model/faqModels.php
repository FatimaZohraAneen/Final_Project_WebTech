<?php
function addfaq($user){
        $con = getconnection();
        $sql2 = "INSERT INTO `faq`(`id`, `question`, `answer`) VALUES ('{$user['id']}','{$user['question']}','{$user['answer']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertfaq']="FAQ Inserted Successfully";
        }
    }
    
    ?>