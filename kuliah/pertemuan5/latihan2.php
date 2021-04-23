<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 5 (19 Februari 2021)
    pengulangan Array menggunakan for dan foreach
    ARRAY NUMERIK
*/
?>
<?php
// Pengulangan pada Array // for / foreach
$angka = [3,24,5,21,8];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
<?php } ?>


<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?= $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>



</body>
</html>