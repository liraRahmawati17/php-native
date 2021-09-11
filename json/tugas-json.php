<?php

$url = "https://api.kawalcorona.com/indonesia/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$indonesia = curl_exec($ch);
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
   <fieldset>
       <legend>data provinsi :</legend>
       <table border = 1 width = 100%>
        <tr>
            <th>no</th>
            <th>nama </th>
            <th>positif </th>
            <th>negatif </th>
            <th>meninggal </th>
        </tr>
        <?php
        $no = 1;
        $data = json_decode($indonesia);
        foreach ($data as $covid) {?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $covid->name;?></td>
            <td><?php echo $covid->positif;?></td>
            <td><?php echo $covid->sembuh;?></td>
            <td><?php echo $covid->meninggal;?></td>
        </tr>
        <?php
        }
        ?>
       </table>
       </form>
   </fieldset>
</body>
</html>