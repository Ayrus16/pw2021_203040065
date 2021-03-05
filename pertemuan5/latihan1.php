<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 5 - 05 Maret 2021
Mempelajari membuat dan menampilkan array
*/
?>
<?php
// array
// variable yang dapat memiliki banyak nilai
// 

// membuat array
// cara lama
$hari = array("Senin","Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];

$arr1= [123, "Tulisan", false];

// Menampilkan array
// var_dump / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //Menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemenn baru pada array
var_dump($hari);
$hari[]="Kamis";
$hari[]="Jumat";
echo "<br>";
var_dump($hari);
?>
