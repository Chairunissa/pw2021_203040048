<?php
// Chairunissa Putri Koswara
// 203040048
// github.com/Chairunissa/pw2021_203040048.git
// Pertemuan 1 (18 Februari 2021)
// belajar function
?>

<?php
//DATE / TIME

// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970 - saat ini
    // echo time();
    // echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik 
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,10,26,2002));

// strtotime
    //echo date("l", strtotime("26 Oct 2002"));
?>

<?php
//STRING

// strlen() untuk menghitung panjang sebuah string
// strcmp() untuk membandingkan 2 buah string
// explode() untuk memecah sebuah string menjadi array
// htmlspecialchars untuk menjaga website kita dari hacker


//UTILITY / BANTUAN

// var_dump() untuk mencetak isi sebuah variabel, objek, array
// isset() untuk mengecek apakah sebuah variabel suda dibuat apa belum, dan akan menghasilan boolean true or false
// empty() untuk mengecek apakah sebuah variabel ada isi nya atau tidak
// die() ketika program bertemu die makan program dibawahnya tidak akan dieksekusi
// sleep() untuk memberhentikan sementara
?>
