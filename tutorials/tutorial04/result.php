<?php
       //echo "<pre>";
      // print_r($_POST);
       //echo "</pre>";
       if(isset($_POST["submit"]))
       {
           $principle=$_POST["principle"];
           $rate=$_POST["rate"];
           $year=$_POST["year"];
       }

            $si=($principle*$rate*$year)/100;
            print("simple Interest is=".$si);

?>