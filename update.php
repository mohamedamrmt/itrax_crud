<?php

include "lib/auth.php";

if(is_login() == false){
    header("location: login.php");
}
