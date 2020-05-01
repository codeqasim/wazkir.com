<?php
    $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
    $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Listen Quran Online</title>
        <meta name="description" content="Listen Quran Online" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css assets/css/site.min.css -->
        <link rel="stylesheet" href="<?= $root; ?>assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?= $root; ?>assets/css/theme.css" type="text/css" />
        <link rel="stylesheet" href="<?= $root; ?>assets/css/style.css" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="layout-row">
        <!-- ############ Aside START-->
        <div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade">
            <div class="sidenav h-100 modal-dialog bg-light">
                <!-- sidenav top -->
                <div class="navbar">
                    <!-- brand -->
                    <a href="index.html" class="navbar-brand ">
                        <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g class="loading-spin" style="transform-origin: 256px 256px">
                                <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                            </g>
                        </svg>
                        <!-- <img src="assets/img/logo.png" alt="..."> -->
                        <span class="hidden-folded d-inline l-s-n-1x ">Listen Quran Online</span>
                    </a>
                    <!-- / brand -->
                </div>
                <!-- Flex nav content -->
                <div class="flex scrollable hover">
                    <div class="nav-active-text-primary" data-nav>
                        <ul class="nav bg">
                            <li class="nav-header hidden-folded pt-4">
                                <span class="text-muted">Recommand</span>
                            </li>
                            <li>
                                <div class="p-3 nav-fold">
                                    <a href="#" class="btn btn-white btn-block text-align-auto" data-toggle="dropdown">
                                    <i data-feather="bar-chart-2" width="12" height="12"></i>
                                    <span class="mx-1 hidden-folded">Basik top charts</span>
                                    </a>
                                    <div class="dropdown-menu text-sm">
                                        <a class="dropdown-item" href="music.charts.html#pop">Pop chart</a>
                                        <a class="dropdown-item" href="music.charts.html#hip-pop">Hip-Hop chart</a>
                                        <a class="dropdown-item" href="music.charts.html#country">Country chart</a>
                                        <a class="dropdown-item" href="music.charts.html#global">Global top 50</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-header hidden-folded">
                                <span class="text-muted">Quran</span>
                            </li>
                            <li>
                                <a href="<?= $root; ?>">
                                <span class="nav-icon">
                                <i data-feather="disc"></i>
                                </span>
                                <span class="nav-text">Discover</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $root; ?>charts">
                                <span class="nav-icon">
                                <i data-feather="trending-up"></i>
                                </span>
                                <span class="nav-text">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $root; ?>surahs">
                                <span class="nav-icon">
                                <i data-feather="radio"></i>
                                </span>
                                <span class="nav-text">Surahs</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $root; ?>reciters">
                                <span class="nav-icon">
                                <i data-feather="user"></i>
                                </span>
                                <span class="nav-text">Reciters</span>
                                </a>
                            </li>
                            <li class="nav-header d-flex nav-fold">
                                <span class="py-2 text-muted hidden-folded">Your Playlist</span>
                                <span class="flex hidden-folded"></span>
                                <a class="text-md" data-toggle="tooltip" data-placement="right" title="Create playlist">
                                <i data-feather="plus" width="12" height="12"></i>
                                </a>
                            </li>
                            <li class="open">
                                <ul class="nav nav-sub">
                                    <li>
                                        <a href="music.detail.html" class="px-2">
                                        <span class="nav-text">Classic Jazz</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="music.detail.html#id=1" class="px-2">
                                        <span class="nav-text">Hips</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="music.detail.html#id=2" class="px-2">
                                        <span class="nav-text">50 top albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="music.detail.html#id=3" class="px-2">
                                        <span class="nav-text">DJ 2018</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- sidenav bottom -->
                <div class="no-shrink">
                    <div class="nav-fold py-1 ">
                        <a data-toggle-class="folded" data-target="#aside" class="p-3">
                        <i data-feather="menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
     <!-- ############ Aside END-->
    <div id="main" class="layout-column flex bg-white">