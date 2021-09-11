<?php
    $uang = 100000;
    $air = 15000;
    $sosis = 25000;

        echo "ucup  memiliki uang sebesar $uang ";
        echo "<hr>";

        $uang -= $air;
        echo "jajan minum <b>$air</b><br>";
        echo "sisa uang ucup <b>$uang</b><br>";
        echo "<hr>";

        $uang -= $sosis ;
        echo "jajan sosis bakar <b>$sosis</b><br>";
        echo "sisa uang ucup <b>$uang</b><br> ";
        echo "<hr>";

        $sedekah = $uang * 0.1;
        echo "sedekah ke musafir 10% dari <b>$uang</b> yaitu sebesar <b>$sedekah</b><br>";
        $uang -= $sedekah ;
        echo "sisa uang ucup <b>$uang</b>";
        echo "<hr>";

        $nemuUang = $uang * 0.5;
        echo "nemu uang dijalan 50% dari sisa uang ucup <b>$uang</b> yaitu sebesar <b>$nemuUang</b><br>";
        echo "sisa uang ucup sekarang <b>$nemuUang + $uang </b>";
        echo "<hr>";

        $uang += $nemuUang ;
        echo "total uang ucup adalah <b>Rp.$uang</b>";

        

        ?>





