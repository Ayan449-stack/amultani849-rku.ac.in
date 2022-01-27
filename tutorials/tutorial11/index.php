<?php
   // include "connectivity.php";
   require 'connectivity.php';
   session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <script src="../css/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="../css/jquery.dataTables.min.css"></link>
   <script src="../css/jquery.dataTables.min.js"></script>
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">-->
   <script>
	$(document).ready(function(){
	  $('#mytable').DataTable();
	  $('#delete-row').click(function()
	  {
	       $('#row-1').hide();
	  });
	   $('#delete-row2').click(function()
	  {
	       $('#row-2').hide();
	  });
	});
	</script>
</head>
<body>
   
   
      <div class="container">
          <h3>Display Record</h3>
          <a href="insert_form.php">InsertData</a>
          <?php 
           if(isset($_SESSION['message']) && $_SESSION['message'] != "")
           {
               echo $_SESSION['message'];
               unset($_SESSION['message']);
               
           }
          ?>
      <table class="table table-striped table-hover display" id="mytable">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Enrollno</th>
            <th>profile</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $sql="select id,name,enrollnum,profile from student";
              $result=$db->query($sql);
         ?>
           <?php
             
            while($rows=$result->fetch_assoc())
            {
              ?>
            <tr id="row-1">
            <td><?=$rows['id']?></td>
            <td><?=$rows['name']?></td>
           
            <td><?=$rows['enrollnum']?></td>
            <td><img src="<?=$rows['profile'];?>" height="30px" widht="30px"></td>
            <td>
                <a href="insert_form.php?id=<?=$rows['id'];?>" class="btn btn-warning" >Edit</a>
                <a href="deletedata.php?id=<?=$rows['id'];?>" class="btn btn-primary" id="delete-row">Delete</a>      
            </td>
            </tr>
            <?php
            }
            ?>

         
		  
		  
          </tbody>
          </table>
      </div>
</body>
</html>