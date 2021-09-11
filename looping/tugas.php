<?php
// no 1
    $i = 2;
    do {
        echo " $i ";
        $i *= 2;
    }while ($i <= 128 );
    echo "<br><br>";

    // no 2
    $i = 3125;
    do {
        echo " $i ";
        $i /= 5;
    }while ($i >= 5);
    echo "<br><br>";

    // no 3
    echo "3.";
    $books = [
        18,45,29,61,47,34,
    ];
    foreach ($books as $buku) {
        $sisabagi =$buku % 3;
        echo "$buku % 3 = $sisabagi <br>";
    }
    echo "<br>";

    // no 4
    for ($i= 0; $i < 5; $i++){
        for($b = 0; $b <= $i; $b++){
            echo "*";
        }
        echo "<br>";
    }

    for ($i = 0; $i < 5 ; $i++){
        for($b = 5; $b > $i; $b--){
            echo "_";
        }
        for ($b = 0; $b <= $i; $b++){
            echo "*";
        }
        echo "<br>";
    }

    ?>