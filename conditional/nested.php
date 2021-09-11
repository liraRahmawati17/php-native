<?php
    $sim = "ya";
    $stnk = "tidak";

    // pengecekan kelengkapan surat kendaraan
    if ($sim == "ya"){
        if ($stnk == "ya") {
            echo "selamat menjalankan aktifitas,hati-hati dijalan";
        }else {
            echo "maaf anda kami tilang!";
        }
    }else {
        echo "maaf anda kami tilang!";
    }
    ?>