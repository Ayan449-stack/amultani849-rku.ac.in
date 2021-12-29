<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <title>Loginform</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../css/jquery-3.6.0.min.js"></script>
    
        <style>
          body{
            background-image: url("../img/image.jpg");
          }
          .container-fluid
         {
           padding-top: 10%;
          
          }
        </style>  
      
        
    </head>
    <body>

        <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-6 col-md-3">
                <form class="form-container" id="myform" action="../home.html">
                  <div class="s1 text-muted">
                    <h2>Login!</h2>
                  </div>
                  <div class="form-group">
                    Username:<input type="text" name="uname" id="uname" placeholder="Enter your username"  class="form-control">  
                  </div>
                  <div class="form-group mt-2">
                    password:<input type="password" name="pass" id="pass" placeholder="Enter your Password" class="form-control">  
                  </div>
                  <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary form-control btn-block">submit</button>
                  </div>
                  <div>
                    <p>you create new account?<a href="registration.php">sign up</a></p>
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