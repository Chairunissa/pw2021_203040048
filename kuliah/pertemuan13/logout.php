<?php
/*
    Chairunissa Putri Koswara
    203040048
    https://github.com/Chairunissa/pw2021_203040048
    Pertemuan 12 (7 Mei 2021)
    menambah login dan regis
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>