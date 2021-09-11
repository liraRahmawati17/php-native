<?php
    // membuat fungsi
    function hitungumur($tahun_lahir, $tahun_sekarang ){
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam = "assalamualaikum"){
        echo $salam . ",";
        echo "perkenalkan, nama saya " . $nama . "<br>";
        // memanggil fungsi lain
        echo "saya berusia " . hitungumur(2004, 2021). " tahun <br>";
        echo "senang berkenalan dengan anda <br>";
    }
    echo perkenalan("lira");
    ?>