<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 5
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Jam</title>
</head>
<body>
    <h3>Form Tambah Data Jam</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Name :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="merk">Merk :</label><br>
                <input type="text" name="merk" id="merk" required><br><br>
            </li>
            <li>
                <label for="harga">Price :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="color">Color :</label><br>
                <input type="text" name="color" id="color" required><br><br>
            </li>
            <li>
                <label for="quality">Quantity :</label><br>
                <input type="text" name="quality" id="quality" required><br><br>
            </li>
            <li>
                <label for="gambar">Gambar :</label><br>
                <input type="text" name="gambar" id="gambar" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

<?php

require './functions.php';

if (isset($_POST["tambah"]) ) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php'
            </script>";
    }
}

?>
</body>
</html>