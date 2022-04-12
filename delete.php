<?php

include "lib/auth.php";
include "lib/userModel.php";
if(is_login() == false){
    header("location: login.php");
}


$id =  $_GET['id'];

if(delete($id) == 1){
    header("location: users.php");
}