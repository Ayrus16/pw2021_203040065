<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 7 - 19 Maret 2021

Mempelajari GET & POST
*/
?>
<?php
if(!isset($_GET["nama"]) 
|| !isset($_GET["merek"])
|| !isset($_GET["warna"])
|| !isset($_GET["harga"])
|| !isset($_GET["gambar"])
){
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sepatu</title>
</head>
<body>
    <ul>
        <li><img style="width: 200px;" src="img/<?= $_GET["gambar"];?>" alt="gambar"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["merek"] ?></li>
        <li><?= $_GET["warna"] ?></li>
        <li>$<?= $_GET["harga"] ?></li>

    </ul>

    <a href="latihan1.php">Kembali ke daftar</a>
</body>
</html>