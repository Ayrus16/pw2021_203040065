<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan dengan file php lainya
require 'function.php';

$id = $_GET['id'];
$spt = query("SELECT * FROM sepatu WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah!');
        document.location.href='admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal diubah!');
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
    <title>Edit Product</title>
    <!-- MyCSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>

<body style="background-color: #f1d302ff;">
    <section class="edit-product">
        <div class="container">
            <div class="grid">
                <div class="btn-cancel">
                    <a href="admin.php" onclick="return confirm('Apakah anda yakin ingin kembali?')"><i class="fas fa-times"></i></a>
                </div>
                <div class="row">
                    <div class="cell-10 offset-1">
                        <div class="title">
                            <p>Form Add Product</p>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $spt['id'] ?>">
                            <div class="field">
                                <!-- Form nama -->
                                <label for="nama">Name</label>
                                <input type="text" data-role="input" name="nama" id="nama" value="<?= $spt['nama'] ?>" require>
                            </div>
                            <div class="field">
                                <!-- Form Brand -->
                                <label for="brand">Brand</label>
                                <input type="text" data-role="input" name="brand" id="brand" value="<?= $spt['brand'] ?>" require>
                            </div>
                            <div class="field">
                                <!-- Form Warna -->
                                <label for="warna">Color</label>
                                <input type="text" data-role="input" name="warna" id="warna" value="<?= $spt['warna'] ?>" require>
                            </div>
                            <div class="field">
                                <!-- Form Harga -->
                                <label for="harga">Price</label>
                                <input type="text" data-role="input" name="harga" id="harga" value="<?= $spt['harga'] ?>" class="mb-1" data-prepend="<span class='mif-dollar2'></span>" title="">
                            </div>
                            <div class="field">
                                <!-- Form Gambar -->
                                <label for="gambar">Picture</label>
                                <input type="text" data-role="input" name="gambar" id="gambar" value="<?= $spt['img'] ?>" require>
                            </div>
                            <button type="submit" name="ubah" class="button success outline w-100">
                                Edit Product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>