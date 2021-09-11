<?php
$data = [
    [
        "nama" => "ana",
        "mapel" => [
            ["mapel" => "Fisika"],
            ["mapel" => "Kimia"],
            ["mapel" => "Biologi"]
        ],
        "hobi" => [
            ["hobi" => "Mancing"],
            ["hobi" => "Main Game"]
        ],
        "namaDosen" => [
            ["namaDosen" => "Aceng"]
        ]
    ],
    [
        "nama" => "ani",
        "mapel" => [
            ["mapel" => "indo"],
            ["mapel" => "ipa"],
            ["mapel" => "sunda"]
        ],
        "hobi" => [
            ["hobi" => "tidur"],
            ["hobi" => "ngoding"]
        ],
        "namaDosen" => [
            ["namaDosen" => "aceng"]
        ]
        ],
        [
        "nama" => "anu",
        "mapel" => [
            ["mapel" => "sastra"],
            ["mapel" => "indo"],
            ["mapel" => "ips"]
            ],
        "hobi" => [
            ["hobi" => "nyanyi"],
            ["hobi" => "nari"]
        ],
        "namaDosen" => [
            ["namaDosen" => "aceng"]
        ]

        ],
        [
            "nama" => "sisi",
            "mapel" => [
                ["mapel" => "inggris"],
                ["mapel" => "ppkn"],
                ["mapel" => "ipa"]
            ],
            "hobi" => [
                ["hobi" => "tidur"],
                ["hobi" => "ngoding"]
            ],
            "namaDosen" => [
                ["namaDosen" => "ujang"]
            ]
        ],
        [
            "nama" => "susi",
            "mapel" => [
                ["mapel" => "pai"],
                ["mapel" => "ipa"],
                ["mapel" => "ips"]
            ],
            "hobi" => [
                ["hobi" => "tidur"],
                ["hobi" => "lari"]
            ],
            "namaDosen" => [
                ["namaDosen" => "ujang"]
            ]
        ],
        [
            "nama" => "sasi",
            "mapel" => [
                ["mapel" => "sunda"],
                ["mapel" => "inggris"],
                ["mapel" => "indo"]
            ],
            "hobi" => [
                ["hobi" => "berenang"],
                ["hobi" => "lari"]
            ],
            "namaDosen" => [
                ["namaDosen" => "ujang"]
            ]
        ]
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
    <table border=1 width =100% align="center">
        <tr>
            <th>no</th>
            <th>nama mahasiswa</th>
            <th>nama dosen</th>
            <th>mata kuliah</th>
            <th>hobi</th>
        </tr>
        <?php
        for ($a)
        ?> 
    <td><?php echo "No"; ?></td>
    <td><?php echo "Nama Mahasiswa  "; ?></td>
    <td><?php echo "Nama Dosen"; ?></td>
    <td colspan ="3"><?php echo "Mata Kuliah "; ?></td>
    <td colspan ="2"><?php echo "Hobi "; ?></td>
    </tr>
    <?php
    $no = 1; ?>
    <?php foreach($data as $key => $val) { ?>
    
    <td><?php echo $no++; ?></td>
    <td><?php echo $val['nama']; ?></td>

    <?php foreach($val['namaDosen'] as $dosen) {?>
        <td> <?php echo $dosen['namaDosen'];?></td>
    <?php } ?>
    <?php foreach($val['mapel'] as $menu) {?>
        
       <td> <?php echo $menu['mapel'];?></td>
       
    <?php } ?> 
    <?php foreach($val['hobi'] as $sub) {?>
        
    <td> <?php echo $sub['hobi'];?></td>
    
    <?php 
}
 ?>
   
<?php 
}
 ?>
 </table>
    </body>
    </html>