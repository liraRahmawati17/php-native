<?php

$url = "https://api.kawalcorona.com/";
//mempersiapkan curl/ init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
// echo $output;
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
        <a href="json-apl.php">data covid</a> |
        <a href="json-indonesia.php">data indonesia</a> |
        <a href="json-provinsi.php">data covid provinsi</a> |
    </nav>
    </center>
    <fieldset>
        <legend>data covid</legend>
        <table border =1>
            <tr>
                <th>no</th>
                <th>negara</th>
                <th>positif</th>
                <th>meninggal</th>
                <th>sembuh</th>
            </tr>
            <?php
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {
                ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid -> attributes -> country_region; ?></td>
                <td><?php echo $covid -> attributes -> confirmed; ?></td>
                <td><?php echo $covid -> attributes -> deaths; ?></td>
                <td><?php echo $covid -> attributes -> recovered; ?></td>
            </tr> 
        <?php 
        }
        ?>
        </table>
    </fieldset>
</body>
</html>