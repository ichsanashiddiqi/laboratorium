<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LAB-BALITTAS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/landing/assets/img/favicon.png" rel="icon">
    <link href="assets/landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/landing/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing/vendor/aos/aos.css')?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url ('assets/landing/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url ('assets/landing/css/style.css') ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?= base_url('landing_controller') ?>"><span>LAB-</span>BALITTAS</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?= base_url('landing_controller') ?>" class="active">Home</a></li>

                    <li class="dropdown"><a href="#"><span>Layanan Laboratorium</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('landing_controller/lab_benih')?>">Lab. Benih</a></li>
                            <li><a href="<?= base_url('landing_controller/lab_kultur')?>">Lab. Kultur Jaringan</a></li>
                            <li><a href="<?= base_url('landing_controller/lab_tanah')?>">Lab. Tanah dan Tanaman</a></li>
                            <li><a href="<?= base_url('landing_controller/lab_opt')?>">Lab. OPT (Organisme Pengganggu Tanaman)</a></li>
                            <li><a href="<?= base_url('landing_controller/lab_molekuler')?>">Lab. Biomolekuler</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Kontak</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                <a href="https://twitter.com/balittasmalang" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="https://www.facebook.com/balittas.malang" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="https://www.instagram.com/balittas_malang/" class="instagram"><i class="bu bi-instagram"></i></a>
            </div>

        </div>
    </header><!-- End Header -->