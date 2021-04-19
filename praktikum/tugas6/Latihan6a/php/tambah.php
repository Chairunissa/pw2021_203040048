<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Latihan5e/css/style2.css">
    <script>
    src="https://kit.fontawesome.com/64d58efce2.js"
    </script>
    <title>Tambah Data Jam</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signin">
                <form action="" method="POST" class="sign-in-form">
                <h3 class="title">Form Tambah Data Jam</h3>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama" id="nama" placeholder="Name" required><br><br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="merk" id="merk" placeholder="Merk" required><br><br> 
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="harga" id="harga" placeholder="Price" required><br><br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="color" id="color" placeholder="Color" required><br><br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="quality" id="quality" placeholder="Quantity" required><br><br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="gambar" id="gambar" placeholder="Image" required><br><br>
                    </div>

                    <br>
                    <input type="submit" name="tambah" class="btn" value="Tambah Data">
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

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