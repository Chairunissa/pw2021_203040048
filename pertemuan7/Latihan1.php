<?php
/*
Chairunissa Putri Koswara
203040048
pertemuan 7(19 Maret 2021)
*/
?>
<!-- variabel Superglobals / TIPE ARRAY ASSOCIATIVE
$_GET (1)
$_POST (2)
$_REQUEST
$_SERVER
$_SESSION (3)
$_COOKIE (4)
$_ENV -->

<?php
// Variabel Scope / lingkup variabel
// $x = 10;


// function tampilX() {
//     global $x; // untuk mencari $x diluar funcion
//     echo $x;
// }

// tampilX();

// CONTOH SUPERGLOBALS
// GET

$mahasiswa = [
    [
        "nama" => "Chairunissa Putri Koswara",
        "nrp" => "203040048", 
        "email" => "chairunissap37@gmai.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "profile1.png"
    ],
    [
        "nama" => "ica", 
        "nrp" => "20304049", 
        "email" => "203040049@gmai.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "profile2.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET_203040048</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mh ) : ?>
        <li>
        <a href="Latihan2.php?nama=<?= $mh["nama"]; ?>
        &nrp=<?= $mh["nrp"]; ?>&email=<?= $mh["email"]; ?>
        &jurusan=<?= $mh["jurusan"]; ?>
        &gambar=<?= $mh["gambar"]; ?>"><?= $mh["nama"]; ?></li></a>

        
    <?php endforeach; ?>
        </ul>


</body>
</html>