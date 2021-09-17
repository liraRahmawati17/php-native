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
        <legend>Kampus</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td> : </td>
                    <td><input type="text" name="nim" id=""></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td> : </td>
                    <td><input type="number" name="nilai" id="" max=100 min=0></td>
                </tr>
                <tr>
                    <td>Dosen</td>
                    <td> : </td>
                    <td><input type="text" name="dosen" id=""></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td> : </td>
                    <td><input type="text" name="matkul" id=""></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Masuk">
                        <input type="reset" name="reset" value="Hapus"></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class Mahasiswa
    {
        public $nama;
        public $nim;
        public $nilai;
        public $dosen;
        public $matkul;

        public function __construct($nama, $nim, $nilai, $dosen, $matkul)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->nilai = $nilai;
            $this->dosen = $dosen;
            $this->matkul = $matkul;
        }
    }

    class MataKuliah extends Mahasiswa
    {
        public function Grade()
        {
            if ($this->nilai >= 85) {
                $grade = "A";
            } elseif ($this->nilai >= 75) {
                $grade = "B";
            } elseif ($this->nilai >= 65) {
                $grade = "C";
            } elseif ($this->nilai < 65) {
                $grade = "D";
            }
            return $grade;
        }
        public function status()
        {
            if ($this->nilai >= 75) {
                $status = "anda lulus";
            } else if ($this->nilai >= 65) {
                $status = "perbaikan";
            } else if ($this->nilai < 65) {
                $status = "anda tidak lulus";
            }
            return $status;

        }
    }
    $data = new MataKuliah($nama, $nim, $nilai, $dosen, $matkul);

    echo "Nama : " . $data->nama . "<br>";
    echo "NIM : " . $data->nim . "<br>";
    echo "Nilai : " . $data->nilai . "<br>";
    echo "Dosen : " . $data->dosen . "<br>";
    echo "Mata Kuliah : " . $data->matkul . "<br>";
    echo "Grade : " . $data->Grade() . "<br>";
    echo "Status : " . $data->status() . "<br>";
}
?>
    </fieldset>
</body>
</html>