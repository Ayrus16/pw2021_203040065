<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00


Tugas Besar
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
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="icon" href="assets/img/logo-color.png">
    <title>XRaa : Place to Buy Your Dream Shoes</title>
</head>

<body>
    <!-- NavBar -->
    <?php include('element/header.php'); ?>

    <section class="home" id="home">
        <!-- <div class="img-container">
            <img src="assets/img/bg1.jpg">
        </div> -->
        <div class="poster text-center">
            <div class="container">
                <h2 class="display2">THE PLACE</h2>
                <h1 class="display3 udl">FOR YOU TO BUY</h1>
                <p class="lead">SHOES, BAGS, STREETWEAR, COLLECTIBLES AND WATCHES</p>
            </div>
        </div>
    </section>
    <div class="container">




        <a href="php/login.php">
            <button class="button yellow outline">Masuk ke halaman admin</button>
        </a>
        <div class="grid">
            <div class="row">
                <?php
                foreach ($sepatu as $spt) :
                ?>
                    <div class="cell-md-3">
                        <div class="card">
                            <div class="card-header">
                                <img style="width: 100%;" src="assets/img/<?= $spt['img'] ?>">
                            </div>
                            <div class="card-content p-2 text-center">
                                <a href="php/detail.php?id=<?= $spt["id"] ?>"><?= $spt["nama"] ?> </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include('element/footer.php'); ?>

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- My Script -->
    <script src="js/script.js"></script>
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>