<?php
 /* echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>"; */

  if(isset($_POST['submit']))
  { /*
    $errors = array();
    $maxsize = 2097152;
    $acceptable = array(
        'application/pdf',
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'  
    );*/
      $filename=$_FILES['uploadfile']['name'];
      $import=$_FILES['uploadfile']['tmp_name'];
      $export="image/".$filename;

      if(move_uploaded_file($import,$export))
      {
          $msg="image upload successfully on your image folder";
      }
      else{
          $msg="Failed to upload immage";
      }
  }
  
?>