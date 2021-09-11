<?php
    //mendefinisikan sebuah class
    class kucing {
        // membuat property atau attributes
        public $Warna = "coklat";
        public $jumlahkaki = 4;
        public $jenisbulu = "panjang";
        public $makananfavorit = "ikan pindang";

        // membuat method (behavior /)
        public function bersuara() {
            return "meowng...meowng....meowng....";
        }
        public function berburu() {
            return "berburu ikan";
        }
    }

    // membuat object (inisasi object)
    $kucing1 = new kucing();
    $kucing1->warna = "biru";
    echo "warna kucing : " . $kucing1->warna . "<br>";
    echo "sifat kucing : " . $kucing1->bersuara() . "<hr>";

    $kucing2 = new kucing();
    // set warna kucing 
    $kucing2->warna = "oren";
    echo "warna kucing : " . $kucing2->warna . "<br>";
    echo "sifat kucing : " . $kucing2->berburu() . "<hr>";
    ?>