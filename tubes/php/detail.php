<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
tubes
*/

//untuk mengecek apakah ada id yang dikiri, jika tidak kembali ke index.php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url 
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$jam = query("SELECT * FROM jam WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800");

        * {
            margin: 0;
            padding: 0;
        }

        body {
            justify-content: center;
            align-items: center;
            background-image: -moz-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            background-image: -webkit-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            background-image: -ms-linear-gradient(0deg, #3399ff 0%, #38d39f 100%);
            font-family: "Poppins", sans-serif;
        }

        .container {
            padding-top: 6%;
            padding-left: 40%;
            width: 50%;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .container .card {
            height: 300px;
            background: #fff;
            margin: 40px 10px;
            padding: 20px 15px;
            flex-direction: column;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease-in-out;
        }

        .container .card:hover {
            height: 390px;
        }

        .container .card .imgBx {
            position: relative;
            width: 240px;
            height: 200px;
            top: -60px;
            left: 36px;
        }

        .container .card .imgBx img {
            text-align: center;
            max-width: 100%;
            border-radius: 4px;
        }

        .container .card .content {
            position: relative;
            right: 25px;
            margin-top: -140px;
            padding: 40px 5px;
            text-align: left;
            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;
        }

        .container .card:hover .content {
            visibility: visible;
            opacity: 1;
            margin-top: -40px;
            transition-delay: 0.3s;
        }

        .card-action .buttom {
            border: none;
            border-radius: 20px;
            width: 70px;
            padding: 3px 5px;
            background: #111;
        }

        .card-action a {

            text-decoration: none;
            color: white;
        }

        .card-action a:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="../assets/img/<?= $jam["gambar"]; ?>">
                <div class="content">
                    <br>
                    <h2><?= $jam["nama"]; ?></h2>

                    <p>Merk : <?= $jam["merk"]; ?></p>
                    <p>Harga : <?= $jam["harga"]; ?></p>
                    <p>Warna : <?= $jam["color"]; ?></p>
                    <p>Stok : <?= $jam["quality"]; ?></p>
                </div>
                <div class="card-action">
                    <button class="buttom" type="submit"><a href="../index.php">Back</a></button>
                </div>
            </div>
        </div>
</body>

</html>