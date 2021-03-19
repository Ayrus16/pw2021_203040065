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
        "Mohammad Salah",
        "Cristiano Ronaldo",
        "Lionel Messi",
        "Zlatan Ibrahimovic",
        "Neymar Jr",
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b | 203040065</title>
    <style>
    .daftar{
        border: 1px solid black;
        font-family: Arial;
        padding: 30px;
        padding-top: 5px;
        line-height: 25px;
    }
    p{
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="daftar">
        <p>Daftar pemain bola terkenal</p>
        <ol>
            <?php
            foreach ($pemainbola as $pemain ){
                echo "<li> $pemain</li>";
            }
            ?>
        </ol>

        <?php  
        array_push($pemainbola,"Luca Modric", "Sadio Mane");
        sort($pemainbola)
        ?>
        <p>Daftar pemain bola terkenal baru</p>
        <ol>
        
            <?php
            foreach ($pemainbola as $pemain ){
                echo "<li>$pemain</li>";
            }
            ?>
        </ol>
    </div>
</body>
</html>