<?php
    if(isset($_POST["submit"])){
        
        $email=$_POST["email"];
        $msg="";
        $email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        if(preg_match($email_pattern, $email)){
            $msg = "valid";
        }
        else {
            $msg = "invalid";
        }
    }
    
?>
