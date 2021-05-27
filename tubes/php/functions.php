<?php
/*
Chairunissa Putri Koswara
203040048
SHIFT Jum'at 10.00 - 11.00
pertemuan 7
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

//function untuk upload gambar
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];


    //ketika tidak ada ambar yg dipilih
    if ($error == 4) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!');
        //     </script>";
        return 'nophoto.jpg';
    }

    //cek estensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    //cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    //cek ukuran file
    //mak 5mb
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!');
            </script>";
        return false;
    }

    //lolos pengecekan
    // siap upload file
    //generate nama file
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
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
    // $img = htmlspecialchars($data['gambar']);

    // upload gambar
    $img = upload();
    if (!$img) {
        return false;
    }

    $query = "INSERT INTO jam
                    VALUES
                    ('', '$nama', '$merk', '$harga', '$color', '$quality', '$img')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    //menghapus gambar di folde img
    $jm = query("SELECT * FROM jam WHERE id = $id");
    if ($jm['gambar'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $jm['gambar']);
    }

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
    $img_lama = htmlspecialchars($data['gambar_lama']);

    $img = upload();
    if (!$img) {
        return false;
    }

    if ($img == 'nophoto.jpg') {
        $img = $img_lama;
    }
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

function cari($keyword)
{
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