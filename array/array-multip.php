<?php
    // ini adalah array 2 dimensi
    $matrik = [[2, 3, 4],
              [7, 5, 0],
              [4, 3, 8],];
            //   index pertama adalah baris index kedua kolom
            // cara mengakses isinya

            foreach ($matrik as $key => $val){
                echo baris $key : $val[0], $val[1], $val[2] ; 
            }
            ?> 