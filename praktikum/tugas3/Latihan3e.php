<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 3
*/
?>

<?php 
$jam = [
    [
        "nama" => "CLASSIC PETITE CORNWALL",
        "merk" => "DANIEL WELLINGTON",
        "harga" => "Rp.2.250.000",
        "color" => "BLACK",
        "quantity" => "9 Pcs",
        "gambar" => "1.jpeg"
    ],
    [
        "nama" => "ICONIC LINK 32 S",
        "merk" => "DANIEL WELLINGTON",
        "harga" => "Rp. 3.050.000",
        "color" => "BLACK",
        "quantity" => "2 Pcs",
        "gambar" => "2.jpeg"
    ],
    [
        "nama" => "GBD-800-2DR",
        "merk" => "CASIO",
        "harga" => "Rp.1.799.000",
        "color" => "BLUE",
        "quantity" => "1 Pcs",
        "gambar" => "3.jpeg"
    ],
    [
        "nama" => "CASIO AW-80D-1AVDF",
        "merk" => "CASIO",
        "harga" => "Rp.729.000",
        "color" => "GREY",
        "quantity" => "4 Pcs",
        "gambar" => "4.jpeg"
    ],
    [
        "nama" => "GBA-800-1ADR",
        "merk" => "CASIO",
        "harga" => "Rp.2.379.000",
        "color" => "BLACK",
        "quantity" => "5 Pcs",
        "gambar" => "5.jpeg"
    ],
    [
        "nama" => "CASIO A700W-1ADF",
        "merk" => "CASIO",
        "harga" => "Rp. 619.000",
        "color" => "GOLD",
        "quantity" => "1 Pcs",
        "gambar" => "6.jpeg"
    ],
    [
        "nama" => "CASIO W-740-1VS",
        "merk" => "CASIO",
        "harga" => "Rp.779.000",
        "color" => "BLACK",
        "quantity" => "3 Pcs",
        "gambar" => "7.jpeg"
    ],
    [
        "nama" => "CASIO HDC-700-3A2VDF",
        "merk" => "CASIO",
        "harga" => "Rp.899.000",
        "color" => "ARMY",
        "quantity" => "2 Pcs",
        "gambar" => "8.jpeg"
    ],
    [
        "nama" => "LA-20WH-8ADF",
        "merk" => "CASIO",
        "harga" => "Rp.359.000",
        "color" => " GREY",
        "quantity" => "1 Pcs",
        "gambar" => "9.jpeg"
    ],
    [
        "nama" => "CASIO W-735H-8A2VDF",
        "merk" => "CASIO",
        "harga" => "Rp.769.000",
        "color" => "LIGHT GREY",
        "quantity" => "2 Pcs",
        "gambar" => "10.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Latihan3e_203040048</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($jam as $jm) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $jm["gambar"]; ?>"></td>
                    <td><b><?= $jm["nama"]; ?></b></td>
                    <td><b><?= $jm["merk"]; ?></b></td>
                    <td><b><?= $jm["harga"]; ?></b></td>
                    <td><b><?= $jm["color"]; ?></b></td>
                    <td><b><?= $jm["quantity"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>