<?php
$fname = $lname = $fullname = "";
$target_file;
$img_upload = "";
if(isset($_POST["submit"])){
    $fname = $_POST["First_Name"];
    $lname = $_POST["Last_Name"];
    $fullname = $fname . " " . $lname;
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK){
        $target_file = "uploads/" . basename($_FILES["image"]["name"]);
        echo "$target_file";
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
            $img_upload = "successful";
        }else{
            $img_upload = "unsuccessful";
        }
    }
}
?>