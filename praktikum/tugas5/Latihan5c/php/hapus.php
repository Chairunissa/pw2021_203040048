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

$id = $_GET["id"];
if ( hapus($id) > 0) {
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'admin.php';
        </script>";
}

?>
