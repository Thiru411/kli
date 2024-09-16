<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom_tabs.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">


<style>
    /*page 1 css v*/
    .prod-img1 {
        width: 100%;
    }

    .watch:hover {
        color: #fff;
    }

    .dd-flex {
        display: flex;
        background-color: #f5f4f4;
    }

    .w-60 {
        width: 60%;
    }

    .w-40 {
        width: 40%;
    }

    .tv-banner {
        width: 100%;
        height: auto;
    }

    .kotak-bg {
        text-align: center;
        align-self: center;
    }

    .kotak-tv-banner h1 {
        font-size: 52px;
        font-weight: 400;
        color: #DA251C;
        font-family: 'Lato', sans-serif;
        margin: 0;
        padding: 0;
    }

    .dd-fflex {
        display: flex;
        flex-wrap: wrap;
    }

    .w-33 {
        /* width: 33.33%;
        margin-right: 40px; */
        -webkit-flex: 0 0 33.33333%;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
    padding-left: 15px;
    padding-right: 15px;
    }

    /* .w-33{width:33.33%;} */
    .cards p {
        font-family: 'Rubik', sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 30px;
        color: #363637;
        margin: 6px 0 6px 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        max-height: 60px;
        min-height: 60px;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .cards h6 {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        color: #676868;
        font-weight: 400;
        margin-right: 21px;
    }

    .dot {
        position: relative;
    }

    .position-relative {
        position: relative;
    }

    .ff-rubik {
        font-family: 'Rubik', sans-serif;
    }

    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-image: url(../assets/images/play-icon.png);
        background-repeat: no-repeat;
    }

    .cards {
        background-color: #fff;
        padding: 28px 16px 28px 16px;
        margin-bottom: 50px; 
    }

    .cards:hover {
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    }

    .dot::before {
        content: "";
        top: 10px;
        left: -8px;
        background-color: #676868;
        position: absolute;
        width: 4.28px;
        height: 4px;
        border-radius: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .tv-cards h1 {
        font-size: 41px;
        font-style: normal;
        font-weight: 400;
        line-height: 62px;
        font-family: 'Lato', sans-serif;
        color: #ED1D24;
        text-align: initial;
        margin: 0;
        padding: 0;
        margin-bottom: 43px !important;
    }

    .tv-cards {
        background: #FFFFFF;
        max-width: 553px;
        box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.26);
        padding: 65px 148px 92px 100px;
    }

    .watch {
        font-family: 'Roboto', sans-serif;
        color: #fff;
        font-size: 22px;
        font-weight: 500;
        padding: 12px 20px 16px 24px;
        background-color: #003678;
        border-radius: 26px;
    }

    .live {
        font-family: 'Lato', sans-serif;
        color: #ED1D24;
        font-size: 100px;
        font-weight: 400;
        line-height: 120px;
        margin: 0;
        padding: 0;
        text-align: initial;
    }

    .content-text {
        margin-bottom: 60px !important;
        font-family: 'Lato', sans-serif;
        font-size: 65px;
        font-weight: 400;
        color: #003678;
        margin: 0;
        padding: 0;
        text-align: initial;
    }

    .mt-auto {
        margin-top: auto;
    }

    .tv-content {
        padding: 164px 0 90px 0;
    }

    .tabs-btns {
        border-bottom: 0.5px solid rgba(0, 0, 0, 0.5);
        margin-bottom: 100px;
    }

    .tabs-btns .active {
        color: #DA251C;
        font-weight: 900;
        border-bottom: 3px solid #DA251C;
    }

    .w-70 {
        width: 70%;
    }

    .w-30 {
        width: 30%;
    }

    .align-baseline {
        align-items: baseline;
    }

    .text-right {
        text-align: right;
    }

    .product-tab {
        margin-top: 58px;
    }

    .tabs-btns button {
        padding: 0 0 80px 0 !important;
        background-color: transparent;
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 85px;
        letter-spacing: 0em;
        color: #666666;
        margin-right: 57px !important;
        border: none;
        border-radius: 0;
        cursor: pointer;
        display: inline-block;
        text-align: initial;
        text-decoration: none;
        text-transform: initial;
        white-space: nowrap;
    }

    .mr-0 {
        margin-right: 0 !important;
    }

    .mt-139 {
        margin-top: 139px;
    }

    .select-lan select {
        height: 50px;
        width: 198px;
        padding: 0px 20px 0px 16px;
        border: 1px solid #E5E5E5;
        border-radius: 0;
        font-family: 'Lato', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        text-align: left;
    }

    .select-lan option {
        width: 198px;
    }

    .select-icon {
        position: absolute;
        top: 22px;
        right: 20px;
    }

    .mx-675 {
        max-width: 671px;
    }

    .tabs-btns button:last-child {
        margin-right: 0 !important;
        display: inline-block;
    }

    .pr-85 {
        padding-right: 85px;
    }

    .live-icon {
        width: 20px;
        height: 14px;
        margin-left: 10px;
    }

    /* .tabs-btns .active { background: url('assets/images/live-icon.png') no-repeat !important; background-position: calc(106% - 7px) 36px!important;width: 88px;} */
    .live-text {
        text-align: initial;
        padding: 0 0 50px 0;
        font-family: 'Lato', sans-serif;
        font-size: 34px;
        font-weight: 700;
        line-height: 51px;
        color: #363637;
    }

    .live-bg {
        background: #DA251C;
        border-radius: 4px;
        font-family: 'Lato', sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 900;
        color: #fff;
        padding: 5px 11px 5px 11px;
        position: absolute;
        bottom: 15px;
        right: 15px;
    }

    .live-imgg-side {
        display: inline;
        margin-right: 7px;
    }

    .live-bg:hover {
        color: #fff;
        text-decoration: none;
    }

    .pos-live {
        position: absolute;
        top: 6px;
        height: 35px;
        left: 30%;
        width: 56px;
    }

    .set-reminder {
        margin-top: 37px;
        display: block;
        max-width: 180px;
        font-family: 'Lato', sans-serif;
        padding: 10px 18px;
        font-size: 20px;
        font-style: normal;
        color: #fff;
        font-weight: 900;
        background-color: #DA251C;
        opacity: 0.8;
        border-radius: 4px;
    }

    .set-reminder:hover {
        color: #fff;
    }

    .mt-240 {
        margin-top: 140px;
    }

    .up-break {
        white-space: nowrap;
    }

    .ten-k {
        font-family: 'Rubik', sans-serif;
        color: #676868;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 30px;
    }

    .pb-90 {
        padding-bottom: 90px;
    }

    .tv-content {
        padding: 0px 0 270px 0;
    }

    .notified::before {
        position: absolute;
        content: "";
        top: -10px;
        left: 36px;
        height: 25px;
        width: 25px;
        background-color: #363637;
        border-radius: 5px;
        transform: rotate(45deg);
    }

    .notified {
        transition: 0.3s;
        z-index: 11;
        position: absolute;
        bottom: -70px;
        white-space: nowrap;
        border-radius: 4px;
        font-family: 'Lato', sans-serif;
        background-color: #363637;
        font-size: 18px !important;
        font-style: normal;
        font-weight: 400 !important;
        line-height: 27px;
        color: #fff !important;
        padding: 14px 22px 10px 20px;
    }

    .set-reminder:hover {
        text-decoration: none !important;
    }

    .dd-none {
        display: none;
    }

    .dd-block {
        display: block !important;
    }

    .mrr-4 {
        margin-left: 5px;
    }

    @media screen and (max-width:1024px) {

        .live-text {
            padding: 0 0 0px 0;
            font-size: 25px;
        }

        .notified {
            font-size: 11px !important;
            padding: 9px 15px 9px 15px
        }

        .set-reminder {
            max-width: 145px;
            font-family: 'Lato', sans-serif;
            padding: 8px 15px;
            font-size: 13px;
        }

        .live-bg {
            font-size: 9px;
        }

        .mt-139 {
            margin-top: 40px;
        }

        .tv-content {
            padding: 0;
        }

        .rem-sec-mar section {
            margin-top: 60px;
        }

        .tv-content {
            padding: 0 0 50px 0;
        }

        .tv-cards h1 {
            font-size: 46px;
            font-style: normal;
            font-weight: 400;
            line-height: 63px;
            margin-bottom: 33px !important;
        }

        .watch {
            font-size: 18px;
        }

        .tv-cards {
            padding: 45px 40px 80px 40px;
        }

        .pr-85 {
            padding-right: 0px;
        }

    }

    @media screen and (max-width:994px) {
        .tabs-btns button {
            font-size: 13px;
            padding: 0 0 65px 0 !important;
        }

        .mx-675 {
            max-width: 569px;
        }
    }

    @media screen and (max-width:768px) {

        .kotak-tv-banner h1 {
            font-size: 25px;
        }

        .tabs-btns button {
            padding: 0 0 60px 0 !important;
            font-size: 11px;
            margin-right: 33px !important;
            white-space: nowrap;
        }

        .mx-675 {
            max-width: 440px;
        }

        .tabs-btns {
            margin-bottom: 30px;
        }

        .product-tab {
            margin-top: 10px;
        }

        .select-lan select {
            height: 30px;
            width: 132px;
            font-size: 10px;
        }

        .select-icon {
            top: 12px;
            right: 10px;
            height: 5px;
            width: 10px;
        }

        .cards p {
            font-size: 9px;
            line-height: 16px;
            max-height: 30px;
            min-height: 30px;
        }

        .cards h6 {
            font-size: 9px;
        }

        .dot::before {
            top: 5px;
            left: -10px;
            width: 3.28px;
            height: 3px;
        }

        .mt-139 {
            margin-top: 20px;
        }

        .tv-content {
            padding: 0 0 50px 0;
        }

        .live {
            font-size: 45px;
            font-weight: 400;
            line-height: initial;
        }

        .content-text {
            margin-bottom: 40px !important;
            font-size: 40px;
        }

        .rem-sec-mar section {
            margin-top: 60px;
        }

        .tv-cards {
            padding: 25px 25px 25px 25px;
            max-width: 254px;
        }

        .tv-cards h1 {
            font-size: 33px;
            line-height: 51px;
            margin-bottom: 25px !important;
        }

        .watch {
            font-size: 14px;
            padding: 7px 11px 7px 11px
        }

        .play-btn img {
            height: 23px;
        }
    }


    @media screen and (max-width:760px) {
        .dd-fflex {
            display: block;
            flex-wrap:initial;
        }

        .w-70 {
            width: 100%;
        }

        .mx-675 {
            max-width: 338px;
        }

        .w-33 {
            max-width: 100%;
            flex: 0 ;
        }

        .cards .dd-fflex {
            display: flex;
        }

        .w-50 {
            width: 100%;
        }

        .tv-cards {
            max-width: 100%;
            margin-top: 45px;
        }

        .tabs-btns button {
            margin-right: 14px !important;
        }

        .select-lan select {
            margin-bottom: 41px;
        }

        .cards p {
            font-size: 15px;
            line-height: 24px;
            max-height: 55px;
            min-height: 55px;
        }

        .cards h6 {
            font-size: 13px;
        }

        .dot::before {
            top: 7px;
            left: -9px;
        }

        .play-btn img {
            height: 40px;
        }
    }

    .pt-40 {
        padding-top: 40px;
    }

    .rem-live-spac .mt-139 {
        margin-top: 0;
    }

    .w3-container {
        display: none !important;
    }

    /*page 1 css ^*/
</style>

<section class="kotak-tv-banner pr-85">
    <div class="dd-flex">
        <div class="w-60 position-relative">
            <img src="assets/images/tv-banner.png" class="tv-banner">

            <a href="#" class="live-bg pos-live"> Live</a>


        </div>
        <div class="w-40 kotak-bg">
            <h1>Kotak TV</h1>
        </div>
    </div>
</section>
<?php 
function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('Y-m-d', $date1);
    $second = DateTime::createFromFormat('Y-m-d', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}
?>
<section class="product-tab pr-85">
    <!---->
    <div class="container">
        <div class="dd-fflex align-baseline">
            <div class="w-70">
                <div class="tabs-btns mx-675" id="btnid">

                <?php $i=1; $live_class=$live_img="";
                    if($categoryDetails){
                        foreach($categoryDetails as $cat_info){
                            if($cat_info->category_name=="Live"){$live_img="<img src='assets/images/live-icon.png' class='mrr-4' />";}else{$live_img="";}
                            ?>
                    <button class="btncls <?php if($i==1){echo "active";}?> activeclass<?=$i?>"  onclick="openProduct('<?=$cat_info->category_name?>',<?=$i?>)"><?=$cat_info->category_name?><?=$live_img?></button>    
                        <?php $i++;}}?>
                         
                </div>
            </div>
            <div class="w-30 text-right select-lan">
                <div class="position-relative">
                    <img src="assets/images/select-icon.png" class="select-icon">
                    <select name="cars" id="cars">

                        <option value="volvo">English</option>
                        <option value="saab">Hindi</option>
                        <option value="opel">Kannada</option>
                        <option value="audi">Telegu</option>
                    </select>
                </div>

            </div>

        </div>

        <?php if($categoryDetails)foreach($categoryDetails as $info){?>
        <div id="<?=$info->category_name?>" class="city">
            <div class="podcast-sec">
<?php if($info->category_name=="Live"){?><h1 class="live-text">Live Now</h1><?php } ?>
            <div class="dd-fflex">
            <?php 
                    $j=1;
                     $productDetails=$this->CI->product_details($info->category_name); 
                     if($productDetails){
                         foreach($productDetails as $pinfo){
                             if($j>1){$jclass="mt-139";} 
                             $cur_date=date('Y-m-d');
                             $no_weeks=week_between_two_dates($cur_date, $pinfo->created_date);

                    $video_link=$pinfo->video_link;
                    $temp=explode('https://youtu.be/',$video_link); 

                    $video_id='https://www.youtube.com/watch?v='.$temp[1];
                    $youtubeID = getYouTubeVideoId($video_id);
                    $thumbURL = 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
                     
                    ?>
                <div class="w-33" id="content_data">
                <div class="cards mr-57">
                    <div class="position-relative">
                        <img src="<?=$thumbURL?>" class="prod-img1">
                        <?php if($info->category_name=="Live"){?><a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a><?php }?>
                        <a data-fancybox href="<?=$pinfo->video_link?>" class="js-video-btn video-circle video-circle--lg">
                            <div class="video-circle__button play-btn">
                                <img src="assets/images/play-icon.png" class="prod-img1">
                            </div>
                        </a>
                    </div>
                    <p><?=substr($pinfo->description,0,75)?></p>
                    <?php if($info->category_name=="Live"){?>
                        <p class="ten-k">10K Watching</p>                    
                    <?php } else {?>
                        <div class="dd-fflex">
                        <h6>7 Views</h6>
                        <h6 class="dot"> <?=$no_weeks?> week ago</h6>
                        <h6 class="dot"><?=$pinfo->time_in_sec?></h6>
                    </div>
                    <?php } ?>
                </div>
                </div>
                <?php }} ?>
                

            </div> 
</div>

            <div class="rem-sec-mar">
                <section class="tv-content pt-85">
                    <div class="container">
                        <h1 class="live">Live</h1>
                        <h1 class="content-text">TV Content</h1>
                        <div class="dd-fflex">
                            <div class="w-50">
                                <img src="assets/images/live-img-new.png" class="">
                            </div>
                            <div class="w-50 mt-auto">
                                <div class="tv-cards">
                                    <h1>Ashish Vidyarthi @ Live Now</h1>
                                    <a href="#" class="watch">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <?php } ?>

       <!--  <div id="Paris" class="city" style="display:none">
            2
        </div>

        <div id="Tokyo" class="city" style="display:none">
            3
        </div>
        <div id="events" class="city" style="display:none">
            4
        </div> -->
        <!-- <div id="live" class="city" style="display:none">
                5
                </div> -->
        <div id="live" class="city rem-live-spac pb-90" style="display:none">
            <h1 class="live-text">Live Now</h1>
            <div class="dd-fflex">
                <div class="w-33">
                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img1.png" class="prod-img1">
                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <!-- <div class="dd-fflex">
                                           <h6>7 Views</h6>
                                           <h6 class="dot"> 1 week ago</h6>
                                           <h6 class="dot">5 mins</h6>
                            </div> -->
                        <p class="ten-k">10K Watching</p>
                    </div>
                    <!-- <h1 class="live-text up-break">Upcoming live Streams</h1> -->
                </div>
                <div class="w-33">
                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img2.png" class="prod-img1">
                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <p class="ten-k">10K Watching</p>
                        <!-- <div class="dd-fflex">
                                           <h6>7 Views</h6>
                                           <h6 class="dot"> 1 week ago</h6>
                                           <h6 class="dot">5 mins</h6>
                            </div> -->
                    </div>
                </div>
                <div class="w-33 mr-0">
                    <div class="cards">
                        <div class="position-relative">
                            <img src="assets/images/prod-img3.png" class="prod-img1">
                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <!-- <div class="dd-fflex">
                                           <h6>7 Views</h6>
                                           <h6 class="dot"> 1 week ago</h6>
                                           <h6 class="dot">5 mins</h6>
                            </div> -->
                        <p class="ten-k">10K Watching</p>
                    </div>
                </div>

            </div>

            <h1 class="live-text pt-40">Upcoming live Streams</h1>
            <div class="dd-fflex">
                <div class="w-33">


                    <div class="cards mr-57">

                        <div class="position-relative">
                            <img src="assets/images/prod-img4.png" class="prod-img1">

                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <!-- <div class="dd-fflex">
                       <h6>7 Views</h6>
                       <h6 class="dot"> 1 week ago</h6>
                       <h6 class="dot">5 mins</h6>
        </div> -->
                        <a href="#" class="set-reminder">SET REMINDER</a>
                    </div>
                </div>
                <div class="w-33">




                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img5.png" class="prod-img1">
                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <!-- <div class="dd-fflex">
                       <h6>7 Views</h6>
                       <h6 class="dot"> 1 week ago</h6>
                       <h6 class="dot">5 mins</h6>
        </div> -->
                        <a href="#" class="set-reminder">SET REMINDER</a>
                    </div>
                </div>
                <div class="w-33 mr-0">
                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img6.png" class="prod-img1">
                            <a href="#" class="live-bg"> <img src="assets/images/live-white.png" class="live-imgg-side">Live</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <div class="position-relative">
                            <a href="#" class="set-reminder rem-on">REMINDER ON</a>
                            <h6 class="notified dd-none">You’ll be notified when it goes live</h6>
                        </div>

                        <!-- <div class="dd-fflex">
                                           <h6>7 Views</h6>
                                           <h6 class="dot"> 1 week ago</h6>
                                           <h6 class="dot">5 mins</h6>
                            </div> -->
                    </div>
                </div>
            </div>


            <h1 class="live-text pt-40">Recent Live Streams</h1>
            <div class="dd-fflex">
                <div class="w-33">
                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img7.png" class="prod-img1">
                            <a href="#" class="live-bg">1.42.01</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <div class="dd-fflex">
                            <h6>7 Views</h6>
                            <h6 class="dot"> 1 week ago</h6>
                            <h6 class="dot">5 mins</h6>
                        </div>
                    </div>
                </div>
                <div class="w-33">
                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img8.png" class="prod-img1">
                            <a href="#" class="live-bg">1.42.01</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <div class="dd-fflex">
                            <h6>7 Views</h6>
                            <h6 class="dot"> 1 week ago</h6>
                            <h6 class="dot">5 mins</h6>
                        </div>
                    </div>
                </div>
                <div class="w-33 mr-0">





                    <div class="cards mr-57">
                        <div class="position-relative">
                            <img src="assets/images/prod-img9.png" class="prod-img1">
                            <a href="#" class="live-bg">1.42.01</a>
                            <a data-fancybox="" href="https://youtu.be/biBtyTij-8I" class="js-video-btn video-circle video-circle--lg">
                                <div class="video-circle__button play-btn">
                                    <img src="assets/images/play-icon.png" class="prod-img1">
                                </div>
                            </a>
                        </div>

                        <p>Udyam Registration is so simple that all you need is your Aadhaar number and</p>
                        <div class="dd-fflex">
                            <h6>7 Views</h6>
                            <h6 class="dot"> 1 week ago</h6>
                            <h6 class="dot">5 mins</h6>
                        </div>
                    </div>

                </div>
            </div>


        </div>


        <div id="podcast" class="city" style="display:none">
            6
        </div>



    </div>
    <!---->
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script>

function openProduct(category_name,no_id)
    { 
        let no_id_class=no_id-1;
        $(".btncls").removeClass('active');
        $(".activeclass"+no_id).addClass('active');
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(category_name).style.display = "block"; 
        
    }
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";

    }

    $(document).ready(function() {
        $(".rem-on").hover(function() {
            $(".notified").toggleClass("dd-block");
        });
    });
</script>



</html>