<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 5
*/
?>

<?php
require './functions.php';
// Melakukan Query dari database
$jam = query("SELECT * FROM jam")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JAMSTORE</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style2.css">
    </head>
    <body>
      <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
        <div class="container">
            <table class="highlight - centered  grey lighten-2">
                <thead>
                    <tr class="atas grey darken-4 white-teks">
                        <th>#</th>
                        <th>opsi</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Merk</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($jam as $jm) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href=""><button>Change</button></a>
                            <a href=""><button>Delete</button></a>
                        </td>
                        <td>
                            <img src="../assets/img/<?= $jm["gambar"]; ?>">
                        </td>
						<td><?= $jm["nama"]; ?></td>
                        <td><?= $jm["merk"]; ?></td>
                        <td><?= $jm["harga"]; ?></td>
                        <td><?= $jm["color"]; ?></td>
                        <td><?= $jm["quality"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </div>
    </body>
</table>
</html>