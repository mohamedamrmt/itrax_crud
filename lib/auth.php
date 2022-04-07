<?php
session_start();


function is_login(){
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
        return true;
    }
    return  false;
}


function logout(){
    session_destroy();
    header("location: login.php");
}

function attempt($email,$password){
    $connection =  mysqli_connect("localhost","root","","udemy_itrax");
    $query = mysqli_query($connection,"SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'");
    $number_of_rows =  mysqli_num_rows($query);
    if($number_of_rows == 1){
        $_SESSION['login'] = true;
        return true;
    }
    return false;
}