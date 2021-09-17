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
        <legend>Makhluk Alloh</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Makhluk</td>
                    <td> : </td>
                    <td><select type="text" name="jenis" >
                        <option value= "" > pilih </option>
                        <option value= "Manusia" > Manusia</option>
                        <option value= "Malaikat" > Malaikat</option>
                        <option value= "Jin" > Jin</option>
                        <option value= "Setan" > Setan</option>
                        </select></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Masuk"></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];

    class Makhluk
    {
        public $jenis;

        public function __construct($a)
        {
            $this->jenis = $a;

        }
    }
    class manusia extends Makhluk
    {
        public function tugas()
        {
            if ($this->jenis == "Manusia") {
                $tugas = "Beribadah Kepada Alloh";
            } else if ($this->jenis == "Malaikat") {
                $tugas = "Beribadah Kepada Alloh";
            } else if ($this->jenis == "Jin") {
                $tugas = "Ada yang beribadah, Ada yang mengganggu manusia";
            } else {
                $tugas = "Mengganggu Manusia Beribadah";
            }
            return $tugas;
        }
    }
    $makhluk = new manusia($jenis);
    echo "Jenis Makhluk : " . $makhluk->jenis . "<br>";
    echo "Tugasnya : " . $makhluk->tugas();
}
?>
    </fieldset>
</body>
</html>