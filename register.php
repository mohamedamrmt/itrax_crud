<?php
session_start();
if($_SESSION['errors_time'] <= time()){
    unset($_SESSION['errors']);
}
include "lib/userModel.php";

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validations 
    $errors = [];

    if($name == '' && strlen($name) == 0){
        $errors[]= "name is required";
    }
    if($email == '' && strlen($email) == 0){
        $errors[]= "email is required";
    }
    if($password == '' && strlen($password) == 0){
        $errors[]= "password is required";
    }
  

    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['errors_time'] = time()+1;

        header("location: register.php");
    }else{
          // ========== img uploader
        $img_name =  $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp,"upload/".$img_name);
        //     ==========================

    $res = insert($name,$email,$password,$img_name);
        if($res == 1){
            header("location: login.php");
        }else{
            header("location: register.php");
        }
    }
   
}







include 'design/registerDesign.php';