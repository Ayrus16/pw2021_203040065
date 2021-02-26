<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 4 - 26 Februari 2021
Mempelajari function date, time, mktime, dan strtotime
*/
?>

<?php
// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("ls, d-M-Y");
     
//Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time() - 60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("m",mktime( 0,0,0, 9, 9, 2002));

// strtotime
echo date("l", strtotime("9 sep 2002"));

?>