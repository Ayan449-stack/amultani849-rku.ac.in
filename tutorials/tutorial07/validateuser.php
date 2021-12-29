<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$check=isset($_POST['remember']);


if($username=="Ayan" && $password=="123")
{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    if($check)
    {
        setcookie("user_cookie",$username,time()+60);
        setcookie("pass_cookie",$password,time()+60);
        
    }
    else
    {
        setcookie("user_cookie",$username,time());
        setcookie("pass_cookie",$password,time());
    }
    header("location:index.php");
}
else
{
    header("location:login.php");
}

?>