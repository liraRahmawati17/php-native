<?php
    class laptop {
        public $pemilik = "lira";
        public $merk = "hp";
        public $ukuranlayar = 17;


        // membuat method
        public function nyala() {
            return "dinyalakan";
        }
        public function mati() {
            return "dimatikan";
        }
    }

    // membuat objek
    $laptop1 = new laptop();
    echo "pemilik : " . $laptop1->pemilik . "<br>";
    echo "merk laptop : " . $laptop1->merk . "<br>";
    echo "laptop akan dimatikan atau dinyalakan : " . $laptop1->nyala() . "<hr>";

    $laptop2 = new laptop();
    $laptop2->pemilik = "susi";
    $laptop2->merk = "asus";
    $laptop2->ukuranlayar = "17 inci";
    echo "pemilik : " . $laptop2->pemilik . "<br>";
    echo "merk laptop : " . $laptop2->merk . "<br>";
    echo "laptop akan dimatikan atau dinyalakan : " . $laptop2->mati() . "<hr>";

    $laptop3 = new laptop();
    $laptop3->pemilik = "sisi";
    $laptop3->merk = "acer";
    $laptop3->ukuranlayar = "17 inci";
    echo "pemilik : " . $laptop3->pemilik . "<br>";
    echo "merk laptop : " . $laptop3->merk . "<br>";
    echo "laptop akan dimatikan atau dinyalakan : " . $laptop3->nyala() . "<hr>";

    $laptop4 = new laptop();
    $laptop4->pemilik = "sasa";
    $laptop4->merk = "lenovo";
    $laptop4->ukuranlayar = "17 inci";
    echo "pemilik : " . $laptop4->pemilik . "<br>";
    echo "merk laptop : " . $laptop4->merk . "<br>";
    echo "laptop akan dimatikan atau dinyalakan : " . $laptop4->mati() . "<hr>";

    $laptop5 = new laptop();
    $laptop5->pemilik = "sisi";
    $laptop5->merk = "iphone";
    $laptop5->ukuranlayar = "17 inci";
    echo "pemilik : " . $laptop5->pemilik . "<br>";
    echo "merk laptop : " . $laptop5->merk . "<br>";
    echo "laptop akan dimatikan atau dinyalakan : " . $laptop5->nyala() . "<hr>";


    ?>
