<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing</title>
</head>
<body>
    <fieldset>
        <legend>Kaki Kucing</legend>
        <form action="" method="post">
            <table>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="proses" value="proses">
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $warna;
        public $kaki;

        public function kkucing($warna, $kaki)
        {
            if ($kaki == 4) {
                echo "warna kucing : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Normal";
            } else if ($kaki <= 3) {
                echo "warna kucing : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Cingked";
            } else if ($kaki >= 5) {
                echo "warna kucing : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Siluman";
            }
        }
    }
    $kucing = new kucing();
    echo $kucing->kkucing($warna, $kaki);
}