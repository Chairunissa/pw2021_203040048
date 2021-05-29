<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 7
*/

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Tambah Data Jam</title>

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
                    <h3 class="py-3 text-center">Form Tambah Data Jam</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nama" id="nama" placeholder="Name" required class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <input type="text" name="merk" id="merk" placeholder="Merk" required class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <input type="text" name="harga" id="harga" placeholder="Price" required class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <input type="text" name="color" id="color" placeholder="Color" required class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <input type="text" name="quality" id="quality" placeholder="Quantity" required class="form-control rounded-pill">
                        </div>
                        <div class="form-group">
                            <input type="file" class="gambar" name="gambar" id="gambar" onchange="previewImage()">
                            <br><br>
                            <img src="../assets/img/nophoto.jpg" width="150px" style="display: block;" class="img-preview">
                        </div>

                        <br>
                        <input type="submit" name="tambah" class="btn btn-primary rounded-pill" value="Tambah Data">
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