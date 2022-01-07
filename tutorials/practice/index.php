<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../css/jquery-3.6.0.min.js">  </script>
    <script>
          $(document).ready(function(){
              $('#button').click(function(){
                 //alert("Hello mca");
                 var p=$('#principle').val();
                 var r=$('#rate').val();
                 var n=$('#year').val();
                 var url="result.php?p="+p+"&r="+r+"&n="+n;
                 $.get(url,function(data){
                     // $('#result').html(data);
                     alert(data);
                 });

        fgfg
              });
          }) ;
    </script>

</head>
<body>
       <div class="container">
           <div class="row mt-5">
               <form  method="get">
                   <div class="form-control">
                   <label>priciple</label>
                    <input type="text" name="principle" id="principle" class="form-control" value="1000">
                    <label>Rate</label>
                    <input type="text" name="rate" id="rate" class="form-control" value="10"> 
                    <label>Year</label>
                    <input type="text" name="year" id="year" class="form-control" value="2">
                    
                    
                    <input type="button"  id="button" value="Enter" class="form-control">
                    </div>
                    <div id="result" class="form-control"></div>
               </form>
           </div>
       </div>
</body>
</html>