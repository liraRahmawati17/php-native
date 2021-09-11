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
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="proses03.php" METHOD= "POST">
        <fieldset>
            <legend>verifikasi pengembalian</legend>
            <td>tanggal telat :</td>
            <input type="date" name ="telat" id ="nama" require> <br>
            <td>pembayaran :</td>
            <input type="text" name ="pembayaran" id ="nama" require> <br><br>
            <input type="submit" name ="input" value ="simpan">
            <input type="reset" name ="reset" value ="reset">
        </fieldset>
</form>
    </body>
    </html>