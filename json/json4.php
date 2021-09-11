<?php
    // looping php json

    $dataMhs = '[
        {"nama" : "mahmud","domisili" : "bandung"},
        {"nama" : "udin", "domisili" : "tasik"},
        {"nama" : "encep", "domisili" : "majalaya"},
        {"nama" : "entis", "domisili" : "ciamis"}
    ]';

    $data = json_decode ($dataMhs);
    foreach ($data as $mhs){
        echo "nama : " . $mhs -> nama . "<br>";
        echo "domisili : " . $mhs -> domisili;
        echo "<hr>";
    }
    ?>