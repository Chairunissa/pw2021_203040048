<?php
require '../php/functions.php';
$jam = cari($_GET["keyword"]);
?>
<table class="table table-dark table-striped">
  <thead>
    <tr class="atas grey darken-4 white-teks">
      <th>#</th>
      <th>Opsi</th>
      <th>Picture</th>
      <th>Name</th>
      <th>Merk</th>
      <th>Price</th>
      <th>Color</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($jam)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($jam as $jm) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $jm["id"] ?>"><button style="border-radius: 20px;">Change</button></a>
            <a href="hapus.php?id=<?= $jm["id"] ?>" onclick="return confirm('Hapus Data?')"><button style="border-radius: 20px;">Delete</button></a>
          </td>
          <td>
            <img src="../assets/img/<?= $jm["gambar"]; ?>">
          </td>
          <td><?= $jm["nama"]; ?></td>
          <td><?= $jm["merk"]; ?></td>
          <td><?= $jm["harga"]; ?></td>
          <td><?= $jm["color"]; ?></td>
          <td><?= $jm["quality"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>