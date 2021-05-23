<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 12 (7 Mei 2021)
    menambah login dan regis
*/
?>

<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>
  <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
          <td><?= $m['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="js/script.js"></script>
  <script>
    const tombolCari = document.querySelector('.tombol-cari');
    const keyword = document.querySelector('.keyword');
    const container = document.querySelector('.container');

    //hilangkan tombol cari
    tombolCari.style.display = 'none';

    //event ketika kita menuliskan keyword
    keyword.addEventListener('keyup', function() {
      //ajax
      //xmlhttprequest (cara lama)
      //const xhr = new XMLHttpRequest();
      //xhr.onreadystatechange = function () {
      // if (xhr.readyState == 4 && xhr.status == 200) {
      //   container.innerHTML = xhr.responseText;
      // }
      //};
      //xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
      //xhr.send();

      //fetch()
      fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));
    });
  </script>
</body>

</html>