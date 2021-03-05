<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 5 - 05 Maret 2021

Penggunaan Array
*/
?>
<?php
$mahasiswa =    [
                    ["Surya","203040065","Teknik Informatika","203040065@mail.unpas.ac.id" ],
                    ["Putra","203040065","Teknik Informatika","203040065@mail.unpas.ac.id" ],
                    ["Pratama","203040065","Teknik Informatika","203040065@mail.unpas.ac.id" ]
                ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahaasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?> 
    <ul>
        <li>Nama : <?= $mhs[0]?></li>
        <li>NRP : <?= $mhs[1]?></li>
        <li>Jurusan : <?= $mhs[2]?></li>
        <li>Email : <?= $mhs[3]?></li>
    </ul>
    <?php endforeach;?> 
</body>
</html>