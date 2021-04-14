<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 3 Array
*/
?>

<?php  
    $pemainbola = [
        ["nama"=> "Mohammad Salah", 
        "club"=> "Liverpool",
        "main" => 90,
        "gol" => 103,
        "assist" => 8
        ],

        ["nama"=>"Cristiano Ronaldo" ,
        "club"=> "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30 
        ],

        ["nama"=>"Lionel Messi" ,
        "club"=> "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12 
        ],

        ["nama"=>"Zlatan Ibrahimovic" ,
        "club"=> "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12 
        ],

        ["nama"=>"Neymar Jr" ,
        "club"=> "Paris Saint Germain",
        "main" => 109,
        "gol" => 56,
        "assist" => 15 
        ],

        ["nama"=>"Luca Modric" ,
        "club"=> "Real Madrid",
        "main" => 87,
        "gol" => 12,
        "assist" => 48 
        ],

        ["nama"=>"Sadio Mane" ,
        "club"=> "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70 
        ]


    ];
    asort($pemainbola);
    $jmlhGol=0;
    $jmlhMain=0;
    $jmlhAssist=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d | 203040065</title>
    <style>
    .daftar{
        font-family: Arial;
        padding: 30px;
        padding-top: 5px;
        line-height: 25px;
        text-align:left;
    }
    .daftar table{
        margin: auto;
    }
    .jumlah{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="daftar">
    <table width="550px" border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
            <?php $i=1;
            foreach ($pemainbola as $pemain ):
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?= $pemain["nama"]?> </td>
                    <td><?= $pemain["club"]?> </td>
                    <td><?= $pemain["main"]?> </td>
                    <td><?= $pemain["gol"]?> </td>
                    <td><?= $pemain["assist"]?> </td>
                </tr>
            <?php
            $jmlhMain += $pemain["main"];
            $jmlhGol += $pemain["gol"];
            $jmlhAssist += $pemain["assist"];
            $i++;
            endforeach;
            ?>
            <tr>
            <?php 
            ?>
                <td>#</td>
                <th colspan="2" class="jumlah">Jumlah</th>
                <td><?=$jmlhMain?></td>
                <td><?=$jmlhGol?></td>
                <td><?=$jmlhAssist?></td>
            </tr>
    </table>
    </div>
</body>
</html>