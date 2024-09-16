
<header class="main_header">
    <nav class="navbar navbar-expand-lg navbar-light p-0" style="width:385px;height:40px">
      <div class=" logo"><a rel="nofollow" class="navbar-brand logo" href="<?php echo base_url()?>"><img data-src="<?php echo base_url()?>assets/mobile/images/kotak-logo.png" alt="Kotak Life Insurance - Logo" class="img-fluid lzy_img" height="20px" width="90px"></a></div>
      <div class="whats_search ml-auto d-flex" style="width:217px;height:40px">
        <ul class="d-flex pl-0">
          <li class="align-self-center"><!-- <a rel="nofollow" href="" class="whats_app">9321003007</a> -->
          <a rel="nofollow" href="https://api.whatsapp.com/send/?phone=919321003007&amp;text=Hi" class="whats_app" onclick="dataLayer.push({'event':'event top nav WhatsApp', 'category':'top nav', 'action':'Send Hi to 9321003007','label':<?=base_url?>/search'});">9321003007</a>
          </li>
          <li class="align-self-center"><a rel="nofollow" href="" class="search_icon" data-toggle="modal" data-target="#exampleModal"><span>search</span></a></li>
        </ul>
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse options_list w-100" id="navbarSupportedContent">
        <div class="main_top">
          <div class="d-flex">
             <a rel="nofollow" href="<?php echo base_url()?>switch-customer" class="switch">Switch customer type</a>
            <a rel="nofollow" href="javascript:void(0)" class="close_menu">Close</a>
          </div>
        </div>
		<!--NEW CUSTOMER---->
		<?php if($customerType=='new_customer' || $customerType==''){?>
        <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">
		  <!--<a rel="nofollow" href="<?php //echo base_url()?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
          <div class="card border-0">
              <!-- <h2 class="mb-0 position-relative"> for test purpose-->
              <h2 class="mb-0 position-relative">
            <div class="card-header" id="headingTwo">
              	<div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="ml-auto"><img height="16" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png" alt="arrow" class="lzy_img"></div>
                </button>
                 </div>
              </h2>
           
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/about-us">About Us</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
				  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/csr">CSR</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/career">Career</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>online-plans">Online Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">

                  <div class="ml-auto"><img height="16" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png" alt="arrow" class="lzy_img"></div>
                </button>
              </h2>
            </div>
            <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                 <li>
                  	<a rel="nofollow" data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="li-head">Term Insurance Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>term-insurance/kotak-term-plan" class="arrow">Kotak e-Term Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>
				   <li>
                  	<a rel="nofollow" data-customer-type="new_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'ulip-plan')?> li-head">ULIP Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" data-customer-type="new_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

				  <li>
                  	<a rel="nofollow" data-customer-type="new_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'savings-plan')?> li-head">Savings Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
					
					<li><a rel="nofollow" data-customer-type="new_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a>
						</li>
						
						<li><a rel="nofollow" data-customer-type="new_customer" class="customer-type" href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  		
                  	</ul>

                  </li>

                  <li>
                  	<a rel="nofollow" data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">                  		
                  	</ul>

    </li>

				  <li>
                  	<a rel="nofollow" data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>kotakWebBI/" class="li-head">Tools & Calculators</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" rel="follow" data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance%20_calculator&lead_group=kotak_organic" class="arrow">Term Insurance Calculator</a></li>                  		
                  	</ul>

                  </li>

                </ul>
              </div>
            </div>
          </div>


	          <a rel="nofollow" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="btn btn-link btn-block text-left collapsed only-option">Term Insurance</a>
            

	    <div class="rem-buy-cal dis-none">
              <div class="float-right">
                  <img data-src="<?php echo base_url()?>assets/mobile/images/cancel.png" alt="arrow" class="lzy_img img-fluid cross-red dis-red">
              </div>
              <div>
                 <h2 class="buy-text">Buy a Life Insurance Plan in a few clicks</h2>
                 <h2 class="now">
                  Now you can buy life insurance plan online.
                 </h2>
              </div>
              <div class="kotak-plan pt-10">
                   <div>
                    <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?=base_url()?>assets/images/mb/Kotak-Preferred-e-term.webp" class="lzy_img img-fluid">
                   </div>
                   <p class="kotak-e">Kotak e-Term Plan</p>
                   <p class="plan-pure"> Kotak e-Term Plan provides a high level of protection to your loved ones in your absence.</p>
                    <div class="d-flex">
                        <div>
                             <a rel="nofollow" target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="link">Know more</a>
                        </div>
                        <div>

                             <a rel="nofollow" target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_eterm" target="_blank" class="link onlineBuy buy-hover"> Buy Online</a>
                        </div>
                    </div>
              </div>
			  
			    <div class="kotak-plan pt-40">
                   <div>
                    <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?=base_url()?>assets/images/Kotak-Preferred-e-term.png" class="lzy_img img-fluid">
                   </div>
                   <p class="kotak-e">Kotak Assured Savings Plan</p>
                   <p class="plan-pure"> Kotak Assured Savings Plan is an insurance plan that offers you the dual benefit of returns and life cover and ensures that your goals are sorted, while safeguarding your family’s financial future in case of unforeseen incidents.<p>
                    <div class="d-flex">
                        <div>
                             <a rel="nofollow" target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url()?>savings-plan/buy-kotak-assured-savings-plan" class="link">Know more</a>
                        </div>
                        <div>

                             <a rel="nofollow" target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="<?=base_url()?>buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp " target="_blank" class="link onlineBuy buy-hover"> Buy Online</a>
                        </div>
                    </div>
              </div>

		   <div class="kotak-plan pt-40">
                <div>
                 <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?php echo base_url()?>assets/images/Kotak-Preferred-e-term.png" class="lzy_img img-fluid">
                </div>
                <p class="kotak-e">Kotak E-Invest Plan</p>
                <p class="plan-pure" Kotak e-Invest plan is a complete Unit-Linked Insurance Plan that can be customized as per your goals and needs.</p>
                 <div class="d-flex">
                     <div>
                      <a rel="nofollow" target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat;?>', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="<?=base_url()?>online-plans/ulip-plan/kotak-e-invest" class="link">Know more</a>
                     </div>
                     <div>
                      <a rel="nofollow" target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat;?>', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" rel="follow" target="_blank" class="link onlineBuy buy-hover">Buy Online</a>
                     </div>
                 </div>
           </div>

            </div>
						<!--calculate premium ^-->
						<div class="card border-0">
            <div class="card-header" id="heading13">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>insurance-guide">Calculator</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse13" class="collapse " aria-labelledby="heading13" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                   <li><a rel="nofollow" href="<?php echo base_url() ?>financial-tools-calculators/ulip-calculator" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>

                </ul>
              </div>
            </div>
          </div>
		  
		  
		  
		  <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/about-life-insurance" class="">About Life Insurance</a></li>
				  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/protection" class="">Protection</a></li>
                  <!--<li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/family" class="">Family</a></li>-->
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/wealth-creation" class="">Wealth Creation</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/retirement" class="">Retirement</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/savingstax" class="">Savings &amp; Tax</a></li>
				  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/government-schemes" class="">Government Schemes</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/health-insurance" class="">Health Insurance</a></li>
                  <li><a rel="nofollow" href="#" class="">Wellness</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/glossary" class="">Glossary</a></li>
				   <!--<li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/knowledgevault" class="">Knowledge vault</a></li>-->

                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>insurance-plans">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/protection-plans" class="li-head">Protection Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-e-term-plan" class="arrow">Kotak e-Term Plan</a> <a rel="nofollow" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
							<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-term-plan" class="arrow">Kotak Term Plan</a></li>
								<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-saral-jeevan-bima" class="arrow">Kotak Saral Jeevan Bima</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/protection-plans" class="pl-3 all_plans">View all protection plans</a>
                  </li>
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" class="li-head">Savings and Investment Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
					<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a rel="nofollow" href=" https://www.kotaklife.com/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
					<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan" class="arrow">Kotak Guaranteed Savings Plan</a><a rel="nofollow" href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					<li><a rel="nofollow" href="<?php echo base_url()?>/online-plans/ulip-plan/kotak-e-invest" class="arrow">Kotak E-Invest</a> <a rel="nofollow" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" class="arrow">Kotak Premier Life Plan</a></li>
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" class="arrow">Kotak Single Invest Plus</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" class="pl-3 all_plans">View all saving and investment plans</a>
                  </li>
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-saral-pension" class="arrow">Kotak Saral Pension</a></li>
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-assured-pension" class="arrow">Kotak Assured Pension</a></li>
						<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-lifetime-income-plan" class="arrow">Kotak Lifetime Income Plan</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="pl-3 all_plans">View all retirement plans</a>
                  </li>
                 <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a rel="nofollow" href="<?=base_url()?>buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                  	</ul>
                  </li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/insurance-plan-riders" class="li-head pb-0">Our Rider Solutions</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>kotakWebBI/" class="li-head pb-0">Tools & Calculators</a>
				  <ul class="pl-0 sub-collapse-option">
				 
				 </ul>
				 </li>
        
                </ul>
              </div>
            </div>
          </div>


          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>group-plans">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" class="li-head">Group Gratuity/Leave Encashment</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" class="arrow">Kotak Gratuity Group Plan</a></li>
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" class="arrow">Kotak Leave Encashment Group Plan</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" class="pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-superannuation" class="li-head">Group Superannuation</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" class="arrow">Kotak Secure Return Superannuation Plan</a></li>
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" class="arrow">Kotak Superannuation Group Plan - II</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-superannuation" class="pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-term" class="li-head">Group Term</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>business-solutions/group-term/kotak-term-group-plan" class="arrow">Kotak Term Group Plan</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-term" class="pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-credit" class="li-head">Group Credit</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-credit/kotak-complete-cover-group-plan" class="arrow">Kotak Complete Cover Group Plan</a></li>
                  		<li><a rel="nofollow" href="<?php echo base_url()?>group-plans/group-credit/kotak-group-assure" class="arrow">Kotak Group Assure</a></li>
                  	</ul>
                  	<a rel="nofollow" href="<?php echo base_url()?>group-plans/group-credit" class="pl-3 all_plans">View all Group Credit plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

		  <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a rel="nofollow" data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>how-do-i">
				How Do I
				</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/pay-my-premium"  data-customer-type="new_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="new_customer" class="customer-type">File a Claim</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/manage-my-policy" data-customer-type="new_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/download-application-form" data-customer-type="new_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/get-policy-brochure" data-customer-type="new_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen" data-customer-type="new_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/fund-update" data-customer-type="new_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/	understand-stages-of-application" data-customer-type="new_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/apply-for-life-insurance-plan" data-customer-type="new_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/locate-kotak-branches" data-customer-type="new_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="new_customer" class="customer-type">Download Statements</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/verify-life-advisor" data-customer-type="new_customer" class="customer-type">Verify My Life Advisor</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url()?>how-do-i/registerfor-ecs" data-customer-type="new_customer" class="customer-type">Register For ECS</a></li>
                  
                  <li><a rel="nofollow" href="<?php echo base_url()?>insurance-guide/policy-faqs" data-customer-type="new_customer" class="customer-type">Policy FAQs</a></li>
                 
                  

                </ul>
              </div>
            </div>
          </div>

        </div>
		<!--NEW CUSTOMER END---->


		<!--EXISTING CUSTOMER START---->
		<?php } else if($customerType=='existing_customer'){?>
		 <!--<a rel="nofollow" href="<?php //echo base_url() ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
		 <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

		 <div class="card border-0">

            <div class="card-header" id="heading70">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" href="<?php echo base_url() ?>how-do-i" data-customer-type="existing_customer" class="customer-type">How Do I?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse70" aria-expanded="false" aria-controls="collapse70">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse70" class="collapse " aria-labelledby="heading70" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/pay-my-premium" data-customer-type="existing_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="existing_customer" class="customer-type">File a Claim</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/manage-my-policy" data-customer-type="existing_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/download-application-form" data-customer-type="existing_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/get-policy-brochure" data-customer-type="existing_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/apply-for-life-insurance-plan" data-customer-type="existing_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/locate-kotak-branches" data-customer-type="existing_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/verify-life-advisor" data-customer-type="existing_customer" class="customer-type">Verify My Life Advisor</a></li>
                <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="existing_customer" class="customer-type">Download Statements</a></li>
                <li><a rel="nofollow" href="insurance-guide/policy-faqs" data-customer-type="existing_customer" class="customer-type">Policy FAQs</a></li>
                 
                </ul>
              </div>

            </div>

          </div>

		            <!--fund performance v-->

<div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
				<li><a rel="nofollow" href="<?=base_url()?>fund-performance/nav-performance" data-customer-type="existing_customer" class="customer-type">Nav Performance</a></li>
                   <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Fund Update</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Investment Philosophy</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Investment Fund FAQs</a></li>

                </ul>
              </div>

            </div>

          </div>

          <!--fund performance ^-->

		  <!--insurance guide v-->
		   <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/about-life-insurance" data-customer-type="existing_customer" class="customer-type">About Life Insurance</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/protection" data-customer-type="existing_customer" class="customer-type">Protection</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/wealth-creation" data-customer-type="existing_customer" class="customer-type">Wealth Creation</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/retirement" data-customer-type="existing_customer" class="customer-type">Retirement</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/savingstax" data-customer-type="existing_customer" class="customer-type">Savings &amp; Tax</a></li>
                  <li><a rel="nofollow" href="#" data-customer-type="existing_customer" class="customer-type">Wellness</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-guide/glossary" data-customer-type="existing_customer" class="customer-type">Glossary</a></li>
                </ul>
              </div>
            </div>
          </div>

		  <!--online-plans new v-->
		  	   <div class="card border-0">
            <div class="card-header" id="heading4">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>online-plans">Online Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                 <li>
                  	<a rel="nofollow" data-customer-type="existing_customer" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="customer-type li-head ">Term Insurance Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" data-customer-type="existing_customer" href="<?php echo base_url()?>term-insurance/kotak-term-plan" class="customer-type arrow">Kotak e-Term Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>
				   <li>
                  	<a rel="nofollow"  data-customer-type="existing_customer" class="customer-type li-head"  itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'ulip-plan')?> li-head">ULIP Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

				  <li>
                  	<a rel="nofollow" data-customer-type="existing_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'savings-plan')?> li-head">Savings Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
				<li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a>
						</li>
						
                  		<li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a>
						<a rel="nofollow" href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

                  <li>
                  	<a rel="nofollow" data-customer-type="existing_customer" class="customer-type li-head" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  	
                  	</ul>

                  </li>

				  <li>
                  	<a rel="nofollow" data-customer-type="existing_customer" class="customer-type li-head" href="<?php echo base_url()?>kotakWebBI/" class="li-head">Tools & Calculators </a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" rel="follow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance%20_calculator&lead_group=kotak_organic" class="arrow">Term Insurance Calculator</a></li>
                  		
                  	</ul>

                  </li>

                </ul>
              </div>
            </div>
          </div>
		  <!--online plans new ^-->
<!--calculate premium ^-->
						<div class="card border-0">
            <div class="card-header" id="heading14">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a rel="nofollow" href="<?php echo base_url()?>insurance-guide">Calculator</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse14" class="collapse " aria-labelledby="heading14" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                   <li><a rel="nofollow" href="<?php echo base_url() ?>financial-tools-calculators/ulip-calculator" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
							<li><a rel="nofollow"  href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>

                </ul>
              </div>
            </div>
          </div>
		  <!--insurance plans v-->
		  <div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>insurance-plans">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/protection-plans" data-customer-type="existing_customer" class="customer-type li-head">Protection Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-e-term-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak e-Term Plan</a><a rel="nofollow" class="menu-buy" href="<?=base_url()?>buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans">Buy Online</a></li>
					    <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-term-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Term Plan</a></li>
					    <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-saral-jeevan-bima" data-customer-type="existing_customer" class="customer-type arrow">Kotak Saral Jeevan Bima</a></li>
					   
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/protection-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all protection plans</a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans" data-customer-type="existing_customer" class="customer-type li-head">Savings and Investment Plans</a>
                    <ul class="pl-0 sub-collapse-option">
					<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a rel="nofollow" href=" https://www.kotaklife.com/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
					<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan" class="arrow">Kotak Guaranteed Savings Plan</a><a rel="nofollow" href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					<li><a rel="nofollow" href="<?php echo base_url()?>/online-plans/ulip-plan/kotak-e-invest" class="arrow">Kotak E-Invest</a> <a rel="nofollow" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					
                      <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Premier Life Plan</a></li>
                      <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" data-customer-type="existing_customer" class="customer-type arrow">Kotak Single Invest Plus</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all saving and investment plans</a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/retirement-plans" data-customer-type="existing_customer" class="customer-type li-head">Retirement Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-saral-pension" data-customer-type="existing_customer" class="customer-type arrow">Kotak Saral Pension</a></li>
                      <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-assured-pension" data-customer-type="existing_customer" class="customer-type arrow">Kotak Assured Pension</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/retirement-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all retirement plans</a>
                  </li>
                  
				 <li>
                  	<a rel="nofollow" href="<?php echo base_url()?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="nofollow" href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a rel="nofollow" href="<?=base_url()?>buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                  	</ul>
                  </li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>insurance-plans/insurance-plan-riders" data-customer-type="existing_customer" class="customer-type li-head pb-0">Our Rider Solutions</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>kotakWebBI/" data-customer-type="existing_customer" class="customer-type li-head pb-0">Tools & Calculators</a>
				   <ul class="pl-0 sub-collapse-option">
				 
				 </ul>
				  </li>
          
                </ul>
              </div>
            </div>
          </div>
          <!--insurance plans^-->

           <!--group plans v-->
          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>group-plans">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img height="16" class="lzy_img" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png" alt="arrow"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type li-head">Group Gratuity/Leave Encashment</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Gratuity Group Plan</a></li>
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Leave Encashment Group Plan</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-superannuation" data-customer-type="existing_customer" class="customer-type li-head">Group Superannuation</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Secure Return Superannuation Plan</a></li>
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" data-customer-type="existing_customer" class="customer-type arrow">Kotak Superannuation Group Plan - II</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-superannuation" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type li-head">Group Term</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>business-solutions/group-term/kotak-term-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Term Group Plan</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-credit" data-customer-type="existing_customer" class="customer-type li-head">Group Credit</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-credit/kotak-complete-cover-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Complete Cover Group Plan</a></li>
                      <li><a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-credit/kotak-group-assure" data-customer-type="existing_customer" class="customer-type arrow">Kotak Group Assure</a></li>
                    </ul>
                    <a rel="nofollow" href="<?php echo base_url() ?>group-plans/group-credit" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Credit plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--group plans ^-->



<div class="card border-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>

            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/about-us">About Us</a></li>
                  <li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                    <li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/csr">CSR</a></li>                
				<li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/career">Career</a></li>
                  <li><a rel="nofollow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>



		<!---Existing CUstomer End--->


		<?php } else if($customerType=='life_advisor'){?>
		<div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

        <!--<a rel="nofollow" href="<?php //echo base_url() ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->

          <div class="card border-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>

            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/about-us">About Us</a></li>
                  <li><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                    <li><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/csr">CSR</a></li>                 
				 <li><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a rel="nofollow" data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>




          <div class="card border-0">
            <div class="card-header" id="heading4">
              <a rel="nofollow" href="<?=base_url()?>career-as-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Career as a Life Advisor</a>
            </div>
          </div>

		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <a rel="nofollow" href="<?=base_url()?>hiring-process" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Hiring Process</a>
            </div>
          </div>


		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <a rel="nofollow" href="<?=base_url()?>how-do-i/verify-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Know Our Life Advisors</a>
            </div>
          </div>

		  <div class="card border-0">
            <div class="card-header" id="heading4">
              <a rel="nofollow" href="<?=base_url()?>life-advisor-faqs" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">FAQ'S</a>
            </div>
          </div>

  <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a rel="nofollow"  href="<?=base_url()?>fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                   <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="life_advisor" class="customer-type">Fund Update</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="life_advisor" class="customer-type">Investment Philosophy</a></li>
                  <li><a rel="nofollow" href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="life_advisor" class="customer-type">Investment Fund FAQs</a></li>

                </ul>
              </div>

            </div>

          </div>


        </div>
		<?php } ?>
        
      </div>
    </nav>

  </header>