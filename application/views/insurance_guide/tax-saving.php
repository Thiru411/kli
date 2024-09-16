   <?php 
  //GA code Variables
  $categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    } elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
      $categoryGA = "life advisor";
    }
  }else{
    $categoryGA = "new customers";
  }
  $moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $eventGA = 'event '.$moduleName.' articles';
  $actionGA = $moduleName;
  //GA code Variables
?>


    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>-->
    
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style_tax_saving.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">    
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/mediabox.min.css">
    <style>
    
       button.owl-prev{
            position: absolute;left: -30px;top: 200px;font-size:40px!important;width:30px!important;margin-top:5px!important;transform: rotate(270deg);
        }
        button.owl-next{
            position: absolute;right: -30px;top: 200px;font-size:40px!important;width:30px!important;margin-top:5px!important;transform: rotate(90deg);
        }
		/*ul.navUL>li>a{font-size: 20px;}
		ul.navRhs>li>a{font-size:20px;}
		ul.second_navUL_new>li.thirdLevel .linkAcrd a,ul.second_navUL_new>li a{font-size:14px;}
		ul.navRhs { */
        ul.fixedUL{padding-left:0;}
       
        footer{top: 0;}
		@media (max-width: 640px){
			.owl-carousel{z-index:0 !important;}
		}
    </style>




<!-- Header 
<div class="w3-display-container header kotak-red2 margin-tb-40">
    <div class="w3-container w3-display-left"><a href='#'><img src='images/logo-kotakLife-reverse.png' alt='kotak life' class="logo"></a></div>
    <div class="w3-container w3-display-right"><a href='#' class="w3-text-white"><img src='images/icon-phone-reverse.png' alt='kotak life' class="ico-call"> Request a callback</a></div>
</div>-->
    
<!-- Row 01: Banner -->
<!--<div class="banner-box tax-banner">
    <a href='#'><img src="assets/images/tax-banner.jpg" class="w3-image"></a>
</div>-->
<article class="banner taxsave">
    <ul class="bannerUL white-back" id="homeBanner">


     


       
      <li>

        <div class="vidDiv">
          <img alt="" src="assets/images/banner-16.jpg" alt="Kotak Life Insurance" class="posterImg" />
           <img alt="" src="assets/images/mobile-banner-01.jpg" alt="A Happy Family Image - Kotak Life"  class="mobileBannerImg " />
        </div>
       

      </li>
	  <li>

        <div class="vidDiv">
          <img alt="" src="assets/images/banner-17.jpg" alt="Kotak Life Insurance" class="posterImg" />
           <img alt="" src="assets/images/mobile-banner-02.jpg" alt="A Happy Family Image - Kotak Life"  class="mobileBannerImg " />
        </div>
       

      </li>

      <li>

        <div class="vidDiv">
          <img alt="" src="assets/images/banner-18.jpg" alt="Kotak Life Insurance" class="posterImg" />
           <img alt="" src="assets/images/mobile-banner-03.jpg" alt="A Happy Family Image - Kotak Life"  class="mobileBannerImg " />
        </div>
       
      </li>
	    <li>

        <div class="vidDiv">
          <img alt="" src="assets/images/banner-19.jpg" alt="Kotak Life Insurance" class="posterImg" />
           <img alt="" src="assets/images/mobile-banner-04.jpg" alt="A Happy Family Image - Kotak Life"  class="mobileBannerImg " />
        </div>
       
      </li>
      
		



    </ul>
    <ul class="sliderNav">
    </ul>
  </article>
<!-- //Row 01 -->
    
<!-- ROW 02: -->    
<div class="w3-container w3-center margin-t-40 blue-content">
    <p>Most of us tend to make tax-saving investments in the last quarter of the financial year. This last-minute planning may lead to random investments as the pressure of the deadline looms all over.</p>
    <p>Tax planning is an integral part of managing your personal finances. Appropriate tax planning can not only help you to reduce your tax liabilities by making the most of the tax benefits available under the Income Tax Act, 1961 but also enable you to save towards long term financial security and prosperity. Hence, consider your earnings, expenditure and financial goals while doing your income tax planning.</p>
    <p>Life insurance is a useful financial instrument for income tax planning. The premiums that you pay towards a life insurance policy qualify for a deduction up to INR1.5 lakh under section 80C of Income Tax Act. The proceeds under a life insurance policy are exempt under Section 10(10D) of the Act, subject to the provisions of the said section.</p>
    <p>Kotak Life offers you a variety of plans that will not only enable you to save tax but also help you achieve your financial goals. Toh ab delay mat karo Guru, karo #LifeKiSearch shuru with Kotak Life.</p>
</div>
<!-- //Row 02 -->
    
<!-- ROW 03 -->
<div class="w3-container kotak-heading">
    <div class="w3-content w3-row w3-center">
        <div class="w3-col s1 m4 l3">&nbsp;</div>
        <div class="w3-col s10 m4 l6" style="margin-top: 10px;"><h2 class="round-heading bg-white">Top Plan Options Available</h2></div>
        <div class="w3-col s1 m4 l3">&nbsp;</div>
    </div>
</div>
    
<div class="w3-container kotak-content">
    <div class="w3-content w3-row">
        
        <div class="w3-third w3-row w3-large hover-fx-3 w3-mobile">
            <div class="w3-card no-shado w3-display-container">
                <img src="assets/images/logo-eTerm.jpg" class="w3-image">
                <p>Individual Non-Linked Non-Par Pure Protection Life Insurance Plan</p>
                <a onclick="buttonClick('kotak-e-term-plan-online')" href=base_url."/insurance-plans/protection-plans/kotak-e-term-plan" class="caps">Know more</a>
            </div>
        </div>
        <div class="w3-third w3-row w3-large hover-fx-3 w3-mobile">
            <div class="w3-card no-shado w3-display-container">
                <img src="assets/images/logo-assured.jpg" class="w3-image">
                <p>A Non-Participating Endowment Assurance Plan</p>
                <a onclick="buttonClick('kotak-assured-savings-plan')" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="caps">Know more</a>
            </div>
        </div>
        <div class="w3-third w3-row w3-large hover-fx-3 w3-mobile">
            <div class="w3-card no-shado w3-display-container">
                <img src="assets/images/logo-eInvest.jpg" class="w3-image">
                <p>Individual Non-Linked Non-Par Endowment Life Insurance Plan</p>
                <a  onclick="buttonClick('Kotak-e-Invest')" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-e-invest" class="caps">Know more</a>
            </div>
        </div>
        
    </div>  
</div>
    
<!-- //Row 03 -->
    
<!-- NEW ROW 04: Popular Blogs -->
<div class="w3-container margin-t-40" style="background-color:#efefef;">
    
    <div class="kotak-heading">
        <div class="w3-content w3-row w3-center">
            <div class="w3-col s1 m4 l3">&nbsp;</div>
            <div class="w3-col s10 m4 l6" style="margin-top: 10px;"><h2 class="round-heading kotak-gray">Popular Blogs on Tax Planning</h2></div>
            <div class="w3-col s1 m4 l3">&nbsp;</div>
        </div>
    </div>
    
    
    <div class="w3-container owl-carousel blog-box" style="border: 0px solid blue;">
        <div class="sb">
            <div class="stns">
                <div class="img-advisor"><img src="assets/images/blog-01.jpg">
                <br>
                <p class="w3-xlarge">Income Tax Deductions &amp; Exemptions under Sections 80C...</p>
                <p class="w3-xlarge latoLight">Income tax filing is one of the most important task... <a href=base_url."/insurance-guide/savingstax/income-tax-deductions-list" class="w3-large">read more</a></p></div>
            </div>
        </div>
        <div class="sb">
            <div class="stns">
                <div class="img-advisor">
                <p class="w3-xlarge">Section 10 (10d) of Income Tax Act, 1961 on Payouts of Life Insurance...</p>
                <p class="w3-xlarge latoLight">Life insurance is beneficial to provide a financially secure... <a href=base_url."/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know" class="w3-large">read more</a></p>
                <br>
                    <img src="assets/images/blog-02.jpg">
                </div>
            </div>
        </div>
        <div class="sb">
            <div class="stns">
                <div class="img-advisor"><img src="assets/images/blog-03.jpg">
                <br>
                <p class="w3-xlarge">Section 80C Deductions as per Income Tax Act, 1961.</p>
                <p class="w3-xlarge latoLight">You must have heard about investing in certain financial... <a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction" class="w3-large">read more</a></p></div>
            </div>
        </div>
        <div class="sb">
            <div class="stns">
                <div class="img-advisor">
                <p class="w3-xlarge">Payments towards life insurance are eligible for tax redemption. </p>
                <p class="w3-xlarge latoLight">Ensure that you take the right steps to save up on taxes.<a href=base_url."/insurance-guide/savingstax" class="w3-large">read more</a></p>
                <br>
                    <img src="assets/images/blog-022.jpg">
                </div>
        </div>
    </div>
    
    
    
</div>
    
</div>

<!-- NEW ROW 05: #LifeKiSearch -->
<div class="w3-container life-ki-search padding-b-20">
    
    <div class="w3-container kotak-heading-white">
        <div class="w3-content w3-row w3-center">
            <div class="w3-col s1 m2 l2">&nbsp;</div>
            <div class="w3-col s10 m8 l8" style="margin-top: 10px;"><h2 class="round-heading-white bg-red">Karo #LifeKiSearch Shuru | Kotak Life Tax Planning Solution</h2></div>
            <div class="w3-col s1 m2 l2">&nbsp;</div>
        </div>
    </div>
    
    
    <div class="w3-content w3-center padding">
        
        <p class="w3-large padding-b-30">Income tax season is here. Delaying tax planning can impact your finances, so don’t delay it till the deadline. Get started with your tax planning today with us.</p>
    
        <div class="w3-row-padding w3-large padding-b-40"\>
            <div class="w3-full m6 s12 w3-center">
                <a href="https://youtu.be/_A1Cx4WxBZs" class="mediabox"><img src="assets/images/vid.png" alt="Video 01" class="max-width-90"></a>
            </div>   
        </div>
    
    </div>
</div>
    
<!-- Row 06: Quick Links -->

    
<!-- Row 07: Popular Searches -->

    
<!-- Row 08: Social -->

    
<!-- Row 09: Boxed Links -->

    
<!-- Footer -->    

    


  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/mediabox.min.js"></script>  
<!--<script>
      var owl = $('.tax-plan-carousel');
      owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
</script>-->
<script>

    
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop: true,
    nav: true,
      autoplayTimeout:1000,
    margin: 10,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      960: {
        items: 3
      },
      1200: {
        items: 3
      }
    }
  });
  owl.on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) {
      owl.trigger('next.owl');
    } else {
      owl.trigger('prev.owl');
    }
    e.preventDefault();
  });

    
$(document).ready(function() {
  var owl = $('.owl-carousel2');
  owl.owlCarousel({
    loop: false,
    nav: false,
    margin: 10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      960: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
  owl.on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) {
      owl.trigger('next.owl');
    } else {
      owl.trigger('prev.owl');
    }
    e.preventDefault();
  });
})
</script>
    
<script type="text/javascript">
    MediaBox('.mediabox');
</script>


<script> 
 function buttonClick(input) {
	 //alert(input);
	 console.log('Test PAge='+input);
    //let st = $(input).attr('data-tag');
	
    lmSMTObj.track('productViewed', {
"products": [
{
"name": input
}

],

"labelType": "Click",
"label": input+" Know More"}
);

  }
  

 
</script>