<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 4
*/
?>

<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040048");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM jam");
if (!$result) {
    echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JAMSTORE</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <div class="container">
            <table class="highlight - centered  grey lighten-2">
                <thead>
                    <tr class="atas grey darken-4 white-teks">
                        <th>No</th>
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
                <?php while($jam = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                        <img src="assets/img/<?= $jam["gambar"]; ?>">
                        </td>
                        <td><?= $jam["nama"]; ?></td>
                        <td><?= $jam["merk"]; ?></td>
                        <td><?= $jam["harga"]; ?></td>
                        <td><?= $jam["color"]; ?></td>
                        <td><?= $jam["quality"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
            
        </div>
    </body>
</table>
</html>
