<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-5 CRUD dan Searching
*/
?>

<?php
// Koneksi Database
function koneksi()
{
    // $conn = mysqli_connect("localhost", "root","");
    // mysqli_select_db($conn, "pw_tubes_203040065");
    $conn = mysqli_connect("localhost", "pw20065", "#Akun#203040065#");
    mysqli_select_db($conn, "pw20065_pw_tubes_203040065");

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
?>