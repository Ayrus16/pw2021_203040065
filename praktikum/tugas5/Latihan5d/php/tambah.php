<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-5 CRUD dan Searching
*/


// Menghubungkan dengan file php lainya
require 'function.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil ditambahkan!');
        document.location.href='admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal ditambahkan!');
        document.location.href='admin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5d | 203040065</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>

<body>
    <div class="container">

        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Cancel</button></a>
        </div>

        <h3>Form Add Product</h3>
        <form action="" method="post">
            <!-- Form nama -->
            <label for="nama">Name</label>
            <input type="text" data-role="input" name="nama" id="nama" require>
            <!-- Form Brand -->
            <label for="brand">Brand</label>
            <input type="text" data-role="input" name="brand" id="brand" require>
            <!-- Form Warna -->
            <label for="warna">Color</label>
            <input type="text" data-role="input" name="warna" id="warna" require>
            <!-- Form Harga -->
            <label for="harga">Price</label>
            <input type="text" data-role="input" name="harga" id="harga" class="mb-1" data-prepend="<span class='mif-dollar2'></span>" title="">
            <!-- Form Gambar -->
            <label for="gambar">Picture</label>
            <input type="text" data-role="input" name="gambar" id="gambar" require>

            <button type="submit" name="tambah" class="button success outline">
                Add Product
            </button>

        </form>
    </div>
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>