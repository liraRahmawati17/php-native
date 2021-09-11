<?php
    // membuat array 2 dimensi yang berisi array assosiatif
    $artikel = [
        [
            "judul" => "belajar php & mysql untuk pemula",
            "penulis" => "petanikode"
        ],
        [
            "judul" => "tutorial php dari 0 hingga mahir ",
            "penulis" => "petanikode"
        ],
        [
            "judul" => "membuat aplikasi web dari php",
            "penulis" => "petanikode" 
        ]
        ];

        // menampilkan array
        foreach($artikel as $post){
            echo "<h2>".$post ["judul"]."</h2>";
            echo "<p>".$post ["penulis"]. "</p>";
            echo "<hr>";
        }
        ?>