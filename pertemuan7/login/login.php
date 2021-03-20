<?php
/*
Chairunissa Putri Koswara
203040048
pertemuan 7(19 Maret 2021)
*/
?>

<?php
// cek apa tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

// cek username dan passwd
if( $_POST["username"] == "admin" && $_POST["pass"] == "123" ) {

// jika benar, redirect ke hal admin
header("Location: admin.php");
exit;
} else {
// jika salah, tampilkan pesan kesalahan
$error = true;
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
    <h1>Login Admin</h1>


    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style:italic;">username / password salah!</p>
    <?php endif; ?>
    
<ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
</ul>
</body>
</html>