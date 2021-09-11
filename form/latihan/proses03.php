<?php
    if(isset($_POST['save'])){
        $nama =$_POST['nama'];
        $jk =$_POST['jk'];
        $nik =$_POST['nik'];
        $agama =$_POST['agama'];
        $nmobil =$_POST['nmobil'];
        $jmobil =$_POST['jmobil'];
        $mmobil =$_POST['mmobil'];
        $peminjaman =$_POST['peminjaman'];
        $pengembalian =$_POST['pengembalian'];
        $penjamin =$_POST['penjamin'];
        $supir =$_POST['supir'];
        $denda =0;
        $harian =0;
        $hari =0;
        $telat =0;
        $biaya =0;

        $hari = (strtotime($tanggalpengembalian) - strtotime($tanggalpeminjaman)) / 60 / 60 /24;
        $biaya = $hari * $harian;
        $telat = (strtotime($tanggalverifikasi) - strtotime($tanggalpeminjaman)) / 60 / 60 / 24;
        
        if ($supir == Y){
            $supir = 250000;
        }else {
            $harian = 150000;
        }
        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "NIK : $nik <br>";
        echo "Agama : $agama <br>";
        echo "Nama Mobil : $nm <br>";
        echo "Jenis Mobil : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Merk Mobil : $nik <br>";
        echo "Agama : $agama <br>";
        echo "Nama Mobil : $nm <br>";
    }
    ?>