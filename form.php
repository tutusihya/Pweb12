<!DOCTYPE html>
<html>
<head>
    <title>Array dan Fungsi di PHP</title>
</head>
<body>
    <h2>Manipulasi Array dan Fungsi</h2>
    <?php
    // Contoh Array
    $buku = array("Matematika", "Fisika", "Kimia", "Biologi", "Sejarah");

    // Fungsi untuk mencetak array
    function cetakArray($array) {
        foreach ($array as $item) {
            echo $item . "<br>";
        }
    }

    // Fungsi untuk menambah elemen baru ke array
    function tambahBuku($array, $bukuBaru) {
        array_push($array, $bukuBaru);
        return $array;
    }

    // Fungsi untuk menghapus elemen dari array
    function hapusBuku($array, $bukuHapus) {
        $index = array_search($bukuHapus, $array);
        if ($index !== false) {
            unset($array[$index]);
        }
        return $array;
    }

    function hitungBuku($array) {
        return count($array);
    }
    echo "<h3>Daftar Buku:</h3>";
    cetakArray($buku);

    $buku = tambahBuku($buku, "Sosiologi");

    echo "<h3>Daftar Buku Setelah Penambahan:</h3>";
    cetakArray($buku);

    $buku = hapusBuku($buku, "Kimia");

    echo "<h3>Daftar Buku Setelah Penghapusan:</h3>";
    cetakArray($buku);

    echo "<h3>Jumlah Buku:</h3>";
    echo hitungBuku($buku);
    ?>
</body>
</html>
