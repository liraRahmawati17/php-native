<?php
    $nilai = 50 ;
    $grade = "";

     if ($nilai >= 90) {
         $grade = "A";
     }else if ($nilai >= 80) {
         $grade = "B";
     }else if ($nilai >= 70){
         $grade = "C";
     }else if ($nilai >= 60){
         $grade = "D";
     }else {
         $grade = "E" ;
     }

     switch ($grade) {
        case "A" : $ket = "Pertahankan";
            break;
        case "B" : $ket = "Harus lebih baik lagi";
            break;
        case "c" : $ket = "Perbanyak Belajar";
            break;
        case "D" : $ket = "Jangan keseringan main Hp";
            break;
        case "E" : $ket = "Jangan keseringan bolos";
            break;
        default: "Tidak ada pilihan";
            break;
    }
    echo "Nilai : $nilai";
    echo "<br>Grade : $grade";
    echo "<br>Keterangan : $ket";
      ?>