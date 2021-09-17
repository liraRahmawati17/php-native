<html>
 <head><title>Pengolahan Form</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            <legend></legend>
            <table>
                <tr>
            <td>Pilih Mahluk </td>
            <td> : </td>
            <td><select type="text" name="jenis" >
            <option value= > pilih</option>
            <option value= 1 > Manusia</option>
            <option value= 2 > Malaikat</option>
            <option value= 3 > Jin</option>
            <option value= 4 > Setan</option>
            </select></td>
            </tr>

<tr>
    <td></td><td></td>
    <td>
 <input type="submit" name="Input" value="Input"></td>
</tr>
 </table>
</form>
 </fieldset>
 </body>
</html>

<?php
if (isset($_POST['Input'])) {
    $jenis = $_POST['jenis'];

    class Manusia
    {
        public function __construct($jenis)
        {
            $this->jenis = "$jenis";

        }
        protected function tugasManusia()
        {
            return "Beribadah pada Tuhan";
        }
    }

// turunkan class Manusia ks Malaikat
    class Malaikat extends Manusia
    {
        protected function tugasMalaikat()
        {
            return "Beribadah Kepada Tuhan";
        }
    }
    class jin extends Malaikat
    {
        protected function tugasJin()
        {
            return "Labil";
        }
    }
// turunkan class Malaikat ke chromebook
    class setan extends jin
    {
        protected function tugasSetan()
        {
            return "Menggagu Manusia";
        }

        public function kerjaan()
        {
            if (0 > $this->jenis) {
                $a = $this->tugasManusia();

            } elseif (3 < $this->jenis) {
                $a = $this->tugasSetan();

            } elseif (2 < $this->jenis) {
                $a = $this->tugasJin();

            } elseif (1 <= $this->jenis) {
                $a = $this->tugasMalaikat();

            }

            // $b = $this->beli_laptop();
            // $c = $this->beli_chromebook();
            // $d = $this->etan();

            return "Tugasnya : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $makhluk = new setan($jenis);

//panggil method objek
    echo $makhluk->kerjaan();
}
?>