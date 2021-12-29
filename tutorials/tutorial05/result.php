<?php
     //echo "<pre>";
     //print_r($_POST);
    // echo "</pre>";


     if(isset($_POST["month"]))
     {
        $m=$_POST["month"];
     }
     //print_r($m);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
 <div class="container">
          <div class="row">
                <div class="form-control">
                <select>
                        <option <?php if($m==0) echo "selected";?>  >selected item</option>
                        <option <?php if($m==1) echo "selected";?>  >January</option>
                        <option <?php if($m==2) echo "selected"; ?>  >Feb</option>
                        <option <?php if($m==3) echo "selected"; ?>  >March</option>
                        <option <?php if($m==4) echo "selected"; ?>  >April</option>
                        <option <?php if($m==5) echo "selected"; ?>  >May</option>
                        <option <?php if($m==6) echo "selected"; ?>  >Jun</option>
                        <option <?php if($m==7) echo "selected"; ?>  >July</option> 
                        <option <?php if($m==8) echo "selected"; ?>  >Aug</option>
                        <option <?php if($m==9) echo "selected"; ?>  >sept</option>
                        <option <?php if($m==10) echo "selected";?>  >oct</option>
                        <option <?php if($m==11) echo "selected";?>  >nov</option>
                        <option <?php if($m==12) echo "selected";?>  >dec</option>
                </select>
                </div>
          </div>
    </div>
       
 </body>
 </html>   
    