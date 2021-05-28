<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
tubes
*/

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$jm = query("SELECT * FROM jam WHERE id = $id")[0];

//cek tombol submit apakah sudah berfungsi atau belum
if (isset($_POST["ubah"])) {

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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Update Data Jam</title>

    <style>
        body {
            background-image: -moz-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            background-image: -webkit-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            background-image: -ms-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            color: #717171;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card p-4 shadow-lg border-0 my-5">
                    <h3 class="py-3 text-center">Form Update Data Jam</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $jm['id']; ?>">

                        <div class="form-group">
                            <label for="nama">Name :</label><br>
                            <input type="text" name="nama" id="nama" required value="<?= $jm['nama']; ?>" class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk :</label><br>
                            <input type="text" name="merk" id="merk" required value="<?= $jm['merk']; ?>" class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <label for="harga">Price :</label><br>
                            <input type="text" name="harga" id="harga" required value="<?= $jm['harga']; ?>" class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <label for="color">Color :</label><br>
                            <input type="text" name="color" id="color" required value="<?= $jm['color']; ?>" class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <label for="quality">Quantity :</label><br>
                            <input type="text" name="quality" id="quality" required value="<?= $jm['quality']; ?>" class="form-control rounded-pill">
                        </div>
                        <input type="hidden" name="gambar_lama" value="<?= $jm['gambar']; ?>">
                        <div class="form-group">
                            <label for="gambar">Gambar :</label><br>
                            <input type="file" class="gambar" name="gambar" id="gambar" onchange="previewImage()">
                            <br><br>
                            <img src="../assets/img/<?= $jm['gambar']; ?>" width="150px" style="display: block;" class="img-preview">
                        </div>
                        <br>
                        <input type="submit" name="ubah" class="btn btn-primary rounded-pill" value="Update Data">
                        <a href="../index.php"><input type="submit" name="kembali" class="btn btn-danger rounded-pill" value="Kembali"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>