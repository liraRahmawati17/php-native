<?php
    $datajson = '{
        "nama" : "ujang",
        "domisili" : "bandung",
        "usia" : 23,
        "wni" : true,
        "hobi" :[
            "futsal","main game","main kelereng"]
    }';

    $data = json_decode($datajson);
    // echo $data->nama;
    echo "nama : " . $data->nama."<br>";
    echo "domisili : " . $data -> domisili. "<br>";
    echo "usia : " . $data -> usia . "<br>";
    echo "hobi : " . implode ("," , $data->hobi);
    ?>