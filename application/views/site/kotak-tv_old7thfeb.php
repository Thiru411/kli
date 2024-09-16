<link rel="stylesheet" href="https://insurance.kotak.com/assets/css/custom_tabs.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Lexend+Deca&family=Lexend:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="/css/style.css"> -->
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
       background-color:#da251c;
	  /* height:calc(100vh- -354.2px);*/
	   display:flex;
	   justify-content:center;
	
    }
	.align-self{align-self:center;}

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
        font-size: 13px;
        color: #676868;
        font-weight: 400;
        margin-right: 18px;
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
        top: 6px;
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
        margin-right: 23px !important;
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
		
.pos-live {
position: absolute;
top:6px;
height:23px;
left: 30%;
width:40px;
}
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
            width: 100% !important;
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
@media screen and (min-width:426px) and (max-width: 768px){
.cards h6 {
font-size: 9px;
margin-right:12px;
}
}
    /*page 1 css ^*/
	
	/*pagination css v*/
.custom-pagination-new{margin-left:auto;margin-right:auto;max-width:150px;}
.custom-pagination .page-link {padding: 7px 11px 0px 11px;background-color: #fff;border: 1px solid red;border-radius: 50%;margin: 0 5px 0 5px;color: #fff;}
/*.custom-pagination .page-link:hover{    background-color: #da251c;border-color: #da251c;}*/
.custom-pagination p{font-size: 10px!important;color: #da251c!important;}
/*.custom-pagination p:hover{color:#fff!important;}*/

.pagenumbers a.current{
    background: #9ad6fb;
    border: 1px solid # 72ade4;
    color: #4879a6;
    background: linear-gradient(top, # 9ad6fb 0 % ,
    #77c4fc 100%);
    background: -webkit-linear-gradient(top, # 9ad6fb 0 % ,
    #77c4fc 100%);
    box-shadow: inset 0 1px 4px rgba(255,255,255,0.75), 0 1px 3px rgba(79,126,167,.5);
    }
    .current a {
    background: #9ad6fb;
    padding: 5px 10px;
    text-decoration: none;
    color: # 7e7e7e;
    border: 1px solid#c6c6c6;
    font - weight: bold;
    border - radius: 3px;
    background: linear - gradient(top, #9ad6fb 0%,# 9ad6fb 52 % , #ebebeb 100 % );
    background: -webkit - linear - gradient(top, #9ad6fb 0%,# 9ad6fb 52 % , #ebebeb 100 % );
    box - shadow: inset 0 4px 3px rgba(255, 255, 255, 0.6),
    0 1px 3px rgba(0, 0, 0, .2);
}
.rounded-circle{display:none!important;}
/*pagination css ^*/

.page-item.active .page-link {z-index: 3;color: #fff;background-color: #da251c;border-color: transparent;}
page-item.active p{color:#fff!important;}
.page-item.active .page-link p{color: #fff!important;}
}
.page-link:focus{box-shadow: 0 0 0 0.2em transparent!important;
}
.spac-lg{padding:0 15px;text-align:center;}
.w-auto{width:auto!important;display:block;}
.mb-10{margin-bottom:10px;}
.tv-pad{    position: absolute;
  right: 10px;
  top: 2px;} 
  .tv-pad-mobile{position: absolute;
  right: 14px;
  top: bottom;
  bottom: 20%;
  left: 44%;}
  .tv-pad-footer{
    position: absolute;
    right: 36%;
    top: 58%;
    transform: translate(-50%, -50%);
  }
  @media screen and (max-width:991px) {
	  .tabs-btns{width:100%;overflow-x:auto;overflow-y:hidden;white-space:nowrap;}
  }
  section{top:117px;}
</style>

<section class="kotak-tv-banner pr-85">
    <div class="dd-flex">
        <div class="w-60 position-relative">
            <img src="assets/images/kotak-tv/tv-banner.png" class="tv-banner">

           <!-- <a href="#" class="live-bg pos-live"> Live</a>-->


        </div>
        <div class="w-40 kotak-bg">
		<div class="align-self spac-lg">
				<img src="assets/images/kotak-tv/VectorSmartObject.png" class="tv-banner w-auto mb-10">
				<img src="assets/images/kotak-tv/YourLifeInsuranceExpert_.png" class="tv-banner w-auto">
		</div>
		
            <!--<h1>Kotak TV</h1>-->
        </div>
    </div>
</section>

<section class="product-tab pr-85">
    <!---->
    <div class="container">
        <div class="dd-fflex align-baseline">
            <div class="w-70">
                <div class="tabs-btns mx-675" id="btnid">
                                    <?php $i=1; $live_class=$live_img="";
                    if($categoryDetails){
                        foreach($categoryDetails as $cat_info){
                            if($cat_info->category_name=="Live"){$live_img="<img src='assets/images/kotak-tv/live-icon.png' class='mrr-4' />";}else{$live_img="";}
                            ?>
                    <button class="btncls <?php if($i==1){echo "active";}?> activeclass<?=$i?>"  onclick="openProduct('<?=$cat_info->category_name?>',<?=$i?>)"><?=$cat_info->category_name?><?=$live_img?></button>    
                        <?php $i++;}}?>
                </div>
            </div>
            <div class="w-30 text-right select-lan">
                <div class="position-relative">
                    <img src="assets/images/kotak-tv/select-icon.png" class="select-icon">
					
                    <select onchange="get_language(<?php echo $this->uri->segment(2)?>)" name="language" id="language">

					<?php $url= $this->uri->segment(3);if($url==''){?>
						<option>Select Language</option>
					<?php } ?>
						 <option <?php if($url=='English'){echo "selected";}?>>English</option>
                        <option <?php if($url=='Hindi'){echo "selected";}?>>Hindi</option>
                        <option <?php if($url=='Kannada'){echo "selected";}?>>Kannada</option>
                        <option <?php if($url=='Telugu'){echo "selected";}?>>Telugu</option>
						<option <?php if($url=='Marathi'){echo "selected";}?>>Marathi</option>
						<option <?php if($url=='Bengali'){echo "selected";}?>>Bengali</option>
						<option <?php if($url=='Gujarati'){echo "selected";}?>>Gujarati</option>
						<option <?php if($url=='Tamil'){echo "selected";}?>>Tamil</option>
                    </select>
                </div>

            </div>

        </div>




<script>
function get_language(url){
	var language = $('#language').val();
	if(url!=undefined){
		window.location.href=base_url."/kotak-tv/"+url+'/'+language;
	}else{
	window.location.href=base_url."/kotak-tv/1/"+language;
	}
}
</script>


        <?php $disaply_class=""; $k=1;if($categoryDetails)foreach($categoryDetails as $info){ 
		?>
        <div id="<?=$info->category_name?>" class="city" style="<?php if($k>1){echo 'display:none';}?>">
            <div class="podcast-sec">
<?php if($info->category_name=="Live"){?><h1 class="live-text">Live Now</h1><?php } ?>
            <div class="dd-fflex">
            <?php 
			
                    $j=1;
                     $totalproductDetails=$this->CI->product_details($info->category_name); 
                     //$TotalResults=0;
					 $TotalResults=count($totalproductDetails);
                     $page=1;
                     if($this->uri->segment(2)){$page=$this->uri->segment(2);}else{$page=1;}
					 if($this->uri->segment(3)!='')
					 {
						 $productDetails=$this->CI->product_detailsByLimit($info->category_name,$page,$this->uri->segment(3));
					 }else{
						 $productDetails=$this->CI->product_detailsByLimit($info->category_name,$page,'');
					 }
                      
                    // echo "==count=".$TotalResults;
					if($productDetails){
		$n=1;
		 foreach($productDetails as $pinfo)
		 {
                           
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
						<?php if($info->category_name!="Live"){?><!-- Need to remove this line once live videos added -->
						<div class="position-relative">
							<img src="<?=$thumbURL?>" class="prod-img1">
							<?php if($info->category_name=="Live"){?><a href="#" class="live-bg"> <img src="assets/images/kotak-tv/live-white.png" class="live-imgg-side">Live</a><?php }?>
							
							<a data-fancybox href="<?=$pinfo->video_link?>" class="js-video-btn video-circle video-circle--lg">
								<div class="video-circle__button play-btn" data-tag="play-button" onclick="view_count('<?php echo $n?>','<?php echo $info->category_name?>','<?php echo $pinfo->views?>','<?=$pinfo->video_link?>')">
									<img src="assets/images/kotak-tv/play-icon.png" class="prod-img1">
								</div>
							</a>						
						</div>
						<?php } ?><!-- Need to remove this line once live videos added -->
						<p><?=substr($pinfo->description,0,75)?></p>
						<?php if($info->category_name=="Live"){?>
						<?php } else {?>
							<div class="dd-fflex">
							<h6 id="views_num<?php echo $n?><?php echo $pinfo->category_name?>"><?php if($pinfo->views!=''){echo $pinfo->views;}else{echo '0';}?> Views</h6>
							<h6 class="dot"> <?=$no_weeks?> week ago</h6>
							<h6 class="dot"><?=$pinfo->time_in_sec?></h6>
						</div>
						<?php } ?>
					</div>
					
				
                </div>
                <?php $n++;}} ?>             
            </div> 
</div>
    

   <div class="custom-pagination custom-pagination-new">
                  <?php 
				  $url_segment = $this->uri->segment(3);
                  $limit=12;
                  $cur_page=$cur_page-1;
                  $start_loop = "";
                  $previous_btn = true;
                  $next_btn = true;
                  $first_btn = true;
                  $last_btn = true;
                  $pag_container = "";
                  $city=$cityName;
                  $location_temp = str_replace(' ','-',$location_temp);
                  $find_temp = str_replace(' ','-',$find_temp);
                  $image = base_url().'assets/images/kotak-tv/pg-ryt.png';
                  $double_arrow_image = base_url().'assets/images/kotak-tv/double-right-arrow.png';
                  if($TotalResults!=false) { 
                    $no_of_paginations = ceil($TotalResults / $limit);
                     if ($cur_page >= 12) {
                          $start_loop = $cur_page - 3;
                          if ($no_of_paginations > $cur_page + 3)
                              $end_loop = $cur_page + 3;
                          else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                              $start_loop = $no_of_paginations - 6;
                              $end_loop = $no_of_paginations;
                          } else {
                              $end_loop = $no_of_paginations;
                          }
                      } else {
                          $start_loop = 1;
                          if ($no_of_paginations > 12)
                              $end_loop = 12;
                          else
                              $end_loop = $no_of_paginations;
                      }
              
                      // Pagination Buttons logic
                      $pag_container .= "
                      <nav aria-label='Page navigation example'>
                          <ul class='pagination'>";
                      if ($first_btn && $cur_page > 1) {
                          if($find_temp=="")
                          {
                              $url = base_url()."kotak-tv"."/";
                          }
                          else
                          {
                              $url = base_url()."/".$find_temp."-in-".$location_temp."/";
                          }
                         
                          $pag_container .= "<a onclick='getNames(0,6)' class='page-link img-right rounded-circle' href='$url' aria-label='Prev'>
                                <img class='img-border double-arrow' style='transform: rotate(180deg)' src='$double_arrow_image'>
                              </a>";
                      } 
                      
                      if ($previous_btn && $cur_page > 1) {
                          $pre = $cur_page - 1;
                          if($find_temp=="")
                          {
							  if($cur_page==undefined){
                              $url = base_url()."kotak-tv"."/1/".$url_segment;
							  }else{
								  $url = base_url()."kotak-tv"."/".$cur_page."/".$url_segment;
							  }
                          }
                          else
                          {
							  if($cur_page==undefined){
                              $url = base_url()."/".$find_temp."-in-".$location_temp."/1/".$url_segment;
							  }else{
								 $url = base_url()."/".$find_temp."-in-".$location_temp."/".$cur_page."/".$url_segment;
							  }
                              
                          }
                          
                          $pag_container .= "<a class='page-link rounded-circle' href='$url' aria-label='Prev'>
                                <img class='img-border ' style='transform: rotate(180deg)' src='$image'>
                              </a>";
                      } 
                      for ($i = $start_loop; $i <= $end_loop; $i++) {
                          if($i==1) 
                              if($find_temp=="")
                              {
								  
                                  $url = base_url()."kotak-tv"."/".$i."/".$url_segment;
                              }
                              else
                              {
                                  $url = base_url()."/".$find_temp."-in-".$location_temp."/".$i."/".$url_segment;
                              }
                              
                          else 
                              if($find_temp=="")
                              {
                                  $url = base_url()."kotak-tv"."/".$i."/".$url_segment;
                              }
                              else
                              {
                                  $url = base_url()."/".$find_temp."-in-".$location_temp."/".$i."/".$url_segment;
                              }
                              
                          $j=$i-1;
                          $pag_container.="<input type='hidden' id='prevActive' value='$cur_page'/>";
                          if ($cur_page == ($i-1))
                              $pag_container .= "<li id='page-$i' class='page-item rounded-circle active'><a class='page-link' href='$url'><p>$i</p></a></li>";
                          else
                              $pag_container .= "<li id='page-$i' class='page-item'><a class='page-link' href='$url'><p>$i</p></a></li>";
                      }
              
                      if ($next_btn && $cur_page < ($no_of_paginations-1)) {
                          $nex = $cur_page + 2;
                          if($find_temp=="")
                          {
                              $url = base_url()."kotak-tv"."/".($nex)."/".$url_segment;
                          }
                          else
                          {
                              $url = base_url()."/".$find_temp."-in-".$location_temp."/".($nex)."/".$url_segment;
                          }
                          
                          $pag_container .= "<a class='page-link rounded-circle img-right' href='$url' aria-label='Prevn'>
                                <img class='img-border' src='$image'>
                              </a>";
                      } 
              
                      if ($last_btn && $cur_page < ($no_of_paginations-1)) {
                          if($find_temp=="")
                          {
                              $url = base_url()."kotak-tv"."/".($no_of_paginations)."/".$url_segment;
                          }
                          else
                          {
                              $url = base_url()."/".$find_temp."-in-".$location_temp."/".($no_of_paginations)."/".$url_segment;
                          }
                          
                          $pag_container .= "<a class='page-link rounded-circle' href='$url' aria-label='Prev'>
                                <img class='img-border double-arrow' src='$double_arrow_image'>
                              </a>";
                      } 
              
                      echo $pag_container;
                    }
                    $to = ($cur_page+1)*$limit;
                    $from = ($to - $limit)+1;
                  ?>
              </div>
                

            <div class="rem-sec-mar">
                <!--
				<section class="tv-content pt-85">
                    <div class="container">
                        <h1 class="live">Live</h1>
                        <h1 class="content-text">TV Content</h1>
                        <div class="dd-fflex">
                            <div class="w-50">
                                <img src="assets/images/kotak-tv/live-img-new.png" class="">
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
				-->

            </div>
        </div>
        <?php $k++;} ?>

  



    </div>
    <!---->
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>



<script>
function view_count(n,category_name,views,videolink){
		var videolink = videolink;
		var views = views;		
		datastring="videolink="+videolink+"&views="+views,		
		$.ajax({url:base_url."/get-views",
		type:"POST",data:datastring,
			dataType:"JSON",success:function(e){
				$('#views_num'+n+category_name).text('');
				
				$('#views_num'+n+category_name).text(e+ ' Views');
				
			}
		}); 
		
		let st = $(input).attr('data-tag');
		lmSMTObj.track("view_count", 
			{ 
				"products": [
					{
					"name": st
					},
				]
			}, function () {});  
		
		
}
</script>
            
			
<script>

function openProduct(category_name,no_id)
    { 
	console.log('Category=='+category_name);
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

<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>



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



</html>