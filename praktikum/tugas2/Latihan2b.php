<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 2 Function
*/
?>

<?php
$jawabanIsset = "Isset adalah = Fungsi untuk memeriksa sebuah variable, jika memiliki nilai akan mengembalikan nilai true. <br><br>";

$jawabanEmpty = "Empty adalah = Fungsi untuk memeriksa sebuah variable, jika null akan mengembalikan nilai true";

function soal($style){
    return "<div class=\"$style\">".
                $GLOBALS['jawabanIsset']. "<br>".$GLOBALS['jawabanEmpty'].
            "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b | 203040065</title>
    <style>
    .style{
        border : 1px solid black;
        padding: 30px 20px;
        font-size: 22px;
        width: fit-content;
        margin: 20px auto;
    }
    </style>
</head>
<body>
    <?= soal('style'); ?>
</body>
</html>