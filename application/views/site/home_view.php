<?php 
function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){
	// Do something for only mobile users
}
else {
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$temp=array();
$temp=explode("/",$actual_link);
 
if($temp[3]=="main"){redirect(base_url());}
	// Do something for only desktop users
}  
?> <style>
    .positionRelative {
        position: relative
    }

    .blur {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 421px;
        z-index: 10
    }

</style>
<section class="home positionRelative"><img class="blur" src="<?=base_url()?>assets/images/banner/banner-022-comp.webp">
    <article class="banner" id="homeBanner">
        <ul class="bannerUL white-back" id="myHomeBanner" style="display:none"> <?php //$this->load->view("home-banner.php");
		include_once("home-banner.php");
		?> </ul>
        <ul class="sliderNav"></ul>
    </article>
    <article class="needCalculatorWrap">
        <div class="midWrapper">
            <div class="midWrap">
                <h1>Know Your Life Insurance Need</h1>
                <div class="contInfo">
                    <div class="leftCont">
                        <p>Everything you buy today is tailor-made to your needs. Why should your insurance policies be any different?</p>
                        <div class="imgDiv"><img class="lazy" data-src="<?=base_url()?>assets/images/looking-for.jpg" alt="Know Your Life's Need"></div>
                    </div>
                    <div class="rightCont">
                        <div class="steps step01"><span>I am</span><span>looking</span>
                            <form id="needForm">
                                <div class="selectbg">
                                    <div class="selectedvalue">Choose your need here</div><select id="needSegment1" class="required" onchange="getSegment()">
                                        <option value="" style="display:none">Choose your need here</option>
                                        <optgroup label="To Buy">/<option value="Term Insurance Plan">Term Insurance Plan</option>
                                        <option value="Kotak Gen2Gen Protect">Kotak Gen2Gen Protect</option>
                                            <option value="Kotak Guaranteed Fortune Builder">Kotak Guaranteed Fortune Builder</option>
                                            <option value="Kotak e-Invest">Kotak e-Invest</option>
                                             <option value="Kotak Tulip">Kotak T.U.L.I.P </option>
                                            <option value="Assured Savings Plan">Kotak Assured Savings Plan</option>
                                            <!-- <option value="Kotak Lifetime Income Plan">Kotak Lifetime Income Plan</option> -->
                                            <option value="Guaranteed Savings Plan">Kotak Guaranteed Savings Plan</option>
                                            <option value="Assured Pension">Kotak Assured Pension </option>
                                        </optgroup>
                                        <optgroup label="For Information">
                                            <option value="About Term Insurance Plan">About Term Insurance Plan</option>
                                            <option value="About ULIP Plans">About ULIP Plans</option>
                                            <option value="About Savings Plans">About Savings Plans</option>
                                            <option value="About Health Insurance">About Health Insurance</option>
                                            <option value="About Retirement Plans">About Retirement Plans</option>
                                        </optgroup>
                                    </select>
                                    <p class="emptyError">Please select your need</p>
                                </div>
                            </form>
                        </div>
                        <div class="steps step02">
                            <form id="needFormContact">
                                <p>Tell us something about you to suggest proper plan for you.</p>
                                <ul class="step2Form">
                                    <li class="mandatoryTxt">
                                        <p>*All fields Mandatory</p>
                                    </li>
                                    <li><input type="text" id="custName" maxlength="20" class="required" placeholder="Your Name "><span class="nameRequired">Name required.</span></li>
                                    <li>
                                        <div class="selectbg">
                                            <div class="selectedvalue ageGp">Choose your age group</div><select id="ageGroup" class="required">
                                                <option>Choose your age group</option> <?php 
							$years = $ageGroupDD->field_list_items;
							$pieces = preg_split('/[\n]+/', $years);
							foreach($pieces as $date){
								if (strpos($date, '-') !== false) {
									$dateV = str_replace('-', 'to', $date);
								}
								if (strpos($date, '&') !== false) {
									$dateV = str_replace('&', 'and', $date);
								}
								
								echo "<option value='{$dateV}'>$date</option>";
							}
							?>
                                            </select>
                                        </div><span class="ageRequired">Age group required.</span>
                                    </li>
                                    <li><input type="text" id="custNumber" maxlength="10" onkeypress="return isNumber(event)" class="required" placeholder="Mobile Number"><span class="numberRequired">Number required.</span></li>
                                    <li><input type="text" id="custCity" maxlength="20" class="required" placeholder="Your City "><span class="cityRequired">City required.</span></li>
                                    <li><input type="text" id="pincode" maxlength="20" class="required" placeholder="Pincode"><span class="cityRequired">Pincode required.</span></li>
                                </ul><a href="javascript:;" id="nextResBtn" data-label="next click" data-action="form 1b" data-event="event I am looking for" class="link">Next</a>
                            </form>
                        </div>
                        <div class="steps step03">
                            <div class="innerLoader"><img src="<?=base_url()?>assets/images/loader.gif" alt="Kotak Loader"></div>
                            <div class="lookingWrap scroll-pane" id="lookingScroll">
                                <ul class="planUL" id="planResultUL"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="altColor whyKotak">
        <div class="midWrapper">
            <div class="midWrap">
                <h2>Why Kotak<br>Life Insurance?</h2>
                <div class="rgtCont">
                    <div class="carouselWrap">
                        <ul class="carouselUL" id="carousel_01">
                            <li>
                                <div class="contWrap">
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <p>Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 50 million lives nationwide (as on June 30<sup>th</sup>,2024). It delivers outstanding value to its customers through high customer empathy and understanding, lifetime of exceptional service and a suite of insurance products.</p><a href="<?=base_url()?>why-kotak-life" class="links ga_track" data-action="why kli|life at kli" data-label="know more" data-event="event why kotak slider">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="sliderControlWrap hideWrap">
                            <ul class="sliderCount">
                                <li>4</li>
                                <li>5</li>
                            </ul>
                            <div class="sliderControl"><a href="javascript:;" class="prev">Prev</a><a href="javascript:;" class="next">Next</a></div>
                        </div>
                    </div><img alt="whyKotak" class="whyKotakImg lazy" data-src="<?=base_url()?>assets/images/whyKotak_img.png">
                </div>
            </div>
        </div>
    </article>
    <article class="insuranceGuide">
        <div class="midWrapper">
            <div class="midWrap">
                <h2>Insurance Guide</h2>
                <div class="lftCont">
                    <p>Kotak Life Insurance helps you understand the various benefits of life insurance for you, your wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p>
                </div>
                <div class="rgtCont">
                    <div class="carouselWrap">
                        <ul class="carouselUL" id="carousel_02">
                            <li>
                                <div class="imgSrc"><img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-Protection.jpg" alt="Insurance Protection - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-WealthCreation.jpg" alt="Wealth Creatioin - kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-Retirement.jpg" alt="insurance retirement - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-AboutLifeInsurance.jpg" alt="Life Insurance - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-TaxAndSaving.jpg" alt="tax saving - Kotak Life"></div>
                                <div class="contWrap">
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb1"></div>
                                            <h3>Protection</h3>
                                            <p>A secure future for your family is of utmost importance to you. That’s why Kotak Life Insurance offers you a choice of plans for your unique needs.</p><a href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb2"></div>
                                            <h3>Wealth Creation</h3>
                                            <p>You work hard with commitment to ensure that you and your loved ones achieve your dreams of living in abundance. Here’s how life insurance can help.</p><a href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb3"></div>
                                            <h3>Retirement</h3>
                                            <p>After a fulfilling life of working hard, all you look forward to is a comfortable retired life. And Kotak Life Insurance is every ready to help you.</p><a href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb4"></div>
                                            <h3>About Life Insurance</h3>
                                            <p>Life insurance has multiple benefits for you, your loved ones and your dreams for future. Choose the plans that complement your needs and for a happy life.</p><a href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb5"></div>
                                            <h3>Savings & Tax</h3>
                                            <p>Payments towards life insurance are eligible for tax redemption. Ensure that you take the right steps to save up on taxes.</p><a href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="sliderControlWrap">
                            <ul class="sliderCount">
                                <li>4</li>
                                <li>5</li>
                            </ul>
                            <div class="sliderControl"><a href="javascript:;" data-label="left" class="prev">Prev</a><a href="javascript:;" class="next" data-label="right">Next</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="altColor howDoWrap">
        <div class="midWrapper">
            <div class="midWrap">
                <div class="midCont"><img alt="how-do-i" class="lazy" data-src="<?=base_url()?>assets/images/how-do-i.png">
                    <div class="cont">
                        <h2>How do I</h2>
                        <p>Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
                    </div>
                </div>
                <div class="howdoUL_wrap">
                    <ul class="howdoUL">
                        <li><a href="<?php echo base_url(HDI_MODULE_LINK . '/pay-my-premium') ?>" class="payOnline active ga_track" data-action="how do i" data-label="pay my premium" data-event="event existing customers homepage sections"><span>Pay<br>My Premium</span></a></li>
                        <li><a href="https://customer.kotaklifeinsurance.com/ocm" target="_blank" class="KMBankATMDropBox ga_track" data-action="how do i" data-label="file a claim" data-event="event existing customers homepage sections"><span>File a Claim</span></a></li>
                        <li><a href="<?php echo base_url(HDI_MODULE_LINK.'/manage-my-policy') ?>" class="branchOffices ga_track" data-action="how do i" data-label="manage my policy" data-event="event existing customers homepage sections"><span>Manage<br>My Policy</span></a></li>
                        <li><a href="<?php echo base_url(HDI_MODULE_LINK.'/locate-kotak-branches') ?>" class="ECS_NACH ga_track" data-action="how do i" data-label="locate kotak branches" data-event="event existing customers homepage sections"><span>Locate a Kotak Life branch</span></a></li>
                    </ul>
                    <div class="viewAll"><a href="<?php echo base_url(HDI_MODULE_LINK); ?>" class="ga_track" data-action="how do i" data-label="view all" data-event="event existing customers homepage sections">View All</a></div>
                </div>
            </div>
        </div>
    </article>
</section>
<script>
    var cg_json = "",
        cg_json1 = "",
        cg_json2 = "",
        cb_json = "";

    function getSegment() {
    var e = $("#needSegment1").val();
    $("#selected_val_two").val(e), "Kotak Tulip" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Assured Pension" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Term Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Kotak e-Invest" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Assured Savings Plan" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Guaranteed Savings Plan" == e && ($target_url = "https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Health Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Retirement Plan" == e && ($target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Kotak Guaranteed Fortune Builder" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "About Term Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/term-insurance", window.open($target_url, "_blank")), "About ULIP Plans" == e && ($target_url = "https://www.kotaklife.com/ulip-plans", window.open($target_url, "_blank")), "About Savings Plans" == e && ($target_url = "https://www.kotaklife.com/savings-plan", window.open($target_url, "_blank")), "About Health Insurance" == e && ($target_url = "https://www.kotaklife.com/insurance-plans/health-plans", window.open($target_url, "_blank")), "About Retirement Plans" == e && ($target_url = "https://www.kotaklife.com/insurance-plans/health-plans", window.open($target_url, "_blank")), "Kotak Lifetime Income Plan" == e && ($target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Kotak Gen2Gen Protect"== e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank"))
    } 

    function close_popup() {
        $(".steps.step01").addClass("selected")
    }

</script>
