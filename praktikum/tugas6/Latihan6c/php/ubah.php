<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
*/
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require './functions.php';
//ambil data di URL
$id =$_GET["id"];

//query data mahasiswa berdasarkan id
$jm = query("SELECT * FROM jam WHERE id = $id")[0];

//cek tombol submit apakah sudah berfungsi atau belum
if (isset($_POST["ubah"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php'
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Jam</title>
</head>
<body>
    <h3>Form Update Data Jam</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $jm['id']; ?>">
        <ul>
            <li>
                <label for="nama">Name :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $jm['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="merk">Merk :</label><br>
                <input type="text" name="merk" id="merk" required value="<?= $jm['merk']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Price :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $jm['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="color">Color :</label><br>
                <input type="text" name="color" id="color" required value="<?= $jm['color']; ?>"><br><br>
            </li>
            <li>
                <label for="quality">Quantity :</label><br>
                <input type="text" name="quality" id="quality" required value="<?= $jm['quality']; ?>"><br><br>
            </li>
            <li>
                <label for="gambar">Gambar :</label><br>
                <input type="text" name="gambar" id="gambar" required value="<?= $jm['gambar']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Update Data!</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

</body>
</html>