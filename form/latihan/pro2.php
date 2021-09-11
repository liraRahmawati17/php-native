<?php
if (isset($_POST['masuk'])) {
    $isi = $_POST['isi'];
    if ($isi == 1) {
        header ("location:segitiga.php");
    } else if ($isi == 2) {
        header ("location:lingkaran.php");
    } else if ($isi == 3) {
        header ("location:persegi.php");
    } else if ($isi == 4) {
        header ("location:persegipanjang.php");
    }
}
?>