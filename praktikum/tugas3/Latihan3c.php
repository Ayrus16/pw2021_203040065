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
        "Mohammad Salah" => "Liverpool",
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Zlatan Ibrahimovic" => "Ac Milan",
        "Neymar Jr" => "Paris Saint Germain",
        "Luca Modric" => "Real Madrid",
        "Sadio Mane" => "Liverpool"
    ];
    ksort($pemainbola);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c | 203040065</title>
    <style>
    .daftar{
        border: 1px solid black;
        font-family: Arial;
        padding: 30px;
        padding-top: 5px;
        line-height: 25px;
        text-align:left;
    }
    p{
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="daftar">
        <p>Daftar pemain bola terkenal baru</p>
    <table width="350px">
    <?php
            foreach ($pemainbola as $pemain => $club ){
                echo "<tr>";
                echo "  <th>$pemain</th>";
                echo "  <td>:</td>";
                echo "  <td>$club</td>";
                echo "</tr>";
            }
            ?>
    </table>
    </div>
</body>
</html>