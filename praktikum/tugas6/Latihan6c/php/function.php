<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-6 Session, Cookie, Encryption
*/


// Koneksi ke Database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040065");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO sepatu VALUES
                ('','$gambar','$nama','$brand','$warna','$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM sepatu WHERE id=$id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE sepatu SET
                img='$gambar',
                nama='$nama',
                brand='$brand',
                warna='$warna',
                harga='$harga'
                WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah username baru
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
