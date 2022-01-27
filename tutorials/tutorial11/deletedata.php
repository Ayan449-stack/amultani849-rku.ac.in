<?php
    session_start();
    include("connectivity.php");
    $id=isset($_GET['id'])?$_GET['id']:"";
    #echo $id;
    if($id=="")
    {
        header("location:index.php");
    }
    $sql="delete from student where id=".$id;
    $db->query($sql);
    $_SESSION['message']="Record has been deleted";
    header("location:index.php");
?>