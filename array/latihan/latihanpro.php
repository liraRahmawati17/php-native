<?php
    if(isset($_POST['save']))
    {
        $nama = $_POST['nama'];
        $asalSekolah = $_POST['asalSekolah'];
        $indo = $_POST['indo'];
        $mtk = $_POST['mtk'];
        $inggris = $_POST['inggris'];
        $ipa = $_POST['ipa'];
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
        <fieldset>
            <legend>data siswa</legend>
            <table border =1>
                <tr>
                    <th>nomor</th>
                    <th>nama</th>
                    <th>asal sekolah</th>
                    <th>nilai bahasa indonesia</th>
                    <th>nilai matematika</th>
                    <th>nilai bahasa inggris</th>
                    <th>nilai ipa</th>
                    <th>total nilai </th>
                    <th>keterangan </th>
                </tr>

                <?php
                $no =1;
            
                for ($i = 0; $i < count ($nama); $i++) {?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $nama[$i]?></td>
                    <td><?php echo $asalSekolah[$i]?></td>
                    <td><?php echo $indo[$i]?></td>
                    <td><?php echo $mtk[$i]?></td>
                    <td><?php echo $inggris[$i]?></td>
                    <td><?php echo $ipa[$i]?></td>
                <?php
                $total = $indo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];
                if ($total > 340)
                {
                    $keterangan = "diterima";
                }else {
                    $keterangan = "tidak diterima";
                }
                ?>
                <td><?php echo $total;?></td>
                <td><?php echo $keterangan;?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </fieldset>
    </body>
    </html>