<?php
    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $msg="";
        if(strpos($email, "@")!=false){
        for($i=0;$i<strlen($email);$i++){
            if(($email[$i]>='a' && $email[$i]<='z')||
            ($email[$i]>='0' && $email[$i]<='9') ||
            ($email[$i]=='@' || $email[$i]=='_' || $email[$i]=='.')
            ) {
                continue;
            }
            else{
                $msg="Invalid email";
                break;
            }
        }
    }else{
        $msg="Invalid email";
    }
       if(strlen($msg)===0){
         $msg="Valid email Address"."$email";
       }
    }
?>
