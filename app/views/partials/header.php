<!DOCTYPE html>
<html lang="en">
<head>

    <title>Digital Trend HTML Template</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= asset('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/font-awesome.min.css') ?>">
    <!--    <link rel="stylesheet" href="--><?//= asset('assets/css/aos.css') ?><!--">-->
    <link rel="stylesheet" href="<?= asset('assets/css/owl.theme.default.min.css') ?>">

    <!--     MAIN CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/templatemo-digital-trend.css') ?>">

</head>
<body>

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <i class="bi bi-calendar2-range"></i>
            Digital Trend
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">Studio</a>
                </li>
                <li class="nav-item">
                    <a href="#project" class="nav-link smoothScroll">Our Works</a>
                </li>
                <li class="nav-item">
                    <a href=" <?= url('web/blogs') ?> " class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="<?= url('web/contact') ?>" class="nav-link contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

