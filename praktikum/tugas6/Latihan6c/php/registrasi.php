<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Modul-6 Session, Cookie, Encryption
*/
?>
<?php
require'function.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo"<script>
        alert('Registrasi Berhasil');
        document.location.href='login.php';
        </script>";
    }else{
        echo"<script>
        alert('Registrasi Gagal');
        </script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    
    <title>Latihan6 | 203040065</title>
</head>

<body>
    <div class="container">
        <div class="grid">
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username">

                <label for="password">Password</label>
                <input type="password" name="password">
                

                <button type="submit" name="register" class="button primary outline">Register</button>
            </form>
        </div>
    </div>
    
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>