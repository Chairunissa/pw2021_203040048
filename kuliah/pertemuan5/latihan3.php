<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 5 (19 Februari 2021)
    belajar array multi dimensi
    ARRAY NUMERIK
*/
?>

<?php
// bagaimana bila data mahasiswa nya banyak?
// maka caranya kita akan membuat array multi dimensi / membuat array didalam array
// dengan cara menambah []
$mahasiswa = [
    ["Chairunissa", 203040048, "Teknik Informatika", "chairunissap37@gmil.com"],
    ["Ica", 203040049, "Teknik Informatika", "chairunissap38@gmil.com"],
    ["Nisa", 203040050, "Teknik Informatika", "chairunissap39@gmil.com"]

];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NRP :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>