<?php $title = "Listen Quran Online"; ?>
<?php include "header.php"; ?>

            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div class="page-container">
                    <div class="padding sr">
                        <div class="row no-gutters list-grouped">
                            <div class="col-sm-6">
                                <div class="list-item list-overlay r mb-3">
                                    <div class="media media-4x3">
                                        <a href="music.detail.html#" class="ajax media-content " style="background-image:url(assets/img/bg.jpg)">
                                        </a>
                                        <div class="media-action ">
                                        </div>
                                    </div>
                                    <div class="list-content p-5">
                                        <div class="list-body ">
                                            <a href="#" class="list-title title ajax h4 font-weight-bold">
                                                Listen Quran Online
                                            </a>
                                            <a href="music.artist.html#" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                And seek peace from Allah.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-item list-overlay r mb-3">
                                    <div class="media media-4x3">
                                        <a href="#" class="ajax media-content " style="background-image:url(assets/img/soon.jpg)">
                                        </a>
                                        <div class="media-action ">
                                        </div>
                                    </div>
                                    <div class="list-content p-5">
                                        <div class="list-body ">
                                            <a href="#" class="list-title title ajax h4 font-weight-bold">
                                                Welcome
                                            </a>
                                            <a href="#" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                To quranic listenting portal
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Weekly</div>
                                <h5 class="text-highlight sr-item">Top Surahs</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
                            slidesToShow: 6,
                              slidesToScroll: 1,
                              dots: false,
                              rtl: false,
                              responsive: [
                             {
                               breakpoint: 1200,
                               settings: {
                                 slidesToShow: 6
                               }
                             },
                             {
                               breakpoint: 920,
                               settings: {
                                 slidesToShow: 4
                               }
                             },
                             {
                               breakpoint: 768,
                               settings: {
                                 slidesToShow: 3
                               }
                             },
                             {
                               breakpoint: 576,
                               settings: {
                                 slidesToShow: 2
                               }
                             }
                            ]
                            }">


                            <?php 
                            $url = 'assets/api/toptensurah.json'; 
                            $data = file_get_contents($url); 
                            $characters = json_decode($data);
                            foreach ($characters as $character):?>
                            <div class="col-2" data-id="<?= $character->id ?>" data-category="Pop" data-tag="Canada" data-source="surahvoice/<?=$character->voiceurl?>">
                                <div class="list-item slick-item r mb-3">
                                    <div class="media ">
                                        <a href="music.detail.html#92570808" class="ajax media-content " style="background-image:url(assets/img/surahs/<?=$character->titleurl?>)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <!--<button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>-->
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <!--
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div> -->
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="#" class="list-title title ajax h-1x">
                                                <?=$character->sorahname?>
                                            </a>
                                            <a href="#" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                <?=$character->juzname?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">User</div>
                                        <h5 class="text-highlight sr-item">Recently added</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row list-row list-index">
                                    <div class="col-12" data-id="82924078" data-category="France" data-tag="Electronic" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
                                        <div class="list-item r">
                                            <div class="media ">
                                                <a href="music.detail.html#82924078" class="ajax media-content " style="background-image:url(assets/img/c15.jpg)">
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
                                            <div class="list-action  show-row">
                                                <div class="d-flex align-items-center">
                                                    <div class="px-3 text-sm d-none d-md-block">05:25</div>
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
                                                <a href="music.detail.html#83147960" class="ajax media-content " style="background-image:url(assets/img/c13.jpg)">
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
                                                    <div class="px-3 text-sm d-none d-md-block">03:22</div>
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
                                                <a href="music.detail.html#92570808" class="ajax media-content " style="background-image:url(assets/img/c1.jpg)">
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
                                                    <div class="px-3 text-sm d-none d-md-block">02:37</div>
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
                                                <a href="music.detail.html#263013345" class="ajax media-content " style="background-image:url(assets/img/c2.jpg)">
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
                                    <div class="col-12" data-id="234782921" data-category="Electronic" data-tag="USA" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
                                        <div class="list-item r">
                                            <div class="media ">
                                                <a href="music.detail.html#234782921" class="ajax media-content " style="background-image:url(assets/img/c6.jpg)">
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
                                                    <div class="px-3 text-sm d-none d-md-block">04:50</div>
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
                            <div class="col-md-6">
                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Upcoming</div>
                                        <h5 class="text-highlight sr-item">Events</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <div class="list-item list-overlay r mb-3 gd-primary">
                                            <div class="media media-4x3">
                                                <a href="music.detail.html#" class="ajax media-content " style="background-image:url()">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <a href="music.detail.html#" class="list-title title ajax h5 font-weight-bold">
                                                        Spring Festival
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Feb 29, 6:30 am</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="list-item list-overlay r mb-3 gd-danger">
                                            <div class="media media-4x3">
                                                <a href="music.detail.html#" class="ajax media-content " style="background-image:url()">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <a href="music.detail.html#" class="list-title title ajax h5 font-weight-bold">
                                                        Music Hub 2020
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Feb 9, 8:16 am</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Blog</div>
                                        <h5 class="text-highlight sr-item">News</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="music.detail.html#" class="ajax media-content " style="background-image:url(assets/img/b7.jpg)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="music.detail.html#" class="list-title title ajax ">
                                                        Et purus vulputate adipiscing
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Feb 1, 1:36 am</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="music.detail.html#" class="ajax media-content " style="background-image:url(assets/img/b8.jpg)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="music.detail.html#" class="list-title title ajax ">
                                                        Nibh massa sit morbi tortor
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Feb 23, 5:19 am</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="music.detail.html#" class="ajax media-content " style="background-image:url(assets/img/b9.jpg)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="music.detail.html#" class="list-title title ajax ">
                                                        Id sit vitae
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Feb 26, 4:44 am</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
        <?php include "footer.php"; ?>