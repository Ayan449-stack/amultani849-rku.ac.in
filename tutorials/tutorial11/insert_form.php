<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    </head>
    <style>
        body{
         
            background-image: url("img/image.jpg.jpg");
        }
        
        .container-fluid
         {
           padding-top: 2%;
           padding-bottom: 2px;;
          }
      </style>  
    <body>
        <?php
           session_start();
           include("connectivity.php");
        $id="";
        $name="";
        $enrollnum="";
        $id=isset($_GET['id'])?$_GET['id']:"";
             if($id!="")
             {
                  $sql="select * from student where id=".$id;
                  $result= $db->query($sql);
                  $row=$result->fetch_assoc();
                  $id=$row['id'];
                  $name=$row['name'];
                  $enrollnum=$row['enrollnum'];
             }

        ?>
      
        <div class="container-fluid">
            <div class="row justify-content-center">
              
                <div class="col-12 col-sm-6 col-md-6">
                 
                <form class="form-container" action="insertdata.php" method="post" enctype="multipart/form-data">
                <div class="s1 text-muted">
                    <h2>Insertdata</h>
                </div>
                <div class="form-group mb-3">
                <input type="hidden" class="form-control"  name="id" value="<?=$id?>">
                </div>
                <div class="form-group mb-3">
                Firstname:<input type="text" class="form-control " value="<?=$name?>" placeholder="Name" name="fname">
                </div>
                <div class="form-group mb-3">
                Enrollnumber:<input type="text" class="form-control" value="<?=$enrollnum?>" placeholder="Enrollnumber" name="enrollnum">
                </div>
               
                <div class="form-group mb-3">
                ProfilePicture:<input type="file" class="form-control" placeholder="profilePicture" name="profilePicture">
                </div>           
                
                
                <div>
                  <input type="submit" class="btn btn-primary" value="submit">
                
                
                     <button type="button" class="btn btn-primary">Cancel</button>
                 </div>
                
        
                </form>
            </div> 
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    </body>

</html>