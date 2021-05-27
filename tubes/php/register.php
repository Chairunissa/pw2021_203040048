<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
*/
?>
<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-reg.css">
    <title>Register</title>
</head>

<body>
    <form action="" method="post">
        <img src="../assets/img/wave2.png" alt="" class="wave">
        <div class="container">
            <div class="login-container">
                <div class="card-panel">
                    <img class="avatar" src="../assets/img/profile.svg" alt="">
                    <h2>REGISTER</h2>
                    <div class="input-div focus">
                        <div class="i">
                            <span class="material-icons">person</span>
                        </div>
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username" autocomplete="off">
                        </div>
                    </div>

                    <div class="input-div focus">
                        <div class="i">
                            <span class="material-icons">lock</span>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" class="btn" name="register">Register</button>
                </div>
            </div>
            <div class="img">
                <img src="../assets/img/hppy.svg" alt="">
            </div>
        </div>

    </form>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>