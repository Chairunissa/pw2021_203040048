<?php
// Chairunissa Putri Koswara
// 203040048
// Jumat 10.00-11.00
// 5 Maret 2021
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Latihan2a</title>
     <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-weight: bolder;
            font-style: italic;
            padding: 5px;
        }
        .kotak {
            border-radius: 5px ;
            box-shadow: 0 0 10px;
            border: 1px solid black;
            padding: 5px;
        }
     </style>
 </head>
 <body>
     
<?php 
    function gantiStyle($tulisan, $style1, $style2) {
        echo "<div class='$style1'>
        <p class='$style2'> $tulisan </p> </div>";
    }
?>

<?php
    echo gantiStyle("Selamat datang di praktikum PW", "kotak", "tulisan")
?>

 </body>
 </html>