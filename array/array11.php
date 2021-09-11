<?php
    // membuat array
    $hobi = ["membaca", "menulis", "ngeblog"];

    // menambah isi pada index ke 3
    $hobi[1] .= "coding";

    // menghapus isi array
    unset($hobi[3]);

    // menambahkan isi pada index terakhir
    $hobi[] = "olahraga";

    // cetak array dengan perulangan
    foreach($hobi as $hobiku){
        echo $hobiku."<br>";
    }
    ?>