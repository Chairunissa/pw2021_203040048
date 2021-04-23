<?php
/*
Chairunissa Putri Koswara
203040048
pertemuan 7(19 Maret 2021)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST_203040048</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
<h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>


    <form action="Latihan4.php" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>