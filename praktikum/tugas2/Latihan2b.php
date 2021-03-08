<?php
// Chairunissa Putri Koswara
// 203040048
// Jumat 10.00-11.00
// 5 Maret 2021
?>

<?php
$jawabanIsset = "Isset adalah = Salah satu kunci bahasa pemrograman untuk melakukan pengecekan terhadap suatu variabel atau isi dari variabel yang terdefinisi.<br><br>";
$jawabanEmpty = "Empty adalah =  Function yang digunakan untuk untuk mengecek data atau variabel yang kosong.";

$GLOBALS['jawabanIsset'] = $jawabanIsset;
$GLOBALS['jawabanEmpty'] = $jawabanEmpty;

function soal($style) {
    echo "<div class='$style'>" 
    . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] .  
    "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2b</title>
    <style>
    .kotak{
        border: 1px solid black;
        box-shadow: 0 0 2px black;
        padding: 13px;
        font-size: 20px;
    }
    </style>
</head>
<body>

    <?php 
        echo soal("kotak");
    ?>
</body>
</html>


<!-- SUMBER -->
<!--pengertian issets: https://www.nyingspot.com/2020/07/mengenal-isset-operator-di-php-7/#:~:text=Pengertian%20Isset.%20Isset%20merupakan%20salah%20satu%20kunci%20bahasa,untuk%20menghidari%20dari%20pemanggilan%20variabel%20yang%20belum%20tedefinisi. -->
<!--pengertian empty: https://belajarmembikinwebsite.blogspot.com/2013/11/fungsi-empty-dan-trim-pada-php.html#:~:text=Fungsi%20empty%20()%20merupakan%20fungsi%20yang%20digunakan%20untuk,variabel%20berupa%20spasi,%20spasi%20dianggap%20sebagai%20satu%20karakter. -->