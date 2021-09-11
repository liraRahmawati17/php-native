<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend>lingkaran</legend>
    <form method="post" action ="">
        masukan bilangan : <input type="text" name = bil>
        <input type="submit" name = "input" value = "input">

<?php
    if (isset($_POST['input'])){
        $a = $_POST['r'];

        function lingkaran($r, $phi = 3.14){
            $luas = $phi * $r * $r;
            return $luas; 
    }
        function klingkaran($r, $phi = 3.14){
            $keliling = 2 * ($phi * $r);
            return $keliling;
        }
        ?>
        jari jari = <?php echo $a ; ?> <br>
        luas lingkaran = <?php echo lingkaran($a); ?> <br>
        keliling lingkaran = <?php echo klingkaran($a); ?> <br>
        <?php
    }
    ?>
     </form>
</body>
</html>
