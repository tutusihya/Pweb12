<!DOCTYPE html>
<html>
<head>
    <title>Array dan Fungsi di PHP</title>
</head>
<body>
    <h2>Manipulasi Array dan Fungsi</h2>
    <?php
    $mahasiswa = array("Ahmad", "Budi", "Citra", "Dewi", "Eko");

    function cetakArray($array) {
        foreach ($array as $item) {
            echo $item . "<br>";
        }
    }

    function tambahMahasiswa($array, $namaBaru) {
        array_push($array, $namaBaru);
        return $array;
    }

    function hitungMahasiswa($array) {
        return count($array);
    }

    echo "<h3>Daftar Mahasiswa:</h3>";
    cetakArray($mahasiswa);

    $mahasiswa = tambahMahasiswa($mahasiswa, "Fajar");

    echo "<h3>Daftar Mahasiswa Setelah Penambahan:</h3>";
    cetakArray($mahasiswa);

    echo "<h3>Jumlah Mahasiswa:</h3>";
    echo hitungMahasiswa($mahasiswa);
    ?>
</body>
</html>
