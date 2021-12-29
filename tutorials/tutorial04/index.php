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
           <div class="row mt-5">
               <form action="result.php" method="post">
                   <div class="form-control">
                   <label>priciple</label>
                    <input type="text" name="principle" id="principle" class="form-control" value="1000">
                    <label>Rate</label>
                    <input type="text" name="rate" id="rate" class="form-control" value="10"> 
                    <label>Year</label>
                    <input type="text" name="year" id="year" class="form-control" value="2">
                    <input type="submit" name="submit" value="Enter" class="form-control">
                    </div>
               </form>
           </div>
       </div>
</body>
</html>