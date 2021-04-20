<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 3 Array
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
                    <td><img width="300px" src="img/<?= $spt["gambar"] ?>" alt="foto"></td>
                    <td><?= $spt["merek"]?> </td>
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