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

// Menghubungkan dengan file php lainya
require 'php/function.php';

//melakukan query
$sepatu = query("SELECT * FROM sepatu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e | 203040065</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        img{
            max-width: 150px;
        }
    </style>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Picture</th>
            <th scope="col">Brand</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;
            foreach ($sepatu as $spt):
                ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><img width="300px" src="assets/<?= $spt["img"] ?>" alt="foto"></td>
                    <td><?= $spt["brand"]?> </td>
                    <td><?= $spt["nama"]?> </td>
                    <td><?= $spt["warna"]?> </td>
                    <td>$<?= $spt["harga"]?> </td>
                </tr>
        <?php
            $i++;
            endforeach;
        ?>
    </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>