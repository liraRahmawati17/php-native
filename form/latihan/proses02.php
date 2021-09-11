<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $merek = $_POST['merek'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
   
        
       
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

    if($supir == "ya"){
        $biayaharian = 250000 + 25000;
    }else {
        $biayaharian = 275000;
    }
$tgl1 = new DateTime("$tanggalpeminjaman");
$tgl2 = new DateTime("$tanggalkembali");
$jarak = $tgl2->diff($tgl1);

$tgl11 = new DateTime("$tanggalkembali");
$tgl22 = new DateTime("$tanggalpengembalian");
$lama = $tgl22->diff($tgl11);

$denda = 240000 * $lama->d;

$totalbiaya = $biayaharian*$jarak->d;
$totaldenda =$lama->d * $denda;
$totalpembayaran= $totalbiaya + $totaldenda;
} 
 
?>
<html>
<style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
<div class="noprint">
<!-- Tombol print / element yang ingin dihilangkan saat print -->
</div>
<fieldset>
<center><img src="logo.png" alt="" width=40% height=40%></center>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="7">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NIk</th>
            <th>Agama</th>
            
            <th colspan="3">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$kelamin"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="2"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalpengembalian"; ?> </td> -->

            </tr>

        </tr>
        
        <tr>
            <th colspan="7">Data Rental Mobil</th>
        </tr>
        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td><?php echo "$namamobil";?></td>
            <td><?php echo "$jenismobil";?></td>
            <td><?php echo "$merek"; ?></td>`
            <td><?php echo "$tanggalpeminjaman"; ?></td>
            <td><?php echo "$tanggalkembali";?></td>
            <td><?php echo "$tanggalpengembalian";?></td>
            <td><?php echo "$supir" ?></td>
           

        </tr>
        <tr>
            <th colspan="7">Rncian Biaya</th>
        </tr>
        <tr>
            <th colspan="6" align="left">Lama Pinjaman</th>
            <td><?php echo"$jarak->d";?>hari</td>
        </tr>
        <tr>
        <?php  
        
        ?>
            <th colspan="6" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayaharian); ?></td>
        </tr>

        <tr>
            <th colspan="6" align="left">Telat Mengembalikan</th>
            <td><?php echo"$lama->d"?></td>
        </tr>
        <tr>
            <th colspan="6" align="left">Denda</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="7">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="6" align="left">Total Biaya(Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya)?>;</td>
        </tr>
        <tr>
        <th colspan="6" align="left">Total Denda (Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>
        <tr>
            <th colspan="7">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="6" align="left">Total Pembayaran (Biaya Telat + Total Denda )</th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>

        

        
    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
    

</div>
</fieldset>
</html>