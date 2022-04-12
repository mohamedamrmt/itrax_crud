<?php

$connection = mysqli_connect("localhost","root","","udemy_itrax");

function insert($name,$email,$password,$img){
    mysqli_query($GLOBALS['connection'],"INSERT INTO `user` (`name`,`email`,`password`,`img`) VALUES ('$name','$email','$password','$img')");
    return mysqli_affected_rows($GLOBALS['connection']);
}

function select(){
    $query = mysqli_query($GLOBALS['connection'],"SELECT * FROM `user`");
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

function delete($id){
    mysqli_query($GLOBALS['connection'],"DELETE FROM `user` WHERE `id` = $id");
    return mysqli_affected_rows($GLOBALS['connection']);
}

function update($id,$name,$email,$password,$img,$admin){
    mysqli_query($GLOBALS['connection'],"UPDATE `user` SET `name` = '$name' , `email` = '$email' , `password` = '$password' , `img` = '$img' , `admin` , '$admin'");
    return mysqli_affected_rows($GLOBALS['connection']);
}