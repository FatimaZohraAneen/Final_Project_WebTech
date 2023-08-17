<?php
session_start();
    $chc = $_GET['name'];
    if($chc=="addfaq"){
        echo 'FAQ.php';
    }
    else if($chc=="faqdetails"){
        // echo 'faqdetails.php';
    }?>