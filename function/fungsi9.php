<?php
    function tampilkanAngka (int $jumlah, $indeks = 1){
        echo "<strong style = 'color : green'>
        sebelum memanggil diri sendiri [{$indeks}] </strong><br>";

        // panggil diri sendiri selama $indeks <= $jumlah 
        if ($indeks < $jumlah){
            tampilkanAngka ($jumlah, $indeks + 1);
        } else {
            echo "<strong style = 'color :red'>
            proses terakhir. 
            </strong><br>";
        }
        echo "<strong style =' color : blue'>
        sebelum memanggil diri sendiri[{$indeks }]
        </strong><br>";
    }
    tampilkanAngka(5);
    ?>