<?php

include "lib/auth.php";
include "lib/userModel.php";

if(is_login() == false){
    header("location: login.php");
}

if(isset($_POST['name'])){

    $res =  update($_POST['id'],$_POST['name'],$_POST['email'],$_POST['img']);
    if($res == 1){
        header("location: users.php");
    }

}else{
    $user =  selectById($_GET['id']);
    include "design/usersUpdateDesign.php";
}



?>

