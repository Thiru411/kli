<!doctype html>
<html lang="en">
<head>
<!-- Google Tag Manager - dataLayer Object Place this code just before </head> tag -->
<script>
dataLayer = [];
</script>
<!-- End dataLayer Object -->
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NH7ZFB6');</script>

<!-- End Google Tag Manager (noscript) -->
<?php
		if(get_cookie('kotak_customer_type')){
		$customerType = get_cookie('kotak_customer_type');
	}else{
		$customerType = "new_customer";
	}
	 ?>
<?php
$actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 /* echo "mamatha".$actual_link_url;*/
 if($actual_link_url==base_url."/online-plans/online-protection-plans")
 {
	 $redirectURL = base_url."/online-plans/online-term-insurance-plans/";
	 redirect("$redirectURL");
 }
if($actual_link_url==base_url."/online-plans/online-protection-plans/kotak-e-term-plan-online")
 {
	 $redirectURL = base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-online";
	 redirect($redirectURL);
 }   ?>

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="canonical" href=base_url."">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700&display=swap" rel="stylesheet">
<link rel="preload" href="<?php echo base_url()?>assets/mobile/css/bootstrap-select.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

<link rel="preload" href="<?php echo base_url()?>assets/mobile/css/custom-min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <title>Kotak Life</title>
  
<script type= "text/javascript"> 
window.lmSMTObj = window.lmSMTObj || [];
var methods = [
    "init",
    "page",
    "track",
    "identify"
]
for (var i=0; i<methods.length; i++) {
    lmSMTObj[methods[i]] = function(methodName){
        return function(){
            lmSMTObj.push([methodName].concat(Array.prototype.slice.call(arguments)));
        };
    }(methods[i]);

}
lmSMTObj.init("zedwk69067jcajamagoj");

var a = document.createElement("script");
a.type = "text/javascript";
a.async = !0;
a.src = "//cdn25.lemnisk.co/ssp/st/6238.js";
var b = document.getElementsByTagName("script")[0];
b.parentNode.insertBefore(a, b);

let page_name= "Kotak Life Insurance";
 console.log("PageName"+page_name);
lmSMTObj.page({
		"pageProps": {
			"name": page_name
		}
	},
	function () {}
);
</script>
</head>
<body>
  <?php include_once ('mobile-header-nav.php');?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered search_sec">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body ">
        <div class="searchBox" >
        <input type="text" name="searchTxt" id="searchTxt" placeholder="Search here" class="search_here">
        <a class="search_btn" id="searchResBtn" name="searchResBtn"><img class="lzy_img" alt="search" data-src="<?php echo base_url()?>assets/images/searchIcon.png"></a>
        </div>
      </div>
    </div>
  </div>
</div>
  <section>
    <div class="online-but d-flex">
	   <a href=base_url."/how-do-i/pay-my-premium" class="m-premium">Pay Premium</a>
	  <a href=base_url."/why-kotak-life/contact-us#contact-us-main" data="Contact Us" class="contact" onclick="dataLayer.push({'event':'event right side menu', 'category':'New Customer', 'action':'Contact Us','label':'click'});">Contact Us</a>     
      <button type="button"  class="buy-online btn-online" onclick="btn_online()">Buy Online</button>
    </div>

    <div class="buy-life dd-none buy-online-new-sec">
              <div class="float-right">
                  <img data-src="<?php echo base_url()?>assets/mobile/images/cancel.png" alt="cancel" class="lzy_img img-fluid cross-red">
              </div>
            
	    <!--new buy online code v-->
         <div class="buy-life-new">
            <h2 class="">Buy a Life Insurance Plan in a few clicks</h2>
            <h2 class="now-txt hide-mobile">Now you can buy life insurance plan online. </h2>
            <div class="buy-life-slick">
              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs">

                      </div>
                      
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak e-Term Plan</p>
                      <p>Protect Your family’s financial future with Kotak e-Term Plan.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_eterm" class="term-anc">Calculate Premium</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs1">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak Assured Savings Plan</p>
                      <p>A plan that offer guaranteed returns and financial protection for your family.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/savings-plan/buy-kotak-assured-savings-plan" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/savings-plan/buy-kotak-assured-savings-plan" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp" class="term-anc">Calculate Premium</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs2">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak Guaranteed Savings Plan </p>
                      <p>A plan that offers long term savings and insurance in one premium.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="hide-desktop knw-mobile">Know more</a>
                      </p>




                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak Guaranteed Savings Plan'});" href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_gsp" class="term-anc">Invest in Savings Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs3">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak e-Invest</p>
                      <p>Insurance and investment in one plan with Kotak e-Invest.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href=base_url."/online-plans/ulip-plan/kotak-e-invest" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href=base_url."/online-plans/ulip-plan/kotak-e-invest" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" class="term-anc">Invest in ULIP</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!--new buy online code ^-->

            </div>


  </section>
  <section class="kotak-life" style="width:425px;height:613px;">
  <img class="blur" style="width:425px;height:279px;" src="<?=base_url()?>assets/images/banner/MobileBanners/KFM-BFM_Mobile-Banner-webp-640x420.webp"/>
    <div class="slider" id="myHomeBanner"  style="display:none;">

	
	 	
	<div class="home-header" style="width:425px;height:570px;">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/KFM-BFM_Mobile-Banner-webp-640x420.webp" alt="banner" class="img-fluid lzy_img"></div>
        <div class="home-content">

          <a data-action="Kotak Fortune Maximiser" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-fortune-maximiser" class="know-more mt-3 pt-1">Know More</a>
        </div>
      </div>

<div class="home-header" style="width:425px;height:570px;">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/term_mobile-webp.webp" alt="term mobile" class="img-fluid img-width lzy_img"></div>
        <div class="home-content">
          <p class="cont2">One time payment =  
          <div><span class="cont2-1">53%* Savings. With single premium payment option of Kotak e-Term plan,</span></div>
		  <p class="cont2"><span style="color:#da251c;">pay once and save upto 53% on your premium amount. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-online-term-insurance/#/landing?utm_source=organic_term&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>
<div class="home-header" style="width:425px;height:570px;">
	 <div id="bp_6238_DmpSlotId164"></div>       
	 </div>
<div class="home-header" style="width:425px;height:570px;">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/ULIP_mobile-webp.webp" alt="ulip" class="img-fluid img-width lzy_img"></div>
        <div class="home-content">
          <p class="cont2">Meet your goal at every stage of life. 
          <div><span class="cont2-1">Choose from available plan options - Maximiser,</span></div>
		  <p class="cont2"><span style="color:#da251c;">Retire rich or Rising star with Kotak e-Invest. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>
 <div class="home-header" style="width:425px;height:570px;">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/KASP_mobile-webp.webp" alt="kasp" class="img-fluid img-width lzy_img"></div>
        <div class="home-content">
          <p class="cont2">Guaranteed@ Returns<br> +<br> LIFE Cover 
          <div><span class="cont2-1">Get Kotak Assured Savings Plan</span></div>
		  <p class="cont2"><span style="color:#da251c;">No more delay, Guru. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>

	   <div class="home-header" style="width:425px;height:570px;">
        <!--<div><img src="<?php echo base_url()?>assets/mobile/images/slick5.png" class="img-fluid"></div>-->
        <div class="home-content">
          <h2 class="vaccinated  mb-2" style="color:#5e6061;font-size:22px;">Wear a mask and get vaccinated against COVID-19 today.</h2>
          <p class="vaccine" style="color:#5e6061;font-size:16px;"> If you are 18+ years, register today to get vaccinated at your
            nearest center.</p>
          <p class="vaccine-header" style="color:#5e6061;font-size:20px;">Follow these 4 simple steps to register:</p>
          <ul class="visit-links" style="list-style-type:disc;">
            <li class="visit-link">Visit www.cowin.gov.in to book your appointment</li>
            <li class="visit-link">Register using your Mobile No. or Aadhar No. or any other identity documents.</li>
            <li class="visit-link">Select your nearby Vaccine Center for vaccination </li>
            <li class="visit-link" > Book your slot to get a Vaccine.</li>
          </ul>
          <div class="d-flex">
           <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href="https://www.cowin.gov.in/" class="know-more mt-3 pt-1">Register Now</a>
            <h2 class="book-button" style="color:#5e6061;font-size:16px;">or book your appointment on Arogya Setu App.</h2>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="life-need1 position-relative">
    <form class="form-horizontal" action="" method="POST" id="myform">
      <fieldset id="account_information" class="">
        
        <section class="life-need">
          <div class="container">
            <h2 class="life-header text-center mb-3 pb-1">Know Your Life's Need</h2>
            <p class="life-cont mb-5">Everything you buy today is tailor-made to your needs. Why should your insurance
              policies
              be
              any different?</p>
            <div class="life-box">
              <h3 class="lifetext ">I AM LOOKING</h3>

              <div class="form-group need_group steps">

                <select class="selectpicker" id="needSegment1" title="Choose your need here" required name="needSegment" onchange="getSegment()">
                  <option>Choose your need here</option>
				   <optgroup label="To Buy">
                     <option value="Term Insurance Plan">Term Insurance Plan</option>
                      <option value="ULIP Plan">ULIP Plan</option>
                      <option value="Assured Savings Plan">Assured Savings Plan</option>
                      <option value="Guranteed Savings Plan">Guranteed Savings Plan</option>
                      <!--<option value="Health Insurance Plan">Health Insurance Plan</option> -->
					  
                    </optgroup>

                    <optgroup label="For Information">
                      <option value="About Term Insurance">About Term Insurance</option>
                      <option value="About ULIP Plans">About ULIP Plans</option>
                      <option value="About Savings Plans">About Savings Plans</option>
                      <option value="About Health Insurance">About Health Insurance</option>
                      <option selected value="About Retirement Plans">About Retirement Plans</option>

                    </optgroup>
                </select>
              </div>
             <!-- <a type="submit" class="btn next">NEXT</a>-->
            </div>
          </div>
        </section>
      </fieldset>
      <fieldset id="company_information" class="">
        <div class="number d-flex">
        <li class="number_li" >1</li>
        <li class="number_li" style="color:#5e6061">2</li>
        <li class="number_li">3</li>
        </div>
        <div class="container  mt-5">
          <div class="kotak-click2">
            <div class="prev-step ">
              <a href="javascript:void(0)" class=" prev">Back</a>
            </div>
            <p class="click2-content mb-4">Tell us something about you to suggest proper plan for you.</p>
            <p class="click2-content mb-4">*All fields Mandatory</p>
<form>
            <div class="form-group mb-3  ">
              <input type="text" required class="form-control" title="Name required." id="custName" placeholder="Your Name " name="custName">
            </div>
            <div class="form-group mb-3 age_group">

              <!---- <input type="text" class="form-control input-text " placeholder="Select country " name="name" data-bv-notempty-message="Please enter country" required>
              <label for="exampleFormControlSelect1">Select country</label>-->
              <select required class="selectpicker" id="ageGroup" title="Choose your age group" name="ageGroup">
                <option>Choose your age group</option>
                <?php
							$years = $bind_ageGroupDDMobile->field_list_items;
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
            </div>
            <div class="form-group mb-3">
              <input type="number" required class="form-control" title="Number required." id="custNumber" name="custNumber" placeholder="Mobile Number ">
            </div>
			 <div class="form-group mb-3">
              <input type="text" required class="form-control" title="City required." id="custCity" name="custCity" placeholder="Your City ">
            </div>
			 <div class="form-group mb-3">
              <input type="text" required class="form-control" title="Pincode required." id="pincode" name="pincode" placeholder="Pincode ">
            </div>

            <!--<a type="submit" id="nextResBtn" data-label="next click" data-action="form 1b"  data-event="event I am looking for" class="btn next link">NEXT</a>-->
			<a href="javascript:;" id="nextResBtn" data-label="next click" data-action="form 1b"  data-event="event I am looking for" class="btn next link">Next</a>
            <!-- <a class="btn btn-primary prev">Previous</a>-->
			</form>
			</div>
          </div>
        </div>
      </fieldset>
      <fieldset id="personal_information" class="">
        <div class="number d-flex">
        <li class="number_li" >1</li>
        <li class="number_li" >2</li>
        <li class="number_li" style="color:#5e6061">3</li>
        </div>
        <div class="container  mt-5">
          <div class="kotak-click2">
            <div class="prev-step ">
              <a href="javascript:void(0)" class=" prev">Back</a>
            </div>

                <div class="save-chat" id="success_data">

                      </div>


          </div>
      </fieldset>
    </form>
  </section>
  <section class="kotak-insurance">
    <div class="container">
      <h2 class="insurance-header text-center">Why Kotak Life Insurance?</h2>
      <p class="insurance-content">Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 34.8 million lives nationwide. It delivers outstanding value to its customers through high customer
        empathy and understanding, lifetime of exceptional service and a suite of insurance products.</p>
      <a href="<?php echo base_url()?>why-kotak-life" class="view-more">View More</a>
      <div class="text-center"><img data-src="<?php echo base_url()?>assets/mobile/images/insurance.png" alt="insurance" class="img-fluid insurance-img lzy_img" width="200px" height="238px"></div>
    </div>
  </section>
  <!--Akshatha ^-->

  <!--suma html v-->
    <!--insurance guide v-->
  <section class="insurance">
    <div class="pad-ins">
      <div class="text-center">
        <h2 class="insurance-text">Insurance Guide</h2>
      </div>
      <p class="kotak-ins">Kotak Life Insurance helps you understand the various benefits of life insurance for you,<!-- your family,--> wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p>
    </div>

    <div class="slick-num position-relative">
         <!--slick v-->
         <div class="family-slick  bx-sd">
           
		<div>
              <div class="card">
                  <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img3.png" alt="sl" class="family-img lzy_img">
                    </div>
                    <h2 class="family-text">Protection</h2>
                    <p class="kotak-ins">A secure future for your family is of utmost importance to you. That’s why Kotak Life Insurance offers you a choice of plans for your unique needs.</p>
                    <a href="<?php echo base_url()?>insurance-guide/protection" class="links-read">Read more</a>
                  </div>
              </div>
            </div>

            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img2.png" alt="sl" class="family-img lzy_img">
                    </div>
                    <h2 class="family-text">Wealth Creation</h2>
                    <p class="kotak-ins">You work hard with commitment to ensure that you and your loved ones achieve your dreams of living in abundance. Here’s how life insurance can help.</p>
                    <a href="<?php echo base_url()?>insurance-guide/wealth-creation" class="links-read">Read more</a>
                </div>
              </div>
            </div>

            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img4.png" alt="sl" class="family-img lzy_img">
                    </div>
                    <h2 class="family-text">Retirement</h2>
                    <p class="kotak-ins">After a fulfilling life of working hard, all you look forward to is a comfortable retired life. And Kotak Life Insurance is every ready to help you.</p>
                    <a href="<?php echo base_url()?>insurance-guide/retirement" class="links-read">Read more</a>
                  </div>
              </div>
            </div>
            <div>
                <div class="card">
                  <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img5.png" alt="sl" class="family-img lzy_img">
                    </div>
                    <h2 class="family-text">About Life Insurance</h2>
                    <p class="kotak-ins">Life insurance has multiple benefits for you, your loved ones and your dreams for future. Choose the plans that complement your needs and for a happy life.</p>
                    <a href="<?php echo base_url()?>insurance-guide/about-life-insurance" class="links-read">Read more</a>
                  </div>
                </div>
            </div>
            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img6.png" alt="sl" class="family-img lzy_img">
                    </div>
                    <h2 class="family-text">Savings & Tax</h2>
                    <p class="kotak-ins">Payments towards life insurance are eligible for tax redemption. Ensure that you take the right steps to save up on taxes.</p>
                    <a href="<?php echo base_url()?>insurance-guide/savingstax" class="links-read">Read more</a>
                </div>
              </div>
            </div>
         </div>
         <input type="text" class="slick-input" id="txtAcrescimo" />
         <p class="slick-input-six">/6</p>
    </div>
  </section>
   <!--how do i section v-->
    <section class="how">
      <div class="text-center">
                <div>
                       <img data-src="<?php echo base_url()?>assets/mobile/images/how-img.png" alt="sl" class="img-fluid lzy_img" width="217px" height="228px">
                </div>
                <h5 class="how-text">How do I</h5>
                <p class="kotak-life">Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
                <div class="pay">
                        <div class="row no-gutters mx-250">
                              <div class="col-md-6 col">
                                       <a href="<?php echo base_url()?>how-do-i/pay-my-premium">
                                                 <div class="how-circle">
                                                        <img data-src="<?php echo base_url()?>assets/mobile/images/how-img1.png" alt="how" class="how-img1 lzy_img">
                                                        <h6 class="pay-text">Pay <br> My Premium</h6>

                                                 </div>
                                       </a>
                              </div>
                              <div class="col-md-6 col">
                                      <a href="https://customer.kotaklifeinsurance.com/ocm">
                                        <div class="how-circle">
                                              <img  data-src="<?php echo base_url()?>assets/mobile/images/how-img2.png" alt="how" class="how-img1 lzy_img">
                                              <h6 class="pay-text">File a Claim</h6>

                                        </div>
                                    </a>
                              </div>
                        </div>

                        <div class="row no-gutters mx-250 mb-25">
                          <div class="col-md-6 col">
                                   <a href="<?php echo base_url()?>how-do-i/manage-my-policy">
                                             <div class="how-circle">
                                                    <img  data-src="<?php echo base_url()?>assets/images/mb/how-img3.webp" alt="how" class="how-img1 lzy_img">
                                                    <h6 class="pay-text">Manage <br> My Policy</h6>

                                             </div>
                                   </a>
                          </div>
                          <div class="col-md-6 col">
                                  <a href="<?php echo base_url()?>how-do-i/locate-kotak-branches">
                                    <div class="how-circle">
                                          <img  data-src="<?php echo base_url()?>assets/images/mb/how-img4.webp" alt="how" class="how-img1 lzy_img">
                                          <h6 class="pay-text">Locate a Kotak Life Branch</h6>

                                    </div>
                                </a>
                          </div>
                    </div>

                    <a href="<?php echo base_url()?>how-do-i" class="view">View All</a>
                </div>
      </div>
    </section>
<footer>
         <div class="footer-pading">
                 <!--new footer v-->
				  <div class="midWrapper">
      <div class="plans roww">


        <div class="incurance w-footer-20">
        <ul class="plan-list">
            <h6>Quick Buy Links </h6>


			<li> <a rel="follow" href=base_url."/buy-online-term-insurance">Term Insurance Quote </a></li>

          <li> <a href=" https://www.kotaklife.com/buy-e-invest-ulip-plan-online">ULIP Calculator </a></li>

          <!--<li> <a href=base_url."/buy-health-insurance-online">Health Insurance Quote </a></li>-->

          <li> <a href=" https://www.kotaklife.com/buy-annuity-plan">Pension Planner </a></li>
		  <li> <a href=" https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/" rel="follow" >Invest in Guaranteed Savings Plan</a></li>
		    <li> <a rel="follow" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing" >Invest in Kotak Assured Savings Plan</a></li>
          </ul>
		  
		   <ul class="plan-list">
            <h6>Calculators </h6>

            <li> <a href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator">Income Tax Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator">ULIP Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" >Retirement Planing Calculator</a></li>

			
          </ul>
		  
		  
		  
          <ul class="plan-list">
            <h6>LIFE INSURANCE PLANS </h6>
            <li><a href=base_url."/online-plans/online-term-insurance-plans"> Term Insurance Plan </a></li>
            <li><a href=base_url."/insurance-plans/savings-and-investments-plans/ "> Unit-Linked Insurance Plans </a></li>
            <li><a href=base_url."/online-plans/retirement-pension-plans  "> Retirement Plans </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/insurance-plans/retirement-plans/kotak-premier-pension-plan">Kotak Premier Pension Plan </a></li>
            </ul>

            <li><a href=base_url."/insurance-plans/health-plans ">Health Insurance Plans </a></li>
            <li><a href=" https://www.kotaklife.com/insurance-plans/savings-and-investments-plans" rel="follow"> Savings & Investment Plans</a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-life-plan"> Kotak Premier Life Plan </a></li>
              <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-single-invest-advantage "> Kotak Single Invest Plus Plan </a></li>
			  <li class="online-dnone"><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></li>
            </ul>
            <li><a href=" https://www.kotaklife.com/insurance-plans/child-plans "> Child Plan</a></li>
            <li><a href=" https://www.kotaklife.com/insurance-plans/insurance-plan-riders"> Insurance Riders </a></li>
          </ul>

        </div>


        <div class="articles w-footer-30">

          <ul class="plan-list">

            <h6>Online Plans</h6>


            <li> <a href=base_url."/online-plans"> All Online Plans </a></li>

            <li> <a href=base_url."/online-plans/online-term-insurance-plans"> Online Term Insurance </a></li>


            <ul class="mtb-0">
              <li> <a href=" https://www.kotaklife.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-online"> Kotak e-Term Plan</a></li>
            </ul>
            <li> <a href="/ulip-plan"> Online Unit-Linked Insurance Plan(ULIP)</a></li>

            <ul class="mtb-0">


              <li> <a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-e-invest"> Kotak e-Invest Plan </a></li>
            </ul>
          
            <li> <a href=" https://www.kotaklife.com/online-plans/savings-plan"> Online Savings & Investment Plan</a></li>
          <li> <a href=" https://www.kotaklife.com/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" > Kotak Guaranteed Savings Plan</a></li>
		   <li> <a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan"> Kotak Assured Savings Plan</a></li>
		  </ul>

          <ul class="plan-list hide-desktop">
            <h6>How Do I?</h6>

            <li> <a href=base_url."/how-do-i/pay-my-premium"> Pay My Premium </a></li>

            <li> <a href="https://customer.kotaklifeinsurance.com/ocm"> File a Claim</a></li>

            <li> <a href=base_url."/how-do-i/manage-my-policy"> Manage My Policy </a></li>

            <li> <a href=base_url."/how-do-i/download-application-form"> Download Application Form </a></li>

            <li> <a href=base_url."/how-do-i/get-policy-brochure"> Get Product Brochure </a></li>

            <li> <a href=base_url."/how-do-i/check-policy-document-specimen"> Check Policy Document Specimen </a></li>

            <li> <a href=" https://www.kotaklife.com/how-do-i/fund-update"> Fund Update</a></li>

            <li> <a href=base_url."/how-do-i/understand-stages-of-application"> Understand the Stages of My Application </a></li>

            <li> <a href=base_url."/how-do-i/locate-kotak-branches"> Locate a Kotak Life Branch </a></li>

            <li> <a href=base_url."//kotakWebBI/"> Premium Calculator </a></li>
          </ul>
          <ul class="plan-list hide-desktop">
            <h6>Group Plans</h6>

            <li><a href=" https://www.kotaklife.com/group-plans/group-gratuity-leave-encashment"> Group Gratuity/Leave Encashment</a></li>
            <ul class="mtb-0">

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan"> Kotak Gratuity Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan">Kotak Leave Encashment Group Plan </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-superannuation"> Group Superannuation </a></li>
            <ul class="mtb-0">

              <li><a href=" https://www.kotaklife.com/group-plans/group-superannuation/kotak-secure-return-superannuation-plan"> Kotak Secure Return Superannuation Plan</a></li>

              <li><a href=base_url."/group-plans/group-superannuation/kotak-superannuation-group-plan-ii"> Kotak Superannuation Group Plan – II </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-term"> Group Term </a></li>

            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-term/kotak-term-group-plan"> Kotak Term Group Plan </a></li>

            </ul>
            <li><a href=base_url."/group-plans/group-credit"> Group Credit </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-credit/kotak-complete-cover-group-plan"> Kotak Complete Cover Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-credit/kotak-group-assure"> Kotak Group Assure </a></li>
            </ul>
          </ul>

        </div>


        <div class="links w-footer-20">
          <ul class="plan-list hide-mobile">
            <h6>How Do I?</h6>

            <li> <a href=base_url."/how-do-i/pay-my-premium"> Pay My Premium </a></li>

            <li> <a href="https://customer.kotaklifeinsurance.com/ocm"> File a Claim</a></li>

            <li> <a href=base_url."/how-do-i/manage-my-policy"> Manage My Policy </a></li>

            <li> <a href=base_url."/how-do-i/download-application-form"> Download Application Form </a></li>

            <li> <a href=base_url."/how-do-i/get-policy-brochure"> Get Product Brochure </a></li>

            <li> <a href=base_url."/how-do-i/check-policy-document-specimen"> Check Policy Document Specimen </a></li>

            <li> <a href=" https://www.kotaklife.com/how-do-i/fund-update"> Fund Update</a></li>

            <li> <a href=base_url."/how-do-i/understand-stages-of-application"> Understand the Stages of My Application </a></li>

            <li> <a href=base_url."/how-do-i/locate-kotak-branches"> Locate a Kotak Life Branch </a></li>

            <li> <a href=base_url."//kotakWebBI/"> Premium Calculator </a></li>
          </ul>
        </div>

        <div class="group w-footer-30">
          <ul class="plan-list hide-mobile">
            <h6>Group Plans</h6>

            <li><a href=" https://www.kotaklife.com/group-plans/group-gratuity-leave-encashment"> Group Gratuity/Leave Encashment</a></li>
            <ul class="mtb-0">

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan"> Kotak Gratuity Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan">Kotak Leave Encashment Group Plan </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-superannuation"> Group Superannuation </a></li>
            <ul class="mtb-0">

              <li><a href=" https://www.kotaklife.com/group-plans/group-superannuation/kotak-secure-return-superannuation-plan"> Kotak Secure Return Superannuation Plan</a></li>

              <li><a href=base_url."/group-plans/group-superannuation/kotak-superannuation-group-plan-ii"> Kotak Superannuation Group Plan – II </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-term"> Group Term </a></li>

            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-term/kotak-term-group-plan"> Kotak Term Group Plan </a></li>

            </ul>
            <li><a href=base_url."/group-plans/group-credit"> Group Credit </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-credit/kotak-complete-cover-group-plan"> Kotak Complete Cover Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-credit/kotak-group-assure"> Kotak Group Assure </a></li>
            </ul>
          </ul>
        </div>


      </div>
    </div>


  <!--popular searches v-->
  <div class="midWrapper">
  <div class="polular-searches">
      <h6>popular searches</h6>
      <div class="popular-search-anc">
        <ul>
          <li><a href=base_url."/online-plans/online-term-insurance-plans">Term Insurance</a></li>
          <li><a href=base_url."/">Life Insurance</a></li>
          <li><a href=base_url."/ulip-plan">ULIP</a></li>
          <li><a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance">Kotak e-Term Plan</a></li>
          <li><a href=base_url."/online-plans/ulip-plan/kotak-e-invest">Kotak e-Invest</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C Tax Benefits</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80D of ITA</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">What is TDS</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">HRA Exemption</a></li>
          <li><a href=base_url."/insurance-guide/protection/what-is-term-insurance">What is Term Insurance</a></li>
          <li><a href=base_url."/insurance-guide/protection/term-insurance-vs.-life-insurance">Term Insurance vs Life Insurance</a></li>
          <li><a href=base_url."/insurance-plans/retirement-plans">Retirement Plan</a></li>
          <li><a href=base_url."/insurance-plans/insurance-plan-riders">Insurance Riders</a></li>
          <li><a rel="follow" href=base_url."/buy-online-term-insurance/">Term Insurance Quote</a></li>
          <!--<li><a href=base_url."/buy-health-insurance-online/">Health Plan Quote</a></li>-->
          <li><a href=base_url."/buy-e-invest-ulip-plan-online/">Invest in ULIP</a></li>
          <li><a href=base_url."/insurance-guide/retirement/what-is-sum-assuredin-a-unit-linked-insurance-plan">ULIP Meaning</a></li>
          <li><a href=base_url."/buy-annuity-plan/">Invest in Retirement Annuity</a></li>
          <li><a href=base_url."/online-plans/savings-plan">Savings Plan</a></li>
          <li><a href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a></li>
          <li><a href=base_url."/buy-kotak-guaranteed-savings-plan-online/">Invest in Savings Plan</a></li>
		   <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></li>
		    <li class="online-dnone"><a rel="follow" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing">Invest in Kotak Assured Savings Plan</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--popular searches ^-->
	 <div class="connect mt-4 as">
		   <ul class="connect d-flex">
				<li class=""><a href="javascript:void(0);" class=" li-a mr-15 p-0">Connect with us</a></li>
				<li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'facebook'});" href="https://www.facebook.com/kotaklife/?utm_source=website&utm_medium=FB_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img   fb_img"> </a></li>
				<li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'twitter'});" href="https://twitter.com/Kotak_Life?utm_source=website&utm_medium=TW_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img    twt"> </a></li>
				<li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'LinkedIn'});" href="https://www.linkedin.com/company/kotak_life/" class=" li-a mr-15 p-0 connect-img  lk"> </a></li>
				<li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'Youtube'});" href="https://www.youtube.com/kotaklifeinsuranceofficial" class=" li-a mr-15 p-0 connect-img  youtube"> </a></li>
				<li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'Instagram'});" href="https://www.instagram.com/kotak.lifeinsurance/?utm_source=website&utm_medium=IG_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img  instagram"> </a></li>
		   </ul>

			 <div class="g2-logo">
			 <img class="lzy_img" height="53" width="100" alt="g20" data-src=base_url."/assets/images/mb/g20_logo_Small.webp"></div>
	</div>
                 <div class="policy">
                        <ul class="service d-flex flex-wrap">
                             <li class="li-a policy-text p-0">Policy Governance</li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Service TATs'});" href="<?php echo base_url()?>grievance-redressal/service-tat" class="ser-li position-relative">Services TATs</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'irdai-handbook'});" href="<?php echo base_url()?>grievance-redressal/irdai-handbook" class="ser-li position-relative">IRDAI Handbook</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'customer-bulletin'});" href="<?php echo base_url()?>grievance-redressal/customer-bulletin" class="ser-li position-relative"> Customer Bulletin </a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'fatca'});" href="<?php echo base_url()?>grievance-redressal/fatca" class="ser-li position-relative">FATCA</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'aml-guidelines'});" href="<?php echo base_url()?>grievance-redressal/aml-guidelines" class="ser-li position-relative rem-before">AML Guidelines</a></li>
                        </ul>
                 </div>
                 <div class="sitemap">
                  <ul class="service d-flex flex-wrap">
                    <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Sitemap'});" href="<?php echo base_url()?>sitemap" class="ser-li position-relative">Sitemap</a></li>
                    <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Website Feedback'});" href="<?php echo base_url()?>website-feedback" class="ser-li position-relative rem-before">Website Feedback</a></li>
                   </ul>
                 </div>
                 <div class="beware-sec">
                      <p class="beware-text">
                           <span class="text-upper">BEWARE OF SPURIOUS / FRAUD PHONE CALLS <br> IRDAI </span>
                           is not involved in activities like selling insurance policies,<br> announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
                      </p>

                      <p class="beware-text mt-10">
                        Beware of spurious emails with ficticious/fraudulent offers. Persons receiving such emails mentioning Kotak Life are requested to highlight the same immediately to kli.riskcontrol@kotak.com with "Spurious Email" in the subject line.
                      </p>

                      <p class="beware-text mt-10">
                        <b>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</b>
                      </p>

                      <p class="beware-text">
                        Kotak Mahindra Life Insurance Company Limited,<br>
                        Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E),<br> Mumbai - 400 051. Website: www.www.kotaklife.com I<br> Email:kli.in/WECARE I Toll Free No.: 1800 209 8800.
                        <br>
                        <br>
                        Registered with Insurance Regulatory & Development Authority <br> (IRDAI) as Life Insurance Company. Regn. No. 107. CIN: <br> U66030MH2000PLC128503
                      </p>
                 </div>

                 <div>

                 <ul class="btmlinks">

    </ul>
	  <ul class="public-dis d-flex flex-wrap">
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Public Disclosure'});" href="<?php echo base_url()?>why-kotak-life/corporate-governance" class="public-lis position-relative">Public Disclosure</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Unclaimed Amount Due to Policyholders'});" href="https://customer.kotaklifeinsurance.com/CP/customerunclaimamount.aspx" class="public-lis position-relative">Unclaimed Amount Due to Policyholders</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Disclaimer'});" href="<?php echo base_url()?>disclaimer" class="public-lis position-relative">Disclaimer</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Privacy Policy'});" href="<?php echo base_url()?>privacy-policy" class="public-lis position-relative">Privacy Policy</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI Customer Education'});" href="https://www.policyholder.gov.in/" class="public-lis position-relative">IRDAI Customer Education</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI'});" href="https://www.irdai.gov.in/" class="public-lis position-relative">IRDAI</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Insurance Ombudsman'});" href="https://www.irdai.gov.in/ADMINCMS/cms/NormalData_Layout.aspx?page=PageNo234&mid=7.2" class="public-lis position-relative">Insurance Ombudsman</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak Mahindra Bank'});" href="https://www.kotak.com/en/home.html" class="public-lis position-relative">Kotak Mahindra Bank</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak General'});" href="https://www.kotakgeneral.com" class="public-lis position-relative">Kotak General Insurance</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Life Insurance Council'});" href="https://www.lifeinscouncil.org/code/Default.aspx" class="public-lis position-relative">Life Insurance Council</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners'});" href="<?php echo base_url()?>corporate-partners" class="public-lis position-relative">Corporate Partners</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners Login'});" href="https://cp.mykotaklife.com/Login/LoginCPR.aspx" class="public-lis position-relative">Corporate Partners Login</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Do Not Call Registry'});" href="<?php echo base_url()?>do-not-call-registry" class="public-lis position-relative">Do Not Call Registry</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Agents Terminated'});" href="<?php echo base_url()?>agents-terminated-due-malpractices" class="public-lis position-relative">Agents Terminated</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Grievance Redressal System'});" href="https://customer.kotaklifeinsurance.com/KGMSUI/Grievance/Information.aspx" class="public-lis position-relative">Grievance Redressal System</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Key Persons'});" href="<?php echo base_url()?>key-persons" class="public-lis position-relative">Key Persons</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'List of our GST registration numbers'});" href="<?php echo base_url()?>assets/images/uploads/why_kotak/list-of-our-gstin-registration-numbers.pdf" class="public-lis position-relative">List of our GST registration numbers</a></li>
			<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Policy Servicing Forms in Regional Languages'});" href="<?php echo base_url()?>regional-forms" class="public-lis position-relative">Policy Servicing Forms in Regional Languages</a></li>
	  </ul>
              <p class="kotak-text">© 2021 Kotak Mahindra Group. All rights reserved.</p>
     </div>
<div class="lets-chat-pop">
    <div style="max-width: 7000px; margin: 0 auto; padding: 0 40px; text-align: left;">
          <!-- <img src="https://haptikappimg.haptikapi.com/uploads/e7e7a63b44e3412e7a2932c6f4428a9f.png" onClick="openChat()" class="custom-icon letschat-btn">-->
		   <img data-src="assets/images/chatexit.gif" onclick="openChat(this)" data-tag="chatBotClick" alt="chat" class="custom-icon mobilechat letschat-btn w-130 lzy_img" width="266px" height="153px">
    </div>
  </div>
         </div>
</footer>

 <script defer src="<?php echo base_url()?>assets/mobile/js/jquery-3.6.0.min.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/bootstrap.bundle.min.js"></script>

  <script defer src="<?php echo base_url()?>assets/mobile/js/bootstrap-select.min.js"></script>
  <!--<script defer src="<?php echo base_url()?>assets/mobile/js/jquery.validate.js"></script>
  <script src="<?php echo base_url()?>assets/mobile/js/slick.js"></script>
		<script async src="<?php echo base_url()?>assets/mobile/js/bootstrapValidator.min.js"></script>
		<script defer src="<?php echo base_url()?>assets/js/common-dev.js"></script>
		-->
  <script defer src="<?php echo base_url()?>assets/mobile/js/slick.min.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/custom.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/need_base_cal.js"></script>
  
<script>
//lazt load 
document.addEventListener("DOMContentLoaded", function() {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                   //onsole.log("lazy loading ", lazyImage);
                    lazyImage.src = lazyImage.dataset.src;
                }
            })
        });
        const arr = document.querySelectorAll('img.lzy_img')
        arr.forEach((v) => {
            imageObserver.observe(v);
        })
    });
//end 
  $(document).ready(function() {
      $(".cross-red").click(function() {
        $(".buy-life").addClass("dd-none");
      });
    });

  function getSegment() {
    var needSegment1 = $("#needSegment1").val();
   // var needSegment2 = $("#needSegment2").val();
    // $('#selected_val_two').val(needSegment1);alert(needSegment1);
    $('#selected_val_two').val(needSegment1);
   // $('#selected_val_three').val(needSegment2);

    if (needSegment1 == "Term Insurance Plan") {
       $target_url = "<?=base_url?>"+"/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "ULIP Plan") {
       $target_url = "<?=base_url?>"+"/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
	if (needSegment1 == "Assured Savings Plan") {
       $target_url = "<?=base_url?>"+"/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
   
    if (needSegment1 == "Guranteed Savings Plan") {
       $target_url = "<?=base_url?>"+"/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "Health Insurance Plan") {
       $target_url = "<?=base_url?>"+"/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "Retirement Plan") {
       $target_url = "<?=base_url?>"+"/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }


    if (needSegment1 == "About Term Insurance") {
       $target_url = "<?=base_url?>"+"/online-plans/online-term-insurance-plans/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About ULIP Plans") {
       $target_url = "<?=base_url?>"+"/online-plans/ulip-plan/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Savings Plans") {
       $target_url = "<?=base_url?>"+"/online-plans/savings-plan/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Health Insurance") {
       $target_url = "<?=base_url?>"+"/insurance-plans/health-plans/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Retirement Plans") {
       $target_url = "<?=base_url?>"+"/insurance-plans/retirement-plans/";
      window.open($target_url, '_blank');
    }
  }
 function close_popup()
 {
	 $(".steps.step01").addClass("selected");

}
	$("#nextResBtn").click(function(){
    var e=$("#custName").val(),
	a=$("#ageGroup").val(),
	t=$("#custNumber").val(),
	s=$("#custCity").val(),
	i=0;
	//$("#needSegment").change(function(){resetvalues()}),
	//$(".link").click(function(){alert()
		var e=$("#needSegment").val(),
		 a=$("#custName").val();
		t=$("#ageGroup").val(),
		s=$("#custNumber").val(),
		i=$("#custCity").val();
		pc=$("#pincode").val();

		datastring="needSegment="+e+"&ageGroup="+t+"&name="+a+"&number="+s+"&custcity="+i+"&pincode="+pc,
		//alert(base_url);
		$.ajax({url:base_url."/need-base-calculator/result",
		type:"POST",data:datastring,
			dataType:"JSON",success:function(e){
				var needSeg = $("#needSegment").val();
				if(needSeg=='Long Term Savings')
				{
					var successdata ='<div>'+
                             '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Assured Savings Plan</h3>'+
                             '<p class="text-kotak">Kotak Assured Savings Plan is an affordable protection plan that enables you to accumulate wealth and strengthens your finances for the future.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>'+
                         '<div class="mt-40">'+
                             '<div> <img  alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Classic Endowment Plan</h3>'+
                             '<p class="text-kotak">Kotak Classic Endowment Plan is a long term protection cum savings plan that offers protection benefit while earning bonuses during the policy term.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-classic-endowment-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>'+
                        '<div class="mt-40">'+
                            '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Premier Endowment Plan</h3>'+
                             '<p class="text-kotak">Kotak Premier Endowment Plan offers Guaranteed Additions in the first 5 policy years and also works to provide you a corpus through continued bonuses.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-endowment-plan" class="links">Know more</a>'+
                            '</div>'+
                        '</div>'+
                        '<div class="mt-40 mb-20">'+
                            '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Premier Moneyback Plan</h3>'+
                             '<p class="text-kotak">Kotak Premier Moneyback Plan is a limited pay plan that provides lump sum payouts at regular intervals to meet your interim financial requirements and let you offer the best to your family.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-moneyback-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>';
					$('#success_data').append(successdata);
				}else
				{
					var successdata = "<div><div class='detail-kotak'>Thank you for your details. We do not have any plans matching your selection. Kindly change your selection and again or <a href=base_url.'/insurance-plans' style='color:red' target=_blank>Click here</a> to browse through our plans.</div></div>";
                    $('#success_data').append(successdata);

				}

			}
		});
  });
    $(document).ready(function(){
  $(".calc-click").click(function(){
    $(".rem-buy-cal").addClass("dd-block");
  });
});

$(document).ready(function(){
  $(".dis-red").click(function(){
    $(".rem-buy-cal").removeClass("dd-block");
    $(".rem-buy-cal").addClass("dis-none");
  });
});

	function btn_online(){
		
		//alert(1)
		 $(".buy-life").toggleClass("dd-none");
		
	}
		

    $(document).ready(function() {
      $(".cross-red").click(function() {
        $(".buy-life").addClass("dd-none");
      });
    });
    $(document).ready(function() {
      $(".close_menu").click(function() {
        $(".navbar-collapse").removeClass("show");
      });
    });
    
 $(document).ready(function(){
let base_url = '<?php echo base_url()?>';
    /*Search Result Start*/
    $("#searchResBtn").click(function() {
        var searchFor = $("#searchTxt").val();
        if (searchFor != "Search here") {
            window.location.href = base_url + "search?q=" + searchFor;
        } else {
            return false;
        }
    });

    $("#searchTxt").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#searchResBtn").click();
        }
    });

    if ($('#searchResBtn404').length >= 1) {
        $("#searchResBtn404").click(function() {
            var searchFor = $("#searchTxt404").val();
            if (searchFor != "Search here") {
				gaSearchTermTracking("event search", "search", '404 page', searchFor.toLowerCase());
                window.location.href = base_url + "search?q=" + searchFor;
            } else {
                return false;
            }
        });

        $("#searchTxt404").keyup(function(event) {
            if (event.keyCode == 13) {
                $("#searchResBtn404").click();
            }
        });
    }
});
    /*Search Result End*/
</script>
<script  type="text/javascript" charset="UTF-8" src="https://toolassets.haptikapi.com/platform/javascript-xdk/production/loader.js"></script>
<script>
function clearOldRef() {
    var arr = [];
    for (var i = 0; i < localStorage.length; i++) {
      if (localStorage.key(i).indexOf('SAVED_TASKS') == -1) {
        arr.push(localStorage.key(i));
      }
    }
    for (var i = 0; i < arr.length; i++) {
      localStorage.removeItem(arr[i]);
    }
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
  }
  clearOldRef();
var haptikInitSettings = {
'primary-color': '#da251c',
'secondary-color': '#f4f4f4',
'widget-positioning': 'bottom-right',
'font-sizes': { 'primary': 14, 'secondary': 18 },
'typography': 'Lato',
'header-text': { 'text': 'Kaya', 'status-text': true},
'composer-placeholder': 'Type your message...',
'header-icon': 'https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962',
'business-id': 978,
'client-id': '763005ee8f30a91f3ab9ab35d15411315c256e46',
'base-url': 'https://kli.haptikapi.com',
'session-timeout': 360000000,
<!--'mode': 'fsm',-->
'custom-button': true,
'ignore-storage': true,
'chat-bubble-text-desktop': "I'm Online",
'chat-bubble-text-mobile': "_NONE_"
 };


function openChat(input) {
	//alert()
HaptikSDK.expandWidget();
let st = $(input).attr('data-tag');
		lmSMTObj.track("chatBotClick", 
			{ 
				"products": [
					{
					"name": st
					},
				]
			}, function () {});  
}

	  $(".close_menu").click(function(){
		  $(".navbar-collapse").removeClass('show');
	  });
	 
		function productClick(input){
			let st = $(input).attr('data-tag');
		lmSMTObj.track("productClick",
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
	 setInterval(function(){
		 $(".blur").remove();
		 $("#myHomeBanner").show();
	 },8000);
 </script>
</body>

</html>