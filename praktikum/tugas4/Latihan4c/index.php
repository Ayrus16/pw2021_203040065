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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    
    <title>Latihan4c | 203040065</title>
</head>

<body>
    <div class="container">
    <div class="grid">
        <div class="row">
            <?php 
            foreach ($sepatu as $spt) :
            ?>
            <div class="cell-md-3">
                <div class="card">
                    <div class="card-header">
                        <img style="width: 100%;" src="assets/<?= $spt['img'] ?>">
                    </div>
                    <div class="card-content p-2">
                        <a href="php/detail.php?id=<?= $spt["id"] ?>"><?= $spt["nama"] ?> </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>