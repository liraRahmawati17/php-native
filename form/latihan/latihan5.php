<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Peminjaman Mobil</title>
</head>
<body>
<fieldset>
<legend>Rental Mobil</legend>

<form action="proses2.php" method="post">

    <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nomor Induk Keluarga </td>
            <td> : </td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >
            Laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="">pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Mobil</td>
            <td> : </td>
            <td><input  name="namamobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil </td>
            <td> : </td>
            <td><select  name="jenismobil">
            <option value= "" > pilih jenis mobil</option>
            <option value= "Cabriolet" > Cabriolet</option>
            <option value= "Station Wagon" > Station Wagon.</option>
            <option value= "Bak Terbuka" > Bak Terbuka</option>
            <option value= "Sedan" > Sedan</option>
            </select></td>
        </tr>
        <tr>
            <td>Merek Mobil </td>
            <td> : </td>
            <td><select   name="merek">
            <option value= "" > pilih merk mobil</option>
            <option value= "Toyota" > Toyota</option>
            <option value= "Daihatsu" > Daihatsu</option>
            <option value= "Honda" > Honda</option>
            <option value= "Suzuki" > Suzuki</option>
            </select></td>
        </tr>
        <tr>
            <td>NO Plat Mobil</td>
            <td> : </td>
            <td><input type="text" name="nomobil"></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpeminjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> : </td>
            <td><input  type="date" name="tanggalkembali"></td>
        </tr>
        <tr>
            <td>Penjamin </td>
            <td> : </td>
            <td><select  name="penjamin">
            <option value= "" >pilih jaminan</option>
            <option value= "FotocopyKTP" > Fotocopy KTP</option>
            <option value=  "Fotocopy SIM" > Fotocopy SIM</option>
            <option value= "Fotocopy KK" > Fotocopy KK</option>
            </select></td>
        </tr>
        <tr>
            <td>Menggunkan Supir </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= "" > menggunakan supir ?</option>
            <option value= "Ya" > Ya</option>
            <option value= "Tidak" > Tidak</option>
            </select></td>
        </tr>



<tr></tr>

        <tr>
        <td></td><td></td>
            <td><input type="submit" name="proses"></td>
        </tr>
        

     
 </form>
 </fieldset>
 </table>
</body>
</html>