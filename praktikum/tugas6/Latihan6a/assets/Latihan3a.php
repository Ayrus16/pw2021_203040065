<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 3 Array
*/
?>
<?php $tulisan = ["ada","abel","men","pung","pung","nilai"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3a | 203040065</title>
    <style>
    p {
        font-family: arial;
        border: 1px solid black;
        padding: 10px 20px;
        padding-bottom: 50px;
        margin : auto;
        width: fit-content;
    }
    p span{
        background-color: yellow;
    }
    </style>
</head>
<body>
    <p>
        Array <span><?= $tulisan[0] ?></span> 
        suatu vari<span><?= $tulisan[1]?> </span> 
        yang dapat 
        <span><?= $tulisan[2]?></span>am<span><?= $tulisan[3]?></span>  
        banyak <span><?= $tulisan[5]?></span> 
    </p>
</body>
</html>