<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00


Tubes
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Metro 4 -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




    <link rel="icon" href="assets/img/logo-color.png">
    <title>Welcome to MyWebsite</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo-color.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#about-me">About Me</a>
                <a class="nav-link" href="#tugas">Tugas</a>
            </div>
        </div>
    </nav>
    <div data-spy="scroll" data-target="#navbar" data-offset="0">
        <!-- Home -->
        <section class="home" id="home">
            <div class="poster">
                <div class="container">
                    <h3>Welcome To</h3>
                    <h2 class="udl">My Website</h2>
                    <h6></h6>
                </div>
                <p class="copyright">Photo by <a href="https://unsplash.com/@claybanks?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Clay Banks</a> on <a href="https://unsplash.com/s/photos/dark?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
            </div>
        </section>


        <!-- About me -->
        <section class="about-me" id="about-me">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-4 text-center">
                        <h1 class="title">About Me</h1>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-md-center">
                    <div class="col-md-5">
                        <img class="w-75" src="assets/img/profile.png" alt="">
                    </div>

                    <div class="col-md-5 content">
                        <h2>Surya Putra Pratama</h2>
                        <h3>I am a web developer and student currently living in Bandung.</h3>
                        <p>My interests range from web development to programming. I am also interested in technology, design, and music.</p>
                    </div>
                </div>
        </section>

        <!-- Tugas -->
        <section class="tugas" id="tugas">
            <div class="container">
                <div class="title text-center">
                    <h2>Tugas</h2>
                </div>
                <div class="row">
                    <!-- Kuliah -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Kuliah
                            </div>
                            <div class="card-body">
                                <!-- Pertemuan 2 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 2
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan2/index.php">Index</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 2 -->

                                <!-- Pertemuan 3 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 3
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan3/latihan1.php">Latihan 1</a>
                                        <a class="dropdown-item" href="pertemuan3/latihan2.php">Latihan 2</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 23 -->

                                <!-- Pertemuan 4 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 4
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan4/date.php">Date</a>
                                        <a class="dropdown-item" href="pertemuan4/function.php">Function</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 4 -->

                                <!-- Pertemuan 5 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 5
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan5/latihan1.php">Latihan 1</a>
                                        <a class="dropdown-item" href="pertemuan5/latihan2.php">Latihan 2</a>
                                        <a class="dropdown-item" href="pertemuan5/latihan3.php">Latihan 3</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 5 -->

                                <!-- Pertemuan 6 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 6
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan6/latihan1.php">Latihan 1</a>
                                        <a class="dropdown-item" href="pertemuan6/latihan2.php">Latihan 2</a>
                                        <a class="dropdown-item" href="pertemuan6/latihan2b.php">Latihan 2b</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 6 -->

                                <!-- Pertemuan 7 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 7
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan7/latihan1.php">Latihan 1</a>
                                        <a class="dropdown-item" href="pertemuan7/latihan2.php">Latihan 2</a>
                                        <a class="dropdown-item" href="pertemuan7/latihan3.php">Latihan 3</a>
                                        <a class="dropdown-item" href="pertemuan7/latihan4.php">Latihan 4</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 7 -->

                                <!-- Pertemuan 10 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 10
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan10/latihan1.php">Latihan 1</a>
                                        <a class="dropdown-item" href="pertemuan10/latihan2.php">Latihan 2</a>
                                        <a class="dropdown-item" href="pertemuan10/latihan3.php">Latihan 3</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 10 -->

                                <!-- Pertemuan 11 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 11
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan11/index.php">Pertemuan 11</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 11 -->

                                <!-- Pertemuan 12 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 12
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan12/index.php">Pertemuan 12</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 12 -->

                                <!-- Pertemuan 13 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 13
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="pertemuan13/index.php">Pertemuan 13</a>
                                    </div>
                                </div>
                                <!-- Akhir Pertemuan 13 -->




                            </div>
                        </div>
                    </div>
                    <!-- Praktikum -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Praktikum
                            </div>
                            <div class="card-body">
                                <!-- Tugas 1 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 1
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas1/Latihan1a.php">Latihan1a</a>
                                        <a class="dropdown-item" href="praktikum/tugas1/Latihan1b.php">Latihan1b</a>
                                        <a class="dropdown-item" href="praktikum/tugas1/Latihan1c.php">Latihan1c</a>
                                        <a class="dropdown-item" href="praktikum/tugas1/Tugas1.php">Tugas1</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 1 -->

                                <!-- Tugas 2 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 2
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas2/Latihan2a.php">Latihan2a</a>
                                        <a class="dropdown-item" href="praktikum/tugas2/Latihan2b.php">Latihan2b</a>
                                        <a class="dropdown-item" href="praktikum/tugas2/Latihan2c.php">Latihan2c</a>
                                        <a class="dropdown-item" href="praktikum/tugas2/Latihan2d.php">Latihan2d</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 2 -->

                                <!-- Tugas 3 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 3
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas3/Latihan3a.php">Latihan3a</a>
                                        <a class="dropdown-item" href="praktikum/tugas3/Latihan3b.php">Latihan3b</a>
                                        <a class="dropdown-item" href="praktikum/tugas3/Latihan3c.php">Latihan3c</a>
                                        <a class="dropdown-item" href="praktikum/tugas3/Latihan3d.php">Latihan3d</a>
                                        <a class="dropdown-item" href="praktikum/tugas3/Latihan3e.php">Latihan3e</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 3 -->

                                <!-- Tugas 4 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 4
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas4/Latihan4a/index.php">Latihan4a</a>
                                        <a class="dropdown-item" href="praktikum/tugas4/Latihan4b/index.php">Latihan4b</a>
                                        <a class="dropdown-item" href="praktikum/tugas4/Latihan4c/index.php">Latihan4c</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 4 -->

                                <!-- Tugas 5 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 5
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas5/Latihan5a/index.php">Latihan5a</a>
                                        <a class="dropdown-item" href="praktikum/tugas5/Latihan5b/index.php">Latihan5b</a>
                                        <a class="dropdown-item" href="praktikum/tugas5/Latihan5c/index.php">Latihan5c</a>
                                        <a class="dropdown-item" href="praktikum/tugas5/Latihan5d/index.php">Latihan5d</a>
                                        <a class="dropdown-item" href="praktikum/tugas5/Latihan5e/index.php">Latihan5e</a>
                                        <a class="dropdown-item" href="praktikum/tugas5/Tugas5/index.php">Tugas5</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 5 -->

                                <!-- Tugas 6 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas 6
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="praktikum/tugas6/Latihan6a/index.php">Latihan6a</a>
                                        <a class="dropdown-item" href="praktikum/tugas6/Latihan6b/index.php">Latihan6b</a>
                                        <a class="dropdown-item" href="praktikum/tugas6/Latihan6c/index.php">Latihan6c</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas 6 -->


                            </div>
                        </div>
                    </div>
                    <!-- Tugas Besar -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Tugas Besar
                            </div>
                            <div class="card-body">
                                <!-- Tugas Besar -->
                                <div class="btn-group w-100">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tugas Besar
                                    </button>
                                    <div class="dropdown-menu w-100 text-center">
                                        <a class="dropdown-item" href="tubes/">Tugas Besar</a>
                                    </div>
                                </div>
                                <!-- Akhir Tugas Besar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer text-center">
            <h5><i class="fa fa-copyright"></i> 2021 XRaa. All Rights Reserved.</h5>
        </section>
    </div>

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>