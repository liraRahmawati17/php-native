 <?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;

        //menghitung jam lembur
        $jamLembur = $jamKerja-173;
        
        //menambahkan jam lebur setiap jam nya
        for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
         }

        //menentukan gaji dan tunjangan berdasarkan golongan
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Anda bukan golongan kami";
        }

        //menghitung pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;
        
        //menghitung total Pajak
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //mengitung total gaji
        $totalGaji = ($gajiPokok+$gajiLembur+$tunjangan) - ($pajakGajiLembur+$pajakGajiPokok);

        //menampilkan
        echo "Nama : <b>$nama</b> <br>
        Jenis Kelamin : <b>$jk </b> <br>
        Agama : <b>$agama</b> <br>
        golongan : <b> $golongan</b> <br>
        Gaji Pokok : <b>$gajiPokok</b> <br>
        Gaji Lembur : <b>$gajiLembur</b> <br>
        Pajak Gaji Pokok : <b>$pajakGajiPokok</b>  <br>
        Pajak Gaji Lembur : <b>$pajakGajiLembur</b> <br>
        Total Pajak : <b>$totalPajak</b> <br>
        Tunjangan Pengabdian: <b>$tunjangan</b> <br>
        Gaji Yang Diterima: <b>$totalGaji</b><br>";
    }
?>