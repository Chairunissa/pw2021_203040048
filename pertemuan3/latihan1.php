<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 3 (12 Februari 2021)
    belajar pengulangan (for, while, do..while, foreach)
*/
?>

<?php
// Pengulangan (for)
/*
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
*/

// Pengulangan (while)
// apabila kondisinya false maka blok tidak akan dijalankan
/*
$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}
*/

// Pengulangan (do..while)
// perbedaan nya ketika kondisi bernilai false maka blok akan dijalanlan 1 kali
/*
$i = 10;
do {
    echo "Hello World! <br>" ;
$i++;
} while( $i < 5 );
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php
        for($i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i,$j"?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>