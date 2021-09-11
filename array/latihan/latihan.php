<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>program masuk sekolah favorit</legend>
        <form action="" method ="post">
            <table>
                <tr>
                    <th>masukan jumlah data </th>
                    <td>: <input type="number" name ="jumlah"></td>
                </tr>
                <tr>
                    <th>
                    </th>
                    <td>
                        <button type ="submit" name="simpan">simpan</button>
                        <button type ="reset" name ="reset">reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
        if(isset($_POST['simpan']))
        {
            $row = $_POST['jumlah'];
            ?>
            <fieldset>
                <legend>input data siswa </legend>
                <table>
                    <form action="latihanpro.php" method ="post">
                        <?php
                        for ($i = 1; $i <= $row; $i++)
                        {
                            ?>
                            <tr>
                                <th colspan = 2>data ke <?php echo $i;?></th>
                                <td>nama </td>
                                <td> <input type="text" name ="nama[]"></td>
                            </tr>
                            <tr>
                            <th colspan = 2></th>
                                <td> asal sekolah  </td>
                                <td> <input type="text" name ="asalSekolah[]"></td>
                            </tr>
                            <tr>
                                <th colspan = 2></th>
                                <td>nilai bahasa indonesia</td>
                                <td> <input type="number" name = "indo[]" min ="1" max ="100"></td>
                            </tr>
                            <tr>
                                <th colspan = 2></th>
                                <td>nilai matematika</td>
                                <td> <input type="number" name ="mtk[]" min ="1" max = "100"></td>
                            </tr>
                            <tr>
                                <th colspan = 2></th>
                                <td>nilai bahasa inggris</td>
                                <td> <input type="number" name ="inggris[]" min = "1" max ="100"></td>
                            </tr>
                            <tr>
                                <th colspan =2></th>
                                <td>nilai ipa</td>
                                <td> <input type="number" name ="ipa[]" min = "1" max = "100"></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <th></th>
                            <td> <button type="submit" name ="save">simpan</button></td>
                        </tr>
                    </form>
                </table>
            </fieldset>
            <?php
        }
        ?>
</body>
</html>