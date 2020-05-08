<?php $title = "Quran Ajzaa"; ?>
<?php include "header.php"; ?>
      
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div class="page-container">
                    <div class="padding sr" id="list" data-plugin="musicapp" data-page="50">
                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Quran 30 Ajzaa</div>
                                <h5 class="text-highlight sr-item">With urdu translation</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="pos-rlt z-index-1" dir="rtl">
                            <div class="d-flex py-2 sr-item">
                                <div class="dropdown my-2">
                                    <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto" data-toggle="dropdown"><span>New</span></button>
                                    <ul class="dropdown-menu" id="eFilter">
                                        <li class="active" data-catego="">
                                            <a>ALL</a>
                                        </li>
                                        <?php $url = 'assets/api/quran.json';
                                        $data = file_get_contents($url);
                                        $juzname = json_decode($data);
                                        // print_r($characters);
                                        // exit();
                                        foreach ($juzname as $alljuzname):?>
                                        <li data-catego="<?=$alljuzname->id?>">
                                            <a><?=$alljuzname->id?></a>
                                        </li>                    <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="flex"></div>
                                <div class="dropdown my-2 mx-2">
                                    <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto" data-toggle="dropdown"><span>All Ajza</span></button>
                                    <ul class="dropdown-menu" id="eFilter">
                                        <li class="active" data-catego="">
                                            <a>ALL</a>
                                        </li>
                                        <?php $url = 'assets/api/quran.json';
                                        $data = file_get_contents($url);
                                        $juzname = json_decode($data);
                                        // print_r($characters);
                                        // exit();
                                        foreach ($juzname as $alljuzname):?>
                                        <li data-catego="<?=$alljuzname->id?>">
                                            <a><?=$alljuzname->juzname?></a>
                                        </li>                    <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="dropdown my-2">
                                    <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto" data-toggle="dropdown"><span>All Sura</span></button>
                                    <ul class="dropdown-menu" id="eFilter">
                                        <li class="active" data-catego="">
                                            <a>ALL</a>
                                        </li>
                                        <?php $url = 'assets/api/quran.json';
                                        $data = file_get_contents($url);
                                        $juzname = json_decode($data);
                                        // print_r($characters);
                                        // exit();
                                        foreach ($juzname as $alljuzname):?>
                                        <li data-catego="<?=$alljuzname->id?>">
                                            <a><?=$alljuzname->sorahname?></a>
                                        </li>                    <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row list list-row list-index hide">
                        <div class="col-12">
                            <?php
                            $url = 'assets/api/quran.json';
                            $data = file_get_contents($url); 
                            $qurandata = json_decode($data);
                            foreach ($qurandata as $qurandatile):?>
                           <div class="list-style" data-id="<?= 'juz'.$qurandatile->id ?>" data-category="Electronic" data-tag="all" data-source="voice/<?=$qurandatile->voiceurl?>"data-filter="<?=$qurandatile->id?>">
                                <div class="list-item r float-right" dir="rtl">
                                    <div class="media" style="margin-right:15px">
                                        <a href="#" class="ajax media-content " style="background-image:url(../assets/img/c0.jpg)"></a>
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
                                    <style>
                                    .list-index .list-item:before { content: counter(li); counter-increment: li; width: 1rem; padding: 0; font-weight: 600; -ms-flex-negative: 0; flex-shrink: 0; }
                                    .list-style:nth-child(odd) { background: #F7F7F7; }
                                    .list-style { height: 90px; flex: 0 0 100%; max-width: 100%; }
                                    .list-style:hover { background: #F2F2F2; }
                                    </style>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="#" class="list-title title ajax h-1x text-right" style="height: 30px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; font-size: 20px; color: #000;">
                                                <?=$qurandatile->juzname?>
                                            </a>
                                            <a href="#" class="list-subtitle d-block text-muted  subtitle ajax h-1x text-right">
                                                <?=$qurandatile->sorahname.'<br>'?>
                                            </a>
                                        </div>
                                    </div>
                                    <!--<div class="list-action  show-row">
                                        <div class="d-flex align-items-center">
                                            <div class="px-3 text-sm d-none d-md-block num">640</div>
                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                <i data-feather="heart" class="active-danger"></i>
                                            </button>
                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                          <?php endforeach; ?>
                         </div>
                        </div>
                        <div class="no-result hide">
                            <div class="p-5 text-center">
                                <h5>Nothing Found</h5>
                                <small>It seems we can’t find what you’re looking for.</small>
                            </div>
                        </div>
                        <div class="pagination pagination-sm mt-3 hide"></div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
<?php include "footer.php"; ?>