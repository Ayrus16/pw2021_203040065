<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-4 MySQL, Koneksi Database,
Menampilkan Data
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
?>