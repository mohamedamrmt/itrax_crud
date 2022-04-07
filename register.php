<?php
include "lib/userModel.php";

if(isset($_POST['name'])){

    // ========== img uploader
    $img_name =  $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp,"upload/".$img_name);
    //     ==========================

   $res = insert($_POST['name'],$_POST['email'],$_POST['password'],$img_name,$_POST['admin']);
    if($res == 1){
        header("location: login.php");
    }else{
        header("location: register.php");
    }
}







include 'design/registerDesign.php';