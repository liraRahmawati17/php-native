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
    <legend>biodata</legend>
    <form action="" method = "post">
        <tr>
            <td>nama : </td>
           <td> <input type="text" name = "nama" id = "nama"></td><br>
        </tr>
        <tr>
            <td>jenis kelamin :</td>
            <td><input type="radio" name ="jk" id = "l" value ="lakilaki">laki laki</td>
            <td><input type="radio" name ="jk" id = "p" value ="perempuan">perempuan</td><br>
        </tr>
        <tr>
            <td>tanggal lahir :</td>
            <td><input type="date" name ="tanggal"></td><br>
            </tr>
            <tr>
                <td>agama : </td>
                <td> 
            <select name="agama" required>
            <option value="">Pilih</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
        </select></td><br>
        </tr>
        <tr>
            <td>alamat : </td>
            <td><textarea name = "alamat" id="" cols ="30" rows="5"></textarea></td><br>
            Hobi : <br>
            
            <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
            <input type="checkbox" name="hobi[]" value="Bermain"> Bermain <br>
            <input type="checkbox" name="hobi[]" value="Berenang"> Berenang <br>
            <input type="checkbox" name="hobi[]" value="Memasak"> Memasak <br>
            <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
            <input type="checkbox" name="hobi[]" value="Makan"> Makan <br><br>
         

               <input type="submit" name="simpan" value="simpan">
        </tr>
    </form>
    </fieldset>
</body>
</html>
<?php
if (isset($_POST['simpan'])){
    
    $nama = $_POST['nama'];
    $jenis = $_POST['jk'];
    $tglLahir = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

 function dataDiri($nama,$jenis,$tglLahir,$agama,$alamat,$hobi)
{
$bioData = "Nama : $nama <br>";
$bioData .= "Jenis Kelamin : $jenis <br>";
$bioData .= "Tanggal Lahir : $tglLahir <br>";
$bioData .= "Agama : $agama <br>";
$bioData .= "Alamat : $alamat <br>";
$bioData .= "Hobi : " . implode (",", $hobi);
return $bioData;
}

echo dataDiri ($nama,$jenis,$tglLahir,$agama,$alamat,$hobi);
}
?>