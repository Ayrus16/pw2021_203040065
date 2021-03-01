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
    <title>Tugas1a | 203040065</title>
    <style>
    .blue{
        background-color: lightblue;
    }
    .salmon{
        background-color: salmon;
    }
    </style>
</head>
<body>
    <table border="1" cellspacing="4" cellpadding="10">

        <?php for($i = 1 ; $i <= 6; $i++): ?>
            <?php if($i%2 == 1):?>
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <?php if($j%2 == 1 ): ?>
                        <td class="blue"><?= "";?></td>
                    <?php else :?>
                        <td class="salmon"></td>
                    <?php endif; ?>
                <?php endfor;?>


            <?php else:?>
                <?php for($j = 1 ; $j <= 6; $j++): ?>
                    <?php if($j%2 == 1 ): ?>
                        <td class="salmon"><?= "";?></td>
                    <?php else :?>
                        <td class="blue"></td>
                    <?php endif; ?>
                <?php endfor;?>
            <?php endif;?>
        
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>