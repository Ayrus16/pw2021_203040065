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

$sepatu = [
    ["nama"=>"Air Max Axis Thunder Grey",
    "warna"=>"Grey",
    "merek"=>"Nike",
    "harga"=>119,
    "gambar"=>"airmaxgrey.jpg"
    ],

    ["nama"=>"Jordan 1 Retro High",
    "warna"=>"White, Blue, Black",
    "merek"=>"Nike",
    "harga"=>170,
    "gambar"=>"jordanuniv.jpg"
    ],

    ["nama"=>"Yeezy Boost 350 V2",
    "warna"=>"Black, Red",
    "merek"=>"Adidas",
    "harga"=>220,
    "gambar"=>"yeezyblckrd.jpg"
    ],

    ["nama"=>"Air VaporMax Flyknit 2",
    "warna"=>"Blue",
    "merek"=>"Nike",
    "harga"=>190,
    "gambar"=>"vapormxw.jfif"
    ],

    ["nama"=>"Yeezy Boost 700 Wave Runner",
    "warna"=>"Grey",
    "merek"=>"Adidas",
    "harga"=>300,
    "gambar"=>"yeezyboostgrey.jpg"
    ],

    ["nama"=>"NMD Hu Pharrell Solar Pack Red",
    "warna"=>"Red, Yellow",
    "merek"=>"Adidas",
    "harga"=>250,
    "gambar"=>"nmdpyl.jpg"
    ],

    ["nama"=>"Human Race NMD Pharrell Oreo",
    "warna"=>"Black, White",
    "merek"=>"Adidas",
    "harga"=>250,
    "gambar"=>"nmdhmoreo.jpg"
    ],

    ["nama"=>"Ultra Boost 1.0 SNS X Social Status",
    "warna"=>"Black, White",
    "merek"=>"Adidas",
    "harga"=>200,
    "gambar"=>"ultrablack.jpg"
    ],

    ["nama"=>"Nike Adapt BB Black Pure Platinum (US Charger)",
    "warna"=>"Black, White",
    "merek"=>"Nike",
    "harga"=>350,
    "gambar"=>"nkbbblak.jpg"
    ],

    ["nama"=>"Air Presto Off-White White (2018)",
    "warna"=>"White",
    "merek"=>"Nike",
    "harga"=>160,
    "gambar"=>"nkoff.jpg"
    ],

]
//  SUPERGLOBALS
// variabel global

// $_GET

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sepatu</title>
</head>
<body>
    <ul>
     <?php foreach($sepatu as $spt):?>
            <li>
            <a href="latihan2.php?
            nama=<?= $spt["nama"];?>
            &merek=<?= $spt["merek"];?>
            &warna=<?= $spt["warna"];?>
            &harga=<?= $spt["harga"];?>
            &gambar=<?= $spt["gambar"];?>
            ">
            <?= $spt["nama"];?></a>    
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>