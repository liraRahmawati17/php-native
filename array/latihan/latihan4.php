<?php
    $data = [
        [
        "dosen" => "Aceng Fikri", 
        "submenu" => [
            ["nama" => "ani",
            "MataKuliah" => [
            ["MataKuliah" => "Mtk "],
            ["MataKuliah" => "indo"],
            ["MataKuliah" => "inggris"]],

            "Hobi" => [
            ["Hobi" => "nyanyi"],
            ["Hobi" => "tidur"]]],

            [ "nama" =>
             "ana",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "Sejarah"]],
            
            "Hobi" => [
            ["Hobi" => "berenang"],
            ["Hobi" => "Bermain"]]],

            [ "nama" => "anu",
            "MataKuliah" => [
            ["MataKuliah" => "Ppkn"],
            ["MataKuliah" => "biologi"],
            ["MataKuliah" => "fisika"]],

            "Hobi" => [
            ["Hobi" => "ngoding"],
            ["Hobi" => "tidur"]]],
        ]
        ],

        ["dosen" => "Ujang Betok",
         "submenu" => [
            [ "nama" => "susi",
            "MataKuliah" => [
            ["MataKuliah" => "indo"],
            ["MataKuliah" => "inggris"],
            ["MataKuliah" => "sunda"]],

            "Hobi" => [
            ["Hobi" => "nyanyi"],
            ["Hobi" => "jogging"]]],

            [ "nama" =>
             "sisi",
            "MataKuliah" => [
            ["MataKuliah" => "ipa"],
            ["MataKuliah" => "ips"],
            ["MataKuliah" => "indo"]],
            
            "Hobi" => [
            ["Hobi" => "nyanyi"],
            ["Hobi" => "nari"]]],

            [ "nama" => "sasi",
            "MataKuliah" => [
            ["MataKuliah" => "ppkn"],
            ["MataKuliah" => "pkn"],
            ["MataKuliah" => "seni budaya"]],

            "Hobi" => [
            ["Hobi" => "lari"],
            ["Hobi" => "makan"]]],
        ]
        ],
    ];
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
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>