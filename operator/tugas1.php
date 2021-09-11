<?php
    $akademik = 85 ;
    $atletik = 80;

    echo "nilai akademik : <b>$akademik</b><br>";
    echo "nilai atletik : <b>$atletik</b><br>";
    $kelulusan = ($akademik >= 85 && $atletik >= 83)
    ? "lulus" : "tidak lulus";
    echo "ditanyakan : <b>$kelulusan</b>";