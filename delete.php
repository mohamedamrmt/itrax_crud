<?php

include "lib/auth.php";
include "lib/userModel.php";
if(is_login() == false){
    header("location: login.php");
}elseif($_SESSION['login']['admin'] == 0){
    header("location: users.php");exit;
}


$id =  $_GET['id'];

if(delete($id) == 1){
    header("location: users.php");
}