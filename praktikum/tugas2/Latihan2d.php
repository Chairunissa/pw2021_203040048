<?php
// Chairunissa Putri Koswara
// 203040048
// Jumat 10.00-11.00
// 5 Maret 2021
?>

<?php 
function hitungDeterminan($a,$b,$c,$d) {
    //rumus perhitungan determinan
    $matriks = ($a * $d) - ($b * $c);

    //menampilkan matriks
    echo "<table style='border-left: 2px solid black; border-right: 2px solid black; cellspacing='5'; cellpadding='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
        </table>";
    echo "<b>Determinan dari Matriks tersebut adalah $matriks</b>"; //menampilkan Teks dibawah matriks
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2d</title>
</head>
<body>
    <!-- memanggil fungsi hitungDeterminan -->
    <?php  hitungDeterminan(1,2,3,4); ?> 
</body>
</html>