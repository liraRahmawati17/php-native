<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
</head>
<body>
    <form action="">
        <fieldset>
            <legend>pembayaran</legend>
            <table>
                <tr>
                    <td>nama barang</td>
                    <td>:</td>
                    <td><input type="text" name="barang"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td>:</td>
                    <td><input type="number" name = "harga"></td>
                </tr>
                <tr>
                    <td>jumlah pesanan</td>
                    <td>:</td>
                    <td><input type="number" name = "pesanan"></td>
                </tr>
                <tr>
                    <td>jenis pembayaran</td>
                    <td>:</td>
                    <td><input type="text" name = "pembayaran"></td>
                </tr>
                <tr>
                    <td>diskon</td>
                    <td>:</td>
                    <td><input type="number" name ="diskon"></td>
                </tr>
                <tr>
                    <td>cashback</td>
                    <td>:</td>
                    <td><input type="number" name = "cashback"></td>
                </tr>
                <tr>
                    <td>jumlah yang harus dibayar</td>
                    <td>:</td>
                    <td><input type="number" name ="bayar"></td>
                </tr>
                <tr>
                    <td><input type="submit" name ="submit" value ="masuk">
                    <input type="submit" name ="reset" value ="reset"></td>
                </tr>
            </table>

            <?php

if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $diskon = $_POST['diskon'];
    $cashback = $_POST['cashback'];
    $bayar = $_POST['bayar'];
}

?>


        </fieldset>
    </form>
</body>
</html>
