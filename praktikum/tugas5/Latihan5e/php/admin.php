<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-5 CRUD dan Searching
*/


// Menghubungkan dengan file php lainya
require 'function.php';
//melakukan query
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];;
    $sepatu = query(
        "SELECT * FROM sepatu WHERE
        nama LIKE '%$keyword%' OR
        brand LIKE '%$keyword%' OR
        warna LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' 
        "
    );
} else {
    $sepatu = query("SELECT * FROM sepatu");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5e | 203040065</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <style>
        img {
            max-width: 150px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="tambah.php"><button class="button primary outline">Add Product</button></a>
        </div>

        <form action="" method="get">
            <input type="text" name="keyword" data-role="input" autofocus width="500px">
            <button type="submit" name="cari" class="button secondary outline">Cari</button>
        </form>
    </div>
    <table class="table row-border">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Picture</th>
                <th scope="col">Brand</th>
                <th scope="col">Name</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($sepatu)) : ?>
                <tr>
                    <th colspan="7">Data tidak di temukan</th>
                </tr>
            <?php else : ?>
                <?php $i = 1;
                foreach ($sepatu as $spt) :
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><img width="300px" src="../assets/<?= $spt["img"] ?>" alt="foto"></td>
                        <td><?= $spt["brand"] ?> </td>
                        <td><?= $spt["nama"] ?> </td>
                        <td><?= $spt["warna"] ?> </td>
                        <td>$<?= $spt["harga"] ?> </td>
                        <td>
                            <a href="ubah.php?id=<?= $spt["id"] ?>"><button class="button info outline">Edit</button></a>

                            <a href="hapus.php?id=<?= $spt["id"] ?>"><button class="button warning outline">Delete</button></a>
                        </td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>