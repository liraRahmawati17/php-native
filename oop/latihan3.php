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
        <legend>pengoperasian aritmatika</legend>
        <tr>
            <td> <form action="" method = "POST"></td>
        </tr>
        <tr>
            <td>masukan bilangan 1 : <input type="text" name = "bil1"> <br></td>
        </tr>  
        <tr> 
            <td>masukan bilangan 2 : <input type="text" name = "bil2"> <br></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name ="hitung" value="hitung">
            </td>
        </tr>
    </fieldset>
</body>
</html>

<?php
    if (isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        class aritmatika
        {
            public $bil1;
            public $bil2;

            public function __construct($a, $b)
            {
                $this->bil1 = $a;
                $this->bil2 = $b;
            }
    
            // membuat method
            public function tambah()
            {
                return $this->$bil1 + $this->$bil2;
            }
            public function kurang()
            {
                return $this->$bil1 - $this->$bil2;
            }
            public function kali()
            {
                return $this->$bil1 * $this-> $bil2;
            }
            public function bagi()
            {
                return $this->$bil1 / $this-> $bil2;
            }
            public function modulus()
            {
                return $this->$bil1 % $this-> $bil2;

            }


        }
    }
        // membuat objek
        $aritmatika1 = new aritmatika($bil1,$bil2);
        ?>
        hasil penjumlahan <?php echo $aritmatika1->bil1 . " + " . $aritmatika1->bil2;?>
        hasil pengurangan <?php echo $aritmatika1->bil1 . " - " . $aritmatika1->bil2;?>
        hasil perkalian <?php echo $aritmatika1->bil1 . " * " . $aritmatika1->bil2;?>
        hasil pembagian <?php echo $aritmatika1->bil1 . " \ " . $aritmatika1->bil2;?>
        hasil modulus <?php echo $aritmatika1->bil1 . " % " . $aritmatika1->bil2;?>

    ?>