<?php
include "lib/auth.php";

if(isset($_POST['email'])){
     if(attempt($_POST['email'],$_POST['password'])){
         header("location: users.php");
     }else{
         header("location: login.php");
     }
}


include "design/loginDesign.php";