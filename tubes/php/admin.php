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
require 'functions.php';
// Melakukan Query dari database
$jam = query("SELECT * FROM jam ORDER BY id ASC");

//jika tombol cari diklik
if (isset($_GET["cari"])) {
    $jam = cari($_GET["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <link type="text/css" rel="stylesheet" href="" media="screen,projection" />
    <!-- import bootstrap.css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/font-css/LineIcons.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
        }
    </style>
</head>
<!--====== PRELOADER PART START ======-->

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="logo">
            <img src="../assets/images/2.png" alt=""></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="tambah.php">Tambah Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <form class="d-flex" action="" method="GET">
            <input class="keyword" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off" autofocus>
            <button class="tombol-cari" type="submit" name="cari">Search</button>
        </form>
    </div>
</nav>

<div class="container" style="margin-top: 100px;">
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
</div>
<div class="footer-copyright pt-15 pb-15">
    <div class="row">
        <div class="col-lg-12">
            <div class="copyright text-center">
                <p>&copf; Chairunissa Copyright - 2021</p>
            </div> <!-- copyright -->
        </div>
    </div> <!-- row -->
</div> <!--  footer copyright -->
</div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TO TOP PART ENDS ======-->

<script src="../js/script.js"></script>
<!--====== jquery js ======-->
<script src="../js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="../js/bootstrap.min.js"></script>


<!--====== Slick js ======-->
<script src="../js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="../js/jquery.magnific-popup.min.js"></script>


<!--====== nav js ======-->
<script src="../js/jquery.nav.js"></script>

<!--====== Nice Number js ======-->
<script src="../js/jquery.nice-number.min.js"></script>

<!--====== Main js ======-->
<script src="../js/main.js"></script>
</body>


</html>