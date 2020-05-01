<?php include "header.php"; ?>
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
                                <span class="badge badge-pill badge-up bg-primary">7</span>
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                                <div class="scrollable hover" style="max-height: 250px">
                                    <div class="list list-row">
                                        <div class="list-item " data-id="13">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-primary">
		                          L
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    Thanks! Awesome to see good support on Twitter
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
                                        <div class="list-item " data-id="9">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-info">
		                          <img src="../assets/img/a9.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    Added to
                                                    <a href='#'>@TUT</a> team
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
                                        <div class="list-item " data-id="3">
                                            <div>
                                                <a href="music.detail.html">
                                                    <span class="w-32 avatar gd-primary">
		                          <img src="../assets/img/a3.jpg" alt=".">
		                    </span>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <div class="item-feed h-2x">
                                                    <a href='#'>@NextUI</a> submit a ticket request
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
                                <span class="avatar w-24" style="margin: -2px;"><img src="../assets/img/a2.jpg" alt="..."></span>
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
                    <div class="bg-light">
                        <div class="page-container padding">
                            <div class="d-sm-flex page-heading">
                                <div class="media circle w w-auto-xs mb-4">
                                    <div class="media-content" style="background-image:url(../assets/img/a4.jpg);"></div>
                                </div>
                                <div class="d-md-flex flex">
                                    <div class="mx-sm-4 flex">
                                        <h1 class="h4 font-weight-bold mb-0">Jacqueline Reid</h1>
                                        <div class="py-4 toolbar align-items-center">
                                            <button class="btn btn-raised btn-rounded btn-primary">Listen</button>
                                            <span class="text-muted">10 tracks, 5 playlist</span>
                                            <button class="btn btn-white btn-rounded" data-toggle-class>
                                                <span class="d-inline">Follow</span>
                                                <span class="d-none">Following</span>
                                            </button>
                                            <span class="text-muted">502</span>
                                        </div>
                                        <div class="mb-2">
                                            <span class="text-muted">Social: </span>
                                            <a href="#" class="text-color">Fb</a>,
                                            <a href="#" class="text-color">Tw</a>,
                                            <a href="#" class="text-color">Ig</a>
                                        </div>
                                    </div>
                                    <div class="py-3 py-sm-4 mx-sm-4 w-lg w-auto-sm d-none d-md-block">
                                        <div class="row list-row">
                                            <div class="col-12" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.detail.html#274510331" class="ajax media-content " style="background-image:url(../assets/img/c16.jpg)">
                                                        </a>
                                                        <div class="media-action ">
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
                                                    <div class="list-content ">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-container padding">
                        <div class="d-md-flex">
                            <div class="flex">
                                <div class="d-flex">
                                    <ul class="nav nav-sm text-sm nav-pills nav-rounded py-4">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#overview" data-toggle="tab">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tracks" data-toggle="tab">Tracks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#albums" data-toggle="tab">Album</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#playlist" data-toggle="tab">Playlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#liked" data-toggle="tab">Liked</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#following" data-toggle="tab">Following</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="overview">
                                        <div class="heading py-2 d-flex ">
                                            <div>
                                                <div class="text-muted text-sm sr-item">Popular</div>
                                                <h5 class="text-highlight sr-item">Tracks</h5>
                                            </div>
                                            <span class="flex"></span>
                                        </div>
                                        <div class="row list-row list-index">
                                            <div class="col-12" data-id="75007235" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/2d/16/73/2d16730a-4f8a-f86b-b078-29a8c8e03ca8/mzaf_4212496176990487601.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:40</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:22</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="53754394" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">02:24</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:24</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">02:48</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="heading py-2 d-flex ">
                                            <div>
                                                <div class="text-muted text-sm sr-item">More</div>
                                                <h5 class="text-highlight sr-item">Tracks</h5>
                                            </div>
                                            <span class="flex"></span>
                                        </div>
                                        <div class="row list mb-4">
                                            <div class="col-6 col-md-3" data-id="163144443" data-category="Electronic" data-tag="Norway" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/5e/53/70/5e5370c5-3da1-7a76-587e-7e8827ee534c/mzaf_807237753747484753.plus.aac.p.m4a">
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
                                            <div class="col-6 col-md-3" data-id="86035248" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
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
                                            <div class="col-6 col-md-3" data-id="90835896" data-category="Electronic" data-tag="all" data-source="">
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
                                            <div class="col-6 col-md-3" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tracks">
                                        <div class="row list-row">
                                            <div class="col-12" data-id="119205187" data-category="all" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview128/v4/37/14/59/37145906-fb86-aca7-9b10-7477644cb56a/mzaf_168581445824271384.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:42</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="53754394" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:38</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="258710574" data-category="Pop" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music7/v4/03/c0/60/03c060ce-1617-e556-def2-4fd34d7e1f24/mzaf_8527312642501236756.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:21</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">02:35</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:22</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="90835896" data-category="Electronic" data-tag="all" data-source="">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:28</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="263013345" data-category="Electronic" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/f2/52/4b/f2524bfb-d546-affa-e89f-f165a1c99cb0/mzaf_2577649036970470026.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">02:25</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:36</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">02:32</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">03:46</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="86035248" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">03:40</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="83196096" data-category="all" data-tag="Germany" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/96/2f/d0/962fd0e2-5010-1a2c-5822-c6637e22b1df/mzaf_827319468004061581.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:48</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:24</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="338965882" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview111/v4/65/ca/83/65ca8336-2e09-a0bb-a810-2a6b8864e770/mzaf_3545919152242528717.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">05:33</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" data-id="160157606" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
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
                                                    <div class="list-action  show-row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-3 text-sm d-none d-md-block">04:27</div>
                                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                                <i data-feather="heart" class="active-danger"></i>
                                                            </button>
                                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="albums">
                                        <div class="row list mb-4">
                                            <div class="col-4 col-sm-3" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="53550342" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music6/v4/0e/f0/ff/0ef0ff4d-7110-e701-2d95-119715a8de60/mzaf_3382802394094315711.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="53754394" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="160157606" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
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
                                            <div class="col-4 col-sm-3" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="playlist">
                                        <div class="row list-row">
                                            <div class="col-6 col-sm-4" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="83196096" data-category="all" data-tag="Germany" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/96/2f/d0/962fd0e2-5010-1a2c-5822-c6637e22b1df/mzaf_827319468004061581.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="160157606" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="53550342" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music6/v4/0e/f0/ff/0ef0ff4d-7110-e701-2d95-119715a8de60/mzaf_3382802394094315711.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="86035248" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6 col-sm-4" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liked">
                                        <div class="row list-row">
                                            <div class="col-6" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6" data-id="119205187" data-category="all" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview128/v4/37/14/59/37145906-fb86-aca7-9b10-7477644cb56a/mzaf_168581445824271384.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6" data-id="263013345" data-category="Electronic" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/f2/52/4b/f2524bfb-d546-affa-e89f-f165a1c99cb0/mzaf_2577649036970470026.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                            <div class="col-6" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media col-4">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="following">
                                        <div class="row list media-circle">
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="160157606" data-category="Pop" data-tag="United Kingdom" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#160157606" class="ajax media-content " style="background-image:url(../assets/img/a12.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#160157606" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Mark Ronson Feat. Bruno Mars
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="90835896" data-category="Electronic" data-tag="all" data-source="">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#90835896" class="ajax media-content " style="background-image:url(../assets/img/a0.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#90835896" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Avicii
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="324443962" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/bd/6b/34/bd6b3443-d4c3-26fd-91c8-d0b31ab47ee3/mzaf_8046559398209773051.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#324443962" class="ajax media-content " style="background-image:url(../assets/img/a5.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#324443962" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                The Chainsmokers Feat. Halsey
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="86035248" data-category="R&amp;B" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#86035248" class="ajax media-content " style="background-image:url(../assets/img/a7.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#86035248" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Robin Thicke Feat. T.I. &amp; Pharrell
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="258710574" data-category="Pop" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music7/v4/03/c0/60/03c060ce-1617-e556-def2-4fd34d7e1f24/mzaf_8527312642501236756.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#258710574" class="ajax media-content " style="background-image:url(../assets/img/a3.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#258710574" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Twenty One Pilots
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#83147960" class="ajax media-content " style="background-image:url(../assets/img/a13.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#83147960" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                OneRepublic
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="53754394" data-category="all" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#53754394" class="ajax media-content " style="background-image:url(../assets/img/a9.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#53754394" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Macklemore &amp; Ryan Lewis Feat. Ray Dalton
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2" data-id="119205187" data-category="all" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview128/v4/37/14/59/37145906-fb86-aca7-9b10-7477644cb56a/mzaf_168581445824271384.plus.aac.p.m4a">
                                                <div class="list-item r">
                                                    <div class="media ">
                                                        <a href="music.artist.html#119205187" class="ajax media-content " style="background-image:url(../assets/img/a8.jpg)">
                                                        </a>
                                                        <div class="media-action ">
                                                        </div>
                                                    </div>
                                                    <div class="list-content text-center">
                                                        <div class="list-body ">
                                                            <a href="music.artist.html#119205187" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                                Omi
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-xl w-auto-sm no-shrink">
                                <div class="padding sticky">
                                    <h6 class="text text-muted">Top tracks</h6>
                                    <div class="row list-row">
                                        <div class="col-12" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#274510331" class="ajax media-content " style="background-image:url(../assets/img/c16.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                        <div class="col-12" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#92570808" class="ajax media-content " style="background-image:url(../assets/img/c1.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                        <div class="col-12" data-id="83147960" data-category="Rock" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#83147960" class="ajax media-content " style="background-image:url(../assets/img/c13.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                        <div class="col-12" data-id="82924078" data-category="France" data-tag="Electronic" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#82924078" class="ajax media-content " style="background-image:url(../assets/img/c15.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                        <div class="col-12" data-id="312058991" data-category="all" data-tag="France" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#312058991" class="ajax media-content " style="background-image:url(../assets/img/c10.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                        <div class="col-12" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#303988181" class="ajax media-content " style="background-image:url(../assets/img/c14.jpg)">
                                                    </a>
                                                    <div class="media-action ">
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
                                                <div class="list-content ">
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
                                    </div>
                                    <div class="b-b my-3"></div>
                                    <div class="my-2">
                                        <a href="#" class="text-muted mr-1">About</a>
                                        <a href="#" class="text-muted mr-1">Contact</a>
                                        <a href="#" class="text-muted mr-1">Legal</a>
                                        <a href="#" class="text-muted mr-1">Policy</a>
                                    </div>
                                    <p class="text-muted text-sm">&copy; Copyright 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
           <?php include "footer.php"; ?> 