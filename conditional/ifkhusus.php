<?php
    $tahun = date ("Y");
    $kabisat = ($tahun%4 == 0) ? "kabisat" : "bukan kabisat";
    echo "tahun <b>$tahun</b> $kabisat";
    ?>