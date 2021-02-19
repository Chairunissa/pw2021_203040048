<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 5 (19 Februari 2021)
    belajar array dengan cara baru dan lama, cara menampilkan array, cara menambah elemen baru, dan cara mempilkan 1 elemen
    ARRAY NUMERIK
*/
?>
<?php
// Array
// sebuah variabel yang bisa menampung lebih dari 1 nilai / variabel yang memiliki banyak nilai
// nilai yang ada di dalam array adalah // elemen
// elemen pada array boleh bertipe data yang berbeda
// ARRAY adalah pasangan antara KEY dan VALUE
// KEY adalah index yang dimulai dari 0

// cara lama // membuat array

$hari = array("Senin", "Selasa", "Rabu");

// cara baru // membuat array

$bulan = ["Januari", "Februari", "Maret"];
$arrl1 = [123, "abc", false];


// Cara menampilkan Array
// dengan cara // var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


// Cara menampilkan 1 elemen pada Array

// echo $arrl1[0];
// echo "<br>";
// echo $bulan[1];


// Cara menambahkan elemen baru pada Array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>