<?php
    class segitiga{
        public $alas;
        public $tinggi;
        public $sisi1;
        public $sisi2;
        public $sisi3;

        public function luas(){
            return ($this->alas * $this->tinggi)/2;
        }
        public function keliling(){
            return ($this->sisi1 + $this->sisi2 + $this->sisi3);
        }
    }

    // membuat objek
    $stiga = new segitiga();
    $stiga->alas = 10;
    $stiga->tinggi = 15;
    $stiga->sisi1 = 10;
    $stiga->sisi2 = 15;
    $stiga->sisi3 = 10;
    echo "alas segitiga : " . $stiga->alas . "<br>";
    echo "tinggi segitiga : " . $stiga->tinggi . "<br>";
    echo "sisi 1 : " . $stiga->sisi1 . "<br>";
    echo "sisi 2 : " . $stiga->sisi2 . "<br>";
    echo "sisi 3 : " . $stiga->sisi3 . "<br>";
    echo "luas : " . $stiga->sisi3 . "<br>";
    echo "keliling : " . $stiga->sisi3 . "<br>";
    echo "luas segitiga : " . $stiga->luas() . "<br>"; 
    echo "keliling segitiga : " . $stiga->keliling() . "<hr>";

    ?>