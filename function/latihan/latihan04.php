<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <fieldset>
    <legend>Soal No.1</legend>
    <table>
        <form action="" method="post">
            <tr>
                <td>Masukan Bilangan</td>
                <td> : </td>
                <td><input type="number" name="bil1" id=""></td>
            </tr>
            <tr>
                <td>Masukan Pangkat</td>
                <td> : </td>
                <td><input type="number" name="bil2" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
    </table>
        <?php
            if (isset($_POST['submit'])) {
                $bil = $_POST['bil1'];
                $pangkat = $_POST['bil2'];

            function pangkat($bil, $pangkat) {
                if ($pangkat > 1) {
                    return $bil * pangkat($bil, $pangkat -1);
                } else {
                    return $bil;
                }
            }
            function pangkatnya($bil, $pangkat) {
                for ($i =1; $i <= $pangkat; $i++) {
                    echo $bil;
                    if ($i < $pangkat) {
                        echo " X ";
                    }
                }
            }
            echo " Hasil Dari perkalian <br>";
            echo pangkatnya($bil, $pangkat);
            $hasil = pangkat($bil, $pangkat);
            echo " = ". $hasil;
            }
        ?>
        </form>
    </fieldset>
</body>
</html>