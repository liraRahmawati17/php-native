<?php

$url = "https://api.kawalcorona.com/positif/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$positif = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
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
<center>
    <nav>
        <a href="json-indonesia.php">Data Indonesia</a>
        <a href="json-provinsi.php">Data Covid Provinsi</a>
        <a href="json-global-positif.php">Data Global Positif</a>
        <a href="json-mati.php">Data Meninggal</a>
    </nav>
    </center>
    <fieldset>
        <legend>data Positif : </legend>
        <table border = 1 width = 100%>

        <?php
        $data = json_decode($positif);?>
        <tr>
            <th><?php echo $data->name; ?></th>
        </tr>
        <tr>
            <td><?php echo $data->value; ?></td>
        </tr>
        </table>
    </fieldset>
</body>
</html>