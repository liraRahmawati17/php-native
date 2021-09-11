<?php
    function tampilkanAngka (int $jumlah, int $indeks= 1){
        // panggil diri sendiri selama $indeks <= $jumlah 
        if ($indeks < $jumlah){
            tampilkanAngka ($jumlah, $indeks + 1);
        }
        echo "perulangan ke -{$indeks} <br>";
    }
    ?>