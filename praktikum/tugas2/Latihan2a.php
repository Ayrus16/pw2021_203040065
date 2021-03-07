<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 2 Function
*/
?>
<?php
    function gantiStyle($tulisan, $style1, $style2){
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | 203040065</title>
    <style>
    .tulisan{
        font-family: Arial;
        font: italic;
        font-weight: bolder;
        font-style: italic;
        color: #8c782d;

    }
    .container{
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0 0 8px rgba(0, 0, 0, .5);
        padding: 13px 10px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?= 
     gantiStyle('Selamat Datang di Praktikum PW','tulisan','container');
    ?>
</body>
</html>
