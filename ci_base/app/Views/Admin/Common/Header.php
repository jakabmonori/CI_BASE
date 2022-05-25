<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Jofog.hu</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('mazer/assets/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('mazer/assets/vendors/iconly/bold.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('mazer/assets/vendors/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('mazer/assets/css/app.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>" type="image/x-icon">


</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="<?php echo base_url('admin/dashboard') ?>"><img class="d-none" src="<?php echo base_url('mazer/admin_logo.jpg')?>" alt="Logo" srcset="">Jofog.hu</a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menü</li>

                    <li class="sidebar-item <?php echo ($active_header == "admin_dash") ? 'active' : '' ?> ">
                        <a href="<?php echo base_url('admin/dashboard') ?>" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Kezdőoldal</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub <?php echo ($active_header == "oldal") ? 'active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Oldalkezelés</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item <?php echo ($active == "slider") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/slider') ?>">Slider</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "fooldal") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/fooldal') ?>">Főoldal</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "fooldal_galeria") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/fooldal_galeria') ?>">Főoldal - galéria</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "rolunk") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/rolunk') ?>">Rólunk</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "tomesek") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/tomesek/szoveg') ?>">Tömések, gyökérkezelés</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "potlasok") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/potlasok') ?>">Fogpótlások</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "szajseb") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/szajseb')?>">Szájsebészeti műtétek, parodontológia</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "feherites") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/feherites') ?>">Fogfehérítés</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "implant") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/implantatum') ?>">Képgaléria - Implantátum</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "paro") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/parodontitis') ?>">Képgaléria - Parodontitis</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "referenciak") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/referenciak') ?>">Referenciák</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "partnerek") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/partnerek') ?>">Szerződött partnereink</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "munkatarsaink") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/munkatarsaink') ?>">Munkatársaink</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub <?php echo ($active_header == "arak") ? 'active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-cash"></i>
                            <span>Árak</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item <?php echo ($active == "arlista_1") ? 'active' : '' ?>">
                                <a class="" href="<?php echo base_url('admin/arlista/1') ?>">Általános</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "arlista_2") ? 'active' : '' ?>">
                                <a class="" href="<?php echo base_url('admin/arlista/2') ?>">Gyökérkezelés / gyökértömés</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "arlista_3") ? 'active' : '' ?>">
                                <a class="" href="<?php echo base_url('admin/arlista/3') ?>">Pótlások</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "arlista_4") ? 'active' : '' ?>">
                                <a class="" href="<?php echo base_url('admin/arlista/4') ?>">Fogeltávolítás, szájsebészet</a>
                            </li>
                            <li class="submenu-item <?php echo ($active == "arlista_5") ? 'active' : '' ?>">
                                <a class="" href="<?php echo base_url('admin/arlista/5') ?>">Implantáció, Parodontológia</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item <?php echo ($active_header == "elerhetoseg") ? 'active' : '' ?>">
                        <a href="<?php echo base_url('admin/elerhetoseg') ?>" class="sidebar-link">
                            <i class="bi bi-info-circle-fill"></i>
                            <span>Elérhetőségek</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Felhasználókezelés</li>

                    <li class="sidebar-item  has-sub <?php echo ($active_header == "felhasznalok") ? 'active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-fill"></i>
                            <span>Felhasználókezelés</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item <?php echo ($active == "felhasznalok") ? 'active' : '' ?>">
                                <a href="<?php echo base_url('admin/felhasznalok') ?>">Felhasználók</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url('admin/logout') ?>">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Kilépés</span>
                        </a>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>