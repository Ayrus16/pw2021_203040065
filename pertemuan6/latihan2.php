<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 6 - 12 Maret 2021

Penggunaan Associative Array
*/


$mahasiswa = [
    [
        "nrp" => "203040065",
        "nama" => "Surya Putra Pratama",
        "email" => "203040065@mail.unpas.ac.id",
        "jurusan" => "Tenik Informatika",
        "gambar" => "surya.png"
    ],

    [
        "nama" => "Putra",
        "nrp" => "203040065",
        "email" => "203040065@mail.unpas.ac.id",
        "jurusan" => "Tenik Informatika",
        "gambar" => "putra.png"
    ]
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
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"] ?>" alt="foto"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
            <li>Email : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>