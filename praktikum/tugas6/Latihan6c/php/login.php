<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
*/
?>
<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    //ambil username dari id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}
//melakukan pengecekan login jika sudah maka redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
//Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if(password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
    //jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
            if(hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
        }
    }
    $error = true;
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
    <link rel="stylesheet" href="../css/style-log.css">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
    

        <img src="../assets/img/wave.png" alt="" class="wave">
        <div class="container">
            <div class="img">
                <img src="../assets/img/login.svg" alt="">
            </div>
            <div class="login-container">
                <div class="card-panel">
                    <img class="avatar" src="../assets/img/ava.svg" alt="">
                    <h2>WELCOME</h2>
                    <?php if (isset($error)) : ?>
                        <p style="color: red;font-style:italic;">Username atau password salah</p>
                    <?php endif; ?>
                    <div class="input-div focus">
                        <div class="i">
                            <span class="material-icons">person</span>
                        </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    </div>

                    <div class="input-div focus">
                        <div class="i">
                            <span class="material-icons">lock</span>
                        </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="text" name="password">
                    </div>
                    </div>

                    <div class="remember">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn" name="submit">Login</button>
                    <div class="registrasi">
                        <p>Belum punya akun? Registrasi <a href="register.php">Disini</a></p>
                    </div>
                </div>

            </div>
</div>

</form>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>