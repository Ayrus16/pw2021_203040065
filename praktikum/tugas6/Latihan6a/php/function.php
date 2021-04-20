<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-6 Session, Cookie, Encryption
*/
?>

<?php
// Koneksi Database
function koneksi(){
    $conn = mysqli_connect("localhost", "root","");
    mysqli_select_db($conn, "pw_tubes_203040065");

    return $conn;

}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}
function tambah($data){
    $conn=koneksi();

    $nama= htmlspecialchars($data['nama']);
    $brand= htmlspecialchars($data['brand']);
    $warna= htmlspecialchars($data['warna']);
    $harga= htmlspecialchars($data['harga']);
    $gambar= htmlspecialchars($data['gambar']);

    $query = "INSERT INTO sepatu VALUES
                ('','$gambar','$nama','$brand','$warna','$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM sepatu WHERE id=$id");
    return mysqli_affected_rows($conn);
}


function ubah($data){
    $conn=koneksi();

    $id= htmlspecialchars($data['id']);
    $nama= htmlspecialchars($data['nama']);
    $brand= htmlspecialchars($data['brand']);
    $warna= htmlspecialchars($data['warna']);
    $harga= htmlspecialchars($data['harga']);
    $gambar= htmlspecialchars($data['gambar']);

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
?>