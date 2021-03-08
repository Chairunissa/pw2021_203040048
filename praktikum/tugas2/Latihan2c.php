<?php
// Chairunissa Putri Koswara
// 203040048
// Jumat 10.00-11.00
// 5 Maret 2021
?>

<?php
    function tumpukanBola($tumpukan) {
        for($x = 1; $x <= $tumpukan; $x++) {
            for ($y=1; $y <= $x; $y++) {
                echo "<div class=\"bola\">$x</div>";
            }
        echo "<br>";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2c</title>
    <style>
         .bola {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border-radius: 100%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px; 
        }
    </style>
</head>
<body>

    <?php tumpukanBola(5); ?>

</body>
</html>