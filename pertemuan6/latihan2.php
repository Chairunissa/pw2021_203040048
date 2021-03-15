<?php
/*
Chairunissa Putri Koswara
203040048
https://github.com/Chairunissa/pw2021_203040048
Pertemuan 6 (12 Maret 2021)
Belajar Associative ARRAY
*/
?>

<?php
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
   <ul>
       <li>
           <img src="img/<?= $mhs["gambar"]?>">
       </li>
       <li>Nama : <?= $mhs["nama"] ?></li>
       <li>NRP : <?= $mhs["nrp"] ?></li>
       <li>Email : <?= $mhs["jurusan"] ?></li>
       <li>Jurusan : <?= $mhs["email"] ?></li>
   </ul>
   <?php endforeach; ?>
</body>
</html>