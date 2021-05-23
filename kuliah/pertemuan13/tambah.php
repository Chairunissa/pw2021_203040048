<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 11 (30 April 2021)
    Delete, Update, Searching Data
*/
?>

<?php

require 'functions.php';

//cek tombol data
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script> ";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        Gambar :
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        <img src="img/nophoto.jpg" width="150" style="display: block; margin-top: 5px;" class="img-preview">
      </li>
      <br>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>

  </form>

  <script src="js/script.js"></script>
</body>

</html>