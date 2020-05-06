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
                                            <a href="<?=$root;?>ajzaa" class="list-title title ajax h4 font-weight-bold">
                                                Listen Quran Online
                                            </a>
                                            <a href="<?=$root;?>ajzaa" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                And seek peace from Allah.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-item list-overlay r mb-3">
                                    <div class="media media-4x3">
                                        <a href="<?=$root;?>read-quran-online" class="ajax media-content " style="background-image:url(assets/img/soon.jpg)">
                                        </a>
                                        <div class="media-action ">
                                        </div>
                                    </div>
                                    <div class="list-content p-5">
                                        <div class="list-body ">
                                            <a href="<?=$root;?>read-quran-online" class="list-title title ajax h4 font-weight-bold">
                                                Read Quran
                                            </a>
                                            <a href="<?=$root;?>read-quran-online" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                Read Quran Online
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
                        <div class="slick slick-visible slick-arrow-top row sr-item" style="min-height:250px" data-plugin="slick" data-option="{
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
                                        <div class="text-muted text-sm sr-item">Today</div>
                                        <h5 class="text-highlight sr-item">Recently added</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row list-row list-index">
                                <div class="col-12" dir="rtl">

                                <style>
                            .list-index .list-item:before { margin-left: 20px; content: counter(li); counter-increment: li; width: 1rem; padding: 0; font-weight: 600; -ms-flex-negative: 0; flex-shrink: 0; }
                            .list-style:nth-child(odd) { background: #F7F7F7; }
                            .list-style { height: 90px; flex: 0 0 100%; max-width: 100%; }
                            .list-style:hover { background: #F2F2F2; }
                            </style>

                            <?php
                            $url = 'assets/api/toptensurah.json';
                            $data = file_get_contents($url);
                            $characters = json_decode($data);
                            foreach ($characters as $character):?>

                                <div class="list-style" data-id="<?= $character->id ?>" data-category="France" data-tag="Electronic" data-source="surahvoice/<?=$character->voiceurl?>">
                                        <div class="list-item r">
                                            <div class="media ">
                                                <a href="#<?= $character->id ?>" class="ajax media-content " style="background-image:url(assets/img/surahs/<?=$character->titleurl?>">
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
                                            <div class="list-content text-right">
                                                <div class="list-body ">
                                                    <a href="#<?= $character->id ?>" class="list-title title ajax h-1x  text-right" style="color:#000">
                                                        <?=$character->sorahname?>
                                                    </a>
                                                    <a href="#<?= $character->id ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x text-right">
                                                        <?=$character->juzname?>
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
                                    <?php endforeach; ?>

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
                                                    <a href="#" class="list-title title ajax h5 font-weight-bold">
                                                        Eid 2020
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
                                                <a href="#" class="ajax media-content " style="background-image:url()">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <a href="#" class="list-title title ajax h5 font-weight-bold">
                                                        Ramadhan Wallpapers
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
                                        <div class="text-muted text-sm sr-item">Books</div>
                                        <h5 class="text-highlight sr-item">Collection</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">
                                <?php
                                  for ($i = 0; $i < 4; $i++){
                                    ?>
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
                                                    <a href="#" class="list-title title ajax ">
                                                        Saheeh Bukhari
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Read Now</div>
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
                                                    <a href="#" class="list-title title ajax ">
                                                        Tarmizee
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Read Now</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="#" class="ajax media-content " style="background-image:url(assets/img/b9.jpg)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="#" class="list-title title ajax ">
                                                        Husn e Muslim
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">Read Now</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
        <?php include "footer.php"; ?>