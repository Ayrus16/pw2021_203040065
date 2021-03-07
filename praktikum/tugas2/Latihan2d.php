<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul - 2 Function
*/
?>
<?php
function hitungDeterminan($bil1,$bil2,$bil3,$bil4){
    $determinan = ($bil1*$bil4)-($bil2*$bil3);

    echo "  <table  style='border-left:1px solid black;border-right : 1px solid black;' cellspacing = '5' cellpadding='5'>
                <tr>
                    <td>$bil1</td>
                    <td>$bil2</td>
                </tr>
                <tr>
                    <td>$bil3</td>
                    <td>$bil4</td>
                </tr>
            </table>";
            echo "<b>Determinan dari matriks tersebut adalah $determinan</b>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d | 203040065</title>
</head>
<body>
    <?= hitungDeterminan(1,2,3,4); ?>
</body>
</html>