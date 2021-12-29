<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if($username=="Ayan" && $password=="123")
{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    header("location:index.php");
}
else
{
    header("location:login.php");
}

?>