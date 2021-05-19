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
        <section class="tugas">
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
                                        <a class="dropdown-item" href="#">Regular link</a>
                                        <a class="dropdown-item" href="#">Regular link</a>
                                    </div>
                                </div>

                                <!-- Pertemuan 3 -->
                                <div class="btn-group w-100 dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pertemuan 3
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Dropdown menu links -->
                                    </div>
                                </div>

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
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>