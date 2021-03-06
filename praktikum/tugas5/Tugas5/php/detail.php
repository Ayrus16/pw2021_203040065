<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-5 CRUD dan Searching
*/


if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require '../php/function.php';
$id = $_GET["id"];
//melakukan query
$sepatu = query("SELECT * FROM sepatu WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Latihan5e | 203040065</title>
</head>

<body>
    <div class="container">
        <div class="detail">
            <img class="image" src="../assets/<?= $sepatu['img'] ?>" alt="">
            <h3><?= $sepatu['brand'] ?> <?= $sepatu['nama'] ?></h3>
            <hr>
            <h6>Brand : <?= $sepatu['brand'] ?> | Color : <?= $sepatu['warna'] ?> | Price : $<?= $sepatu['harga'] ?></h6>
            <a href="../index.php"><button class="button success"> Back</button> </a>
        </div>
    </div>


    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>