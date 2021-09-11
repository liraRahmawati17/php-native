<?php


function nilaiMax()
{
    $array = [90, 80, 60, 100, 127, 81, 51, 99];
    rsort($array);
    foreach($array as $v){
        $hasil = $v;
        echo " $v";
    }
    
}
function nilaiMin()
{
    $array = [90, 80, 60, 100, 127, 81, 51, 99];
    sort($array);
    foreach ($array as $f) {
        
        echo " $f ";
    }
    
}
   echo "Nilai Max : ";
   echo nilaiMax();
   echo "<br>";
   echo "Nilai Min : ";
   echo nilaiMin();

?>