<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul 1 Stuktur Kontrol
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1c | 203040065</title>
    <style>
    .clear{
    clear: left;
    }
    .lingkaran{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background-color: salmon;
        border: 1px solid black;
        text-align: center;
        float: left;
        margin: 5px;
    }
    .lingkaran p{
        font-weight: bold;
    }
    </style>
</head>
<body>
   <?php
    for($i = 1 ; $i <= 3; $i++):
        for($j = 1 ; $j <= $i; $j++): ?>
            <div class="lingkaran">
                <p><?= $i ?></p>
            </div>
        <?php endfor;?>
        <div class="clear"></div>
    <?php endfor;?>
    
   
</body>
</html>