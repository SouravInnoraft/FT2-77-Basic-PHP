<?php
   if(isset($_POST["submit"])){
        $subjects=$_POST["comment"];
        // echo "$subjects";
        echo "<br>";
        $myArray = preg_split("/\r\n|\n|\r/", $subjects);
        echo "<br>";
       
       
   }
?>