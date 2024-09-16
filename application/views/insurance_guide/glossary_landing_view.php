<?php
//GA code Variables
$categoryGA = '';
if (get_cookie('kotak_customer_type')) {
    if (get_cookie('kotak_customer_type') == 'new_customer') {
        $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
        $categoryGA = "existing customers";
    } elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
        $categoryGA = "life advisor";
    }
} else {
    $categoryGA = "new customers";
}
//GA code Variables
?>

<!-- Section Start -->
<style>
    .fa-twitter:before{background-image: url(/assets/images/twitter.svg);
    content: '' !important;
    width: 31px;
    height: 13px;
    position: absolute;
    left: 58px;
    background-repeat: no-repeat;}
    .glsslider .slick-list {
    min-height: 173px !important;
}
    
    .icon-width{width: 30px !important; height: 30px !important;margin-top: 10px;}

    .share-custom{display: inline-flex;
    align-items: center;
    text-decoration: none;
    color: inherit;
   }
   .glos-view ul .share-top{margin-top: 0 !important;}
    .share-icon{width: 16px;margin-left: 12px;
    height: 16px;}
    .glos-view ul li{border-bottom: 0 !important;}

   
    @media only screen and (max-width: 640px) {
        .rhsFixed_Wrapper {
            margin-top: 45px;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    ul.glossaryUL li span {
        float: left;
        width: 35px;
        height: 35px;
        line-height: 33px;
        text-align: center;
        color: #08315f;
        font-size: 1.4em;
        /* border: 1px solid #08315f;*/
        box-sizing: border-box;
        border-radius: 100%;
        background: #e0e0e0;
        transition: all ease .3s;
        -webkit-transition: all ease .3s;
        -moz-transition: all ease .3s;
        -o-transition: all ease .3s;
        margin-right: 5px;
    }

    a {}

    #heading p {
        text-align: left;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #000;
    }
    .glos-view ul li:last-child:before{
        
        width:0 !important;    }
        .glos-view ul li:last-child{
            padding-left: 1rem !important;
        }
</style>

<section class="glossary-page">
    <!-- breadcrumb Start -->
    <!--<article class="breadcrumb">
        <div class="midWrapper">
            <ul>
                <?php echo $this->breadcrumb->output(); ?>
            </ul>
        </div>
    </article>-->
    <!-- breadcrumb End -->
    <section class="glossery_banner">

        <div class="midWrapper gls-container">
            <div class="glos-banner-tabs">
                <div class="headDesc glos-head">
                    <h1>Insurance Terminology</h1>
                </div>
                <div class="gls-tabs">
                    <ul class="d-flex tabs-list">
                        <li class=""><a href="javascript:void(0)" class="tabtn active" onclick="tabFunction(event, 'termInsurance')">Term Insurance Plans</a></li>
                        <li class=""><a href="javascript:void(0)" class="tabtn" onclick="tabFunction(event, 'savingsPlan')">Savings Plans</a></li>
                        <li class=""><a href="javascript:void(0)" class="tabtn" onclick="tabFunction(event, 'ulipPlans')">ULIP Plans</a></li>
                        <li class=""><a href="javascript:void(0)" class="tabtn" onclick="tabFunction(event, 'healthPlans')">Health Plans</a></li>
                        <li class=""><a href="javascript:void(0)" class="tabtn" onclick="tabFunction(event,'retirementPlans')">Retirement Plans</a></li>

                    </ul>
                    <div class="search-move"><a href="insurance-guide/glossary#gls-search" id="s-move"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
                <div class="moblie-gls-tab">
                    <select class="gls-drop-tsb classic" id="gls-dropdown">
                        <option value="termInsurance">Term Insurance Plans</option>
                        <option value="savingsPlan">Savings Plans</option>
                        <option value="ulipPlans">ULIP Plans</option>
                        <option value="retirementPlans">Retirement Plans</option>
                        <option value="healthPlans">Health Plans</option>
                    </select>
                    <div class="search-move"><a href="<?php echo $actual_link ?>/insurance-guide/glossary#gls-search" id="s-move"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
                <div class="tabcontent-group mt-30">
                    <div class="tabcontent active" id="termInsurance">

                        <div class="glos-view">
                            <p>What is Claim Settlement Ratio? </p>
                            <ul class="view-gls">
                                <li class="share-list share-top"><a href="javascript:void(0)" class="share_toggle share-custom"><img class="share-icon icon-width" src="/assets/images/shareicon.svg" alt=""></a>
                                    <div class="glossary_share" style="display:none">
                                        <ul class="social__icons share-ul d-flex">
                                            <!--<li class="txt-shr">Share</li>-->
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30'," data-title="What is Claim Settlement Ratio? " data-image="https://www.youtube.com/watch?v=SHkXqGD-t30"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                            </li>
                                            <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://www.youtube.com/watch?v=SHkXqGD-t30" data-title="What is Claim Settlement Ratio? "><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.youtube.com/watch?v=SHkXqGD-t30"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://www.youtube.com/watch?v=SHkXqGD-t30/&t=What is Claim Settlement Ratio?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>


                            <div class="video-btn">
                                <a data-fancybox href="https://www.youtube.com/watch?v=SHkXqGD-t30" id="various1"></a>
                            </div>

                            <div class="glos-card mb-30 mt-30">
                                <div class=" glsslider">
                                    <div class="">

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://www.youtube.com/watch?v=9Bv-sS-GtEA" class="termins" onclick="glossary(event, 'termInsurance1')">
                                                    <img data-src="assets/images/glossary/term-plan/critical-illness-thumbnail.jpg" src="assets/images/glossary/term-plan/critical-illness-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-btn"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://www.youtube.com/watch?v=9Bv-sS-GtEA" class="termins" onclick="glossary(event, 'termInsurance1')">
                                                    <h2>What is Critical Illness? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex ">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=9Bv-sS-GtEA'," data-title="What is Critical Illness?" data-image="https://www.youtube.com/watch?v=SHkXqGD-t30"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://www.youtube.com/watch?v=9Bv-sS-GtEA" data-title="What is Critical Illness?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.youtube.com/watch?v=9Bv-sS-GtEA"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://www.youtube.com/watch?v=9Bv-sS-GtEA/&t=What is Critical Illness?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>


                                    </div>

                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/lNEynA5eV5s" class="termins" onclick="glossary(event, 'termInsurance2')">
                                                    <img data-src="assets/images/glossary/term-plan/grace-period-thumbnail.jpg" src="assets/images/glossary/term-plan/grace-period-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?"></a>
                                                <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/lNEynA5eV5s" class="termins" onclick="glossary(event, 'termInsurance2')">
                                                    <h2>What is a Grace Period?</h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/lNEynA5eV5s'," data-title="What is a Grace Period?" data-image="https://www.youtube.com/watch?v=SHkXqGD-t30"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/lNEynA5eV5s" data-title="What is a Grace Period?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/lNEynA5eV5s"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/lNEynA5eV5s/&t=What is a Grace Period?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/ogIGwXd6htU" class="termins" onclick="glossary(event, 'termInsurance3')">
                                                    <img data-src="assets/images/glossary/term-plan/maturity-claim-thumbnail.jpg" src="assets/images/glossary/term-plan/maturity-claim-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/ogIGwXd6htU" class="termins" onclick="glossary(event, 'termInsurance3')">
                                                    <h2>What is a Maturity Claim? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/ogIGwXd6htU'," data-title="What is a Maturity Claim?" data-image="https://youtu.be/ogIGwXd6htU"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/ogIGwXd6htU" data-title="What is a Maturity Claim?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/ogIGwXd6htU"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/ogIGwXd6htU/&t=What is a Maturity Claim?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/YhufZqMuLys" class="termins" onclick="glossary(event, 'termInsurance4')">
                                                    <img data-src="assets/images/glossary/term-plan/death-benefit-thumbnail.jpg" src="assets/images/glossary/term-plan/death-benefit-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/YhufZqMuLys" class="termins" onclick="glossary(event, 'termInsurance4')">
                                                    <h2>What is Death Benefit? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/YhufZqMuLys'," data-title="What is Death Benefit?" data-image="https://youtu.be/YhufZqMuLys"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/YhufZqMuLys" data-title="What is Death Benefit?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/YhufZqMuLys"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/YhufZqMuLys/&t=What is Death Benefit?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/ydmI0jj4338" class="termins" onclick="glossary(event, 'termInsurance5')">
                                                    <img data-src="assets/images/glossary/term-plan/riders-thumbnail.jpg" src="assets/images/glossary/term-plan/riders-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/ydmI0jj4338" class="termins" onclick="glossary(event, 'termInsurance5')">
                                                    <h2>What are Insurance Riders? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/ydmI0jj4338'," data-title="What are Insurance Riders?" data-image="https://youtu.be/ydmI0jj4338"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/ydmI0jj4338" data-title="What are Insurance Riders?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/ydmI0jj4338"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/ydmI0jj4338/&t=What are Insurance Riders?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/6OuQCZIRD2I" class="termins" onclick="glossary(event, 'termInsurance6')">
                                                    <img data-src="assets/images/glossary/term-plan/sum-assured-thumbnail.jpg" src="assets/images/glossary/term-plan/sum-assured-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/6OuQCZIRD2I" class="termins" onclick="glossary(event, 'termInsurance6')">
                                                    <h2>What is sum assured? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex ">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/6OuQCZIRD2I'," data-title="What is sum assured?" data-image="https://youtu.be/6OuQCZIRD2I"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/6OuQCZIRD2I" data-title="What is sum assured?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/6OuQCZIRD2I"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/6OuQCZIRD2I/&t=What is sum assured?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/Gvs8oxyadZ0" class="termins" onclick="glossary(event, 'termInsurance7')">
                                                    <img data-src="assets/images/glossary/term-plan/free-look-thumbnail.jpg" src="assets/images/glossary/term-plan/free-look-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/Gvs8oxyadZ0" class="termins" onclick="glossary(event, 'termInsurance7')">
                                                    <h2>What is Free-Look Period?</h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex ">
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/Gvs8oxyadZ0'," data-title="What is Free-Look Period?" data-image="https://youtu.be/Gvs8oxyadZ0"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/Gvs8oxyadZ0" data-title="What is Free-Look Period?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/Gvs8oxyadZ0"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/Gvs8oxyadZ0/&t=What is Free-Look Period?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/cjNRTAevvVg" class="termins" onclick="glossary(event, 'termInsurance8')">
                                                    <img data-src="assets/images/glossary/term-plan/nominee-thumbnail.jpg" src="assets/images/glossary/term-plan/nominee-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/cjNRTAevvVg" class="termins" onclick="glossary(event, 'termInsurance8')">
                                                    <h2>Who is a policyholder? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/cjNRTAevvVg'," data-title="Who is a policyholder? What does life assured and nominee mean?" data-image="https://youtu.be/cjNRTAevvVg"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/cjNRTAevvVg" data-title="Who is a policyholder? What does life assured and nominee mean?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/cjNRTAevvVg"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/cjNRTAevvVg/&t=Who is a policyholder? What does life assured and nominee mean?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/kzHaGKbu13M" class="termins" onclick="glossary(event, 'termInsurance9')">
                                                    <img data-src="assets/images/glossary/term-plan/policy-tenure-thumbnail.jpg" src="assets/images/glossary/term-plan/policy-tenure-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/kzHaGKbu13M" class="termins" onclick="glossary(event, 'termInsurance9')">
                                                    <h2>What is a Policy Tenure? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/kzHaGKbu13M'," data-title="What is a Policy Tenure? " data-image="https://youtu.be/kzHaGKbu13M"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/kzHaGKbu13M" data-title="What is a Policy Tenure? "><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/cjNRTAevvVg"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/kzHaGKbu13M/&t=What is a Policy Tenure? " target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Video Thumbnail -->
                        <div class="glossery_videos_thumbnail">
                            <div class="video-thumb vid active">
                                <img src="assets/images/glossary/term-insurance-plan-bg.jpg" alt="video-thubmnail">
                            </div>
                            <!--     <div class="video-thumb vid" id="termInsurance1">
                                <img src="assets/images/glossary/term-plan/critical-illness.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance2">
                                <img src="assets/images/glossary/term-plan/grace-period.jpg" src="assets/images/glossary/term-plan/grace-period.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance3">
                                <img src="assets/images/glossary/term-plan/maturity-claim.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance4">
                                <img src="assets/images/glossary/term-plan/death-benefit.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance5">
                                <img src="assets/images/glossary/term-plan/riders.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance6">
                                <img src="assets/images/glossary/term-plan/sum-assured.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance7">
                                <img src="assets/images/glossary/term-plan/free-look.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance8">
                                <img src="assets/images/glossary/term-plan/nominee.jpg">
                            </div>
                            <div class="video-thumb vid" id="termInsurance9">
                                <img src="assets/images/glossary/term-plan/policy-tenure.jpg">
                            </div>-->
                        </div>
                        <!--End Video Thumbnail -->
                    </div>
                    <div class="tabcontent" id="savingsPlan">

                        <div class="glos-view">
                            <p>What is Loyalty Benefit? </p>
                            <ul class="view-gls">
                                <li class="share-list share-top"><a href="javascript:void(0)" class="share_toggle"> <img class="share-icon icon-width" src="/assets/images/shareicon.svg" alt=""></a>
                                    <div class="glossary_share" style="display:none">
                                        <ul class="social__icons share-ul d-flex">
                                            <!--<li class="txt-shr">Share</li>-->
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/gdZ00mqp9OQ'," data-title="What is Loyalty Benefit?" data-image="https://youtu.be/8wZ6TWzFovg"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                            </li>
                                            <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/gdZ00mqp9OQ" data-title="What is Loyalty Benefit?"><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/gdZ00mqp9OQ"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/gdZ00mqp9OQ/&t=What is Loyalty Benefit?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <div class="video-btn">
                                <a data-fancybox href="https://youtu.be/gdZ00mqp9OQ"></a>
                            </div>

                            <div class="glos-card mb-30 mt-30">
                                <div class="row glssavingslider">
                                    <div class="coll-md-4">

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/8wZ6TWzFovg" class="termins" onclick="glossary(event, 'savingsPlans1')">
                                                    <img data-src="assets/images/glossary/savings-plan/investment-tenure-thumbnail.jpg" src="assets/images/glossary/savings-plan/investment-tenure-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/8wZ6TWzFovg" class="termins" onclick="glossary(event, 'savingsPlans1')">
                                                    <h2>What is Investment Tenure? </h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/8wZ6TWzFovg'," data-title="What is Investment Tenure?" data-image="https://youtu.be/8wZ6TWzFovg"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/8wZ6TWzFovg" data-title="What is Investment Tenure?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/8wZ6TWzFovg"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/8wZ6TWzFovg/&t=What is Investment Tenure?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="coll-md-4">

                                        <div class="gcard">
                                            <div class="glos-card-img">
                                                <a data-fancybox href="https://youtu.be/5kT_P9gurmM" class="termins" onclick="glossary(event, 'savingsPlans2')">
                                                    <img data-src="assets/images/glossary/savings-plan/money-back-thumbnail.jpg" src="assets/images/glossary/savings-plan/money-back-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                    <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="video-play"></div>
                                                </a>
                                            </div>
                                            <div class="glos-cont">
                                                <a data-fancybox href="https://youtu.be/5kT_P9gurmM" class="termins" onclick="glossary(event, 'savingsPlans2')">
                                                    <h2>What is a Money-Back Plan?</h2>
                                                </a>
                                                <ul class="view-gls">
                                                    <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                        <div class="glossary_share" style="display:none">
                                                            <ul class="social__icons share-ul d-flex">
                                                                <!--<li class="txt-shr">Share</li>-->
                                                                <li>
                                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/5kT_P9gurmM'," data-title="What is a Money-Back Plan?" data-image="https://youtu.be/5kT_P9gurmM"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                    <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                </li>
                                                                <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/5kT_P9gurmM" data-title="What is a Money-Back Plan?"><span class="fa twit fa-twitter"></span></a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/5kT_P9gurmM"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/5kT_P9gurmM/&t=What is a Money-Back Plan?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Video Thumbnail -->
                        <div class="glossery_videos_thumbnail">
                            <div class="video-thumb vid active">
                                <img src="assets/images/glossary/Savings-Plan-Definition.jpg" alt="banner">
                            </div>
                            <!--<div class="video-thumb vid" id="savingsPlans1">
                                <img src="assets/images/glossary/savings-plan/investment-tenure.jpg">
                            </div>
                            <div class="video-thumb vid" id="savingsPlans2">
                                <img src="assets/images/glossary/savings-plan/money-back.jpg">
                            </div>-->

                        </div>
                        <!--End Video Thumbnail -->
                    </div>
                    <div class="tabcontent" id="ulipPlans">
                        <div class="glos-view">
                            <p>What is Fund Switching Option? </p>
                            <ul class="view-gls">
                                <li class="share-list share-top"><a href="javascript:void(0)" class="share_toggle "> <img class="share-icon icon-width" src="/assets/images/shareicon.svg" alt=""></a>
                                    <div class="glossary_share" style="display:none">
                                        <ul class="social__icons share-ul d-flex">
                                            <!--<li class="txt-shr">Share</li>-->
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/S4cXuF2a7Og'," data-title="What is Fund Switching Option?" data-image="https://youtu.be/S4cXuF2a7Og"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                            </li>
                                            <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/S4cXuF2a7Og" data-title="What is Fund Switching Option?"><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/S4cXuF2a7Og"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/S4cXuF2a7Og/&t=What is Fund Switching Option?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <div class="video-btn">
                                <a data-fancybox href="https://youtu.be/S4cXuF2a7Og"></a>
                            </div>

                            <div class="glos-card mb-30 mt-30">
                                <div class="">
                                    <div class="glsslider">
                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/V6LKlemMFek" class="termins" onclick="glossary(event, 'ulipPlans1')">
                                                        <img data-src="assets/images/glossary/ulip-plan/net-asset-thumbnail.jpg" src="assets/images/glossary/ulip-plan/net-asset-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/V6LKlemMFek" class="termins" onclick="glossary(event, 'ulipPlans1')">
                                                        <h2>What is Net Asset Value? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/V6LKlemMFek'," data-title="What is Net Asset Value?" data-image="https://youtu.be/V6LKlemMFek"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/V6LKlemMFek" data-title="What is Net Asset Value?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/V6LKlemMFek"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/V6LKlemMFek/&t=What is Net Asset Value?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/oz1tc9y0wKk" class="termins" onclick="glossary(event, 'ulipPlans2')">
                                                        <img data-src="assets/images/glossary/ulip-plan/ulip-charges-thumbnail.jpg" src="assets/images/glossary/ulip-plan/ulip-charges-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/oz1tc9y0wKk" class="termins" onclick="glossary(event, 'ulipPlans2')">
                                                        <h2>What are ULIP charges? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/oz1tc9y0wKk'," data-title="What are ULIP charges?" data-image="https://youtu.be/V6LKlemMFek"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/oz1tc9y0wKk" data-title="What are ULIP charges?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/oz1tc9y0wKk"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/oz1tc9y0wKk/&t=What are ULIP charges?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/Yy5sfxGp1yA" class="termins" onclick="glossary(event, 'ulipPlans3')">
                                                        <img data-src="assets/images/glossary/ulip-plan/ulip-returns-thumbnail.jpg" src="assets/images/glossary/ulip-plan/ulip-returns-thumbnail.jpg" alt="What are ULIP returns?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/Yy5sfxGp1yA" class="termins" onclick="glossary(event, 'ulipPlans3')">
                                                        <h2>What are ULIP returns? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/Yy5sfxGp1yA'," data-title="What are ULIP returns?" data-image="https://youtu.be/Yy5sfxGp1yA"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/Yy5sfxGp1yA" data-title="What are ULIP returns?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/Yy5sfxGp1yA"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/Yy5sfxGp1yA/&t=What are ULIP returns?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/Yy5sfxGp1yA" class="termins" onclick="glossary(event, 'ulipPlans4')">
                                                        <img data-src="assets/images/glossary/ulip-plan/fund-value-thumbnail.jpg" src="assets/images/glossary/ulip-plan/fund-value-thumbnail.jpg" alt="What are ULIP returns?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/Yy5sfxGp1yA" class="termins" onclick="glossary(event, 'ulipPlans4')">
                                                        <h2>What is Fund Value? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/Yy5sfxGp1yA'," data-title="What is Fund Value?" data-image="https://youtu.be/Yy5sfxGp1yA"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/Yy5sfxGp1yA" data-title="What is Fund Value?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/Yy5sfxGp1yA"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/Yy5sfxGp1yA/&t=What is Fund Value?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/aTsFxlUAJOY" class="termins" onclick="glossary(event, 'ulipPlans5')">
                                                        <img data-src="assets/images/glossary/ulip-plan/risk-profile-thumbnail.jpg" src="assets/images/glossary/ulip-plan/risk-profile-thumbnail.jpg" alt="What are ULIP returns?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/aTsFxlUAJOY" class="termins" onclick="glossary(event, 'ulipPlans5')">
                                                        <h2>What is Risk Profile? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/aTsFxlUAJOY'," data-title="What is Risk Profile?" data-image="https://youtu.be/aTsFxlUAJOY"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/aTsFxlUAJOY" data-title="What is Risk Profile?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/aTsFxlUAJOY"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/aTsFxlUAJOY/&t=What is Risk Profile?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="">

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/hZABLQiJAa0" class="termins" onclick="glossary(event, 'ulipPlans6')">
                                                        <img data-src="assets/images/glossary/ulip-plan/lock-period-thumbnail.jpg" src="assets/images/glossary/ulip-plan/lock-period-thumbnail.jpg" alt="What are ULIP returns?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/hZABLQiJAa0" class="termins" onclick="glossary(event, 'ulipPlans6')">
                                                        <h2>What is lock-in period? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"><span>Share </span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/hZABLQiJAa0'," data-title="What is lock-in period?" data-image="https://youtu.be/hZABLQiJAa0"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/hZABLQiJAa0" data-title="What is lock-in period?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/hZABLQiJAa0"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/hZABLQiJAa0/&t=What is lock-in period?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Video Thumbnail -->
                        <div class="glossery_videos_thumbnail">
                            <div class="video-thumb vid active">
                                <img src="assets/images/glossary/ULIP-Plan-Glossary.jpg" alt="Ulip Saving">
                            </div>
                            <!--     <div class="video-thumb vid" id="ulipPlans1">
                                <img src="assets/images/glossary/ulip-plan/net-asset.jpg">
                            </div>
                            <div class="video-thumb vid" id="ulipPlans2">
                                <img src="assets/images/glossary/ulip-plan/ulip-charges.jpg">
                            </div>
                            <div class="video-thumb vid" id="ulipPlans3">
                                <img src="assets/images/glossary/ulip-plan/ulip-returns.jpg">
                            </div>
                            <div class="video-thumb vid" id="ulipPlans4">
                                <img src="assets/images/glossary/ulip-plan/fund-value.jpg">
                            </div>
                            <div class="video-thumb vid" id="ulipPlans5">
                                <img src="assets/images/glossary/ulip-plan/risk-profile.jpg">
                            </div>
                            <div class="video-thumb vid" id="ulipPlans6">
                                <img src="assets/images/glossary/ulip-plan/lock-period.jpg">
                            </div>-->

                        </div>
                        <!--End Video Thumbnail -->
                    </div>
                    <div class="tabcontent" id="healthPlans">
                        <div class="glos-view">
                            <p>What is Paid-up Policy? </p>
                            <ul class="view-gls">
                                <li class="share-list share-top"><a href="javascript:void(0)" class="share_toggle"><img class="share-icon icon-width" src="/assets/images/shareicon.svg" alt=""></a>
                                    <div class="glossary_share" style="display:none">
                                        <ul class="social__icons share-ul d-flex">
                                            <!--<li class="txt-shr">Share</li>-->
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/knbEWrzuuzo'," data-title="What is Paid-up Policy?" data-image="https://youtu.be/hZABLQiJAa0"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                            </li>
                                            <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/knbEWrzuuzo" data-title="What is Paid-up Policy?"><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/knbEWrzuuzo"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/knbEWrzuuzo/&t=What is Paid-up Policy?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <div class="video-btn">
                                <a data-fancybox href="https://youtu.be/knbEWrzuuzo"></a>
                            </div>

                            <div class="glos-card mb-30 mt-30">
                                <div class="roww">
                                    <div class="glsslider">
                                        <div>
                                            <a data-fancybox href="https://youtu.be/tF0Fyobfq1o" class="termins" onclick="glossary(event, 'retirementPlans1')">
                                                <div class="gcard g-pad">
                                                    <div class="glos-card-img">
                                                        <img data-src="assets/images/glossary/retirement-plan/co-payment-thumbnail.jpg" src="assets/images/glossary/retirement-plan/co-payment-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </div>
                                                    <div class="glos-cont">
                                                        <h2>What is Co-Payment? </h2>
                                                        <ul class="view-gls">
                                                            <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                                <div class="glossary_share" style="display:none">
                                                                    <ul class="social__icons share-ul d-flex">
                                                                        <!--<li class="txt-shr">Share</li>-->
                                                                        <li>
                                                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/tF0Fyobfq1o'," data-title="What is Co-Payment?" data-image="https://youtu.be/tF0Fyobfq1o"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                            <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                        </li>
                                                                        <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/tF0Fyobfq1o" data-title="What is Co-Payment?"><span class="fa twit fa-twitter"></span></a></li>
                                                                        <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/tF0Fyobfq1o"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                        <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/tF0Fyobfq1o/&t=What is Co-Payment?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/d0Ffx--mJqI" class="termins" onclick="glossary(event, 'retirementPlans2')">
                                                        <img data-src="assets/images/glossary/retirement-plan/deductible-thumbnail.jpg" src="assets/images/glossary/retirement-plan/deductible-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/d0Ffx--mJqI" class="termins" onclick="glossary(event, 'retirementPlans2')">
                                                        <h2>What is a deductible?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex ">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/d0Ffx--mJqI'," data-title="What is a deductible?" data-image="https://youtu.be/d0Ffx--mJqI"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/d0Ffx--mJqI" data-title="What is a deductible?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/d0Ffx--mJqI"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/d0Ffx--mJqI/&t=What is a deductible?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/emhE-xtymqs" class="termins" onclick="glossary(event, 'retirementPlans3')">
                                                        <img data-src="assets/images/glossary/retirement-plan/network-hospitals-thumbnail.jpg" src="assets/images/glossary/retirement-plan/network-hospitals-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/emhE-xtymqs" class="termins" onclick="glossary(event, 'retirementPlans3')">
                                                        <h2>What are network hospitals?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex ">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/emhE-xtymqs'," data-title="What are network hospitals?" data-image="https://youtu.be/emhE-xtymqs"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/emhE-xtymqs" data-title="What are network hospitals?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/emhE-xtymqs"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/emhE-xtymqs/&t=What are network hospitals?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/wR7YplSSV-E" class="termins" onclick="glossary(event, 'retirementPlans4')">
                                                        <img data-src="assets/images/glossary/retirement-plan/no-claim-bonus-thumbnail.jpg" src="assets/images/glossary/retirement-plan/no-claim-bonus-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/wR7YplSSV-E" class="termins" onclick="glossary(event, 'retirementPlans4')">
                                                        <h2>What is No Claim Bonus?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/wR7YplSSV-E'," data-title="What is No Claim Bonus?" data-image="https://youtu.be/wR7YplSSV-E"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/wR7YplSSV-E" data-title="What is No Claim Bonus?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/wR7YplSSV-E"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/wR7YplSSV-E/&t=What is No Claim Bonus?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/zul2dZl8TOo" class="termins" onclick="glossary(event, 'retirementPlans5')">
                                                        <img data-src="assets/images/glossary/retirement-plan/waiting-period-thumbnail.jpg" src="assets/images/glossary/retirement-plan/waiting-period-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/zul2dZl8TOo" class="termins" onclick="glossary(event, 'retirementPlans5')">
                                                        <h2>What is Waiting Period?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex ">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/zul2dZl8TOo'," data-title="What is Waiting Period?" data-image="https://youtu.be/zul2dZl8TOo"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/zul2dZl8TOo" data-title="What is Waiting Period?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/zul2dZl8TOo"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/zul2dZl8TOo/&t=What is Waiting Period?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="glossery_videos_thumbnail">
                            <div class="video-thumb vid active">
                                <img src="assets/images/glossary/Health-Plans-Glossary.jpg" alt="health plan">
                            </div>
                            <!-- <div class="video-thumb vid" id="retirementPlans1">
                                <img src="assets/images/glossary/retirement-plan/co-payment.jpg">
                            </div>
                            <div class="video-thumb vid" id="retirementPlans2">
                                <img src="assets/images/glossary/retirement-plan/deductible.jpg">
                            </div>
                            <div class="video-thumb vid" id="retirementPlans3">
                                <img src="assets/images/glossary/retirement-plan/network-hospitals.jpg">
                            </div>
                            <div class="video-thumb vid" id="retirementPlans4">
                                <img src="assets/images/glossary/retirement-plan/no-claim-bonus.jpg">
                            </div>
                            <div class="video-thumb vid" id="retirementPlans5">
                                <img src="assets/images/glossary/retirement-plan/waiting-period.jpg">
                            </div>
-->

                        </div>
                    </div>
                    <div class="tabcontent" id="retirementPlans">
                        <div class="glos-view">
                            <p>What is Accumulation Period? </p>
                            <ul class="view-gls">
                                <li class="share-list share-top"><a href="javascript:void(0)" class="share_toggle"><img class="share-icon icon-width" src="/assets/images/shareicon.svg" alt=""></a>
                                    <div class="glossary_share" style="display:none">
                                        <ul class="social__icons share-ul d-flex">
                                            <!--<li class="txt-shr">Share</li>-->
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/gdZ00mqp9OQ'," data-title="What is Loyalty Benefit?" data-image="https://youtu.be/8wZ6TWzFovg"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                            </li>
                                            <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/gdZ00mqp9OQ" data-title="What is Loyalty Benefit?"><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/gdZ00mqp9OQ"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/gdZ00mqp9OQ/&t=What is Loyalty Benefit?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <div class="video-btn">
                                <a data-fancybox href="https://youtu.be/a1e2jxgs6GU"></a>
                            </div>

                            <div class="glos-card mb-30 mt-30">
                                <div class="roww">
                                    <div class="glsslider">
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/t-TZ23ZBPrc" class="termins" onclick="glossary(event, 'healthPlans1')">
                                                        <img data-src="assets/images/glossary/healthplan/annuity-thumbnail.jpg" src="assets/images/glossary/healthplan/annuity-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/t-TZ23ZBPrc" class="termins" onclick="glossary(event, 'healthPlans1')">
                                                        <h2>What is Annuity?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/t-TZ23ZBPrc'," data-title="What is Annuity?" data-image="https://youtu.be/t-TZ23ZBPrc"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/t-TZ23ZBPrc" data-title="What is Annuity?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/t-TZ23ZBPrc"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/t-TZ23ZBPrc/&t=What is Annuity?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/K03sv2Ha_tA" class="termins" onclick="glossary(event, 'healthPlans2')">
                                                        <img data-src="assets/images/glossary/healthplan/transfer-value-thumbnail.jpg" src="assets/images/glossary/healthplan/transfer-value-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/K03sv2Ha_tA" class="termins" onclick="glossary(event, 'healthPlans2')">
                                                        <h2>What is Transfer Value?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/K03sv2Ha_tA'," data-title="What is Transfer Value?" data-image="https://youtu.be/K03sv2Ha_tA"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/K03sv2Ha_tA" data-title="What is Transfer Value?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/K03sv2Ha_tA"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/K03sv2Ha_tA/&t=What is Transfer Value?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/grS4L6NW56U" class="termins" onclick="glossary(event, 'healthPlans3')">
                                                        <img data-src="assets/images/glossary/healthplan/vesting-age-thumbnail.jpg" src="assets/images/glossary/healthplan/vesting-age-thumbnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/grS4L6NW56U" class="termins" onclick="glossary(event, 'healthPlans3')">
                                                        <h2>What is Vesting Age? </h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span><img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/grS4L6NW56U'," data-title="What is Vesting Age?" data-image="https://youtu.be/grS4L6NW56U"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/grS4L6NW56U" data-title="What is Vesting Age?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/grS4L6NW56U"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/grS4L6NW56U/&t=What is Vesting Age?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="gcard">
                                                <div class="glos-card-img">
                                                    <a data-fancybox href="https://youtu.be/WHYVSozOQxM" class="termins" onclick="glossary(event, 'healthPlans4')">
                                                        <img data-src="assets/images/glossary/healthplan/premium-payment-thubmnail.jpg" src="assets/images/glossary/healthplan/premium-payment-thubmnail.jpg" alt="What is critical illness?" title="What is critical illness?">
                                                        <div class="video-ply"><img src="assets/images/glossary/white-video-play.png" alt="vedio-play"></div>
                                                    </a>
                                                </div>
                                                <div class="glos-cont">
                                                    <a data-fancybox href="https://youtu.be/WHYVSozOQxM" class="termins" onclick="glossary(event, 'healthPlans4')">
                                                        <h2>What is a Premium Payment Mode?</h2>
                                                    </a>
                                                    <ul class="view-gls">
                                                        <li class="share-list"><a href="javascript:void(0)" class="share_toggle share-custom"> <span>Share</span> <img class="share-icon" src="/assets/images/shareicon.svg" alt=""></a>
                                                            <div class="glossary_share" style="display:none">
                                                                <ul class="social__icons share-ul d-flex">
                                                                    <!--<li class="txt-shr">Share</li>-->
                                                                    <li>
                                                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://youtu.be/WHYVSozOQxM'," data-title="What is a Premium Payment Mode?" data-image="https://youtu.be/WHYVSozOQxM"><span class="fa f_b fa-facebook new-facebook"></span></a>
                                                                        <!--<a class="fb" href="//www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=SHkXqGD-t30" target="_blank"><img alt="facebook" src="images/facebook.jpg"></a>-->
                                                                    </li>
                                                                    <li><a target="_blank" href="https://x.com/intent/tweet?text=A+New+Page&url=https://youtu.be/WHYVSozOQxM" data-title="What is a Premium Payment Mode?"><span class="fa twit fa-twitter"></span></a></li>
                                                                    <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://youtu.be/WHYVSozOQxM"><span class="fa linkedin fa-linkedin"></span></a></li>
                                                                    <li><a target="_blank" href="https://api.whatsapp.com/send?text=https://youtu.be/WHYVSozOQxM/&t=What is a Premium Payment Mode?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="glossery_videos_thumbnail">
                            <div class="video-thumb vid active">
                                <img src="assets/images/glossary/Retirement-Plans-Glossary.jpg" alt="retirment-banner">
                            </div>
                            <!-- <div class="video-thumb vid" id="healthPlans1">
                                <img src="assets/images/glossary/healthplan/annuity.jpg">
                            </div>
                            <div class="video-thumb vid" id="healthPlans2">
                                <img src="assets/images/glossary/healthplan/transfer-value.jpg">
                            </div>
                            <div class="video-thumb vid" id="healthPlans3">
                                <img src="assets/images/glossary/healthplan/vesting-age.jpg">
                            </div>
                            <div class="video-thumb vid" id="healthPlans4">
                                <img src="assets/images/glossary/healthplan/premium-payment.jpg">
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- midWrapper Start -->
    <article class="glos-search">
        <div class="midWrapper">
            <div class="headDesc glos-head">

                <!--h3>Know different life insurance related terms to understand the policies better.</h3-->
                <!--<a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>-->
            </div>
        </div>
    </article>
    <!-- midWrapper End -->

    <!-- midWrapper Start -->
    <article class="searchWrapper glossary-search" id="gls-search">
        <div class="midWrapper">
            <div class="searchBox searchBox01">
                <input type="text" name="search" placeholder="Search for life insurance related terms" data-action="glossary" id="search-keyword" />
                <a href="javascript:;" id="search-keyword-btn">Search</a>
            </div>
        </div>
    </article>
    <!-- midWrapper End -->

    <!-- Insurance Guide Start -->
    <article class="likeWrap glossaryWrap gloss_filter">
        <div class="midWrapper gls_filter">
            <p class="hd">Search alphabetically</p>
            <ul class="glossaryUL">
                <?php
                $alphabets = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

                if (count($alphabets)) {
                    $eventGA = 'event glossary alphabets';
                    $actionGA = 'glossary alphabets';
                    foreach ($alphabets as $value) {
                        $labelGA = strtolower($value);

                        $pageNo     =     (int)secure_input_data(0);
                        $offset        =    $pageNo * GLOSSARY_LIMIT;
                        $keyword     =     secure_input_data($value);

                        $glossaryInfo     =     $this->insurance_guide_model->get_glossaries($keyword, $offset);
                        if (count($glossaryInfo) > 0) {
                            if ($value == 'A') {
                                echo '<li><a href="javascript:;" class="selected ga_track" data-event="event glossary alphabets" data-action="glossary alphabets" data-label="' . $labelGA . '" >' . $value . '</a></li>';
                            } else {
                                echo '<li><a href="javascript:;" class="ga_track" data-event="event glossary alphabets" data-action="glossary alphabets" data-label="' . $labelGA . '">' . $value . '</a></li>';
                            }
                        } else {
                            echo '<li><span class="selected ga_track" data-event="event glossary alphabets" data-action="glossary alphabets" data-label="' . $labelGA . '" >' . $value . '</span></li>';
                        }
                    }
                }

                ?>
            </ul>
            <ul class="reportUL reportUL_noLink " id="glossary-div">
            </ul>
            <?php
            //GA code Variables
            $eventGA  =   'event glossary load more';
            $actionGA =   'glossary';
            $labelGA  =   'load more click';
            //GA code Variables
            ?>
            <a href="javascript:;" class="link" id="load-more-glossary" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
            <div class="noRecord"></div>
            <div class="innerLoader">
                <img src="assets/images/loader.gif" alt="Kotak Loader" />
            </div>
        </div>
    </article>
    <!-- Insurance Guide End -->

    <!--Life Offerings -->
    <section class="glossary-slider" id="various_factors">
        <div class="midWrapper position-relative mb-50">
            <h2 class="mb-20 term-tags fnt-24"> Check out Kotak Life's offerings</h2>

            <span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
            <!--slick counter html ^-->
            <div class="glossslider">
                <div>
                    <div class="kotak-life">
                        <div class="kot-gls">
                            <p class="h3">Term Insurance Plans</p>
                            <p>Take care of your family’s financial future with term insurance. </p>
                            <a href="<?= base_url() ?>term-insurance" class="inknw">Know More</a>
                        </div>
                        <div class="kot-gal savimg-ulip">
                            <img src="assets/images/glossary/term-insurace-plan.png" alt="term-insurance-plans">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="kotak-life">
                        <div class="kot-gls">
                            <p class="h3"><img src="assets/images/glossary/ulip-logos.jpg" alt="ulip-logo"></p>
                            <p>Create wealth & insure your family’s future with ULIP plans.</p>
                            <a href="<?= base_url() ?>ulip-plans" class="inknw">Explore Now</a>
                        </div>
                        <div class="kot-gal savimg-ulip">
                            <img src="assets/images/glossary/ulip.png" alt="ulip">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="kotak-life">
                        <div class="kot-gls">
                            <p class="h3">Savings Plan</p>
                            <p>Save for your long term life goals & achieve them with Savings plan. </p>
                            <a href="<?= base_url() ?>savings-plan" class="inknw">View Savings Plans</a>
                        </div>
                        <div class="kot-gal savimg">
                            <img src="assets/images/glossary/savings-plan.png" alt="saving-plan">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="kotak-life">
                        <div class="kot-gls">
                            <p class="h3">Retirement Plan</p>
                            <p>Invest for relaxed and stress-free second innings in retirement plans. </p>
                            <a href="<?= base_url() ?>insurance-plans/retirement-plans" class="inknw">View Retirement Plans</a>
                        </div>
                        <div class="kot-gal savimg">
                            <img src="assets/images/glossary/retirement.png" alt="retirement">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="kotak-life">
                        <div class="kot-gls">
                            <p class="h3">Health Plan</p>
                            <p>Prepare for critical illnesses related to heart, liver, cancer, brain with our health plan.</p>
                            <a href="<?= base_url() ?>insurance-plans/health-plans" class="inknw">Explore Now</a>
                        </div>
                        <div class="kot-gal savimg">
                            <img src="assets/images/glossary/health-plan.png" alt="health-plan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--End Life Offerings -->

    <section class="glossary-score">
        <div class="midWrapper">
            <div class="score-gls">
                <div class="roww">
                    <div class="coll-md-6">
                        <div class="settle-score">
                            <h2 class="branch-title mobile-kot-life">Why Kotak Life?</h2>
                            <img src="assets/images/glossary/score-banner.png" alt="why kotak life">
                            <div class="settle-content">
                                <!-- <img class="set-koto" src="assets/images/glossary/kotak-logo.svg">-->
                                <div class="settcont">
                                    <ul class="list-set">
                                        <li><span>22 years </span> of legacy & <br> trusted brand</li>
                                        <!-- <li class="clia-gls">Claim Settlement Ratio <span class="n-score">98.82%<sup>*</sup></span></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll-md-6">
                        <div class="kotak-branches">
                            <h2 class="branch-title desktop-brans">Why Kotak Life?</h2>
                            <div class="brances-list">
                                <p class="b-h4">NUMBER OF LIVES INSURED</p>
                                <p class="b-h3">4.54 crore<sup>#</sup></p>
                                <p>as on 31<sup>st</sup> Jan 2023</p>
                            </div>
                            <div class="brances-list">
                                <p class="b-h4">More than</p>
                                <p class="b-h3">1 lakh<sup>@</sup></p>
                                <p>trusted agents</p>
                            </div>
                            <div class="brances-list">
                                <p class="b-h4">BRANCHES</p>
                                <!-- <p>More than</p>-->
                                <p class="b-h3">288</p>
                                <p>as on February 28, 2023</p>
                            </div>
                            <div class="brances-list">
                                <p class="b-h4">CLAIM SETTLEMENT RATIO</p>
                                <!--     <p>Net worth</p>-->
                                <p class="b-h3">98.82%<sup>*</sup></p>
                                <p>For FY 2021 - 2022</p>
                            </div>
                            <p class="glossary-reg">Ref. No. KLI/23 - 24 / E-WEB/184</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="glossary-blogs">
        <div class="midWrapper">
            <div class="roww">
                <div class="coll-md-8">
                    <div class="g-blogs">
                        <p class="gb-h2">Latest Blogs</p>
                        <ul class="gls-blogs-list">
                            <?php if (!empty($latestblogs)) {
                                foreach ($latestblogs as $row) {
                                    if ($row->updated_on != '') {
                                        $dateModified = $row->updated_on;
                                    } else {
                                        $dateModified = $row->posted_date;
                                    }
                                    $readMoreUrl = base_url() . 'insurance-guide/' . $row->topic_url_title . '/' . $row->url_title;

                            ?>

                                    <li>
                                        <div class="gblogcontent">
                                            <div class="gblog-img">
                                                <img src="<?= str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $row->article_image) ?>" alt="est Investment Plans ">
                                            </div>

                                            <div class="gblog-cont">
                                                <p class="gblog-date"><?php echo date(BLOG_DATE_FORMAT, $dateModified); ?> <span> <?= $row->viewed_count ?> Views</span></p>
                                                <a href="<?= $readMoreUrl ?>" target="_blank">
                                                    <h3><?= $row->article_title ?></h3>
                                                </a>
                                                <p><?= $row->short_description ?></p>
                                                <a href="<?= $readMoreUrl ?>" class="read-btn" tabindex="0" target="_blank">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                            <?php }
                            } ?>


                        </ul>
                    </div>
                </div>
                <div class="coll-md-4">
                    <div class="g-blogs-popuplar">
                        <p class="popuplar-title gb-h2">Popular Blogs</p>
                        <ul class="blog-pops">
                            <?php if (!empty($popularblogs)) {
                                foreach ($popularblogs as $blog) {
                                    if ($blog->updated_on != '') {
                                        $dateModified = $blog->updated_on;
                                    } else {
                                        $dateModified = $blog->posted_date;
                                    }
                                    $readMoreUrl = base_url() . 'insurance-guide/' . $blog->topic_url_title . '/' . $blog->url_title;
                            ?>
                                    <li>
                                        <a href="<?= $readMoreUrl ?>" target="_blank">
                                            <h3><?= $blog->article_title ?></h3>
                                        </a>
                                        <span class="popus-date"><?php echo date(BLOG_DATE_FORMAT, $dateModified); ?></span>
                                    </li>
                            <?php }
                            } ?>





                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="glossary-top-stories">
        <div class="midWrapper">
            <div class="gltop-store">
                <h2 class="fnt-24 top-stores-title">Top Stories</h2>
                <div class="roww">
                    <div class="coll-md-8">
                        <div class="glostopslider topsliders-content">
                            <div>
                                <div class="gblogcontent">
                                    <div class="gblog-img">
                                        <img src="assets/images/glossary/Best_Child_Investment_Plans_for_Children.jpg" alt="child's financial security in the future">
                                    </div>
                                    <div class="gblog-cont">
                                        <p class="gblog-date">May 21, 2024 <span> 10,825 Views</span></p>
                                        <a href="<?= base_url() ?>insurance-guide/wealth-creation/best-investment-plans-for-children" target="_blank" tabindex="0">
                                            <h3>Best investment plans for children - Secure your child's future</h3>
                                        </a>
                                        <p>Planning for a child's financial security in the future is a difficult endeavour. </p>
                                        <a href="<?= base_url() ?>insurance-guide/wealth-creation/best-investment-plans-for-children" target="_blank" class="read-btn" tabindex="0">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="gblogcontent">
                                    <div class="gblog-img">
                                        <img src="assets/images/glossary/Types-of-Life-Insurance.jpg" alt="life insurance plan, premium amount">
                                    </div>
                                    <div class="gblog-cont">
                                        <p class="gblog-date">Jan 04, 2024<span> 4,497 Views</span></p>
                                        <a href="<?= base_url() ?>insurance-guide/wealth-creation/why-its-a-good-time-to-explore-ulips-as-an-investment" target="_blank" tabindex="0">
                                            <h3>Here’s why it is a good time to invest in ULIP</h3>
                                        </a>
                                        <p>ULIP helps you choose the right life insurance plan, premium amount, payment method, and policy term to match your savings goals. </p>
                                        <a href="<?= base_url() ?>insurance-guide/wealth-creation/why-its-a-good-time-to-explore-ulips-as-an-investment" target="_blank" class="read-btn" tabindex="0">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll-md-4">
                        <div class="topglossary-illustration">
                            <img src="assets/images/glossary/top-slider-ban.png" alt="top stories">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="glossary-newsletter">
        <div class="midWrapper">
            <div class="roww m-roww">
                <div class="coll-md-4">
                    <div class="news-ills">
                        <img src="assets/images/glossary/subscrible-img_1.png">
                    </div>
                </div>
                <div class="coll-md-8">
                    <div class="newsletter-sec" id="heading">
                        <p>Subscribe to our newsletter</p>
                        <form method="post" id="users-words-form">
                            <ul class="writeusUL">

                                <li class="secondLi">
                                    <ul>
                                        <li>
                                            <input type="text" placeholder="Enter Email ID" id="users-keyword" />
                                            <div class="errorMsg" id="users-keyword-error"></div>
                                        </li>
                                        <li><a href="javascript:;" class="buttonClick" id="user-word-submit">Subscribe</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="terms new-terms how-much gspnewterms" id="terms_conditions" style="top:0;">
        <div class="midWrapper term-design">
            <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>

            <div class="content-col mb-0 tab-align li-disc terms-para">
                <div type="" class="  terms-conditions">Claim Settlement ratio disclaimer<sup>*</sup>:</div>
                <div class="ulipterms">
                    <p><a href="https://irdai.gov.in/documents/37343/366637/Annual+Report+2021-22.pdf/5ac27b18-2520-
1186-8807-00e0342d9f2d?version=1.0&amp;t=1671780581841&amp;download=true">https://irdai.gov.in/documents/37343/366637/Annual+Report+2021-22.pdf/5ac27b18-2520-
                            1186-8807-00e0342d9f2d?version=1.0&amp;t=1671780581841&amp;download=true</a></p>
                    <p><sup>#</sup> Number of Lives Insured - <a href="<?= base_url() ?>why-kotak-life" target="_blank">https://www.kotaklife.com/why-kotak-life</a></p>
                    <p><sup>@</sup>No. of life advisors -
                        <a href="https://www.lifeinscouncil.org/industry%20information/individual_agents_data.aspx" target="_blank">https://www.lifeinscouncil.org/industry%20information/individual_agents_data.aspx</a>
                    </p>

                    <p class="fw-bold" style="font-weight:700!important;"> Regd. Office:</p>
                    <p class="mtb-16" style="margin-bottom:16px!important"> Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285038th
                        Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8
                        am to 10 pm) | Website: https://www.kotaklife.com | Email: kli.in/WECARE Ref. No. KLI/23 - 24/E-WEB/184</p>

                    <p class="fw-bold" style="font-weight:700!important;"> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS</p>
                    <p class="mtb-16" style="margin-bottom:16px!important">
                        IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.<br><br>
                        Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll Free: 1800 209 8800 | Ref. No. KLI/22-23/E-WEB/1475
                        <br><br>
                        Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.
                    </p>


                </div>


            </div>
        </div>
    </section>


    <div id="viewCount"></div>

    <!-- Insurance Guide Start -->
    <!--<article class="planWrap writeusWrap ">
        <div class="midWrapper">
            <p class="hd"> If there is any specific word you are looking for, please write to us.</p>
            <form method="post" id="users-words-form">
                <ul class="writeusUL">
                    <li>
                        <ul>
                            <li>
                                <input type="text" placeholder="Name" id="users-name" />
                                <div class="errorMsg" id="users-name-error"></div>
                            </li>
                            <li>
                                <input type="text" placeholder="Email ID" id="users-email" />
                                <div class="errorMsg" id="users-email-error"></div>
                            </li>
                        </ul>
                    </li>
                    <li class="secondLi">
                        <ul>
                            <li>
                                <input type="text" placeholder="Write word here" id="users-keyword" />
                                <div class="errorMsg" id="users-keyword-error"></div>
                            </li>
                            <li><a href="javascript:;" class="buttonClick" id="user-word-submit">Send</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
            <div class="successMeg" id="form-success"></div>
            <div class="errorMsg" id="form-error"></div>
        </div>
    </article>-->
    <!-- MidWraaper End -->

    <input type="hidden" id="pageNo" value="0">
    <input type="hidden" id="keyword" value="A">
    <input type="hidden" id="pageLimit" value="<?php echo GLOSSARY_LIMIT; ?>">

</section>
<!-- Section End -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script>
    function tabFunction(evt, tabs, vid) {
        var i, tabconts, tabtn, vid, active;
        tabconts = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabconts.length; i++) {
            tabconts[i].style.display = "none";
            tabconts[i].classList.remove("active");

        }

        tabtn = document.getElementsByClassName("tabtn");
        for (i = 0; i < tabtn.length; i++) {
            tabtn[i].className = tabtn[i].className.replace(" active", "");
        }
        document.getElementById(tabs).classList.add("active");
        document.getElementById(tabs).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    function glossary(evt, videoThumb) {
        var i, vid, termins;
        vid = document.getElementsByClassName("vid");
        for (i = 0; i < vid.length; i++) {
            vid[i].classList.remove("active")

        }

        termins = document.getElementsByClassName("termins");
        for (i = 0; i < termins.length; i++) {
            termins[i].className = termins[i].className.replace(" active", "");
        }

        document.getElementById(videoThumb).classList.add("active");
        evt.currentTarget.className += " active";
    }


    var acc = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<script>
    /*     let subjectSel = document.getElementById("gls-dropdown"),
     var termInsurance = document.getElementById("termInsurance");
    
    subjectSel.onchange = function(){
       if(termInsurance === termIns){
           alert('display');
       }
        
    }*/
    $(function() {

        $('#gls-dropdown').change(function() {
            $('.tabcontent').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
<script>
    $('.card-deck a').fancybox({
        caption: function(instance, item) {
            return $(this).parent().find('.card-text').html();
        }
    });
</script>