<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Cat | Basik - Bootstrap 4 Web Application</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css ../assets/css/site.min.css -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../assets/css/theme.css" type="text/css" />
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
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
                        <!-- <img src="../assets/img/logo.png" alt="..."> -->
                        <span class="hidden-folded d-inline l-s-n-1x ">Music</span>
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
                                <span class="text-muted">Music</span>
                            </li>
                            <li>
                                <a href="music.html">
                                    <span class="nav-icon">
                      <i data-feather="disc"></i>
                    </span>
                                    <span class="nav-text">Discover</span>
                                </a>
                            </li>
                            <li>
                                <a href="music.charts.html">
                                    <span class="nav-icon">
                      <i data-feather="trending-up"></i>
                    </span>
                                    <span class="nav-text">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="music.cat.html">
                                    <span class="nav-icon">
                      <i data-feather="radio"></i>
                    </span>
                                    <span class="nav-text">Songs</span>
                                </a>
                            </li>
                            <li>
                                <a href="music.artists.html">
                                    <span class="nav-icon">
                      <i data-feather="user"></i>
                    </span>
                                    <span class="nav-text">Artists</span>
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
            <!-- ############ Header START-->
            <div id="header" class="page-header ">
                <div class="navbar navbar-expand-lg">
                    <!-- brand -->
                    <a href="index.html" class="navbar-brand d-lg-none">
                        <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g class="loading-spin" style="transform-origin: 256px 256px">
                                <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                            </g>
                        </svg>
                        <!-- <img src="../assets/img/logo.png" alt="..."> -->
                        <span class="hidden-folded d-inline l-s-n-1x d-lg-none">Basik</span>
                    </a>
                    <!-- / brand -->
                    <!-- Navbar collapse -->
                    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                        <form class="input-group m-2 my-lg-0 ">
                            <div class="input-group-prepend">
                                <button type="button" class="btn no-shadow no-bg px-0">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search..." data-plugin="typeahead" data-api="../assets/api/music.json">
                        </form>
                    </div>
                    <ul class="nav navbar-menu order-1 order-lg-2">
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2" data-toggle="dropdown">
                                <i data-feather="settings"></i>
                            </a>
                            <!-- ############ Setting START-->
                            <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                                <div class="setting px-3">
                                    <div class="mb-2 text-muted">
                                        <strong>Setting:</strong>
                                    </div>
                                    <div class="mb-3" id="settingLayout">
                                        <label class="ui-check ui-check-rounded my-1 d-block">
                                            <input type="checkbox" name="stickyHeader">
                                            <i></i>
                                            <small>Sticky header</small>
                                        </label>
                                        <label class="ui-check ui-check-rounded my-1 d-block">
                                            <input type="checkbox" name="stickyAside">
                                            <i></i>
                                            <small>Sticky aside</small>
                                        </label>
                                        <label class="ui-check ui-check-rounded my-1 d-block">
                                            <input type="checkbox" name="foldedAside">
                                            <i></i>
                                            <small>Folded Aside</small>
                                        </label>
                                        <label class="ui-check ui-check-rounded my-1 d-block">
                                            <input type="checkbox" name="hideAside">
                                            <i></i>
                                            <small>Hide Aside</small>
                                        </label>
                                    </div>
                                    <div class="mb-2 text-muted">
                                        <strong>Color:</strong>
                                    </div>
                                    <div class="mb-2">
                                        <label class="radio radio-inline ui-check ui-check-md">
                                            <input type="radio" name="bg" value="">
                                            <i></i>
                                        </label>
                                        <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                                            <input type="radio" name="bg" value="bg-dark">
                                            <i class="bg-dark"></i>
                                        </label>
                                    </div>
                                    <div class="mb-2 text-muted">
                                        <strong>Layouts:</strong>
                                    </div>
                                    <div class="mb-3">
                                        <a href="dashboard.html" class="btn btn-xs btn-white no-ajax mb-1">Default</a>
                                        <a href="layout.a.html?bg" class="btn btn-xs btn-primary no-ajax mb-1">A</a>
                                        <a href="layout.b.html?bg" class="btn btn-xs btn-info no-ajax mb-1">B</a>
                                        <a href="layout.c.html?bg" class="btn btn-xs btn-success no-ajax mb-1">C</a>
                                        <a href="layout.d.html?bg" class="btn btn-xs btn-warning no-ajax mb-1">D</a>
                                    </div>
                                    <div class="mb-2 text-muted">
                                        <strong>Apps:</strong>
                                    </div>
                                    <div>
                                        <a href="dashboard.html" class="btn btn-sm btn-white no-ajax mb-1">Dashboard</a>
                                        <a href="music.html?bg" class="btn btn-sm btn-white no-ajax mb-1">Music</a>
                                        <a href="video.html?bg" class="btn btn-sm btn-white no-ajax mb-1">Video</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ############ Setting END-->
                        </li>
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 mr-lg-2" data-toggle="dropdown">
                                <i data-feather="bell"></i>
                                <span class="badge badge-pill badge-up bg-primary">4</span>
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                                <div class="scrollable hover" style="max-height: 250px">
                                    <div class="list list-row">
                                        <div class="list-item " data-id="7">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-primary">
		                          <img src="../assets/img/a7.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    From design to dashboard,
                                                    <a href='#'>@Dash</a> builds custom hardware according to on-site requirements
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="8">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-success">
		                          <img src="../assets/img/a8.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    The biggest software developer conference
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="6">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-danger">
		                          <img src="../assets/img/a6.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    Just saw this on the
                                                    <a href='#'>@eBay</a> dashboard, dude is an absolute unit.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="17">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-warning">
		                          H
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    AI will deliver adaptive learning processes in assessments & digital textbooks to personalize learning
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="16">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-info">
		                          F
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    What if AI Could Uber the Health Care Industry?
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="10">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-danger">
		                          <img src="../assets/img/a10.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    Developers of
                                                    <a href='#'>@iAI</a>, the AI assistant based on Free Software
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex px-3 py-2 b-t">
                                    <div class="flex">
                                        <span>6 Notifications</span>
                                    </div>
                                    <a href="page.setting.html">See all
                                        <i class="fa fa-angle-right text-muted"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- / dropdown -->
                        </li>
                        <!-- User dropdown menu -->
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color">
                                <span class="dropdown-toggle  mx-2 d-none l-h-1x d-lg-block text-right">Jacqueline Reid</span>
                                <span class="avatar w-24" style="margin: -2px;"><img src="../assets/img/a3.jpg" alt="..."></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">
                                <a class="dropdown-item" href="music.artist.html">
                                    <span>Jacqueline Reid</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="badge bg-success text-uppercase">Upgrade</span>
                                    <span>to Pro</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="music.artist.html">
                                    <span>Profile</span>
                                </a>
                                <a class="dropdown-item d-flex" href="music.artist.html">
                                    <span class="flex">Tracks</span>
                                    <span><b class="badge badge-pill gd-warning">5</b></span>
                                </a>
                                <a class="dropdown-item" href="music.artist.html">Albums</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="music.artist.html">
                                    <span>Likes</span>
                                </a>
                                <a class="dropdown-item" href="#">Sign out</a>
                            </div>
                        </li>
                        <!-- Navarbar toggle btn -->
                        <li class="nav-item d-lg-none">
                            <a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarToggler">
                                <i data-feather="search"></i>
                            </a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link px-1" data-toggle="modal" data-target="#aside">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ############ Footer END-->
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div class="page-container">
                    <div class="padding sr" id="list" data-plugin="musicapp">
                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item"></div>
                                <h5 class="text-highlight sr-item">Filter</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="pb-1 d-flex sr-item" id="filter-tag">
                            <div class="text-muted no-shrink my-2">Contries</div>
                            <div class="mx-3">
                                <a class="badge badge-lg bg-light m-1">All countries</a>
                                <a class="badge badge-lg bg-light m-1">Australia</a>
                                <a class="badge badge-lg bg-light m-1">Canada</a>
                                <a class="badge badge-lg bg-light m-1">France</a>
                                <a class="badge badge-lg bg-light m-1">Germany</a>
                                <a class="badge badge-lg bg-light m-1">Ireland</a>
                                <a class="badge badge-lg bg-light m-1">Netherlands</a>
                                <a class="badge badge-lg bg-light m-1">New Zealand</a>
                                <a class="badge badge-lg bg-light m-1">United Kingdom</a>
                                <a class="badge badge-lg bg-light m-1">USA</a>
                            </div>
                        </div>
                        <div class="pb-4 d-flex sr-item" id="filter-category">
                            <div class="text-muted no-shrink my-2">Genres</div>
                            <div class="mx-3">
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    All genres
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Acoustic
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Ambient
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Blues
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Classical
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Country
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Electronic
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Emo
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Folk
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Hardcore
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Hip-Hop
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Indie
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Jazz
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Latin
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Metal
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Pop
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Pop punk
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Punk
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Reggae
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    R&B
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Rock
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    Soul
                                </a>
                                <a href="#" class="badge badge-lg bg-light m-1">
                                    World
                                </a>
                            </div>
                        </div>
                        <div class="row row-md list hide">
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#312058991" class="ajax media-content " style="background-image:url(../assets/img/c10.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#312058991" class="list-title title ajax h-1x">
                                                This Girl
                                            </a>
                                            <a href="music.artist.html#312058991" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Kungs &amp; Cookin&#x27; On 3 Burners
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="89551205" data-category="Rap" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fb/6f/53/fb6f536e-540e-7572-bcd8-70413277f8e5/mzaf_4420416069866314124.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#89551205" class="ajax media-content " style="background-image:url(../assets/img/c20.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#89551205" class="list-title title ajax h-1x">
                                                Happy (From &quot;Despicable Me 2&quot;)
                                            </a>
                                            <a href="music.artist.html#89551205" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Pharrell Williams
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#274510331" class="ajax media-content " style="background-image:url(../assets/img/c16.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#274510331" class="list-title title ajax h-1x">
                                                I Took A Pill In Ibiza (Seeb Remix)
                                            </a>
                                            <a href="music.artist.html#274510331" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Mike Posner
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="163144443" data-category="Electronic" data-tag="Norway" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/5e/53/70/5e5370c5-3da1-7a76-587e-7e8827ee534c/mzaf_807237753747484753.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#163144443" class="ajax media-content " style="background-image:url(../assets/img/c19.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#163144443" class="list-title title ajax h-1x">
                                                Firestone
                                            </a>
                                            <a href="music.artist.html#163144443" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Kygo Feat. Conrad Sewell
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#234782921" class="ajax media-content " style="background-image:url(../assets/img/c6.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#234782921" class="list-title title ajax h-1x">
                                                Lean On
                                            </a>
                                            <a href="music.artist.html#234782921" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Major Lazer Feat. MØ &amp; DJ Snake
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="258710574" data-category="Pop" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music7/v4/03/c0/60/03c060ce-1617-e556-def2-4fd34d7e1f24/mzaf_8527312642501236756.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#258710574" class="ajax media-content " style="background-image:url(../assets/img/c3.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#258710574" class="list-title title ajax h-1x">
                                                Stressed Out
                                            </a>
                                            <a href="music.artist.html#258710574" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Twenty One Pilots
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="86035248" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#86035248" class="ajax media-content " style="background-image:url(../assets/img/c7.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#86035248" class="list-title title ajax h-1x">
                                                Blurred Lines
                                            </a>
                                            <a href="music.artist.html#86035248" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Robin Thicke Feat. T.I. &amp; Pharrell
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="90835896" data-category="Electronic" data-tag="all" data-source="">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#90835896" class="ajax media-content " style="background-image:url(../assets/img/c0.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#90835896" class="list-title title ajax h-1x">
                                                Wake Me Up
                                            </a>
                                            <a href="music.artist.html#90835896" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Avicii
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="83196096" data-category="all" data-tag="Germany" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/96/2f/d0/962fd0e2-5010-1a2c-5822-c6637e22b1df/mzaf_827319468004061581.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#83196096" class="ajax media-content " style="background-image:url(../assets/img/c17.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#83196096" class="list-title title ajax h-1x">
                                                Stolen Dance
                                            </a>
                                            <a href="music.artist.html#83196096" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Milky Chance
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="263013345" data-category="Electronic" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/f2/52/4b/f2524bfb-d546-affa-e89f-f165a1c99cb0/mzaf_2577649036970470026.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#263013345" class="ajax media-content " style="background-image:url(../assets/img/c2.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#263013345" class="list-title title ajax h-1x">
                                                Reality
                                            </a>
                                            <a href="music.artist.html#263013345" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Lost Frequencies Feat. Janieck Devy
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="82924078" data-category="France" data-tag="Electronic" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#82924078" class="ajax media-content " style="background-image:url(../assets/img/c15.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#82924078" class="list-title title ajax h-1x">
                                                Get Lucky
                                            </a>
                                            <a href="music.artist.html#82924078" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Daft Punk Feat. Pharrell Williams
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#92570808" class="ajax media-content " style="background-image:url(../assets/img/c1.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#92570808" class="list-title title ajax h-1x">
                                                Rude
                                            </a>
                                            <a href="music.artist.html#92570808" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Magic!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="53754394" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#53754394" class="ajax media-content " style="background-image:url(../assets/img/c9.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#53754394" class="list-title title ajax h-1x">
                                                Can&#x27;t Hold Us
                                            </a>
                                            <a href="music.artist.html#53754394" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Macklemore &amp; Ryan Lewis Feat. Ray Dalton
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="160157606" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#160157606" class="ajax media-content " style="background-image:url(../assets/img/c12.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#160157606" class="list-title title ajax h-1x">
                                                Uptown Funk
                                            </a>
                                            <a href="music.artist.html#160157606" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Mark Ronson Feat. Bruno Mars
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="75007235" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/2d/16/73/2d16730a-4f8a-f86b-b078-29a8c8e03ca8/mzaf_4212496176990487601.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#75007235" class="ajax media-content " style="background-image:url(../assets/img/c4.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#75007235" class="list-title title ajax h-1x">
                                                Scream &amp; Shout
                                            </a>
                                            <a href="music.artist.html#75007235" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                will.i.am Feat. Britney Spears
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="119205187" data-category="all" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview128/v4/37/14/59/37145906-fb86-aca7-9b10-7477644cb56a/mzaf_168581445824271384.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#119205187" class="ajax media-content " style="background-image:url(../assets/img/c8.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#119205187" class="list-title title ajax h-1x">
                                                Cheerleader (Felix Jaehn Remix)
                                            </a>
                                            <a href="music.artist.html#119205187" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Omi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="324443962" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/bd/6b/34/bd6b3443-d4c3-26fd-91c8-d0b31ab47ee3/mzaf_8046559398209773051.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#324443962" class="ajax media-content " style="background-image:url(../assets/img/c5.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#324443962" class="list-title title ajax h-1x">
                                                Closer
                                            </a>
                                            <a href="music.artist.html#324443962" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                The Chainsmokers Feat. Halsey
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="53550342" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music6/v4/0e/f0/ff/0ef0ff4d-7110-e701-2d95-119715a8de60/mzaf_3382802394094315711.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#53550342" class="ajax media-content " style="background-image:url(../assets/img/c18.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#53550342" class="list-title title ajax h-1x">
                                                Safe And Sound
                                            </a>
                                            <a href="music.artist.html#53550342" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Capital Cities
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#303988181" class="ajax media-content " style="background-image:url(../assets/img/c14.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#303988181" class="list-title title ajax h-1x">
                                                Cheap Thrills
                                            </a>
                                            <a href="music.artist.html#303988181" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Sia
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#83147960" class="ajax media-content " style="background-image:url(../assets/img/c13.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#83147960" class="list-title title ajax h-1x">
                                                Counting Stars
                                            </a>
                                            <a href="music.artist.html#83147960" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                OneRepublic
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="338965882" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview111/v4/65/ca/83/65ca8336-2e09-a0bb-a810-2a6b8864e770/mzaf_3545919152242528717.plus.aac.p.m4a">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#338965882" class="ajax media-content " style="background-image:url(../assets/img/c11.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="music.detail.html#338965882" class="list-title title ajax h-1x">
                                                Shape Of You
                                            </a>
                                            <a href="music.artist.html#338965882" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Ed Sheeran
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="no-result hide">
                            <div class="p-5 text-center">
                                <h5>Nothing Found</h5>
                                <small>It seems we can’t find what you’re looking for.</small>
                            </div>
                        </div>
                        <div class="pagination pagination-sm mt-3"></div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
            <!-- ############ Footer START-->
            <div id="footer" class="page-footer sticky sticky-bottom">
                <div data-plugin="plyr" class="plyrist plyrist_audio plyr-list-popup bg-white b-t" id="plyrist">
                    <audio controls hidden></audio>
                    <div class="plyr-list" style="display:none">
                        <div class="plyr-item" data-id="90835896" data-type="audio" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/ba/b2/1d/bab21d96-ffab-78d6-5e4f-dd42e32562e4/mzaf_5313062365683687423.plus.aac.p.m4a" data-poster="../assets/img/c1.jpg">
                            <div class="plyr-item-poster" style="background-image:url(../assets/img/c1.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Wake Me Up</div>
                                <div class="plyr-item-author text-sm text-fade">Avicii</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div>
                        <div class="plyr-item" data-id="234782921" data-type="audio" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a" data-poster="../assets/img/c2.jpg">
                            <div class="plyr-item-poster" style="background-image:url(../assets/img/c2.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Lean On</div>
                                <div class="plyr-item-author text-sm text-fade">Major Lazer Feat. MØ & DJ Snake</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js ../assets/js/site.min.js -->
        <!-- jQuery -->
        <script src="../libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="../libs/pjax/pjax.min.js"></script>
        <script src="../assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="../assets/js/lazyload.config.js"></script>
        <script src="../assets/js/lazyload.js"></script>
        <script src="../assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="../libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="../libs/feather-icons/dist/feather.min.js"></script>
        <script src="../assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="../assets/js/theme.js"></script>
        <script src="../assets/js/utils.js"></script>
        <!-- endbuild -->
    </body>
</html>