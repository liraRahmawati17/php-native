<?php
    //mendefinisikan sebuah class
    class kucing {
        // membuat property atau attributes
        public $Warna = "coklat";
        public $jumlahkaki = 4;
        public $jenisbulu = "panjang";
        public $makananfavorit = "ikan pindang";

        // construct adalah method khusus yang akan dipanggil pertama kali
        public function __construct($Warna)
        {
            $this->Warna = $Warna;
        }

        // membuat method (behavior /)
        public function bersuara() {
            return "meowng...meowng....meowng....";
        }
        public function berburu() {
            return "berburu ikan";
        }
    }

    // membuat object (inisasi object)
    $kucing1 = new kucing("hitam");
    echo "warna kucing 1 : " . $kucing1->Warna . "<br>";

    $kucing2 = new kucing("oren");
    // set warna kucing 
    $kucing2->warna = "oren";
    echo "warna kucing 2 : " . $kucing2->Warna . "<br>";
    ?>