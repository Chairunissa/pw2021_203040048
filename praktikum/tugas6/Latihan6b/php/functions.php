<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 6
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

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM jam WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $harga = htmlspecialchars($data['harga']);
    $color = htmlspecialchars($data['color']);
    $quality = htmlspecialchars($data['quality']);
    $img = htmlspecialchars($data['gambar']);

    $query = "UPDATE jam SET
            nama = '$nama',
            merk = '$merk',
            harga = '$harga',
            color = '$color',
            quality = '$quality',
            gambar = '$img'
            WHERE id = $id
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM jam
                WHERE
            nama LIKE '%$keyword%' OR
            merk LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            color LIKE '%$keyword%' OR
            quality LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
   $conn = koneksi();
   $username = strtolower(stripcslashes($data["username"]));
   $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>