<?php
    $data =[
        [
            "dosen" => "aceng fikri",
            "submenu" => [
                ["nama" => "ana",
                "mataKuliah" => [
                    ["mataKuliah" => "ipa"],
                    ["mataKuliah" => "ips"],
                    ["mataKuliah" => "indo"]],
                    "hobi" => [
                        ["hobi" => "renang"],
                        ["hobi" => "membaca"]]],

                        [
                            "nama" => "ani",
                            "mataKuliah" => [
                                [ "mataKuliah" => "ipa"],
                                ["mataKuliah" => "ips"],
                                ["mataKuliah" => "sunda"]],
                            "hobi" => [
                            ["hobi" => "berenang"],
                            ["hobi" => "nari"]]],

                        [
                            "nama" => "anu",
                            "mataKuliah" => [
                                ["mataKuliah" => "seni"],
                                ["mataKuliah" => "mtk"],
                                ["mataKuliah" => "ipa"]],
                            "hobi" => [
                                ["hobi" => "nyanyi"],
                                ["hobi" => "tidur"]]],
                        ]
        ],
        [
            "dosen" => "ujang betok",
            "submenu" => [
                ["nama" => "susi",
                    "mataKuliah" => [
                        ["mataKuliah" => "ipa"],
                        ["mataKuliah" => "sunda"],
                        ["mataKuliah" => "ips"]],
                    "hobi" => [
                        ["hobi" => "tidur"],
                        ["hobi" => "ngoding"]]],
                    [
                        "nama" => "sisi",
                        "mataKuliah" => [
                            ["mataKuliah" => "sunda"],
                            ["mataKuliah" => "ips"],
                            ["mataKuliah" => "ipa"]],
                        "hobi" => [
                            ["hobi" => "ngoding"],
                            ["hobi" => "nyanyi"]]],
                        [
                            "nama" => "sasi",
                            "mataKuliah" => [
                                ["mataKuliah" => "ipaa"],
                                ["mataKuliah" => "ips"],
                                ["mataKuliah" => "sunda"]],
                            "hobi" => [
                                ["hobi" => "nyanyi"],
                                ["hobi" => "tidur"]]]],
        ]
                            ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['mataKuliah'] as $sub) {
                echo "<li>". $sub['mataKuliah']. "</li>";
            }
            echo "</ol>";
        } 
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['hobi'] as $hobi) {
            echo "<li>". $hobi['hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ul>";
    }
?>