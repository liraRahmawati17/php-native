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
        <legend>formulir</legend>
        <form action="" method="post">
            <tr>
                <td>masukan bilangan : </td>
                <td><input type="text" name ="bilangan"></td><br><br>
            </tr>
            <tr>
                <td>masukan pangkat : </td>
                <td><input type="text" name = "pangkat"></td><br>
            </tr>
            <tr>
                <td><input type="submit" name ="simpan" value ="save"></td>
            </tr>
        </form>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST['simpan'])){
        $bilangan = $_POST['bilangan'];
        $pangkat = $_POST['pangkat'];

        function bilanganPangkat($bilangan,$pangkat)
        {
            if ($pangkat > 1){
                return $bilangan * pangkat ($bilangan, $bil);
               
        }
        
        }

        function pangkatnya($bilangan, $pangkat){
            for ($i = 1; $i <= $pangkat; $i++){
                echo $bilangan;
                if ($i < $pangkat){
                    echo " X "
                }
            }
        }
        echo "hasil dari perkalian<br>";
        echo pangkatnya($bilangan, $pangkat);
        $hasil = pangkat ($bilangan, $pangkat);
        echo " = " . $hasil;
          }
        ?>