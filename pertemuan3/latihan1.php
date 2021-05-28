<?php
/*
Surya Putra Pratama
203040065
https://github.com/Ayrus16/pw2021_203040065
Pertemuan 3 - 19 Februari 2021
Mempelajari Pengulangan di PHP
*/

/*
pengulangan
for
while
do.. while
foreach : pengulangan khusus array
*/

// pengulangan for
// for($i = 0 ; $i < 5 ; $i++){
//     echo "Hello World! <br>";
// }

// pengulangan while
// while( $i < 5){
//     echo "Hello World! <br>";
//     $i++;
// }

// pengulangan do while
// $i = 0 
// do{
//     echo "Hello World! <br>";
//     $i++;
// } while ($i < 5);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>

</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">

        <!-- pengulangan menggunakan for -->
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>



    </table>
</body>

</html>