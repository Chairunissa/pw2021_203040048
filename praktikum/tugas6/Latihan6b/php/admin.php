<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
*/
?>

<?php
require 'functions.php';
// Melakukan Query dari database
$jam = query("SELECT * FROM jam ORDER BY id ASC");

//jika tombol cari diklik
if( isset($_GET["cari"]) ) {
    $jam = cari($_GET["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JAMSTORE</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style2.css">
    </head>
    <body>
      <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
        <div class="add">
            <a href="./tambah.php" class="waves-effect waves-light green darken-3 btn-small">Tambah Data</a>
        </div>
        <form action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button class="waves-effect waves-light green darken-3 btn-small" type="submit" name="cari">Cari</button>
        </form>
        <div class="logout">
            <a href="logout.php" class="waves-effect waves-light green darken-3 btn-small">Logout</a>
        </div>
        <div class="container">
            <table class="highlight - centered  grey lighten-2">
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
            <?php if(empty($jam)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach($jam as $jm) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $jm["id"] ?>"><button>Change</button></a>
                            <a href="hapus.php?id=<?= $jm["id"] ?>" onclick="return confirm('Hapus Data?')"><button>Delete</button></a>
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
            <?php endif;?>
            </tbody>
        </div>
    </body>
</table>
</html>