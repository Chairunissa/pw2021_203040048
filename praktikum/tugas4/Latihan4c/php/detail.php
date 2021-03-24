<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 4
*/
?>

<?php
//untuk mengecek apakah ada id yang dikiri, jika tidak kembali ke index.php
if(!isset($_GET['id'])) {
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
            <div class="row">
                <div class="col s12 m7">
                    <div class="card centered">
                        <div class="card-image">
                        <img src="../assets/img/<?= $jam["gambar"]; ?>">
                        <br>
                        <span class="cars-title"><?= $jam["nama"]; ?></span>
                    <div class="card-content">
                        <p><?= $jam["merk"]; ?></p>
                        <p><?= $jam["harga"]; ?></p>
                        <p><?= $jam["color"]; ?></p>
                        <p><?= $jam["quality"]; ?></p>
                    </div>
                    <div class="card-action">
                    <a href="../index.php">Back</a>
                    </div>
                </div>
            </div>
        </div> 
        </div>                
    </body>
</html>

                
                    
                        
                       
                        


                    
      
