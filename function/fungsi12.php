<?php
    $menu =[
        [
            "nama" => "beranda"
        ],
        [
            "nama" => "berita",
            "subtema" => [
            [
                "nama" => "olahraga",
                "subtema" => [
                    [
                        "nama" => "bola"
                    ],
                    [
                        "nama" => "bulutangkis"
                    ]
                ]
                    ],
                    [
                        "nama" => "politik"
                    ],
                    [
                        "nama" => "manca negara"
                    ]
        ]
                    ],
                    [
                        "nama" => "tentang"
                    ],
                    [
                        "nama" => "kontak"
                    ], 
                ];
                function tampilkanmenubertingkat (array $menu){
                    echo "<ul>";
                    foreach ($menu as $key => $item){
                        echo "<li>{$item['nama']}</li>";

                        // periksa apakah ia memiliki atribut submenu
                        // dan apakah attribut tersebut memiliki isi
                        if (@$item['submenu'] && count ($item['submenu'])){
                            // jika ia panggil diri sendiri
                            tampilkanmenubertingkat($item['submenu']);
                        }
                    }
                    echo "</ul>";
                }
                tampilkanmenubertingkat($menu);
                ?>