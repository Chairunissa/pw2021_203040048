<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 5
*/
?>

<?php
//function melakukan connect ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040048");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040048");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $jam = [];
    while ($jm = mysqli_fetch_assoc($result)) {
        $jam[] = $jm;
    }
    return $jam;
}

//fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $harga = htmlspecialchars($data['harga']);
    $color = htmlspecialchars($data['color']);
    $quality = htmlspecialchars($data['quality']);
    $img = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO jam
                    VALUES
                    ('', '$nama', '$merk', '$harga', '$color', '$quality', '$img')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>