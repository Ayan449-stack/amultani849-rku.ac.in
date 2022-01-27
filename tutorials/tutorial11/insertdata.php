<?php
session_start();
include("connectivity.php");
$id=isset($_POST['id'])?$_POST['id']:"";
$name=isset($_POST['fname'])?$_POST['fname']:"";
$enrollnum=isset($_POST['enrollnum'])?$_POST['enrollnum']:"";

$basefilepath="image/";
$topath=$basefilepath.$_FILES['profilePicture']['name'];
$frompath=$_FILES['profilePicture']['tmp_name'];

move_uploaded_file($frompath,$topath);

if($id=="")
{
$sql="insert into student(name,enrollnum,profile)values('$name','$enrollnum','$topath')";
}
else{
    $sql="update student set name='$name',enrollnum='$enrollnum' where id=".$id;
}
if($db->query($sql))
{
    $_SESSION['message']=($id=="")?"Record has been inserted":"Record has been updated";
}
else{
    $_SESSION['message']="Record has not been inserted";
}
header('location:index.php');

?>