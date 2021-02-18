<?php
// User-defined function / fungsi yang dibuat sendiri
    function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Ica"); ?></h1>
</body>
</html>