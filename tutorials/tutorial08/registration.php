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
        <div class="container-fluid">
            <div class="row justify-content-center">
              
                <div class="col-12 col-sm-6 col-md-6">
                 
                <form class="form-container" action="registrationdata.php" method="post" enctype="multipart/form-data">
                <div class="s1 text-muted">
                    <h2>Registration Form</h>
                </div>
                <div class="form-group mb-3">
                Firstname:<input type="text" class="form-control " placeholder="FirstName" name="fname">
                </div>
                <div class="form-group mb-3">
                Lastname:<input type="text" class="form-control" placeholder="Lastname" name="lname">
                </div>
                <div class="form-group mb-3">
                Email:<input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group mb-3">
                Password: <input type="password" class="form-control" placeholder="Password" name="Password">
                </div>
                <div class="form-group mb-3">
                ReEntered Password: <input type="password" class="form-control"  placeholder="ReEnterPassword" name="rPassword">
                </div>
                <div class="form-group mb-3">
                Age:<input type="number" class="form-control"  placeholder="Age" name="Age">
                </div>
                <div class="form-group mb-3">
                BirthDate: <input type="date" class="form-control"  placeholder="BirthDate" name="BirthDate">
                </div>
                <div class="form-group mb-3">
                Country:<input type="text" class="form-control" placeholder="countryname" name="country">
                </div> 
                <div class="form-froup mb-3">
                State:<input type="text"  class="form-control" placeholder="state" name="state">
                </div>  
                <div class="form-group mb-3">
                city:<input type="text"  class="form-control" placeholder="city" name="city">
                </div> 
                <div class="form-group mb-3">
                ProfilePicture:<input type="file" class="form-control" placeholder="profilePicture" name="uploadfile" value="">
                </div>           
                
                
                <div>
                    <button type="SUBMIT" name="submit" class="btn btn-primary">Submit</button>
                
                
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