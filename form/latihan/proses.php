<?php
    if(isset($_POST['input'])){
        $bil1 =$_POST['bil1'];
        $bil2 =$_POST['bil2'];
        $hasil1 =$bil1 + $bil2;
        $hasil2 =$bil1 - $bil2;
        $hasil3 =$bil1 * $bil2;
        $hasil4 =$bil1 / $bil2;
        echo "$bil1 + $bil2 = $hasil1 <br>";
        echo "$bil1 - $bil2 = $hasil2 <br>";
        echo "$bil1 * $bil2 = $hasil3 <br>";
        echo "$bil1 / $bil2 = $hasil4 <br>";

    }