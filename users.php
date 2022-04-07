<?php

include "lib/auth.php";
include "lib/userModel.php";
if(is_login() == false){
    header("location: login.php");
}

$users =  select();


include "design/usersDesign.php";