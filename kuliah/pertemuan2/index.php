<?php
/*
    Chairunissa Putri Koswara
    203040048
    github.com/Chairunissa/pw2021_203040048.git
    Pertemuan 2 (5 Februari 2021)
    belajar sintaks dasar php  
*/
?>

<?php
// print dan echo fungsinya sama
// print_r bisa mencetak string dan array
// var_dump akan memberikan informasi tipe data dan ukuran contoh:string(14)blabla

// penulisan sintsks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe data
// Variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// interpolasi harus menggunakan " tidak boleh ' supaya terbaca
// contoh echo "Hello saya $nama";


//Operator
// Aritmatika
// + - * / %
/* 
$x = 10;
$y = 20;
echo $x * $y;
*/

// penggabung string / concatenation / concat
// (.)
/*
$nama_depan = "Chairunissa";
$nama_belakang = "PK";
echo $nama_depan ." ". $nama_belakang;
*/

//php didalam html
/*
$nama = "Ica";

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>

</body>
</html>
*/

// Assignment
// =, +=, -=, *=, /=, %*, .=
/*
$x = 1;
$x -= 5;
echo $x;
*/
/*
$nama = "Icha";
$nama .= " ";
$nama .= "Ica";
echo $nama;
*/

// Perbandingan
// <, >, <=, >=, ==, !=
// operator perbandingan ini tidak mengecek tipe datanya
// tetapi mengecek nilainya sama atau tidak
/*
var_dump(1 == "1");
*/

// Indentitas
// ===, !==
// operator ini tidak mengecek nilainya
//tetapi mengecek tipe datanya
/*
var_dump(1 === "1");
*/

// Logika
// &&, ||, !
// biasanya dipakai untuk pengkodisian
/*
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
*/
?>