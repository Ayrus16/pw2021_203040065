<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 2 Function
*/
?>
<?php
function tumpukanBola($tumpukan){

    for($i = 1 ; $i <= $tumpukan; $i++):
        for($j = 1 ; $j <= $i; $j++):
        echo    "<div class=\"lingkaran\">
                    <p>$i</p>
                </div>";
        endfor;
        echo '<div class="clear"></div>';
    endfor;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2c | 203040065</title>
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
        margin: 2px;
    }
    .lingkaran p{
        font-weight: bold;
    }
    </style>
</head>
<body>
   
    
   <?php tumpukanBola(5)?>
</body>
</html>