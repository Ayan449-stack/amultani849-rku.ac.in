<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="result.php" method="post">
                <div class="form-control">
                    <select name="month" id="month" required="">
                        <option value="">Select---Month</option>
                        <option value="1">January</option>
                        <option value="2">Feb</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">July</option>
                        <option value="8">Aug</option>
                        <option value="9">sept</option>
                        <option value="10">oct</option>
                        <option value="11">nov</option>
                        <option value="12">dec</option>

                    </select>
                  <input type="submit" name="submit" value="select">
                </div>

            </form>
        </div>
    </div>
    
</body>
</html>