<?php
    echo "no 1";
    echo "<br>";
   for ($i = 2; $i <= 6; $i++){
       for ($j = $i; $j <= $i + 4; $j++){
           echo $j. " ";
       }
       echo " <br> ";
   }
   echo " <hr> ";

   echo " no 2 ";
   echo " <br>";
   $z = 3;
   for ($x = 3; $x <= 21; $x += 2){
       for ($y = $x; $y <= $z; $y++){
           echo $y . "&nbsp; ";
       }
       echo "<br>";
       $z += 2;
       $z = $z + 1;
   }
        ?>