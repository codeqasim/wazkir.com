 <!-- ############ Footer START-->
            <div id="footer" class="page-footer sticky sticky-bottom">
                <div data-plugin="plyr" class="plyrist plyrist_audio plyr-list-popup bg-white b-t" id="plyrist">
                    <audio controls hidden></audio>
                    <div class="plyr-list" style="display:none">

                            <?php
                            $url = 'assets/api/toptensurah.json';
                            $data = file_get_contents($url);
                            $characters = json_decode($data);
                            foreach ($characters as $character):?>

                            <div class="plyr-item" data-id="<?= $character->id ?>" data-type="audio" data-source="surahvoice/<?=$character->voiceurl?>" data-poster="assets/img/surahs/<?=$character->titleurl?>">
                            <div class="plyr-item-poster" style="background-image:url(assets/img/surahs/<?=$character->titleurl?>)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x"><?=$character->sorahname?></div>
                                <div class="plyr-item-author text-sm text-fade"><?=$character->juzname?></div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div>

                        <?php endforeach; ?>

                        <!--<div class="plyr-item" data-id="234782921" data-type="audio" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a" data-poster="assets/img/c2.jpg">
                            <div class="plyr-item-poster" style="background-image:url(assets/img/c2.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Lean On</div>
                                <div class="plyr-item-author text-sm text-fade">Major Lazer Feat. MØ & DJ Snake</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js assets/js/site.min.js -->
        <!-- jQuery -->
        <script src="<?= $root; ?>libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= $root; ?>libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= $root; ?>libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="<?= $root; ?>libs/pjax/pjax.min.js"></script>
        <script src="<?= $root; ?>assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="<?= $root; ?>assets/js/lazyload.config.js"></script>
        <script src="<?= $root; ?>assets/js/lazyload.js"></script>
        <script src="<?= $root; ?>assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="<?= $root; ?>libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="<?= $root; ?>libs/feather-icons/dist/feather.min.js"></script>
        <script src="<?= $root; ?>assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="<?= $root; ?>assets/js/theme.js"></script>
        <script src="<?= $root; ?>assets/js/utils.js"></script>
        <!-- endbuild -->

                <script>
            //Plugin e-filter.js by Eduardo Torres, for more documentation visit: https://github.com/edukni/Search-input-jquery-plugin

$( "ul#eFilter.dropdown-menu li" ).on( "click", function() {
    $(this).parent().find("li").each(function( index ) {
        $( this ).removeClass('active');
    });

    $( this ).addClass('active');
    $(".list-row div[data-filter]").hide();


    var stringCategoria = new Array();
    $("ul#eFilter.dropdown-menu > li.active").each(function( index ) {
        var attr = $(this).attr('data-catego');
        var string = attr.split(" ");

        for(var i =0; i < string.length; i++){
            if(string[i]){
                stringCategoria.push(string[i]);

            }
        }



    });
if(stringCategoria.length >0){
    fadeInItem2(stringCategoria);


} else{
    $(".list-row div[data-filter]").fadeIn();

}


});


function fadeInItem2(atributo) {
     console.log(atributo);
     var general="";
    for(var i =0; i < atributo.length; i++){
                 console.log(atributo[i]);
                var general= general + "[data-filter~="+atributo[i]+"]";
     }
     $(".list-row" + " "+"div"+ general).fadeIn('fast');

}

        </script>
    </body>
</html>