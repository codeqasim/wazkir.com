<?php $title = "Surahs"; ?>   
<?php include "header.php"; ?>
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


                            <?php
                            $url = 'assets/api/allsurah.json';
                            $data = file_get_contents($url); 
                            $allsurah = json_decode($data);
                            foreach ($allsurah as $surahlist):?>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="<?= 'surah'. $surahlist->id ?>" data-category="all" data-tag="France" data-source="allsurahvoice/<?=$surahlist->surahvoiceurl?>">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="music.detail.html#312058991" class="ajax media-content " style="background-image:url(assets/img/allsurahs/<?=$surahlist->titleurl?>">
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
                                                <?=$surahlist->sorahname?>
                                            </a>
                                            <a href="music.artist.html#312058991" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                <?=$surahlist->juzname?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>


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
            <?php include "footer.php"; ?>
