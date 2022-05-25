<!doctype html>
<html lang="hu">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Fogászat, fogpótlás, szájsebészet, gyökérkezelés, implantátum, fogpótlások, fogfehérítés Budapest">

    <title>Dr. Gálosi Dóra parodontológia, szájsebészet Budapesten. </title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPZZL5XJTR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DPZZL5XJTR');
    </script>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('/assets/img/logo.png') ?>">
</head>
<body>

<div class="top-container" style="z-index: 100;">
    <div class="container-fluid headline py-3 d-flex flex-row">
        <div class="container container-custom my-auto">
            <div class="d-flex flex-row justify-content-around">
                <div class="d-flex flex-row">
                    <div class="headlogoicon">
                        <img alt="dr. Gálosi parodontológia logo" src="<?php echo base_url('/assets/img/logo.png') ?>">
                    </div>
                    <div class="headlogotext ">
                        <span class="headlogotextname">DR.GÁLOSI</span>
                        <br>
                        PARODONTOLÓGIA
                    </div>
                </div>
                <div class="headitems d-flex flex-row">
                    <div class="d-none d-lg-block d-flex flex-row my-auto ms-2">
                        <div class="headlocationicon my-auto">
                            <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/location.png') ?>">
                        </div>
                        <div class="headlocation float-end d-none d-md-flex ms-2">
                            <?php echo $elerhetosegek[0]['cim'] ?>
                        </div>
                    </div>
                    <div class="d-none d-lg-block d-flex flex-row my-auto ms-3">
                        <div class="headlocationicon my-auto">
                            <img alt="dr. Gálosi parodontológia telefonszám" src="<?php echo base_url('/assets/img/icons/phone.png') ?>">
                        </div>
                        <div class="headlocation float-end d-none d-md-flex ms-2">
                            Telefonszám:
                            <br>
                            <?php echo $elerhetosegek[0]['telefon'] ?>
                        </div>
                    </div>
                    <div class="d-none d-lg-block d-flex flex-row my-auto ms-3">
                        <div class="headlocationicon my-auto">
                            <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/open.png') ?>">
                        </div>
                        <div class="headlocation float-end d-none d-md-flex ms-2">
                            Rendelési idő
                            <br>
                            <?php echo $elerhetosegek[0]['fejlec_rendeles'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!--        <a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto text-center">
                    <a class="nav-link <?php echo ($active == 'fooldal') ? 'active' : '' ?>" aria-current="page" href="<?php echo base_url()?>">Főoldal</a>
                    <a class="nav-link <?php echo ($active == 'rolunk') ? 'active' : '' ?>" href="<?php echo base_url('pages/rolunk') ?>">Rólunk</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php echo ($header == 'active') ? 'active' : '' ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Szolgáltatások
                        </a>
                        <ul class="dropdown-menu  text-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item <?php echo ($active == 'tomesek') ? 'active' : '' ?>" href="<?php echo base_url('pages/tomesek')?>">Tömések, gyökérkezelés</a></li>
                            <li><a class="dropdown-item <?php echo ($active == 'potlasok') ? 'active' : '' ?>" href="<?php echo base_url('pages/potlasok')?>">Implantációs fogpótlások</a></li>
                            <li><a class="dropdown-item <?php echo ($active == 'cirkonium_potlasok') ? 'active' : '' ?>" href="<?php echo base_url('pages/cirkonium_potlasok')?>">Fémmentes (cirkónium) esztétikai fogpótlások</a></li>
                            <li><a class="dropdown-item <?php echo ($active == 'szajseb_parodontologia') ? 'active' : '' ?>" href="<?php echo base_url('pages/szajsebeszet_parodontologia')?>">Szájsebészeti műtétek</a></li>
                            <li><a class="dropdown-item <?php echo ($active == 'parodontologia') ? 'active' : '' ?>" href="<?php echo base_url('pages/parodontologia')?>">Parodontológiai beavatkozások</a></li>
                            <li><a class="dropdown-item <?php echo ($active == 'feherites') ? 'active' : '' ?>" href="<?php echo base_url('pages/feherites')?>">Fogfehérítés</a></li>
                        </ul>
                    </li>
                    <a class="nav-link <?php echo ($active == 'arlista') ? 'active' : '' ?>" href="<?php echo base_url('pages/arlista')?>">Árlista</a>
                    <a class="nav-link <?php echo ($active == 'kepgaleria') ? 'active' : '' ?>" href="<?php echo base_url('pages/kepgaleria')?>">Képgaléria</a>
                    <a class="nav-link <?php echo ($active == 'referenciak') ? 'active' : '' ?>" href="<?php echo base_url('pages/referenciak')?>">Referenciák</a>
                    <a class="nav-link <?php echo ($active == 'partnereink') ? 'active' : '' ?>" href="<?php echo base_url('pages/partnereink')?>">Szerződött Partnereink</a>
                    <a class="nav-link <?php echo ($active == 'munkatarsaink') ? 'active' : '' ?>" href="<?php echo base_url('pages/munkatarsaink')?>">Munkatársaink</a>
                    <a class="nav-link <?php echo ($active == 'kapcsolat') ? 'active' : '' ?>" href="<?php echo base_url('pages/kapcsolat')?>">Kapcsolat</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Navbar end -->
