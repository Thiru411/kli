<?php 
  //GA code Variables
  $categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    }
  }else{
    $categoryGA = "new customers";
  }
  $actionGA = isset($planInfo->title) ? strtolower($planInfo->title) : '';
  //GA code Variables
?>
<style>
.paraa-p a, .faqsWrap p a{color: #08315F;}
ul.bullet{width:initial!important;float:initial!important;}
ul.accordUL{position:relative; z-index:9;}
.taxx{font-size:16px;}
.two-bb{display:flex;}
.get-button {
	margin:0 5px 0 0;
	text-align:center;
	display:inline;
}
.two-bb .get-button:only-child{
	width:100%;
}

.buttons11 {
  width: 960px;
  margin: 0 auto;
}

.action_btn {
  display: inline-block;
  width: calc(50% - 4px);
  margin: 0 auto;
  font-size:16px;
  color:red;
  text-decoration:none;
}

.reqir-table tr th, .reqir-table tr td{font-size:16px;}
.reqir-table tr th{padding-left:20px;}
    ul.accordUL li{height: auto;}
	
<?php
if ($_SERVER['REQUEST_URI']=="/insurance-plans/child-plans")  {
?>
#v{display:none;}
.faqsWrap .term-blog{top:0;}
.faqsWrap .term-blog #articles-div li{margin-bottom:40px;}
.loadmores{width:100%; text-align:center;}
.loadmores #load-more-articles{display:inline-block !important; margin:7rem; 0 0 !important;}
@media only screen and (max-width: 480px){
	.faqsWrap .term-blog #articles-div li{margin-bottom:10px; height:auto !important;}
}
<?php } ?>
</style>
<!-- Section Start -->
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1><?php echo isset($planInfo->title) ? $planInfo->title : '' ?></h1>
		<?php if($planInfo->title=='Savings and Investments Plans'){?>
		<!--<a style="color:#fff" href="<?=base_url()?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign= buy_online&utm_content=savingsofflinepage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Buy Online</a>-->
		  <div class="dd-btn-flex">
                                  <a href="<?=base_url()?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=buy_online&utm_content=savingsofflinepage" target="_blank" class="redBtn ksap-btn detbtn online-dnone">Invest in Kotak Assured Savings Plan</a>
                                  <a href="<?=base_url()?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=buy_online&utm_content=savingsofflinepage" target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});" class="redBtn  detbtn">Invest in Kotak Guaranteed Savings Plan</a>
                              
                                  </div>
		<?php } ?>
		
        <?php echo isset($planInfo->insurance_type_description) ? $planInfo->insurance_type_description : '' ?>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- Banner Start -->
  <article class="innerbanner">
  <?php if($planInfo->title=="Retirement and Pension Plans"){?>
  <a href="<?=base_url()?>/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=category_buy_online&utm_content=category_annuity" target="_blank" class="redBtn retirement-cta" onclick="dataLayer.push({'event': 'event retirement plans buy online', 'category': 'new customers', 'action': 'retirement plan', 'label': 'buy online1'});">Buy Retirement Plan Online</a>
  <?php } ?>
  <?php if(isset($planInfo->insurance_type_image) && $planInfo->insurance_type_image != '') { ?>
    <img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planInfo->insurance_type_image) ?>" alt="Online Savings Plan - Kotak Life">
	
  <?php } ?>
  <?php if(isset($planInfo->plan_type_video) && $planInfo->plan_type_video != '') { ?>
    <video id="v" controls="false" loop="" autoplay="">
      <source src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planInfo->plan_type_video) ?>" type="video/mp4">
    </video>
  <?php } ?>
  </article>
  <!-- Banner End --> 
  
  <?php if(isset($planInfo->insurance_type_plan_title) && $planInfo->insurance_type_plan_title != '') { ?>
  <!-- midWrapper Start -->
  <article class="planWrap">
    <div class="midWrapper">
      <div class="topDesc">
        <h2><?php echo isset($planInfo->insurance_type_plan_title) ? $planInfo->insurance_type_plan_title : '' ?></h2>
        <p><?php echo isset($planInfo->insurance_type_plan_description) ? $planInfo->insurance_type_plan_description : '' ?> </p>
      </div>
	  <?php if(sizeof($insuraceTypePlanInfo) > 0) { ?>
      <ul class="innerUL protPlanUL">
		<?php foreach($insuraceTypePlanInfo as $detail) { ?>
        <li>
			<?php if(isset($detail->image) && $detail->image != '') { ?>
            <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"></div>
			<?php } ?>
			<p><?php echo isset($detail->title) ? $detail->title : '' ?></p> 
        </li>
		<?php } ?>
      </ul>
	  <?php } ?>
    </div>
  </article>
  <!-- midWrapper Start -->
  <?php } ?>
  
  
  <!---------------accordin starts here-------------->
  <?php 
  
  $page_title="";  
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  
  $temp=array();
  $temp=explode("/",$actual_link);
  $page_title=$temp[4];
     
          if($page_title=="retirement-plans")
          { ?>
          <article class="faqsWrap" id="faqsWrapDiv">
			<div class="midWrapper para-p">
			<p class="paraa-p">Retirement planning refers to a multi-step process of defining retirement income goals and the strategy required to achieve the said goals. In general terms, retirement planning involves making financial strategies to save, invest and distribute money for your sustenance and survival during retirement.</p>
			<!--<p class="paraa-p">Retirement is considered as the golden period of life. Hence, it is important to plan this time in a way that you are financially stable and do not outlive your savings. Kotak Life understands the need to maintain your financial independence even after retirement. To enable you to take care of yourselves, we offer two attractive retirement plans so that you ‘Live Life King Size’ even after retirement.</p>-->
			
			
			
			
		
		
		
			
			
			
			
			
			<h2 class="h2bold paraa-p mt-10 mb-0">Why do You Need a Good Retirement Plan?</h2>
			<p class="paraa-p">Retirement planning is not limited to assets and income. It includes a holistic evaluation of these, along with future costs, liabilities and overall life expectancy. Ideally, it is a life-long process, which can be started at any time. However, it is always best to plan your retirement years well and much in advance.</p>
				<ul class="bullet reg-plan">
					<li><b>Tackle impending medical emergencies: </b> As you age, health problems only increase. This means you would be required to shell out more money towards medical expenses later in life. The inflation rate is predicted to rise by nearly 14-15% each year in this space. So, your savings should also grow at the same rate to match the inflation.  </li>
					<li><b>Effectively combat inflation in the future: </b>Inflation is a sad reality, and in a country like India, inflation is expected to cross standard 5% estimate. This would imply that by the time you retire, your savings would be worth much less in comparison to the present times. A robust retirement plan will ensure that you do not outlive your reserves and have a strong purchasing power even in retirement.</li>
					<li><b>Substitute the lack of state sponsorships: </b>Unlike the UK and the U.S., there are no specific pension or other retirement plans that Indian government offers to retirees of the private sector. Hence, after retirement, you have to take charge of your livelihood. </li>
				</ul>
			<h2 class="h2bold paraa-p mt-10 mb-20 float-left w-100"> What are the Benefits of Retirement Planning?</h2>
			<p class="paraa-p">Retirement planning is a crucial process to ensure you enjoy the non-working years of your life. For this, you need to invest in a reliable retirement plan so that you are secured for life. </p>
				<ul class="bullet">
					<li><b>Peace of mind and well-preparedness:</b> A well-planned retirement reduces your stress and also makes you more prepared for uncertainties and emergencies, including medical crises. It provides you with a sense of self-reliance and makes your golden years more relaxed.</li>
					<li><b>Assurance of savings and steady retirement income:</b>  Planning adequately for retirement ensures you have substantial savings to support your standard of living during a time when you do not have a steady source of income.</li>
					<li><b>Secure property and assets:</b> Without a strong retirement plan, you would more be inclined towards selling off assets and properties to manage your expenses later. However, building a retirement fund will safeguard your assets and property, and allow you to pass it on as a legacy to your children.</li>
					<li><b>Effective transition from working to non-working mode: </b>An in-depth retirement plan helps you transition smoothly from a working force to a non-working force. You would be in a more secure place and can move on in life easily.</li>
					<li><b>Reduction in taxes in later years of life:</b> Retirement planning helps you reduce taxes that you would otherwise be liable to pay during retirement. A good retirement plan can also help you to minimise liabilities and taxes for the beneficiaries.</li>
					<li><b>Minimise costs with lower premiums at a young age: </b>A retirement plan made in the younger years helps you plan and save better. You would be likely to pay lower premiums, and thus, have better chances to save and grow funds.</li>
					<li><b>Provides guaranteed^ monthly income: </b>Pension plans offer a fixed income in retirement in exchange of investments made today. This allows you to not only make the most of your hard-earned income but also gives you enough flexibility.</li>
					<li><b>Facilitate encashing on the long-term investment benefits:</b>Retirement plans are long-term plans, and depending on the annuity option you choose, your annuity rates will be decided It allows you a steady income in retirement, helping you live a stress-free life.</li>
					<li><b>Offer flexibility in payment of premiums:</b> Retirement plans in India allow you to either invest a lump sum and get immediate annuity receipts or select a deferred plan that allows you to pay the premium and decide when you want to start receiving the regular income from.  </li>
					<li><b>Provide death benefits and riders like a life insurance cover:</b> Some pension plans offer a death benefit, where a lump sum is paid to the family or the nominee can opt to buy annuity. You can also buy additional cover through riders for selective plans and strengthen your protection. So, at a minimal cost, you can increase your coverage and avail yourself of numerous additional benefits.</li>
					<li><b>Offer tax benefits allowing more savings: </b>Retirement plans are eligible for tax benefit under <a style="color:#0b396b;"href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-section-80ccc-of-the-income-tax-act-1961" target="_blank">Section 80CCC</a> as per the Income Tax Act, 1961. </li>
					
				</ul>
			<h2 class="h2bold paraa-p mt-10 mb-20 float-left w-100">What are Retirement Plans?</h2>
			<p class="paraa-p">Retirement plans are reliable financial security solutions, that helps you secure your future financially. The purpose of a pension plan is to safeguard the future years of life and secure a regular income after retirement. A good retirement plan can help maintain your living standard, as well as combat the rising inflation and the overall high cost of living.</p>
			<!--<p class="paraa-p">You can choose to pay regular pension plan premiums or a lump sum payment, and allow your funds to grow significantly during the working years of life. These funds can be used to create a stable income during retirement. Among other pension plans in India, Kotak’s Premier Pension Plan, helps you accumulate adequate retirement wealth to live the golden years of your life. This retirement pension plan allows your funds to grow sufficiently and also offers assured benefits on death and vesting.</p>-->
			<h2 class="h2bold paraa-p mt-10 mb-20 float-left w-100">What are the Features of Retirement Plan?</h2>
			<p class="paraa-p mt-20 mb-0">A pension plan is a very popular retirement tool. Some of its most significant features and benefits include:</p>
			<!--<p class="paraa-p"><u>Features of a retirement pension plan</u></p>-->
			<ul class="bullet">
					<li><b>Tax Efficiency: </b>One of the most talked-about features of a retirement plan is the tax deduction that it offers. Policyholders can avail themselves of tax exemptions under different sections of the Income Tax Act, 1961.</li>
					<li><b>Accumulation Duration: </b>When policyholders invest in a pension plan, they accrue wealth over time to create a sizeable corpus that includes investment in addition to the gains.</li>
					<li><b>Vesting Age: </b>Pension plans allow policyholders to have a wide range of vesting age. The minimum age is generally 45-50 years, while the maximum can extend till 70 years. This large vesting age bracket allows policyholders to determine when they wish to receive their regular pension as per their requirements. </li>
			</ul>
			<!--<p class="paraa-p"><u>Benefits of a retirement pension plan</u></p>
			<ul class="bullet">
					<li><b>Provide guaranteed monthly income:</b> Pension plans, offer a fixed income in retirement in exchange of investments made today. Moreover, you can select a monthly income plan for a specific period or your whole life post-retirement.</li>
					<li><b>Allow you to choose asset classes to diversify funds:</b> Best pension plans in India, like Kotak Premier Pension Plan, allow you to choose classes of assets, which will majorly form your portfolio.</li>
					<li><b>Facilitate encashing on the long-term investment benefits:</b> Since retirement pension schemes are long-term, your funds can earn significant benefits. Retirement pension plans accumulate a strong corpus, allowing you a steady income in retirement.</li>
					<li><b>Offer flexibility in payment of premiums:</b> Retirement plans India allow you to either invest a lump sum and get immediate annuity receipts or select a deferred plan that allows the funds to accumulate more interest until the payments begin. Moreover, the plans also have high vesting age, usually 40 to 70 years.</li>
					<li><b>Provide death benefits and riders like a life insurance cover:</b> Some pension plans offer a death benefit, where a lump sum is paid to the family or the nominee. There are also optional riders like accidental death benefit and permanent disability benefit rider.</li>
					<li><b>Offer tax benefits allowing more savings:</b> Retirement pension plans are eligible for tax deductions up to Rs. 1. 5lac under Section 80CCC and 10(10A) as per the Income Tax Act, 1961. </li>
		  	</ul>
			<h2 class="h2bold paraa-p">What are the Eligibility Criteria for Investing in a Retirement Pension Plan?</h2>
			<p class="paraa-p">Best pension plans in India have a similar type of eligibility requirements. Some basic eligibility criteria include:</p>
			<ul class="bullet">
					<li><b>Minimum and maximum entry age limits:</b> To be eligible for investing in retirement plans India, you should be at least 30 years old. However, you cannot invest in a pension plan if you are above 55 or 60 years, depending on the type of scheme.</li>
					<li><b>Minimum and Maximum Basic Sum Assured:</b> You cannot invest less than Rs. 2 lacs in a retirement pension scheme. Alternatively, the upper limit is subject to underwriting.</li>
					<li><b>Minimum and Maximum vesting age:</b> In most retirement pension plans, the vesting age is between 45-70 years.</li>
					<li><b>Policy term:</b> The policy term varies per the chosen retirement pension scheme. Generally, the policy tenure ranges from 10-30 years.</li>
					<li><b>Premium payment term:</b> In most cases, you are required to pay the premium only for the chosen policy period.</li>
					<li><b>Premium modal factor:</b> Generally, there are three premium modal factors – yearly, half-yearly and monthly. The percentage varies for each.</li>
		    </ul> -->
			<h2 class="h2bold paraa-p mt-10 mb-20 float-left w-100">What are the Documents Necessary to Buy a Retirement Pension Plan?</h2>
			<p class="paraa-p">Below are the documents necessary to buy the best retirement plan: </p>
			<div class="mt-30 reqir-table">
			<table>
			<thead>
			<tr>
			<th>Requirements</th>
			<th>Document Type</th>
			</tr>
			</thead>
			
			<tbody>
			<tr>
			<td>Age Proof</td>
			<td>Birth Certificate<br>
			Driving License<br>
			Passport<br>
			High School Certificates<br>
			Aadhar Card
			</td>
			</tr>
			<tr>
			<td>Identity Proof</td>
			<td>Aadhar Card<br>
			PAN Card<br>
			Driving License
			</td>
			</tr>
			<tr>
			<td>Address Proof(any one)</td>
			<td>Passport<br>
			Driving License<br>
			Telephone Bill-latest within 6 months<br>
			Electricity Bill-latest within 6 months<br>
			Aadhar Card
			</td>
			</tr>
			<tr>
			<td>Income Proof(any one)</td>
			<td>Latest Salary Slip-3 month
                Bank Account Statements of latest 6 months-- only if salary credit is reflecting with employer name
                Income Tax Return (ITR) documents of last 3 years</td>
			</tr>
			<tr>
			<td>Medical Condition Proof</td>
			<td>In some cases, insurers demand recent medical reports before purchasing the retirement plan.</td>
			</tr>
			
			</tbody>
			</table>
			</div>
		<!--	<h2 class="h2bold paraa-p">What is the Best Time to Invest in a Retirement Pension Plan?</h2>
			<p class="paraa-p">If you meet the eligibility age criteria for a retirement pension plan, then the best time for a retirement investment plan is now, implying as soon as possible. There are significant benefits of investing early on in retirement pension schemes, these include:</p>
			<ul class="bullet">
					<li><b>Allowing them more time to grow through the power of compounding:</b> The younger you start your retirement investment plan, the more your funds will grow because of the compounding of money. So, if you are 45 years old and you start investing Rs. 1.5 lacs in a pension plan, then by the time you turn 60 years, your savings would be Rs. 44 lacs or Rs. 31 lacs (assuming they grow at 8% and 4%, respectively). But if you would have saved at least 5 years earlier, you would be making Rs. 74 lacs or Rs. 46 lacs (if savings are compounded at 8% and 4%, respectively).</li>
					<li><b>Effectively beating rising inflation to protect future purchasing power:</b> As per general phenomenon, inflation tends to rise. So, the later you start saving, the more you have to save for an adequate retirement. Moreover, the value of money will go down with time due to inflation, and your future purchasing power will suffer if your retirement investment plan starts late.</li>
					<li><b>Ease in paying future medical costs that are rising by the day:</b> As per reports, medical costs rise 15-17% every year. This would mean you need more money to pay off medical expenses during retirement. Moreover, with rising age, medical costs tend to be heavy on the pocket. All this can eat up your retirement income plan if you do not save early on life to build an adequate corpus for the future.</li>
			</ul>
			<h2 class="h2bold paraa-p">What are the Documents Necessary to Buy a Retirement Pension Plan?</h2>
			<p>Below are the documents necessary to buy the best retirement plan:</p>
			<ul class="bullet">
					<li><b>Age proof credentials</b> like birth certificate, driving license, passport, high school certificate, etc.</li>
					<li><b>Identity proof</b> such as Aadhaar card, passport, PAN card, driving license, etc.</li>
					<li><b>Address proof</b> including passport, driving license, telephone bill, Aadhaar card, etc.</li>
					<li><b>Income proof</b> like salary slip, bank account statements or Income Tax Returns (ITR).</li>
			</ul>
			<p class="paraa-p">In some cases, companies offering retirement pension schemes ask you to also provide recent medical reports before the purchase of the retirement investment plan.</p>
			-->
			<div class="roww">
			<div class="coll-md-7">
			<h2 class="h2bold paraa-p mt-20 mb-0">Retirement Plans from Kotak Life</h2>
			<p class="paraa-p">Kotak Life offers retirement plans so that you are assured of a relaxed retired life. The assured returns and host of features guarantee^ complete financial and mental well-being in your golden years.</p>
			<p class="paraa-p mb-10">Let us look at the four Kotak Life retirement plans:</p>
			<ul class="bullet">
			<!--<a href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-premier-pension-plan"></a>-->
					<li><h3>Kotak Premier Pension Plan:</h3></li>
						<p>This is a traditional participating pension plan that offers assured benefits on the vesting or death of the policyholder. The basic features of the plan are:</p>
						<ul class="bullet">
							<li>Avail a percentage of the basic sum assured as Guaranteed^ Additions in the first 5 policy years, which will be payable either on vesting or on death (whichever is earlier).</li>
							<li>Bonuses will start accruing from the 6th policy year.</li>
							<li>Enjoy an assured benefit of 105% of the total premiums paid on death or vesting.</li>
							<li>Two riders to further boost your protection – Kotak Accidental Death Benefit Rider and Kotak Permanent Disability Benefit Rider.</li>
						</ul>
						
							<div class="buttons11 mt-10 mb-20 float-left w-100">
		<a class="action_btn pt-10" href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-premier-pension-plan">View Kotak Premier Pension Plan</a>
		<a class="action_btn pt-10" href="<?=base_url()?>/assets/images/uploads/insurance-plans/Kotak_Premier_Pension_Plan_Brochure.pdf">Download Brochure</a>
</div>

					

						
					<!--<li><a href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-lifetime-income-plan-online">Kotak Lifetime Income Plan:</a></li>
						<p class="paraa-p">This is an Immediate Annuity Life Insurance plan that assures a continuing income for life – for you and your spouse. Key features of this plan include:</p>
						<ul class="bullet">
							<li>Regular income after retirement for a stress-free and financially secured retired life</li>
							<li>Six Annuity Income Options to choose from based on your specific needs</li>
							<li>Yearly, half-yearly, quarterly and monthly payment modes</li>
						</ul>
						-->
						<!--<a href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-assured-pension"></a>-->
						<li><h3>Kotak Assured Pension:</h3></li>
						<p class="paraa-p">This is an Annuity Plan that promises to pay a regular stream of income on a regular basis:</p>
						<ul class="bullet  w-100 float">
							<li>Choice of annuity options: Immediate or Deferred</li>
							<li>Higher Annuity rates for the higher purchase price</li>
							<li>Issued annuity rates are guaranteed^ for a lifetime</li></ul>
							
							<div class="buttons11 w-100 float mt-20 mb-20">
		<a class="action_btn mt-10" href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-assured-pension">View Kotak Assured Pension Plan</a>
		<a class="action_btn mt-10" href="<?=base_url()?>/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf">Download Brochure</a>
</div>
						
							<!--<a href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-saral-pension"> </a>-->
							<li><h3>Kotak Saral Pension</h3>:</li>
						<p class="paraa-p">This is an Annuity Plan that gives you the assurance of a regular stream of income throughout your lifetime:</p>
						<ul class="bullet">
							<li>Issued Annuity rates are guaranteed^ for a lifetime.</li>
							<li>Life Annuity with Return of 100% of purchase price</li></ul>
								<div class="buttons11 w-100 float-left mt-10 mb-20">
		<a class="action_btn" href="<?=base_url()?>/insurance-plans/retirement-plans/kotak-saral-pension">View Kotak Saral Pension Plan</a>
		<a class="action_btn" href="<?=base_url()?>/assets/images/uploads/insurance-plans/kotak-saral-pension-brochure-26-july-2021-11.pdf">Download Brochure</a>
</div>

			</ul>
			
		

			
			
			</div>
			
			
			
			
			<div class="coll-md-5">
			<!--Product Card-->		
                  <div class="kotak-e-term-plan mx-350 retirement-card">
                      <div class="d-flex bg-eterm">
                          <div>
                              <p class="product_head">Kotak Life Time Income Plan</p>
                              <!-- <p>Plan critical financial Phases of Life with Kotak e-Invest</p>-->				  
                          </div>
                          <div class="ml-auto">
                              <a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-lifetime-income-plan-brochure.pdf" download="Brochure">
                                  <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                              </a>
                          </div>
                      </div>
                      <div class="feats-sec retire-feature">
                          <p class="feature_head">Features</p>


                         <ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>6 Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Tax benefits<sup>^</sup></span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Higher annuity rates for higher purchase price</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>4 Annuity Modes</span></li>
							  
                          </ul>
                          <div class="feats-want  feature-want-more">
                              <a target="_blank" href="<?=base_url()?>/online-plans/retirement-pension-plans/kotak-lifetime-income-plan">Want to Know More?</a>
                          </div>
						 
                          <div class="feats-buy">
                             <a target="_blank" href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card">Buy Now</a>
                          </div><br>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref">Ref. No. KLI/23-24/E-BB/1052</p>
                              </div>
                              <div class="ml-auto">
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>/insurance-guide/retirement<?php echo $category ?>/termsconditions">T&C</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
		<!--Product Card-->
		</div>
		</div>
			
			
			
			
			
		
		
			<h2 class="h2bold paraa-p">FAQs</h2>
				<!-- Accord Start -->
				<ul class="accordUL" id="faqs-div">
					<li class="ga_track">
						<h3 class=""><span>1. What are Retirement Plans?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">Retirement plans are also known as pension plans. They are a type of life insurance plan which are specifically created to fulfil your post-retirement needs. Typically, you would require such plans to provide you with a consistent stream of income, enabling you to meet living expenses and pay medical costs in retirement. </p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>2. How do Retirement Plans Work?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">A retirement plan provides you with a much-needed respite, while you are figuring out finances in your retirement. Therefore, it is best that you start investing as early in your career as possible. You can get a standard income flow by paying a lump sum amount or by investing over a period of time. These premiums that you pay in the initial years of life tend to become the regular payments for your future, ensuring your adequate financial security.</p>
							<!--<p class="paraa-p">Some specific types of pension plans in India include:</p>
								<ul class="bullet">
									<li><b>Immediate annuity: </b>In this type of retirement pension plan, you start receiving the pension immediately after purchase of the policy.</li>
									<li><b>Deferred annuity: </b>You accumulate wealth over a specific term by paying regular premiums and your pension begins once the tenure ends.</li>
									<li><b>Annuity certain: </b>In this form, you select the tenure in which you want to receive the pension payments.</li>
									<li><b>Life annuity: </b>You have entitled to a pension for your whole life. In case of death, the pension scheme amount is paid to the spouse or nominee.</li>
									<li><b>Life cover pension: </b>This is a dual-benefit programme where there is life insurance cover with the pension plan. In case of an unfortunate event, the lump sum is paid to your dependants or the nominee, as specified.</li>
									<li><b>National Pension Scheme </b>This pension plan in India is backed by the central government, where you can withdraw 60% of your pension scheme amount at retirement and 40% is used to buy an annuity.</li>
								</ul>-->
						</div>
					</li>
					<!--<li class="ga_track">
						<h3 class=""><span>3. What is the Difference Between a Retirement a TPlan and erm Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">A term plan is different in nature from a retirement plan. Some of the major differences include:</p>
							<ul class="bullet">
								<li>A term plan is a pure and simple protection plan that guarantees payment of a definitive death benefit, in case of your demise in the specified term. A term plan does not include any saving or investment component. On the other hand, a retirement plan is a combination of an insurance plan and investment.</li>
								<li>By investing in a retirement pension plan, you save money for the future, while allowing it to grow as you pay regular premiums. A term plan has no saving or investment option and can only provide adequate life cover at affordable rates and no savings for the future.</li>
								<li>A term plan offers a guaranteed death benefit in case of your untimely demise. However, a retirement plan offers no death benefit but ensures a regular stream of income for you. Moreover, upon maturity of the pension scheme, you or the nominee (in case of the untimely demise of the insured) receive the corpus-built overtime.</li>
							</ul>
							<p class="paraa-p">Overall, both retirement and term plans have their pros and cons. The final choice depends on your financial requirements. A term plan is more a protection plan than a policy, which can secure your future with regular income earnings.</p>
						</div>
					</li>-->
					<li class="ga_track">
						<h3 class=""><span>3. Why Should I Invest in a Retirement Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">As a prudent planner, you should plan your retirement years well in advance. This provides you with a sense of security and financial independence during the non-working phase of your life. Moreover, it is important that you opt for a retirement plan that offer continuous monthly earnings. </p>
							<!--<p class="paraa-p">Here are some benefits that would justify why you should invest in a retirement plan:</p>
							<ul class="bullet">
								<li>You are guaranteed a specific amount of income on a regular basis even after you retire from work.</li>
								<li>Regular earnings will help you pay for living expenses and medical costs during retirement</li>
								<li>Most pension plans offer a life cover, which helps to protect you and your family in unforeseen situations and financial burdens.</li>
								<li>Investing in retirement pension plans in India provide you with dual tax benefits. The premiums paid for the pension plans are exempt under Section 80CCC and 10(10A) of the Income Tax Act, 1961.</li>
								<li>Pension plans are a no-risk investment option with stable future earnings</li>
								<li>You can increase your pension scheme coverage by including riders such as accidental death benefit, permanent disability, critical illness, and other riders.</li>
							</ul>	-->	
						</div>
					</li>
					<!--<li class="ga_track">
						<h3 class=""><span>5. What is an Income Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">An income plan, like Kotak Lifetime Income Plan, is a very effective retirement investment plan to earn income even while you are not working. An income plan is generally an immediate annuity non-linked, non-participatory life insurance plan. This type of retirement plan aims to provide you with a secure alternative source of earning during retirement to fulfil your needs and manage your standard of living.</p>
							<p class="paraa-p">With an assured income plan, you can be sure to let go off all your financial worries for the retirement years. An income plan allows you to live a comfortable and financially independent life post-retirement. With income plans, like Kotak Lifetime Income Plan, you receive an assured pay throughout your life. In case of your absence or untimely demise, the income is given to the spouse or your nominee.</p>
							<p class="paraa-p">Income plans by Kotak offer ensure your financial independence post-retirement. They also offer you a wide array of income options to best match your needs. Moreover, you can choose from a range of annuity payout frequencies – yearly, half-yearly, quarterly and monthly – in tune with your financial requirements.</p>							 		
						</div>
					</li>-->
					<li class="ga_track">
						<h3 class=""><span>4. What is a Pension Plan? </span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">Pension plans secure a part of your savings over a long period to provide financial security in the future. After the term ends, you get a part of the benefits as a lump sum and the balance you can invest in the annuity and paid to you at regular intervals after retirement.</p>
							<!--<p class="paraa-p">In a retirement pension plan, you would be required to contribute a specific sum regularly until retirement. The accumulated amount is then given back to you either as a lump sum payment at once or across a period at regular intervals after retirement. Best pension plans in India, like Kotak Premier Pension Plan, help you create a substantial retirement corpus, allowing you to spend your golden years worry-free and comfortably. Moreover, the pension plan by Kotak has assured benefits on death and vesting. There is also an opportunity to earn a bonus and get guaranteed additions.</p> -->
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>5.I have Invested in a Provident Fund. Should I Still Buy a Retirement Plan? </span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">Even if you have invested in a provident fund (PF), it is advisable to invest in a retirement plan.</p>
							<p class="paraa-p">Retirement plans support you financially when your income starts to recede. Pension plans allow you to live with pride and maintain a good standard of living, making fewer compromises and more memories. Moreover, by allowing your funds to grow and accumulate over time, you can acquire inflation-adjusted wealth in the long run with channelized income cash flows.</p>							 		
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>6. Why do I Need to Include a Retirement Plan in my Long-Term Financial Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">A retirement plan is one of the most reliable assets for your post-retirement financial security. So, if you are framing your financial plan for the future, it is important to incorporate a retirement plan. Pension plans offer you long term savings, regular income, insurance cover for your family, tax advantages and so much more. </p>
							<!--<ul class="bullet">
								<li><b>Long-term savings for a secured future: </b>Retirement pension plans in India allow you to accumulate significant corpus so that you can generate a secure flow of cash for your post-retirement life.</li>
								<li><b>Regular income in retirement to meet living expenses: </b>Pension plans in India provide you with a guaranteed income for the non-working years of your life. This income can be used to meet everyday living expenses, medical costs, fulfil retirement dreams like travelling, etc.</li>
								<li><b>Insurance cover along with regular income for unforeseen situations: </b>Retirement pension plans in India also offer insurance cover, which can help provide financial security to the family in worst times.</li>
								<li><b>Pension plans are risk-free and secure investments: </b>Retirement plans India are classified as risk-free investments because of two reasons. Firstly, pension schemes are backed by employers, which guarantees the security of your money even when the market falls. Secondly, the Pension Benefit Guaranty Corporation assures the safety of your pension, even if the company goes bankrupt.</li>
								<li><b>Tax advantages on pension premiums paid and maturity amount received: </b>As per the Income Tax Act, 1961, the pension plans premiums are exempt from taxes up to Rs. 1.5 lacs under Section 80C. Moreover, under Section 10(10 A), the amount received on maturity of the policy is also exempt from taxes.</li>
								<li><b>Improve liquidity in demanding situations: </b>A retirement pension plan offers you money when you need it. The best retirement plans in India allow you to withdraw a significant chunk of your pension plan to meet your financial emergencies. These could include children’s marriage, buying a house, etc. and could occur before the actual retirement. However, it is important to check pension scheme documents to know details.</li>
								<li><b>Flexibility to choose plans according to your financial needs: </b>When buying retirement plans India, you are offered the flexibility to choose to pay a lump sum or regular premiums. Moreover, you can also select how you want to receive the income from your pension scheme. Such as, if you want an income stream to start immediately, then an immediate annuity would be ideal. And if you wish to defer receipts until a time in the future, deferred annuities would be advisable.</li>
							</ul>-->
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>7. Can I Invest in Multiple Retirement Plans at a Time?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">Yes, you can invest in multiple retirement plans at a time. You could choose to make retirement investments in different private banks and commercial pension scheme providers. </p> 
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>8. Can I Avail Tax Benefits with a Retirement Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">Yes, by investing in a retirement plan, you can avail tax benefits. As per the Income Tax Act, 1961, the pension scheme premiums paid up to a limit of ₹1.5 lacs are exempt from taxes under Section 80CCC. </p>							 		
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>9. What Happens to the Retirement Plan after the Policyholder’s Death? </span></h3>
						<div class="accordDesc" style="display: none;">
							<p class="paraa-p">In case the policyholder dies while the retirement plan is active, the retirement plan continues for the spouse in case he/ she is added under the same plan.  According to the type of retirement plan, the spouse receives the pension benefits after the demise of the policyholder. So, a retirement plan not only serves to provide you with financial security for retirement but also supports your spouse in your absence. </p>							 		
						</div>
					</li>
				</ul>
								<!-- Accord End --> 
			</div>
			
			 <div class="container">
		  <div class="coll-md-12">
			<h2 class="h2bold paraa-p mb-0">Tax Benefits & Disclaimers:</h2>
			<p class="paraa-p taxx">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
			
			
			<h2 class="h2bold paraa-p mt-10 mb-0">Tax Benefits & Disclaimers:</h2>
			<p class="paraa-p taxx">Kotak Lifetime Income Plan; UIN: 107N103V08, Form No: N103 This is a non-participating immediate annuity plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. </p>
			<p class="paraa-p taxx">Kotak Premier Pension Plan UIN: 107N094V02, Form No: N094. This is a Participating non-linked Pension Plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale. </p>
			<p class="paraa-p taxx">Kotak Assured Pension UIN: 107N123V03, Form No: N123. This is a non-linked, non-participating annuity plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale. </p>
			<p class="paraa-p taxx">Kotak Saral Pension; UIN: 107N124V01, Form No: N124. This is a single premium non-linked non participating individual immediate annuity plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
			<p class="paraa-p taxx">For more details on riders, please read the Rider Brochure.</p>
			<p class="paraa-p taxx">^Guaranteed benefits due under this plan are available provided premiums are paid regularly for the entire premium payment term and the policy is in force. </p>
			<p class="paraa-p taxx">Kotak Mahindra Life Insurance Company Ltd.</p>
			<p class="paraa-p taxx">Reg No. 107 | CIN : U66030MH2000PLC128503</p>
			<p class="paraa-p taxx">Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051, Toll Free: 1800 209 8800</p>
			<p class="paraa-p taxx">Website: www.kotaklife.com | WhatsApp: 9321003007 | Email: kli.in/WECARE | Ref. No. KLI/22-23/E-WEB/1250</p>
		    <p class="paraa-p taxx">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS</p>
			<p class="paraa-p taxx">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
			<p class="paraa-p taxx">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
			
			
			<h3 class="" style="font-size:16px">Section 41-</h3>
			<p class="paraa-p taxx">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
			
			<h3 class="" style="font-size:16px">Section 45-</h3>
			<p class="paraa-p taxx">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:<a href="https://www.kotaklife.com/assets/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf"> Read more about section38_39_45_of_insurance_act_1938</a></p>
			
			</div>
			</div>
		  </article>
		 
			  <script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "What are Retirement Plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Retirement plans are also known as pension plans. They are a type of life insurance plan, which are specifically created to fulfil your post-retirement needs. Typically, you would require such plans to provide you with a consistent stream of income, enabling you to meet living expenses and pay medical costs in retirement. In retirement plans, you would need to pay regular premiums during your working years to receive regular income post-retirement. Retirement pension plans offer you guaranteed income for life, future security of your children and several tax advantages."

}

},{

"@type": "Question",

"name": "How do Retirement Pension Plans Work?",

"acceptedAnswer": {

"@type": "Answer",

"text": "There will be a time when you would stop working and eventually retire to enjoy the bliss of those non-working days. However, this is also the time when you would be transitioning from a regular earner to a non-earner. And even though your income stream would dry up in retirement, you would be incurring living and medical expenses. In such cases, a pension plan for retirement provides you with the much-needed respite. You can get a standard income flow by paying a lump sum amount or by investing over a period of time. These premiums that you pay in the initial years of life tend to become the regular payments for your future, ensuring your adequate financial security.Some specific types of pension plans in India include:Immediate annuity: In this type of

retirement pension plan, you start receiving the pension immediately after purchase of the policy.Deferred annuity: You accumulate wealth over a specific term by paying regular premiums and your pension begins once the tenure ends.Annuity certain: In this form, you select the tenure in which you want to receive the pension payments.Life annuity: You have entitled to a pension for your whole life. In case of death, the pension scheme amount is paid to the spouse or nominee.Life cover pension: This is a dual-benefit programme where there is life insurance cover with the pension plan. In case of an unfortunate event, the lump sum is paid to your dependants or the nominee, as specified.National Pension Scheme This pension plan in India is backed by the central government, where you can withdraw 60% of your pension scheme amount at retirement and 40% is used to buy an annuity."

}

},{

"@type": "Question",

"name": "What is the Difference Between a Retirement a TPlan and erm Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "A term plan is different in nature from a retirement plan. Some of the major differences include:A term plan is a pure and simple protection plan that guarantees payment of a definitive death benefit, in case of your demise in the specified term. A term plan does not include any saving or investment component. On the other hand, a retirement plan is a combination of an insurance plan and investment.By investing in a retirement pension plan, you save money for the future, while allowing it to grow as you pay regular premiums. A term plan has no saving or investment option and can only provide adequate life cover at affordable rates and no savings for the future.A term plan offers a guaranteed death benefit in case of your untimely demise. However, a retirement plan offers no death benefit but ensures a regular stream of income for you. Moreover, upon maturity of the pension scheme, you or the nominee (in case of the untimely demise of the insured) receive the corpus-built overtime.Overall, both retirement and term plans have their pros and cons. The final choice depends on your financial requirements. A term plan is more a protection plan than a policy, which can secure your future with regular income earnings."

}

},{

"@type": "Question",

"name": "Why Should I Invest in a Retirement Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "As a prudent planner, you should plan your retirement years well in advance. This provides you with a sense of security and financial independence during the non-working phase of your life. Moreover, since your regular income stream would have dried up during retirement, it is important to opt for retirement investment plans that offer a continuous monthly earning. A retirement plan is the best option for such investments for the future.Here are some benefits that

would justify why you should invest in a retirement plan:You are guaranteed a specific amount of income on a regular basis even after you retire from work.Regular earnings will help you pay for living expenses and medical costs during retirementMost pension plans offer a life cover, which helps to protect you and your family in unforeseen situations and financial burdens.Investing in retirement pension plans in India provide you with dual tax benefits. The premiums paid for the pension plans are exempt under Section 80CCC and 10(10A) of the Income Tax Act, 1961.Pension plans are a no-risk investment option with stable future earningsYou can increase your pension scheme coverage by including riders such as accidental death benefit, permanent disability, critical illness, and other riders."

}

},{

"@type": "Question",

"name": "What is an Income Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "An income plan, like Kotak Lifetime Income Plan, is a very effective retirement investment plan to earn income even while you are not working. An income plan is generally an immediate annuity non-linked, non-participatory life insurance plan. This type of retirement plan aims to provide you with a secure alternative source of earning during retirement to fulfil your needs and manage your standard of living.With an assured income plan, you can be sure to let go off all your financial worries for the retirement years. An income plan allows you to live a comfortable and financially independent life post-retirement. With income plans, like Kotak Lifetime Income Plan, you receive an assured pay throughout your life. In case of your absence or untimely demise, the income is given to the spouse or your nominee.Income plans by Kotak offer ensure your financial independence post-retirement. They also offer you a wide array of income options to best match your needs. Moreover, you can choose from a range of annuity payout frequencies – yearly, half-yearly, quarterly and monthly – in tune with your financial requirements"

}

},{

"@type": "Question",

"name": "What is a Pension Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Also, known as retirement plans, pension plans secure a part of your savings over a long period to provide you financial security in the future. You can choose the get the pension scheme benefits in a lump sum or regularly. Typically, pension plans come to your rescue when your regular income dries up in retirement. The money from retirement pension plans can help you be financially independent in non-working years of your life. You can use the earnings from your retirement pension plan to manage uncertainties, financial crunch situations, medical emergencies, etc. during post-retirement.In a retirement pension plan, you would be required to contribute a specific sum

regularly until retirement. The accumulated amount is then given back to you either as a lump sum payment at once or across a period at regular intervals after retirement. Best pension plans in India, like Kotak Premier Pension Plan, help you create a substantial retirement corpus, allowing you to spend your golden years worry-free and comfortably. Moreover, the pension plan by Kotak has assured benefits on death and vesting. There is also an opportunity to earn a bonus and get guaranteed additions."

}

},{

"@type": "Question",

"name": "I have Invested in a Provident Fund. Should I Still Buy a Retirement Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Even if you have invested in a provident fund (PF), it is advisable to invest in a retirement plan. Existing provident fund plans are not enough for your future financial security because they do not account for inflation adequately. The returns offered on these social security investments are not suitable if you consider your income requirements during retirement. To state, assuming the long-term inflation stands at 6%, the provident funds offer merely 8.5% return rate, which accounts for only 2.5% net of inflation. This 2.5% is insufficient to meet the future expenses of your post-retirement life.People mostly consider investing in provident funds to tax-saving purposes and not to generate a source of retirement income. This is evident from statistics as well. Despite the country having a high savings rate, only 10% of the working people in India have retirement investments in provident funds. Most employees in the organised sector contribute toward provident fund only to save on taxes, as opposed to retirement planning. So, if you wish for a financially secure retirement, it is advisable to invest in a retirement plan even if you have invested in a provident fund. Retirement pension plans support you financially when your income starts to recede. Pension schemes allow you to live with pride and maintain a good standard of living, making fewer compromises and more memories. Moreover, by allowing your funds to grow and accumulate over time, you can acquire inflation-adjusted wealth in the long run with channelised income cash flows."

}

},{

"@type": "Question",

"name": "Why do I Need to Include a Retirement Pension Plan in my Long-Term Financial Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "A retirement pension plan is one of the most reliable assets for your post-retirement financial security. So, if you are framing your financial plan for the future, it is important to incorporate investment in a retirement plan. Some benefits offered by best pension plans in India include:Long-term savings for a secured future: Retirement pension plans in India allow you to accumulate significant corpus so that you can generate a secure flow of cash for your post-retirement life.Regular income in retirement to meet living expenses: Pension plans in India provide

you with a guaranteed income for the non-working years of your life. This income can be used to meet everyday living expenses, medical costs, fulfil retirement dreams like travelling, etc.Insurance cover along with regular income for unforeseen situations: Retirement pension plans in India also offer insurance cover, which can help provide financial security to the family in worst times.Pension plans are risk-free and secure investments: Retirement plans India are classified as risk-free investments because of two reasons. Firstly, pension schemes are backed by employers, which guarantees the security of your money even when the market falls. Secondly, the Pension Benefit Guaranty Corporation assures the safety of your pension, even if the company goes bankrupt.Tax advantages on pension premiums paid and maturity amount received: As per the Income Tax Act, 1961, the pension plans premiums are exempt from taxes up to Rs. 1.5 lacs under Section 80C. Moreover, under Section 10(10 A), the amount received on maturity of the policy is also exempt from taxes.Improve liquidity in demanding situations: A retirement pension plan offers you money when you need it. The best retirement plans in India allow you to withdraw a significant chunk of your pension plan to meet your financial emergencies. These could include children’s marriage, buying a house, etc. and could occur before the actual retirement. However, it is important to check pension scheme documents to know details.Flexibility to choose plans according to your financial needs: When buying retirement plans India, you are offered the flexibility to choose to pay a lump sum or regular premiums. Moreover, you can also select how you want to receive the income from your pension scheme. Such as, if you want an income stream to start immediately, then an immediate annuity would be ideal. And if you wish to defer receipts until a time in the future, deferred annuities would be advisable."

}

},{

"@type": "Question",

"name": "Can I Invest in Multiple Retirement Plans at a Time?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Yes, you can invest in multiple retirement plans at a time. You could choose to make retirement investment in different private banks and commercial pension scheme providers. However, if you opt to invest in the National Pension Scheme or other government-sponsored retirement pension plan, then you cannot have more than one retirement plan at a time. In this case, you could re-invest your money when the pension plan matures."

}

},{

"@type": "Question",

"name": "Can I Avail Tax Benefits with a Retirement Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Yes, by investing in a retirement plan, you can avail tax benefits. As per the Income Tax Act, 1961, the pension scheme premiums paid up to a limit of Rs. 1.5 lacs are exempt from taxes

under Section 80CCC. Additionally, the retirement plan payouts received at the time of maturity are completely tax-free under Section 10(10 A) of the Income Tax Act. However, applicable taxes are charged as per the prevailing rates, and these tax laws are subject to changes from time-to-time."

}

},{

"@type": "Question",

"name": "What Happens to the Retirement Plan after the Policyholder’s Death?",

"acceptedAnswer": {

"@type": "Answer",

"text": "In case, the policyholder dies while the retirement plan is active, the pension plan continues to live its term. According to the type of retirement pension plan, either the spouse or the nominee of the policyholder receives the pension benefits after the demise of the policyholder. So, a retirement plan not only serves to provide you with financial security for retirement but also supports your family and children in your absence."

}

}]

}

</script>
          <?php  } else if($page_title=="child-plans"){
			 ?>
			 <article class="faqsWrap" id="faqsWrapDiv">
			<div class="midWrapper para-p">
			<h2 class="h2bold paraa-p">What is a child insurance plan?</h2>
				<p>A child insurance plan combines insurance with a savings plan and secures your child’s future against financial constraints. As a parent, you want to ensure your child lives in comfort and receives the financial support necessary to reach their full potential in life. And achieving this goal requires careful financial planning.</p>
      			<p class="paraa-p">Child savings plans are useful financial tools that help build an investment corpus. The fund helps meet the expenses for the major milestones in your child’s life. Moreover, in the case of an unfortunate event, your child receives the claim amount. It can cover education expenses and other living costs and enable them to fulfil their aspirations.</p>
				<div class="roww mt-30">
				  <div class="coll-md-6">
				  <div class="padding-right-20">
				  <h2 class="h2bold paraa-p">How does a child insurance plan work?</h2>
				  <p>A child saving plan is a contract with insurance provider, with you as the policyholder and your child as the nominee.</p>
				  <p class="paraa-p">First, you need to decide the cover amount you want your child to receive in case of an eventuality to enable them to live the life you want for them. Next, you have to determine the duration for which your child might need financial support. Provider will assign a premium amount accordingly. You can make a one-time, lump-sum payment or regular payments for the pre-specified period.</p>
				  <p class="paraa-p">If an unwanted event occurs, insurance company pays the prearranged sum assured to your child. The mode of payment depends on your choice of the policy and payout. While some policies offer regular payouts as an alternative income source for your family, others may offer a lump sum payout.</p>
				  <p class="paraa-p">The best investment plans for children also offer premium waivers in case of an unfortunate incident, whereby insurance company pays all future premiums and hands over the fund value at maturity to your nominee.</p>
				  <p class="paraa-p">In case of survival until the end of the policy term, you will receive a sizeable amount as maturity benefit that can help you fulfil your child’s long-term goals.</p>
              </div>
              </div>
			  <div class="coll-md-6"> 
			  <iframe width="100%" height="498" src="https://www.youtube.com/embed/p9El9zKE9xs" title="Plan your child&#39;s future with Kotak Life" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			  </div>
              </div>
				  <h2 class="h2bold paraa-p">What are the features and benefits of a child plan?</h2>
				  <p> <b>1. Sum assured:</b></p>
				  <p class="paraa-p">This is the sum that your child will receive in case of an unforeseen event. You should select the sum based on the amount they will need to complete their education and live without any financial limitations.</p>
				  <p class="paraa-p"><b>2. Premium:</b></p>
				  <p class="paraa-p">You need to pay this amount, based on the sum assured of you choose , for keeping the insurance in force.</p>
				<p class="paraa-p"><b>3. Policy term:</b></p>
				<p>It is the duration of financial cover, from the policy start date to the date of maturity. It depends on the time for which your child will need financial support.</p>
				<p class="paraa-p"><b>4. Premium payment mode:</b></p>
				<p>You can choose to pay the entire premium at one go or pay regular premiums on an annual, half-yearly, quarterly, or monthly basis as per your finances.</p>
				<p class="paraa-p"><b>5. Maturity amount:</b></p>
				<p>Insurance company pays this amount at the end of the policy term.</p>
				<p class="paraa-p"><b>6. Premium waiver:</b></p>
				<p>In case of your demise, the policy does not lapse. Insurance company continues to bear the remaining premiums until maturity. Your child receives the maturity value when the policy tenure ends.</p>
				<p class="paraa-p"><b>7. Partial withdrawal:</b></p>
				<p>If you invest in a unit-linked insurance policy for your child’s future benefits, you can withdraw parts of your fund value after five years.</p>
	
				  


				  <h2 class="h2bold paraa-p">Benefits of a Child Insurance Plan</h2>
				  <p>Children’s savings plan offers a wide range of benefits, listed below:</p>
				  <p class="paraa-p"><b>1. Helps meet your children’s education cost:</b></p>
				  <p class="paraa-p">Recent studies reveal that general education cost in India has undergone a fourfold hike. Also, professional course expenditures increased by 50% between 2007 and 2018. These numbers indicate that the price of higher education will skyrocket by the time your child attains the age for college admission. Regular investments in a children savings plan can help you amass the necessary funds to provide quality education to your children.</p>

				  <p class="paraa-p"><b>2. Covers the costs of medical treatments for your children:</b></p>
				  <p class="paraa-p">Healthcare costs in India are increasing at twice the overall retail inflation rate. Hence, it is crucial to plan for unforeseen health complications. And the returns from your child plan policy can take care of the treatment costs, helping you provide adequate medical assistance to your child in health emergencies.</p>

				  <p class="paraa-p"><b>3. Acts as a shield against financial shortfalls even in your absence:</b></p>
				  <p class="paraa-p">Proceeds from the child plan investment enable your child to complete their education pursue their career goals even if something unwanted happens.</p>

				  <p class="paraa-p"><b>4. Offers liquidity in cash crunches and provides for your child’s immediate needs:</b></p>
				  <p class="paraa-p">You can raise funds in an emergency by taking loans against your child’s policy or liquidating part of the fund value.</p>
 				  <p class="paraa-p"><b>5. Child plans provide tax benefits:</b></p>
				  <p class="paraa-p">You can avail of deductions up to Rs. 1.5 lakhs from your taxable income under <a href="<?=base_url()?>/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a> of the Income Tax Act, 1961, for the premiums you pay towards your child insurance policy. The returns are also tax-exempt, provided the policy satisfies the regulations under <a href="<?=base_url()?>/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know"> 10(10D)</a>.</p>

				 

				  <h2 class="h2bold paraa-p">What are the eligibility criteria to buy a child plan?</h2>
				  <p>Different policies have different eligibility requirements. The criteria are based on the following parameters:</p>
				  <ul class="bullet"><li>Age of the child at the time of purchase</li>
					<li>Your age at the time of buying the policy</li>
					<li>Age at maturity</li>
					<li>The minimum premium amount required</li>
					<li>Minimum policy term</li>
				</ul>
				<p class="paraa-p">Contact us to discuss your exact requirements and decide on the best investment plan for your child, matching your specific needs.</p>
				  

				  <h2 class="h2bold paraa-p">What are the documents necessary to buy a child plan?</h2>
				  <ul class="bullet">
					  	<li><b>Duly-filled up policy form</b> – You have to enter all your KYC details, age, gender, health conditions, and more. It is advisable not to withhold any information or furnish inaccurate data to avoid claim refusals in future.</li>
						<li><b>Address proof  – </b>You can use your passport/ Aadhaar Card/ electoral card/ utility bills/driving license/ bank passport to establish your residential address.</li>
						<li><b>Photo ID proof  – </b>Documents that you can use include PAN card, Aadhar card, driving license, voter card, passport, and the like.</li>
						<li><b>Income proof – </b>As the policyholder, you have to show that you have the wherewithal to pay the premiums. You can use your bank statements for the past 6 months, Income Tax returns, salary statements, and other such financial papers for this purpose.</li>
						<li><b>Age proof  – </b>Since the premium amount depends on your age, you need to provide an age proof like birth certificate, passport, board exam certificate.</li>
					</ul> 
				  
				  <h2 class="h2bold paraa-p">How does buying a child plan secure your child’s future?</h2>
				  <ul class="bullet">
					    <li>Offering a blend of investment and savings, a child insurance policy provides financial security when your children are dependent on your earnings. In case of an eventuality, the payouts safeguard their future.</li>
						<li>In case of an unfortunate incident, it offers the sum assured to your child, helping them meet their immediate needs and living costs.</li>
						<li>If you opt for the premium waiver benefit, Kotak Life continues paying the premiums in your behalf. At maturity, your child receives the policy-benefits that help them meet their financial needs.</li>
						<li>Encouraging disciplined, long-term savings, a child savings plan lets you build wealth for beating inflation, removing monetary constraints from your child’s goals like college education abroad or marriage.</li>
					</ul>
				   

				  <h2 class="h2bold paraa-p">What are the different types of child plans?</h2>
				  <ul class="bullet">
					<li><b>Unit Linked Life Insurance Plan (ULIP):</b>
						A unit-linked child plan investment allows you to profit from capital market upswings. A part of your premium goes towards safeguarding your child’s future in case of contingencies. And the rest of your outlay is invested in the stock market. You can select a mix of equities and debt funds, or hybrid funds balancing the advantages of each asset class, according to your risk appetite. You can also switch your money among the different fund types based on the market outlook. ULIPs can thus help you generate an inflation-adjusted corpus.
					</li>
					<li><b>Savings plans:</b>
						These are traditional endowment insurance policies that assure capital protection through fixed, guaranteed returns. Kotak Life invests your money on your behalf and shares the revenues with you through bonuses and incentives, ensuring sizeable returns.
					</li>
					</ul>
				     
 <section class="term-blog ulip-blogs" id="ulip_blog">
            <div class="midWrapper">
            <div class="term-blog ">
                    <h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs </h2>
            <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';
        //GA code Variables
      ?>
      
      <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div">
      
      </ul>
       <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' load';
        $labelGA  =   'load more';
        //GA code Variables
      ?>
     
	 <div class="loadmores">
      <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
</div>    
	<div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div> 
                </div> 
            </div>
        </section>
			<h2 class="h2bold paraa-p">FAQs</h2>
				<!-- Accord Start -->
				<ul class="accordUL" id="faqs-div">
					<li class="ga_track">
						<h3 class=""><span>How can I buy insurance for my child?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Download application forms from the website and take the help of our expert representatives for a hassle-free application process. You can compare the premium amounts and benefits of different child insurance policies available online on our website to select the best child plan for your needs.</p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What are child life coverage plans?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Child life coverage plans provide a predetermined lump-sum payout to the nominee in case of an unfortunate incident with the policyholder. In child plans, usually, the parent is the policyholder, and the child is the beneficiary. The claim amount can cover the child’s financial needs in the absence of the parent.</p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Why should I buy a child insurance plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							 <ul class="bullet">
								<li><b>Investment benefit: </b>A child plan policy safeguards your child’s future against a lack of funds for their education and other critical life milestones.</li>
								<li><b>Insurance benefit: </b> Apart from monetary assistance for better education, the payouts also provide the financials for your child’s day-to-day needs even if your earnings cease due to unanticipated incidents.</li>
							</ul>
							<p>Hence, you should but child insurance to provide your child with the best in life even in adverse situations.</p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What are child education insurance plans?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>These insurance cum savings plans help you create the funds for your child’s higher education through systematic investments over time. With rising costs of education, ensuring quality schooling for your child needs robust financial planning. Education insurance plans offer lump-sum payments on maturity to cover your child’s tuition fees and other education-related expenses. Also, in case of an eventuality, the claim amounts ensure that your child’s learning continues unhindered, helping them pursue their career goals.</p>		
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Who should buy a child insurance plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Anyone who wants to build a corpus for future financial goals like paying for children’s education, marriage, helping them buy a car or property, or fund their travel goals, can invest in such insurance plans. Child investment plans also provide tax benefits under Section 80C and can be used as tax-savings tools.</p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>When is the right time to buy insurance for my child?</span></h3>
						<div class="accordDesc" style="display: none;">
							<ul class="bullet">
							<li>Considering the average inflation rate, as your child grows up, living expenses and education costs are likely to escalate.</li>
							<li>Also, if they lose the support of your income due to the uncertainties of life, it might obstruct their career growth.</li>
							<li>Moreover, buying insurance at a young age can fetch lower premiums</li>
							</ul>
							<p>Hence, you should start investing in child insurance early on. It will ensure your child receives the maturity benefits in time for their financial needs and safeguards them against economic distress in contingencies.</p> 
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What factors should I consider before buying a child insurance plan?</span></h3>
						<div class="accordDesc" style="display: none;">
						<ul class="bullet">
							<li><b>Sum assured:</b> on an amount that can cover your child’s education and living costs taking inflation into account.</li>
							<li><b>Policy term: </b>Plan an investment horizon to coincide the payouts with the milestones in your child’s life like college admission, marriage, and more.</li>
							<li><b>Premium payment frequency: </b>Select a payment mode, yearly, half-yearly, quarterly, or monthly, that suits your resources.</li>
							<li><b>Add-on benefits:</b> Pick premium waiver options to ensure your child receives the policy benefits even if you cannot continue premium payment due to an unpredicted event. Also, consider other riders like accident coverage that can increase the financial protection for a nominal increase in the premium, safeguarding your child against every exigency.</li>
							<li><b>Insurer’s claim settlement ratio (CSR):</b> Defining the company’s’ claim payment record, a high CSR over 95% assures of timely claim resolutions in hours of need.</li>
							</ul>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Will I get tax benefits with child insurance plans?</span></h3>
						<div class="accordDesc" style="display: none;">
							<ul class="bullet">
								<li>Under Section 80C of the Income Tax Act, you can get tax deductions up to ₹1.5 lakhs per year from your gross income for the premiums you pay for your child insurance plan.</li>
								<li>The proceeds you or your nominee receives from the plan are also tax-exempt under Section 10 (10D).</li>
							</ul>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Why is a child insurance plan important for my child’s future?</span></h3>
						<div class="accordDesc" style="display: none;">
						<ul class="bullet">
							<li>Education costs are increasing rapidly. A child insurance policy allows you to create sufficient funds for your child’s admission to premier institutes for higher education.</li>
							<li>It also acts as a safety net, providing them with the life cover amount in case of an unforeseen event, protecting them against financial hardships.</li>
						</ul>
							<p>Hence, such plans are essential to ensure that your child receives the education they deserve and to secure a bright future for them.</p> 
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Citation Links:</span></h3>
						<div class="accordDesc" style="display: none;">
							<ul class="bullet">
								<li><a href="https://www.businessinsider.in/education/news/average-education-expenditure-in-india-increases-fourfold-to-8331-per-student/articleshow/72282009.cms"  rel="nofollow" >https://www.businessinsider.in/education/news/average-education-expenditure-in-india-increases-fourfold-to-8331-per-student/articleshow/72282009.cms</a></li>
								<li><a href="https://www.businessinsider.in/education/news/average-education-expenditure-in-india-increases-fourfold-to-8331-per-student/articleshow/72282009.cms "  rel="nofollow" >https://www.businessinsider.in/education/news/average-education-expenditure-in-india-increases-fourfold-to-8331-per-student/articleshow/72282009.cms</a></li>
							</ul>
						</div>
					</li>
					 
				</ul>
								<!-- Accord End --> 
			</div>
		  </article>
		<script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "How can I buy insurance for my child?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Download application forms from the website and take the help of our expert representatives for a hassle-free application process. You can compare the premium amounts and benefits of different child insurance policies available online on our website to select the best child plan for your needs."

}

},{

"@type": "Question",

"name": "What are child life coverage plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Child life coverage plans provide a predetermined lump-sum payout to the nominee in case of an unfortunate incident with the policyholder. In child plans, usually, the parent is the policyholder, and the child is the beneficiary. The claim amount can cover the child’s financial needs in the absence of the parent."

}

},{

"@type": "Question",

"name": "Why should I buy a child insurance plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Investment benefit: A child plan policy safeguards your child’s future against a lack of funds for their education and other critical life milestones.Insurance benefit: Apart from monetary assistance for better education, the payouts also provide the financials for your child’s day-to-day needs even if your earnings cease due to unanticipated incidents.Hence, you should but child insurance to provide your child with the best in life even in adverse situations."

}

},{

"@type": "Question",

"name": "What are child education insurance plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "These insurance cum savings plans help you create the funds for your child’s higher education through systematic investments over time. With rising costs of education, ensuring quality schooling for your child needs robust financial planning. Education insurance plans offer lump-sum payments on maturity to cover your child’s tuition fees and other education-related expenses. Also, in case of an eventuality, the claim amounts ensure that your child’s learning continues unhindered, helping them pursue their career goals."

}

},{

"@type": "Question",

"name": "Who should buy a child insurance plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Anyone who wants to build a corpus for future financial goals like paying for children’s education, marriage, helping them buy a car or property, or fund their travel goals, can invest in such insurance plans. Child investment plans also provide tax benefits under Section 80C and can be used as tax-savings tools."

}

},{

"@type": "Question",

"name": "When is the right time to buy insurance for my child?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Considering the average inflation rate, as your child grows up, living expenses and education costs are likely to escalate.Also, if they lose the support of your income due to the

uncertainties of life, it might obstruct their career growth.Moreover, buying insurance at a young age can fetch lower premiumsHence, you should start investing in child insurance early on. It will ensure your child receives the maturity benefits in time for their financial needs and safeguards them against economic distress in contingencies."

}

},{

"@type": "Question",

"name": "What factors should I consider before buying a child insurance plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Sum assured: on an amount that can cover your child’s education and living costs taking inflation into account.Policy term: Plan an investment horizon to coincide the payouts with the milestones in your child’s life like college admission, marriage, and more.Premium payment frequency: Select a payment mode, yearly, half-yearly, quarterly, or monthly, that suits your resources.Add-on benefits: Pick premium waiver options to ensure your child receives the policy benefits even if you cannot continue premium payment due to an unpredicted event. Also, consider other riders like accident coverage that can increase the financial protection for a nominal increase in the premium, safeguarding your child against every exigency.Insurer’s claim settlement ratio (CSR): Defining the company’s’ claim payment record, a high CSR over 95% assures of timely claim resolutions in hours of need."

}

},{

"@type": "Question",

"name": "Will I get tax benefits with child insurance plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Under Section 80C of the Income Tax Act, you can get tax deductions up to ₹1.5 lakhs per year from your gross income for the premiums you pay for your child insurance plan.The proceeds you or your nominee receives from the plan are also tax-exempt under Section 10 (10D)."

}

},{

"@type": "Question",

"name": "Why is a child insurance plan important for my child’s future?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Education costs are increasing rapidly. A child insurance policy allows you to create sufficient funds for your child’s admission to premier institutes for higher education.It also acts as a safety net, providing them with the life cover amount in case of an unforeseen event, protecting them against financial hardships.Hence, such plans are essential to ensure that your child receives the education they deserve and to secure a bright future for them."

}

}]

}

</script>
			 <?php  } else if($page_title=="health-plans")
          { ?>
	 <!-- <div class="nw-health">
<a href="<?=base_url()?>/buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=buy_online_button_health_category&utm_content=health_plans" target="_blank" class="redBtn btnNewClass" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="
    /* margin-top: 91px; */
">Buy&nbsp;Online</a>
</div>-->
          <article class="faqsWrap" id="faqsWrapDiv">
 
				
 

			<div class="midWrapper para-p">
			<h2 class="h2bold paraa-p">What are health insurance plans?</h2>
			<p>Health insurance plans are a type of insurance coverage paying for health-related expenses. It can cover the costs of medicines, surgeries, hospitalization, day-care procedures, critical ailment treatments, and other medical expenditure the policyholder incurs.</p>
			<p>Due to escalating healthcare costs, proper treatment for medical conditions can dent your savings. Also, when a crisis arises, unless you have the funds at hand, arranging for timely medical assistance can be challenging. Health insurance protects you from such financial strains. It ensures access to quality healthcare.  </p>
			
			
			
			
			<h2 class="h2bold paraa-p">Importance of health insurance plan in India</h2>
			
			
			<p>A health insurance plan is essential in India because of escalating medical care costs. Medical inflation is increasing at double the rate of overall inflation. According to the Government’s 2018-19 Economic Survey, the average retail healthcare inflation rate is an alarming 7.14%.</p>
			<p class="paraa-p">Moreover, in India, the burden of lifestyle disorders is also growing.</p>
			<p class="paraa-p">Chronic health conditions such as heart problems, cancer, and liver diseases, need long-term follow-up therapies. Studies show that 85.42% of Indian households facing economic instability due to health expenses have a critical illness in the family</p>
			<p class="paraa-p">Unfortunately, in the matter of health insurance, India is underinsured. As per the National Sample Survey (NSS), over 80% of Indians do not have health insurance. The Insurance Regulatory and Development Authority of India (IRDAI) says that out-of-pocket spending on medical care is 64%.</p>
            <p class="paraa-p">The lack of health insurance causes Indians to dig into their savings, sell assets, or take loans to pay for medical expenditure.</p>
			<p class="paraa-p">Therefore, if an unforeseen medical concern crops up, the cost of hospitalization and adequate treatment can derail finances. The situation becomes more complicated if the person whose earnings sustain the household loses their income due to ill health.</p>
			<p class="paraa-p">Paying the small premium for a health plan insurance can help you avoid such financial uncertainty.</p>
			
			 
			
			<h2 class="h2bold paraa-p">Why should you buy a health insurance plan? </h2>
			  <p>From luxury expenses like foreign holidays to necessary expenditures like children’s higher education, the need for funds are many. Effective arrangement for such funds necessitates planned investments. However, you may have to spend a large portion of your income on basic amenities and immediate needs. It may leave a very little surplus for future requirements. Therefore, financial experts advise that before you consume your entire salary on day-to-day expenses, you should set aside a sum for the future. </p>
			  <p>The problem arises when the amount that you can save regularly is small in comparison to the funds that you may need later. Herein lays the need for wealth building, which grows the money you put aside. A money-saving plan helps in increasing your savings over time so that enough capital accumulates when the need for funds arises. Here’s a look at reasons for buying such plans.</p>
				<ul class="bullet">
					<li><b>Provides financial security</b></li>
						<p>Medical emergencies arise unannounced. But the cost of quality healthcare is steep. Paying for the treatments from your savings can force your family to compromise with their living costs. Your children’s education or retirement funds can get affected.</p>
					   <p>A health insurance policy covers most medical expenses, such as:</p>
					      <ul>
						     <li>Diagnostic tests</li>
							  <li>Doctor’s consultation charges</li>
							   <li>Hospital bills</li>
							    <li>Medicine prices, chemotherapy costs</li>
								 <li>Ambulance charges</li>
								  <li>Pre and post hospitalization</li>
					       </ul>
						   <p>Thus, you can access appropriate treatment on time without risking your loved ones’ financial wellbeing.</p>
					
					
					
					<li><b>Enables you to fight critical illnesses</b></li>
						<p>Diseases like heart attack, stroke, liver damage, and nerve disorders are widespread these days. Sedentary lifestyles, poor eating habits, stress, and pollution have led to an increase in such diseases even in the youth.</p>
					  <p>Critical illness insurance policies reduce your financial worries for the treatment of such medical conditions.</p>
					
					  <li><b>Helps you get the best treatment</b></li>
						<p>Most insurers reimburse costs incurred even when you undergo treatment in any hospital not having tie-ups with the insurance company.</p>
						<p>Also, critical illness insurance allows you to undergo treatment at any hospital you prefer. You can use the upfront lump-sum payout in any way you choose.</p>

						<li><b>Covers hospitalization expenses</b></li>
							<p>All medical expenses may not be covered under health insurance plans. But you can opt for a daily hospitalization cash benefit with your base plan. It pays a fixed sum for each day of hospitalization. You can use the sum as per your need, covering extra costs excluded from your health cover</p>
							<li><b>Acts as income replacement</b> </li>
							<p>Many medical policies offer regular incomes on the diagnosis of the diseases covered under the policy. Thus, your insurance policy serves as a livelihood if you need to take a career break due to poor health.</p>
					<li><b>Takes over future premiums during ill health</b></li>
					  <p>Insurers offer premium waiver if your earnings suffer and you fail to pay your premiums due to failing health. Your policy stays in force.</p>
                            
                            
					  <li><b>Provides a safety net against accidents</b></li>
                        <p>Some health policy providers offer accident coverage, paying a lump sum in case of death or disability due to accident. The payouts provide financial relief to your family in their hours of need</p>
				 
				 <li><b>Protects your family’s health</b></li>
				 <p>You can include your family members under your health plan, ensuring their speedy recovery with your health cover’s financial aid.</p>
				 
				 <li><b>Reduces income tax</b></li>
				 <p>Health insurance premiums are deductible from your taxable income under Section 80D of the Income Tax Act, 1961. The payouts are also tax-free. Thus, buying a medical insurance plan can help you save on taxes. The table below displays the available tax deductions:</p>
			     <table class="tableClass">
				   <tr>
				      <tr><td>Members Covered</td><td>Tax Deductions</td><td>Total Tax Exemption</td></tr>

					  <tr><td>Self and parents below 60 years of age</td><td>₹25,000+₹25,000</td><td>₹50,000</td> </tr>
					  
					  <tr> 
						  <td>Self below age 60 years and parents above 60 years</td> 
						   <td>₹25,000+₹50,000</td>
						   <td>₹75,000</td>
			          </tr>
					  
					  <tr>
					  <td>Self and parents both more than 60 years old</td>					    
						    <td>₹50,000+₹50,000</td>
						      <td>₹1,00,000</td>
			          </tr>
			  </table>
			  
			  <li><b>Arranges for transportation in medical emergencies</b></li>
			  <p>Illness or injury can strike when you are away from the scope of proper medical care. Your insurer can organize the transportation and equipment needed for the transfer to a reliable medical facility. Also, when your health condition becomes stable, your insurance partner arranges for your return home under medical supervision.</p>
			
			</ul>
			 
                <h2 class="h2bold paraa-p">Important Features and Components of a Health Insurance Plan </h2>
				  <p>The notable components of a medical insurance plan include:</p>
				<ul class="bullet">
					<li><b>Sum insured:</b> The maximum amount you can claim against your medical expenses or the maximum payout the insurer guarantees on the detection of diseases covered.  </li>
				    
                  
				   
				   <li><b>Premium:</b>The amount you pay to your insurer to enjoy the health cover, either at one go or throughout the policy period</li>
				   
				   <li><b>Policy period: </b>The duration through which your health cover remains active, and you can raise claims for health issues covered</li>
				   
				   <li><b>Network hospital: </b>Hospitals having tie-ups with your insurance companies, allowing cashless treatment on admission</li>
				   
				   <li><b>Cashless treatment: </b>Hospitalization without having to pay the bills yourself, on admission to the insurer’s network hospitals</li>
				   
				   <li><b>Deductible: </b>The amount you must pay from your resources before your insurer starts paying their contribution towards your medical expenses</li>
				   
				   <li><b>Co-payment: </b>The fixed percentage of medical bills you agree to pay yourself while the insurer pays the balance, effectively reducing the payable premium  </li>
				   
				   <li><b>No Claim Bonus: </b>Increase in sum insured during policy renewal at no extra cost as a reward for a no-claim policy year</li>
				   
				   
				   <li><b>Daily Hospital Cash Allowance: </b>Lump-sum amount paid for each day spent in the hospital subject to a minimum hospitalization period</li>
				   
				   <li><b>Critical illness cover: </b>Medical insurance against life-threatening, non-infectious health conditions, offering lump-sum payouts on diagnosis</li>
				   
				   <li><b>Policy lapse: </b>Termination of health covers on missing premium payment on time</li>
				   
				   <li><b>Grace period: </b>Timeframe the insurer permits for delayed premium payment after renewal due date before policy lapse</li>
				   
				   <li><b>Waiting period:</b>Time-gap from the policy start date before insurers start paying for claims</li>
				   
				   <li><b>Policy revival: </b>Reinstating your health policy, allowed within five years from the date of due premiums</li>
				   
				   
                  </ul>
 
					
			<h2 class="h2bold paraa-p">How do health insurance plans work?</h2>
			<p>A health insurance policy is an agreement between you and your insurance provider. You agree to pay a fixed premium. In exchange, the insurer promises to pay for the healthcare costs covered under your plan, arising during the policy period.</p>
			<p>Health insurance can be classified into two categories:</p>
			<ul class="bullet">
				<li><b>Mediclaim or indemnity medical policies</b></li>
			  <p>These policies pay the treatment costs up to the sum insured when you are admitted to a hospital. The amount paid depends on the actual expenses. You need to submit the hospital bills.</p>
			  <p>If the hospital is listed under the insurance company’s network, the insurer will directly settle the bills with your hospital. You need not bear any expense.  </p>
			  <p>If you have to get admitted to any hospital outside your insurer’s network, you have to pay the bills yourself. The insurance company will later reimburse the expenses subject to your policy’s terms and conditions. But treatments at hospitals outside India are usually not included.</p>
				
				
				
			  <li><b>Critical illness insurance plans</b></li>
			  <p>Such health plans cover specific life-threatening ailments that often need prolonged treatment and regular check-ups. Examples of such non-infectious lifestyle diseases include heart attack, stroke, liver damage, and cancer.</p>
			  <p>These fixed-benefit policies provide a pre-decided lump-sum payout upfront on the first diagnosis of the listed diseases. You need not submit any medical bills. A medical test report proving the diagnosis suffices.</p>
			</ul>
			  <p>The payouts are based on the cover you choose and not on the actual expenses. Thus, you are free to undergo treatment from any hospital of your choice, even abroad. The monies help you meet costs such as</p>
			  <ul class="bullet">
				     <li>Doctor’s fees</li>
			           <li>Follow-up health check-ups</li>
					     <li>Medicines and dietary supplements</li>
						   <li>Physiotherapy and other rehabilitation treatments</li>
						     <li>Monitoring devices</li>
							  
			          </ul>
					  <p>You can also use the payout to fund your family’s living costs, EMIs, your children’s education fees, and more. </p>
					  
					  
			 <h2 class="h2bold paraa-p">Who should buy health insurance plans?</h2>
			 <p>Health insurance plans are a necessity today. The coverage opens the gates to quality medical care regardless of your family’s resources.</p>
              <p>Therefore, if you have started earning, and want to protect your finances against rising healthcare costs, you must buy health insurance. You will stay financially prepared and free from anxiety in a health-related contingency. It can also maximize your tax savings.</p>			  

			  
			  
			  <h2 class="h2bold paraa-p">How much health cover do you need?</h2>
			  <p>The amount depends on the following parameters:</p>
			     <ul class="bullet">
				    <li><b>Age: </b>At a younger age, you can settle for lower coverage. But health complications increase with age, increasing the chances of a health insurance claim. Hence, as you become older, the premiums also become costlier. However, with specific health insurance types like critical illness covers, regardless of age, the premium remains fixed. Thus, it is advisable to buy a sizeable coverage even at a young age.</li>
					<li><b>Health: </b>If you do not suffer from any health condition, low coverage might be acceptable. But with health issues like obesity or hypertension, odds of lifestyle diseases increase.</li>
					<li>Also, even if you are healthy, look into your family’s medical history. Some diseases like diabetes are often hereditary and lead to complications like liver damage later. It is better to secure coverage against such ailments in advance.</li>
					<li><b>Budget: </b>An expensive medical policy that eats into your earning defeats the purpose of health insurance - safeguarding your finances. Hence, buy coverage with a premium you can service throughout the policy term.</li>
			  
			  
			  <h2 class="h2bold paraa-p">What are the different types of health insurance plans offered by Kotak Life?</h2>
			  <p>Kotak Life offers a fixed-benefit medical insurance plan, <a href="<?=base_url()?>/insurance-plans/health-plans/kotak-health-shield">Kotak Health Shield.</a> It covers both early and major stages of cancer and life-threatening medical conditions related to the heart, liver, and nerves.</p>
			  <p>On the diagnosis of the illnesses covered under the plan, you receive a lump-sum payout without the need for hospital bills. The policy also provides financial protection against death or permanent disability due to an accident.</p>
			  <p>The affordable premiums start from ₹300 for ₹10 lakhs sum assured. </p>
			    <p><b>You can select one or more from the following covers:</b></p>
				    <ul class="bullet">
			                  <li>Cancer Shield</li>
							  <li>Cardiac Shield, including pacemaker implantation, angioplasty, open heart bypass surgery, heart attack</li>
							  <li>Live Shield, including liver cirrhosis, viral hepatitis, liver transplant</li>
							  <li>Neuro Shield, against coma, paralysis, stroke, brain tumour</li>
							  
							  <li>Personal Accident Shield, covering an unfortunate demise or disability from an accident</li>
			        </ul>
			<p><b>You can also include your spouse under your plan and select add-on benefits such as:</b>	</p>	
			        <ul class="bullet">
					     <li>Daily hospitalization cash allowance</li>
						 <li>Waiver of premium on the diagnosis of specified health conditions</li>
						 <li>Monthly income benefit at major stages of the diseases covered</li>
				   </ul>
           <p><b>The policy provides an all-round solution for your healthcare needs through in-built wellness benefits such as:</b>	</p>			   
			  <ul class="bullet">
			         <li>Option for second medical opinions</li>
					 <li>Option for second medical opinions</li>
					 <li>Medical repatriation to your homeland</li>
					 <li>Medical repatriation to your homeland</li>
			         <li>Medical monitoring of treatment</li> 
			  </ul>
			  <p>Anyone between 18 and 65 years of age can avail of this health insurance plan. Coverage remains active up to the age of 75 years.</p>
			  
			  <h2>How to buy the best health insurance plan for your family?</h2>
			    <p>While choosing a health insurance plan, you need to weigh in the following factors:</p>
				<ul class="bullet">
				  <li><b>The right policy type:</b></li>
                      <p>Assess your healthcare needs. If your family members depend on you financially, you need health covers for them too. However, including elderly parents in family floater plans can make the premiums costly. The price depends upon the age of the oldest member covered. Hence, picking a joint cover for yourself and your spouse, buying separate plans for your parents could be cost-effective.</p>
			     <p>Also, if your health status or family’s medical history increases the risk of lifestyle diseases, consider buying critical illness insurance</p>
			  
			  <li><b>The coverage amount:</b></li>
			  <p>Select a plan that offers comprehensive coverage as per your age and health.</p>
			  <p>Also, if your profession involves working in hazardous conditions or frequent travels, an accident protection shield could prove valuable.</p>
			  
			  <li><b>Premium rates:</b></li>
			  <p>Choose plans that provide the coverage you need at premiums that suit your budget. Also, select a premium payment frequency matching your cash inflow.</p>
			  
			  <li><b>Policy term:</b></li>
			  <p>Need for health insurance increases with age. Buy a plan featuring a long policy term to enjoy coverage in your old age.</p>
			 
			 <li><b>Add-on benefits:</b></li>
			  <p>For a nominal premium hike, you can extend your base cover to include:</p>
                    <ul class="bullet">
					      <li>Daily hospital cash allowance for expenses excluded under your plan</li>
			                  <li>Premium waiver in case of inability to continue paying premiums due to poor health condition, keeping your cover active</li>
			                  <li>Regular income to replace your earnings lost due to ill health, providing your family’s living expenses</li>
			 
			           </ul>
			 
			 <li><b>In-built features:</b></li>
			 <p> Medical emergencies might need a quick transfer to suitable medical centres. If you fall ill away from home, you may need assistance to return. A family member’s presence during your illness could be invaluable. Opt for a plan that provides such useful facilities as a part of the base cover.</p>
			 
			 <li><b>Exclusions:</b></li>
			 <p>Read the fine print carefully to understand if any expense is not covered under the plan. Compare brochures for health insurance online to locate the best offering.  </p>
			 
			 
			  <li><b>Hospital network:</b></li>
			 <p>The extent of the insurer’s hospital network is the key to accessing medical care anywhere in India. However, when buying critical illness insurance, this need not be a concern since you can undergo treatment wherever you choose.</p>
			 
			 
			  <li><b>Insurer’s credibility:</b></li>
			 <p>A high claim settlement ratio (CSR) indicates a greater probability of your claim being honoured. For example, Kotak Life, scoring a CSR of <a href="<?=base_url()?>/insurance-guide/about-life-insurance/kotak-life-claim-settlement-ratio">97.4%</a> in FY2018-19, enjoys a long-standing reputation as a reliable insurance provider.</p>
				</ul>
			 
			 
			 
			 <h2 class="h2bold paraa-p">Documents required to buy a health insurance plan</h2>
			  <ul class="bullet">
			  <li><b>Identity proof: </b>Aadhaar Card/ Passport/ Voter Card/ Driving License/ PAN Card</li>
			   <li><b>Age proof: </b> Birth Certificate/ Passport/ Driving License/ Voter ID/ 10th or 12th class board examination mark sheet</li>
			    <li><b>Residential address proof: </b>Aadhaar Card/ Passport/ Voter Card/ Driving License/ Ration Card/ Utility bills for electricity or telephone</li>
			   <li><b>Passport size photo</b></li>
			  </ul>
			 
			   <h2 class="h2bold paraa-p">Conclusion</h2>
			   <p>In India, the cost of medical facilities is skyrocketing. You would not want your family to suffer from monetary shortfalls due to a medical crisis. Hence, financial preparedness is vital to avoid burning a hole in your pocket due to medical emergencies.</p>
			   <p  class="paraa-p">Buying a health insurance plan with an adequate sum assured helps you avoid financial shortfalls in medical emergencies. Moreover, life-threatening medical conditions are rampant these days. </p>
			   <p  class="paraa-p">Kotak Health Shield provides financial cover against the most common non-communicable diseases in India at affordable premium rates. Invest in this health plan and remain stress-free about the financials in case of a medical contingency.</p>
			 
			 
			
			<h2 class="h2bold paraa-p">Reasons to Choose Kotak Life for Your Savings and Investment Plans</h2>
			<p>Kotak Life offers a fixed-benefit medical insurance plan, Kotak Health Shield. It covers both early and major stages of cancer and life-threatening medical conditions related to the heart, liver, and nerves. </p>
			<p class="paraa-p">On the diagnosis of the illnesses covered under the plan, you receive a lump-sum payout without the need for hospital bills. The policy also provides financial protection against death or permanent disability due to an accident.</p>
			<p class="paraa-p">The affordable premiums start from ₹300 for ₹10 lakhs sum assured.</p>
              <p><b>You can select one or more from the following covers:</b></p>
			  
			<ul class="bullet">
					<li>Cancer Shield</li>
					  
						   <li>Cardiac Shield, including pacemaker implantation, angioplasty, open heart bypass surgery, heart attack</li>
						    <li>Live Shield, including liver cirrhosis, viral hepatitis, liver transplant </li>
							 <li>Neuro Shield, against coma, paralysis, stroke, brain tumour</li>
							 <li>Personal Accident Shield, covering an unfortunate demise or disability from an accident</li>
					</ul>
					
						<p><b> You can also include your spouse under your plan and select add-on benefits such as:</b></p>
							<ul class="bullet">
							<li>Daily hospitalization cash allowance</li>
								<li>Waiver of premium on the diagnosis of specified health conditions</li>
								<li>Monthly income benefit at major stages of the diseases covered</li>
							</ul>
					 
					<p><b>The policy provides an all-round solution for your healthcare needs through in-built wellness benefits such as:</b></p>
					<ul class="bullet">
					<li>Option for second medical opinions</li>
						<li>Medical evacuation from areas lacking healthcare facilities</li>
						<li>Medical repatriation to your homeland</li>
						<li>Compassionate visit of a relative during illness</li>
						<li>Medical monitoring of treatment</li>
					</ul>
					<p>Anyone between 18 and 65 years of age can avail of this health insurance plan. Coverage remains active up to the age of 75 years.</p>
				 </ul>
				 
				 
				 
				 
				 
			<h2>FAQs</h2>
				<!-- Accord Start -->
				<ul class="accordUL" id="faqs-div">
					<li class="ga_track">
						<h3 class=""><span>What is Health Insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Health insurance is a type of insurance product covering medical expenses incurred due to health conditions covered under the plan. Health insurance policies take the financial burden out of quality healthcare, allowing you to access adequate treatment. Thus, it secures your family against any cash crunch arising from unforeseen health-related expenses.</p>
						</div>
					</li>
					
					<li class="ga_track">
						<h3 class=""><span>What is Kotak Health Shield?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Kotak Health Shield is a fixed benefit health insurance plan from the Kotak. It offers coverage against: </p>
							<ul class="bullet">
								<li>Cancer</li>
								<li>Cardiac problems</li>
								<li>Liver diseases     </li>
								<li>Nervous system disorders</li>
								<li>Accidents.</li>
							</ul>	
								<p>On the first diagnosis of the diseases covered, the plan pays a pre-decided lump-sum amount upfront. You need not furnish any hospital bills. The policy offers further add-on benefits to increase your base cover for a minimal price, such as:</p>
								<ul class="bullet">
								<li>Daily Hospital Cash Allowance</li>
								<li>Premium Waiver.</li>
								<li>Income replacement</li>
							</ul>
								
						</div>
					</li>
					
					
					<li class="ga_track">
						<h3 class=""><span>What are the top benefits of health insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
						        <ul class="bullet">
							  <li><b>Financial security:</b>Meeting expensive treatment costs out-of-pocket can strain your savings, often needing loans or sale of assets. Health insurance covers the medical expenses, keeping your savings intact. It can also serve as an alternate income source in income loss due to illness.</li> 
							<li><b>Access to quality healthcare: </b>In a medical emergency, arranging for the necessary funds at short notice can be challenging. Health insurance foots the bills, allowing timely access to the right treatment.</li>
							<li><b>Tax savings: </b>You can claim benefits on the premium you pay for your health plan.</li>
							
							
							
							
							
							
							
							
							
							
							
							
							
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What are the tax benefits of health insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>The premiums you pay for your health insurance policy are deductible from your taxable income under Section 80D of the Income Tax Act, 1961. You can claim deductions up to ₹25,000 if you are less than 60 years of age. A senior citizen over 60 years old can avail up to ₹50,000. You can also claim the benefits if you pay for your parents’ medical policies.</p>
						<p>Health insurance payouts are also tax-exempt.</p>
													
						</div>
					</li>
					
					
					<li class="ga_track">
						<h3 class=""><span>Is a medical test compulsory to buy Kotak Life plans?</span></h3>
						<div class="accordDesc" style="display: none;">
						<p>Kotak Health Shield is a critical illness health insurance plan from Kotak Life offering a lump-sum payout on the diagnosis of the diseases covered. No medical tests are needed to buy this plan. Only when you raise a claim, you need to furnish the diagnostic test report confirming the disease’s detection.</p>
														 		
						</div>
					</li>
					
					
					<li class="ga_track">
						<h3 class=""><span>Which illnesses are covered under Kotak Health Shield?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Kotak Health Shield covers the four most common non-communicable critical illnesses in India:</p>
							  <ul class="bullet">
								<li>Cancer</li>
								<li>Heart problems</li>
								<li>Nerve disorders</li>
								<li>Liver diseases</li>
							</ul>	
						<p>The policy also offers financial protection against death or permanent disability due to an accident.</p>		
						</li>		
							 
					
					
					
					<li class="ga_track">
						<h3 class=""><span>⦁	How can I buy a Kotak Health Shield Plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							
							<p>You can buy the Kotak Health Shield Plan following the steps below:</p>
								  <ul class="bullet">
						                      <li>Decide on the coverage amount and whether you want to include your spouse under the plan</li>
											  <li>Select the sum assured if you opt for the Personal Accident Shield coverage</li>
											  <li>Select a policy period</li>
											  <li>Pick a premium payment term (one-time or throughout policy term)</li>
											  <li>Choose the premium payment frequency between monthly and yearly alternatives</li>
											  <li>Get in touch with expert Kotak Life advisors to help with your purchase via</li>
											     <ul class="bullet">
						                                  <li>the toll-free number 1800 209 8800</li>
														  <li>the “Request a Life Advisor” form on the <a href="<?=base_url()?>/insurance-plans/health-plans/kotak-health-shield">official website</a></li>
														  <li>SMS KLIFE sent to 5676788</li>
						<
						                              </ul>
                               </ul>
						
						</div>                    
					</li>
					
					
					
					
					
					
					
					<li class="ga_track">
						<h3 class=""><span>What are the various savings and investment plans offered by Kotak Life?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Kotak Life offers a wide variety of investment and savings plans. Such plans cover every financial need from wealth creation, income generation, to tax planning. The types of plans include: </p>
                                <ul class="bullet">
								<li>Endowment policies like Kotak Classic Endowment Plan, Kotak Premium Endowment Plan </li>
								<li>Money-back plan like Kotak Premier Moneyback Plan</li>
							    <li>ULIP like Kotak Invest Maxima </li>
								<li>Income plan like Kotak Assured Income Accelerator, Kotak Premier Income Plan</li>
								<li>Guaranteed savings plan like Kotak Assured Savings Plan, Kotak Guaranteed Savings </li>
								<li>Limited pay plans like Kotak SmartLife, Kotak Platinum Plan (ULIP)</li>
							<li>One-time investment plans like Single Invest Plus, Single Invest Advantage</li>
											<li>Double-life protection plan like Single Invest Plus</li>
									<li>Top-up ULIP like Kotak Ace Investment></li>
													<li>Low-income support plan like Sampoorn Bima Micro-Insurance </li>
													
								</ul>
                           						
                               							
						</div>
					</li>
					
					
					
					<li class="ga_track">
						<h3 class=""><span>How to buy the best savings and investment plan in India?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>The features that decide the best saving policy include:</p>
                                  <ul class="bullet">
								<li>High yields – When investing in the money market, look for plans that offer diverse fund types and the option to switch among funds with changing market scenario.  It will help in maximizing returns. Also, when investing in traditional plans, opt for those that offer guaranteed boosts to your capital. </li>
								<li>Low cost – Look for plans that charge the least for handling your funds.</li>
							    <li>Reliability –The provider must be financially strong enough to be able to meet all claims. Also, a company with a robust claim settlement record promises surety about your claim being cleared </li>
								
								<p>In India, Kotak Life Insurance meets all these parameters. </p>
								
								
								<li>Offering 6 fund types to choose from and the liberty to switch, the ULIPs from Kotak present substantial growth potential.</li>
								<li>Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.</li>
								<li>Some plans require zero premium allocation charges.</li>
                               <li>With a CSR of 97.4% in the FY 2018-19 and a solvency ratio of 3.02 for the year ending on March 2019, Kotak Life occupies a position of trust in the Indian insurance sector. </li>
							<p>Therefore,you can remain stay stress-free about your investments with a Kotak savings and investment plan.</p>
								</ul>     							
						</div>
					</li>
					
					
					
					
					 
				</ul>
								<!-- Accord End --> 
			</div>
		  </article>
			<script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "What is Health Insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Health insurance is a type of insurance product covering medical expenses incurred due to health conditions covered under the plan. Health insurance policies take the financial burden out of quality healthcare, allowing you to access adequate treatment. Thus, it secures your family against any cash crunch arising from unforeseen health-related expenses."

}

},{

"@type": "Question",

"name": "What is Kotak Health Shield?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Kotak Health Shield is a fixed benefit health insurance plan from the Kotak. It offers coverage against: CancerCardiac problemsLiver diseasesNervous system disordersAccidents.On the first diagnosis of the diseases covered, the plan pays a pre-decided lump-sum amount upfront. You need not furnish any hospital bills. The policy offers further add-on benefits to increase your base cover for a minimal price, such as:Daily Hospital Cash AllowancePremium Waiver.Income replacement"

}

},{

"@type": "Question",

"name": "What are the top benefits of health insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Financial security:Meeting expensive treatment costs out-of-pocket can strain your savings, often needing loans or sale of assets. Health insurance covers the medical expenses, keeping your savings intact. It can also serve as an alternate income source in income loss due to illness. Access to quality healthcare: In a medical emergency, arranging for the necessary funds at short notice can be challenging. Health insurance foots the bills, allowing timely access to the right treatment.Tax savings: You can claim benefits on the premium you pay for your health plan."

}

},{

"@type": "Question",

"name": "What are the tax benefits of health insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "The premiums you pay for your health insurance policy are deductible from your taxable income under Section 80D of the Income Tax Act, 1961. You can claim deductions up to ₹25,000 if you are less than 60 years of age. A senior citizen over 60 years old can avail up to ₹50,000. You can also claim the benefits if you pay for your parents’ medical policies.Health insurance payouts are also tax-exempt."

}

},{

"@type": "Question",

"name": "Is a medical test compulsory to buy Kotak Life plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Kotak Health Shield is a critical illness health insurance plan from Kotak Life offering a lump-sum payout on the diagnosis of the diseases covered. No medical tests are needed to buy this plan. Only when you raise a claim, you need to furnish the diagnostic test report confirming the disease’s detection."

}

},{

"@type": "Question",

"name": "Which illnesses are covered under Kotak Health Shield?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Kotak Health Shield covers the four most common non-communicable critical illnesses in India:CancerHeart problemsNerve disordersLiver diseasesThe policy also offers financial protection against death or permanent disability due to an accident"

}

},{

"@type": "Question",

"name": "Kotak Health Shield covers the four most common non-communicable critical illnesses in India:CancerHeart problemsNerve disordersLiver diseasesThe policy also offers financial protection against death or permanent disability due to an accident",

"acceptedAnswer": {

"@type": "Answer",

"text": "You can buy the Kotak Health Shield Plan following the steps below:Decide on the coverage amount and whether you want to include your spouse under the planSelect the sum assured if you opt for the Personal Accident Shield coverageSelect a policy periodPick a premium payment term (one-time or throughout policy term)Choose the premium payment frequency between monthly and yearly alternativesGet in touch with expert Kotak Life advisors to help with your purchase viathe toll-free number 1800 209 8800the “Request a Life Advisor” form on the official websiteSMS KLIFE sent to 5676788"

}

},{

"@type": "Question",

"name": "What are the various savings and investment plans offered by Kotak Life?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Kotak Life offers a wide variety of investment and savings plans. Such plans cover every financial need from wealth creation, income generation, to tax planning. The types of plans include: Endowment policies like Kotak Classic Endowment Plan, Kotak Premium Endowment Plan Money-back plan like Kotak Premier Moneyback PlanULIP like Kotak Invest Maxima Income plan like Kotak Assured Income Accelerator, Kotak Premier Income PlanGuaranteed savings plan like Kotak Assured Savings Plan, Kotak Guaranteed Savings Limited pay plans like Kotak SmartLife, Kotak Platinum Plan (ULIP)One-time investment plans like Single Invest Plus, Single Invest AdvantageDouble-life protection plan like Single Invest PlusTop-up ULIP like Kotak Ace Investment>Low-income support plan like Sampoorn Bima Micro-Insurance"

}

},{

"@type": "Question",

"name": "How to buy the best savings and investment plan in India?",

"acceptedAnswer": {

"@type": "Answer",

"text": "The features that decide the best saving policy include:High yields – When investing in the money market, look for plans that offer diverse fund types and the option to switch among funds with changing market scenario. It will help in maximizing returns. Also, when investing in traditional plans, opt for those that offer guaranteed boosts to your capital.Low cost – Look for plans that charge the least for handling your funds.Reliability –The provider must be financially strong enough to be able to meet all claims. Also, a company with a robust claim settlement record promises surety about your claim being cleared In India, Kotak Life Insurance meets all these parameters.Offering 6 fund types to choose from and the liberty to switch, the ULIPs from Kotak present substantial growth potential.Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.Some plans require zero premium allocation charges.With a CSR of 97.4% in the FY 2018-19 and a solvency ratio of 3.02 for the year ending on March 2019, Kotak Life occupies a position of trust in the Indian insurance sector.Therefore,you can remain stay stress-free about your investments with a Kotak savings and investment plan."

}

}]

}

</script>
        <?php } else  if($page_title=="savings-and-investments-plans") { ?>
		 <article class="faqsWrap" id="faqsWrapDiv">
		   <div class="midWrapper para-p">
		   <h2 class="h2bold paraa-p">Understanding Savings and Investment Plans</h2>
		   <p>The first step towards understanding savings and investment plans is to realize the difference between savings and investments.</p>
		   <p class="paraa-p"><b>Saving:</b> It means keeping a part of your income aside for future needs.</p>
		   <p class="paraa-p"><b>Investment:</b> It involves building wealth or making your savings grow.</p>
		   <p class="paraa-p">A savings and investment plan is an insurance policy that plays both roles. It allows you to accumulate funds systematically over time and promote disciplined investment. Such plans also provide multiple avenues to build a corpus. You can choose from guaranteed or market-linked instruments as investment tools. At maturity, you receive the maturity value as the return on your investment. The proceeds help finance your future goals like children’s education, marriage, and amassing retirement funds.</p>
		   <p class="paraa-p">Besides, if an unfortunate event occurs during the tenure of the policy, your nominee receives payouts. Therefore, the life insurance component safeguards your family against economic hardships in your absence. Thus, such a plan combines the benefits of life insurance with savings.</p>
		   <p class="paraa-p">Moreover, all savings schemes in India are eligible for <a href="insurance-guide/savingstax/income-tax-deductions-list">tax benefits</a> as well.</p>
		   <p class="paraa-p">The best savings plans in the insurance industry offer various features that cater to individual financial needs. The different types of investment plans available in the Indian insurance sector include:</p>
		   <ul class="bullet paraa-p">
			 <li><b>Participating Endowment Plans</b> that assure a guaranteed maturity benefit along with bonuses.</li>
			 <li><b>Unit linked insurance plans (ULIP)</b> that do not offer any fixed maturity amount. Your returns depend on the market performance of the funds in which you choose to invest. You can elect to allocate your premiums in debt or equity-based on your risk tolerance. With investments in the capital market, such plans bring the potential of substantial yields.</li>
			 <li><b>Guaranteed return plans</b> invest in fixed income securities and are thus risk-free investment insurance.Growth of money is assured with no stress of market performance.</li>
			 <li><b>Money-back plans</b> pay parts of the maturity benefits at pre-defined intervals. The remaining amount, along with bonuses, is paid at maturity. Thus, such policies can meet short-term liquidity needs.</li>
			 <li><b>Income plans</b> provide monthly or yearly incomes while your capital keeps growing with bonus additions.</li>
		   </ul> 
		   
		   <h2 class="h2bold paraa-p">Why Should You Buy Savings and Investment Plans?</h2>
			 <p>From luxury expenses like foreign holidays to necessary expenditures like children’s higher education, the need for funds are many. Effective arrangement for such funds necessitates planned investments. However, you may have to spend a large portion of your income on basic amenities and immediate needs. It may leave a very little surplus for future requirements. Therefore, financial experts advise that before you consume your entire salary on day-to-day expenses, you should set aside a sum for the future. </p>
			 <p  class="paraa-p">The problem arises when the amount that you can save regularly is small in comparison to the funds that you may need later. Herein lays the need for wealth building, which grows the money you put aside.A money-saving plan helps in increasing your savings over time so that enough capital accumulates when the need for funds arises. Here’s a look at reasons for buying such plans.</p>
			   <ul class="bullet paraa-p">
				   <li><b>Savings for long-term financial goals</b></li>
					<p>	The longer you stay invested, the higher your wealth accumulates. Thus, a savings scheme can be the ideal tool to attain financial independence and meet every monetary requirement in life.</p>
				   <li><b>Security for family’s financial future</b></li>
				   <p>The life insurance element in the savings plans protects your loved ones against a financial crisis if you face any unwanted situation. The payouts act as replacements of your income when your earnings can no longer provide their living costs</p>
				   <li><b>Tax benefits</b></li>
				   <p>The premiums that you pay towards your savings and investment plan are tax-deductible under Section 80C of the 1961 Income Tax Act (ITA). The returns, both maturity benefits and death benefits, are also tax-exempt under the conditions of <a href="<?=base_url()?>/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D)</a> of the ITA. </p>
				   <li><b>Lucrative returns with capital market investments and the power of compounding</b></li>
				   <p>Investment plans, particularly the market-linked ones like <a href="ulip-plans">ULIP</a>, offer the prospect of considerable profits. You can monitor your funds and switch among different asset classes. Thus, you can optimize your earnings and generate substantial returns. Moreover, with profits, investments like <a href="insurance-guide/savingstax/what-is-endowment-plan">endowment policies</a> increase in worth due to the compound effect of bonuses. Thus, the compounding of revenues, along with long-term savings, can fetch a sizeable profit.</p>
				   <li><b>The discipline of periodic savings</b></li>
				   <p>Since many such plans come with lock-in periods, these build the habit of saving without liquidating funds. It helps in the growth of funds without depleting savings and eases the strain of financial liabilities later in life.</p>
				   <li><b>Flexibility and liquidity</b></li>
					 <p>A money-savings plan provides features like</p>
							<ul class="bullet">
								 <li>switching between invested funds as per risk appetite</li>
								 <li>partial withdrawal of funds</li>
								 <li>liquidity in the form of loans against the policy</li>
								 <li>multiple modes of premium payment according to your financial schedule</li>
							</ul>
						   <p>Also, you can choose from guaranteed or market-linked options in line with your investment needs.</p>
				   <li><b>Effective defence from inflation</b></li>
					   <p>Systematic investments in the money market over a long period give your capital the time to stabilize and grow. Thus, you can assemble sufficient corpus that can shield you against inflation.</p>
				  </ul> 
		   
				  <h2 class="h2bold paraa-p">Here are some Savings and Investment Plans for Your Family</h2>
		   <p><a href="<?=base_url()?>/savings-plan/kotak-assured-income-accelerator">Kotak Assured Income Accelerator</a></p>
			   <ul class="bullet">
				  <li>A non-participating life insurance plan</li>
				  <li>Guaranteed yearly income during the payout phase</li>
				  <li>Income boosters to increase yearly returns</li>
				  <li>Death benefit independent of the income paid</li>
			   </ul>
		   <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></p><!--premier-endowment-plan-->
			   <ul class="bullet">
				  <li>Guaranteed annual additions to life cover</li>
				  <li>Loyalty additions at maturity</li>
				  </ul>
				  <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-premier-endowment-plan">Kotak Premier Endowment Plan</a></p>
				  <ul class="bullet">
				  <li>Guaranteed additions</li>
				  <li>Aditional Protection through optional riders</li>
				  </ul>
		  <p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-invest-maxima">Kotak Invest Maxima</a></p>
					<ul class="bullet">
				  <li>Zero premium allocation charges</li>
				  <li>Choice of portfolio strategies and fund types</li>
				  <li>Multiple options for the policy term and the premium payment term</li>
				  <li>Partial withdrawals</li>
				  <li>Rewards on long-term investment</li>
			   </ul> 		  
		  <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-premier-moneyback-plan">Kotak Premier Moneyback Plan</a></p>
					<ul class="bullet">
				  <li>A participating plan</li>
				  <li>Payouts at regular intervals </li>
				  <li>A lump-sum amount at maturity </li>
				  <li>Bonus from the first year</li>
				  <li>Accidental death benefit</li>
			   </ul> 			   
			   <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-classic-endowment-plan">Kotak Classic Endowment Plan</a></p>
					<ul class="bullet">
				  <li>Vested bonuses along with maturity benefits</li>
				  <li>Discounts on premium with high sum assured </li>
				  <li>Freedom for policy term selection </li>
				  </ul> 				  
				 <!-- <p  class="paraa-p"><a href="<?=base_url()?>/insurance-plans/savings-and-investments-plans/kotak-premier-income-plan">Kotak Premier Income Plan</a></p>
					<ul class="bullet">
				  <li>Death benefit = Sum Assured + Vested Bonuses + Terminal Bonuses</li>
				  <li>Guaranteed annual income </li>				  
				  </ul> -->
				 <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-smartlife-plan">Kotak SmartLife Plan</a></p>
					<ul class="bullet">
				  <li>A limited pay non-market-linked participating plan</li>
				  <li>Choice of bonus options between cash payout and addition to maturity proceeds</li>
				  </ul> 
				  
				   <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-premier-income-plan">Kotak Premier Income Plan</a></p>
					<ul class="bullet">
				  <li>Guaranteed annual income after the premium payment tenure</li>
				  <li>Enhanced life coverage on higher premiums and for females</li>
				  <li>Bonuses throughout the policy period</li>
				  </ul> 
				  
				   <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-sampoorn-bima-micro-insurance-plan">Kotak Sampoorn Bima Micro-Insurance Plan</a></p>
					<ul class="bullet">
						  <li>A single premium of ₹200</li>
						  <li>Fixed 5-years’ term</li>
						  <li>Guaranteed payout</li>
						  <li>No medical tests</li>
				  </ul> 

					<p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-single-invest-plus">Kotak Single Invest Plus</a></p>
					<ul class="bullet">
						  <li>Single premium policy</li>
						  <li>joint life cover for two family members</li>
						  <li>Loyalty additions after 10th policy year (for a 10-year term) and 15th year (for 15-year tenure)</li>
						  
				  </ul> 

					<p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-single-invest-advantage">Kotak Single Invest Advantage</a></p>
					<ul class="bullet">
						  <li>One-time investment</li>
						  <li>Choice of 3 investment strategies</li>
						  <li>Loyalty additions on staying invested</li>
						  
				  </ul> 

					   <p  class="paraa-p"><a href="<?=base_url()?>/Kotak Platinum Plan
">Kotak Platinum Plan</a></p>
					<ul class="bullet">
						  <li>Three fund-management strategy alternatives</li>
						  <li>Survival units as financial rewards</li>
						  <li>Limited premium payment term</li>
						  <li>Major part of premium contributed towards investment</li>
				  </ul> 
				   
					<p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-pos-bachat-bima">POS Bachat Bima Plan</a></p>
						<ul class="bullet">
							   <li>Guaranteed yearly additions</li>
								<li>Two plan options – Life and Life Plus</li>
								<li>Double life coverage on accidental death with Life Plus plan</li>
								<li>Limited pay option</li>
						   </ul>	 

				   <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a></p>
						<ul class="bullet">
							   <li>Non-unit-linked and non-participating plan</li>
								<li>Guaranteed additions from the end of premium payment term onwards</li>
								<li>Option for limited premium payment term</li>
								<li>Guaranteed loyalty addition after the policy tenure</li>
						   </ul>	 
						   
						   
						   
							<p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-ace-investment-plan">Kotak Ace Investment</a></p>
						<ul class="bullet">
							   <li>ULIP with choice of three investment strategies</li>
								<li>Top-up premium facility</li>
								<li>Multiple payment period options</li>
								<li>Choice of a lump sum or periodic payouts after maturity</li>
						   </ul> 
						   
						   <p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-e-invest">Kotak e-Invest</a></p>
						<ul class="bullet">
							   <li>Zero Premium Allocation Charge</li>
								<li>Return of Mortality Charges</li>
						   </ul> 
						   
						   <p  class="paraa-p"><a href="<?=base_url()?>/ulip-plans/kotak-wealth-optima-plan">Kotak Wealth Optima Plan</a></p>
						<ul class="bullet">
							   <li>Choice of two investment strategies</li>
								<li>Options to be covered for whole life</li>
						   </ul> 
						    <p  class="paraa-p"><a href="<?=base_url()?>/savings-plan/kotak-premier-life-plan">Kotak Premier Life Plan</a></p>
					<ul class="bullet">
				  <li>Participating whole life plan</li>
				  <li>Simplerevisionary bonus </li>				  
				  </ul>

			   <h2 class="h2bold paraa-p">What are the features of Kotak Life savings and investment plans?</h2> 
		   
			   <ul class="bullet">
				   <li>Savings and growth</li>
				   <p class="paraa-p">If you are in search of a stable monetary foundation for your future regardless of your current financial condition, these plans provide the perfect means. </p>
				   
				   <li>Guaranteed payout</li>
				   <p class="paraa-p">Most plans other than the market-linked varieties offer guaranteed sum assured.</p>
				   
				   <li>Death benefits</li>
				   <p class="paraa-p">These policies being life insurance plans offer payouts to your beneficiary in case of any eventuality. Such payments are usually independent of any previous payouts of bonuses.</p>
				   
				   <li>Liquidity</li>
				   <p class="paraa-p">You can avail of partial withdrawals on your funds or apply for loans against your policy.</p>
				   
				   <li>Guaranteed income</li>
				   <p class="paraa-p">Many plans guarantee extra annual revenues after the completion of the premium payment term</p>
				   
				   <li>Increase in income</li>
				   <p class="paraa-p">Some income plans offer income boosts and enhance the yearly proceeds during the payout phase.</p>
				   
				   <li>Bonuses</li>
				   <p class="paraa-p">Most plans offer yearly vested bonuses along with terminal bonuses at maturity.</p>
				   
				   <li>Special rates</li>
				   <p class="paraa-p">Women and investors who opt for higher premium amounts can enjoy enhanced sum assured.</p>
					
			 
				   <li>Loyalty additions</li>
				   <p class="paraa-p">Many participating plans offer financial rewards as loyalty additions on long-term investments, increasing the profits. Some ULIPs provide survival units in-lieu of such bonuses.</p>	

				   <li>Minimal premium allocation charges</li>
				   <p class="paraa-p">Some of the ULIPs provide zero or negligible fees for premium allotments, increasing the returns.</p>	
				   
				   <li>Limited pay option</li>
				   <p class="paraa-p">Several plans offer the advantage of limited premium payment terms.</p>	
				   
				   <li>One-time investment options</li>
				   <p class="paraa-p">Some plans offer the benefit of one-time expense through a single premium facility.</p>	
				   
				   <li>Freedom to switch funds</li>
				   <p class="paraa-p">In ULIPs, you can shift your money over the different fund types based on the market outlook.</p>	
				   
				   <li>Top-up option</li>
				   <p class="paraa-p">Some ULIPs provide the chance to purchase additional units with extra payments over the standard premium.</p>	
				   
				   <li>Multiple investment strategies</li>
				   <p class="paraa-p">Choice of three portfolio strategies, age-based, self-managed, and systematic switching, align with your unique investment needs.</p>	

				   <li>Money-back options</li>
				  <p class="paraa-p">Several plans provide money-back opportunities for meeting interim needs for funds.</p>	
				   
				   <li>Discounts</li>
				   <p class="paraa-p">If you choose a high sum assured, you can get discounts on the premium with some plans.</p>	
				   
				   <li>Unique plans for low-income groups</li>
				   <p class="paraa-p">Specific plans offer low premiums and guaranteed payouts to benefit consumers with limited income.</p>
				   
				   <li>Choice of payout options</li>
				   <p class="paraa-p">A few of these plans provide the opportunity to take out accrued bonuses as cash payments or to let them accumulate until maturity.</p>

				 </ul> 
				   
		   <h2 class="h2bold">What are the Benefits of Kotak Life Savings and Investment Plans?</h2>
		   <p>Kotak Life enables you to personalize the protection as per your individual needs through riders. Some examples of such <a href="<?=base_url()?>/insurance-plans/insurance-plan-riders">riders</a> include:</p>
		   
		   <ul class="bullet">
				   <li><b>Protection</b></li>
				   <p  class="paraa-p">Security for your family against financial crisis is the primary benefit of these policies. Some of these plans also guarantee returns on your investment, thereby protecting your capital.</p>
				   
				  <li><b>Variety</b></li>
				  <p class="paraa-p">Kotak offers a considerable assortment of savings and investment plans to cater to every financial need. You can select the one that best suits your age, budget, and long-term needs.</p>
				  
				  <li><b>Cost-effective</b></li>
				  <p class="paraa-p">The non-linked participating policies offer life insurance at low premiums. Thus, you can buy appropriate coverage at an affordable price without compromising with your current lifestyle.</p>
				  
				  <li><b>Wealth enhancement</b></li>
				  <p class="paraa-p">Kotak pays you guaranteed dividends on participating life insurance plans. Some plans accrue bonuses that increase your returns.</p>
				  
				  <li><b>Customization</b></li>
					<ul class="bullet">
					  <li>You can augment your coverage with multiple riders and personalize your policy per your individual needs.</li>
					  <li>Term rider provides additional payouts over and above the death benefit on the base plan.</li>
					  <li>Accidental death benefit rider offers extra payouts in case of accidents.</li>
					  <li>Permanent disability benefit rider offers 120% of the rider sum assured over five years if a permanent disability due to an accident occurs.</li>
					  <li>Guardian benefit riders waive off future premiums on death or total disability of the policyholder.</li>
					</ul>
				  <li><b>Multiple premium payment terms</b></li>
				  <p class="paraa-p">You can choose from monthly, half-yearly, quarterly, and annual modes per your budget restraints. Single premium and limited payment options are also available.</p>
		   
				  <li><b>Variable asset types for flexible investments</b></li>
				   <p class="paraa-p">For unit-linked products, you can select from 6 fund types based on your enthusiasm for financial risks:</p>
						 <ul class="bullet">
							<li>Aggressive growth fund</li>
							  <li>Bond fund</li>
								<li>Balanced fund</li>
								  <li>Growth fund</li>
									<li>Gilt fund</li>
									  <li>Floating rate fund</li>
							 </ul>
							<p class="paraa-p">You can switch your money across the funds in any proportion you prefer.</p>							
			   <li><b>Minimal charges</b></li>
			   <p class="paraa-p">The premium allocation costs are absent or low. Thus, the bulk of your money goes into your investments, generating extensive returns.</p>
			   
			   <li><b>Choice of annuity options</b></li>
			   <p class="paraa-p">You can claim your maturity benefits as a lump sum settlement or as regular income, paid annually or monthly.</p>
			   
			   <li><b>Convenience</b></li>
			   <p class="paraa-p">You can choose from different policy durations according to your financial plans.</p>
			   
			   <li><b>Ease of paying premiums</b></li>
			   <p class="paraa-p">You can pay your premiums and renew your policy online, without having to wait in queues and wasting time.</p>
							 
			   <li><b>Tax benefits</b></li>
			   <p class="paraa-p">All the policies fall under the purview of Section 80C and Section 10(10D) of the ITA.</p>
		   </ul>		   
		   <h2 class="h2bold">How to calculate the premium for your savings and investment plans?</h2>
		   <p>With Kotak Life Insurance, calculating the premium for your savings scheme is straightforward. The company has digitalized the calculation process by onboarding an online calculator. This facility has automated the procedure, removing the chances of manual errors. You can visit the web page <a href="<?=base_url()?>/kotakWebBI/LandingPage.aspx"> https://www.kotaklife.com/kotakWebBI/LandingPage.aspx.</a> Next, you have to enter the category and the name of the product you plan to buy. After that, you have to furnish information like </p>
				 <ul class="bullet">
					<li>age</li>
					  <li>gender</li>
						<li>income</li>
						  <li>preferred mode of premium payment</li>
							<li>sum assured required</li>
							  <li>policy period</li>
								<li>premium payment term</li>
								  <li>rider additions if any</li>
					 </ul>
					 <p>The page will automatically display the accurate premium amount within a few seconds.</p>					 
					 
		<h2 class="h2bold">What are the Documents Required to Buy Savings and Investment Plans?</h2>
		<ul class="bullet">
				   <li>Age proof:</li>
				   <ul class="bullet">
						   <li>PAN Card</li>
						   <li>Aadhaar Card</li>
						   <li>Passport</li>
						   <li>Driving License</li>
						   <li>Voter ID</li>
						   <li>Birth Certificate</li>
						   <li>School or College Certificate</li>
					   </ul>					   
				   <li>Identity Proof:</li>
					   <ul class="bullet">
						   <li>Aadhaar Card</li>
						   <li>Voter ID</li>
						   <li>Driving License</li>
						   <li>Passport</li>
						   <li>PAN Card</li>
						   <li>A letter with a photograph from a public servant or recognized public authority verifying your identity</li>						   
					   </ul>					   
				   <li>Address Proof:</li>
					   <ul class="bullet">
						   <li>Aadhar Card</li>
						   <li>Voter ID</li>
						   <li>Passport</li>
						   <li>Ration Card</li>
						   <li>Utility bills of telephone or electricity</li>
						   <li>Bank Account Statement showing the address</li>
						   <li>Letter from a recognized public authority verifying the address</li>
					   </ul>
					   
				   <li>Income Proof:</li>
					   <ul class="bullet">
						   <li>Recent salary slip</li>
						   <li>Current Form 16  li>
						   <li>Previous assessment year’s Income Tax Return or Assessment Order</li>
						   <li>Certificate from employer on company letterhead</li>						   
					   </ul>					 
					   <li>Passport size photographs</li>
					   
						   <li>Cancelled cheque</li>
						   <p>You will have to attach a photocopy of a cancelled cheque for the bank account where you wish to receive your payouts.</p>
							   <li>Medical reports</li>
								<p>Reports of diagnostic tests about your health conditions might be needed.</p>
		   
			   </ul> 
		   <h2 class="h2bold">Reasons to Choose Kotak Life for Your Savings and Investment Plans</h2>
		   <p>Fast emerging as one of the leading life insurance companies in India, Kotak Life Insurance Company started its journey in 2001, covering over 20 million lives by 31st March 2018. As of 31st March 2019, the company had under its management assets amounting to ₹25936 crores. It offers a vast selection of investment plans. These tools enable you to create abundant resources according to your specific financial situation and monetary goals. The reasons that make Kotak products some of the best saving plans in India are as follows: </p>  
		   <ul class="bullet">
				   <li><b>The winner of multiple awards</b></li>
					   <ul class="bullet">
						  <li>FICCI Insurance Industry Awards honoured Kotak CEO Mr G Murlidhar with "Insurance CEO of the Year –Life Category" award in 2019.</li>
						   <li>In 2017 Kotak won Outlook Money Award for Life Insurance Provider of the Year</li>
							<li>In the same year, i.e. 2017, the company was granted the silver medal for the Best Customer Engagement Campaign Award at DMAsia.</li>
					   </ul>
					   <p>All these accolades establish Kotak’s credibility as one of the best insurance providers in the country.</p>
				   
				   <li><b>Consistent and high claim settlement ratio (CSR)</b></li>
				   <p>Kotak Life Insurance paid out 2959 claims in the financial year (FY) 2018-19, disbursing Rs. 137 crores in claims. The company scored a noteworthy CSR of 97.4% for the said FY2018-19. Since CSR is a definitive indicator of the dependability of an insurer about honouring claims, you can trust Kotak as a fruitful investment platform.</p>
				   
					   <li><b>Option for judicious planning</b></li>
				   <p>Kotak lists the details of every plan in the official website, with the opportunity to download brochures. You can examine the risks and potentials of every scheme before making the payment. It also offers a free-look-in period to opt out of the plan if you find the policy incompatible to your needs.</p>
				   
					   <li><b>A wide selection of plans</b></li>
				   <p>The investment insurance plans are available in numerous variants. These offerings suit every financial need from quick prosperity to securing the family’s finances.</p>
				   
					   <li><b>Age of entry up to 65 years</b></li>
				   <p>The insurance provider offers some plans that people of advanced age, up to 65 years, can buy. Thus, the company meets the needs of every consumer age group.</p>
				   
					   <li><b>Effortless management of policies</b></li>
				   <p>You may need services such as:</p>
						  <ul class="bullet">
							 <li>Registering your policy</li>
							   <li>Determining Net Asset Value or Fund Value as on date</li>
								 <li>Downloading unit-linked statement</li>
								   <li>Acquiring a premium paid certificate</li>
									 <li>Finding out the premium due date and amount due</li>
								<p>You can access such services through the official website or SMS. You can also call on the customer service helpline or chat with the officials online about policy-related queries.</p>
							</ul> 
					   <li><b>Quick turnaround time</b></li>
				   <p>Unless internal verifications are necessary, the insurer settles claims within 7 to 15 days of receiving all relevant documents.</p>
				   
					   <li><b>Hassle-free claim process</b></li>
				   <p>Kotak offers a smooth claim settlement process that involves only claim intimation and document submission. You can initiate the process of filing claims directly through the online portal. This simplicity assures fast access to funds for your loved ones in their hours of need.</p>
				   
					   <li><b>A compassionate and considerate approach</b></li>
				   <p>The company is always empathetic towards customers’ needs. For example, in the case of terrorist attacks, war, or natural disasters, the company fast tracks the claim resolution process. It ensures that your family receives funds immediately after their sudden loss</p>
				   
					   <li><b>Transparency</b></li>
				   <p>Kotak declares fund performances every day and updates customers about market-related information through regular newsletters.</p>
				   <p>Thus, when it comes to investment insurance, Kotak is a reliable choice.</p>
		  </ul>

		  <a href="<?=base_url()?>">Home></a>

		  
		  <h2 class="h2bold paraa-p">FAQs</h2>
			   <!-- Accord Start -->
			   <ul class="accordUL" id="faqs-div">
				   <li class="ga_track">
					   <h3 class=""><span>What are Savings and Investment Plans?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>A savings and investment plan is a savings scheme that allows you to make systematic deposits into money-making avenues. Thus, such plans enable you to accumulate a corpus over time that you can utilize for your future financial goals. At the same time, such plans offer the benefit of life coverage, protecting your loved ones against economic hardships in your absence. Endowment policies, ULIPs, and money-back plans are a few examples of such schemes.</p>
					   </div>
				   </li>
				   <li class="ga_track">
					   <h3 class=""><span>Who Should Invest in Savings and Investment Plans?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>Everyone should include these plans in their financial portfolio. With several varieties to choose from, there is an investment plan for every need.</p>
						   <ul class="bullet">
							   <li>Those who are young or have a high risk-appetite can opt for long-term savings in equity funds through ULIPs</li>
							   <li>Conservative investors who are risk-averse can choose assured income and guaranteed savings plans.</li>
							   <li>People looking for moderate-risk investment channels can select balanced funds in ULIPs.</li>
							   <li>Investing in a guaranteed income plan can ensure regular income after retirement.</li>
							   <li>Retired individuals can safeguard their retirement funds through debts funds in ULIPs.</li>
							   <li>If you need funds at intermittent intervals, you can buy a money-back plan.</li>
							   <li>Investment plans are also useful for those who are looking for tax savings channels.</li>
						   </ul>
							   
					   </div>
				   </li>
				   <li class="ga_track">
					   <h3 class=""><span>What is a Money Back Plan?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>In a money-back plan, the insurance provider will pay you a percentage of the sum assured at regular intervals. For example, if you buy a plan with a policy term of 20 years and payout interval of 5 years, you will get a pre-defined part of your sum assured on the 5th, 10th, 15th, and the final year of your policy. At maturity, you will get the balance sum assured. Also, your family remains protected against eventualities with the life insurance part of the plan.</p>					   						   
					   </div>
				   </li>
				   <li class="ga_track">
					   <h3 class=""><span>What is an Income Plan?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>An <a href="<?=base_url()?>/savings-plan/kotak-premier-income-plan">income plan</a> is a saving policy that primarily offers yearly or monthly income. Kotak Assured Income Accelerator is one such protection-oriented scheme that provides an annual income after the premium payment phase. The earnings increase year-on-year via income boosters throughout the payout period. Life protection also remains intact throughout the policy term.</p>
					   
												   
					   </div>
				   </li>
				    
				   <li class="ga_track">
					   <h3 class=""><span>What are Guaranteed Savings Plans?</span></h3>
					   <div class="accordDesc" style="display: none;">
					   <p>A <a href="<?=base_url()?>/insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan">guaranteed savings plan</a>offers the assurance of higher returns than the total premium outgo. The sum assured is declared upfront. The maturity value is the summation of the life coverage plus guaranteed additions. Thus, such plans offer a fail-safe lump sum at the end of the policy tenure. </p>
																
					   </div>
				   </li>
				   <li class="ga_track">
					   <h3 class=""><span>How to determine the perfect savings and investment plans for your needs?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   
							 <ul class="bullet">
							   <li><b>Identify your financial needs</b></li>
							   <p>Clarity about your immediate and future financial goals is crucial for determining the apt investment plan. You can make a list of objectives like children’s education, retirements planning etc. 
								   After that, chalk out specific time frames for meeting such goals. Match the projected returns of your investment plan with your target funds to decide on the plan to buy. Also, choose the policy tenure accordingly.</p>
							   
							   <li><b>Select the premium payment terms wisely</b></li>
							   <p>Opt for single premium or regular payment options in keeping with your resources. Consider limited payment terms if your income fluctuates, preventing long-term commitments. </p>
							   
							   
							   <li><b>Recognize your risk appetite</b></li>
							   <p>When you are young and have lesser financial liabilities, you can opt for aggressive ULIP funds. Such asset types present higher risks but lucrative return potentials. Investors of middle or advanced age with more significant monetary obligations can pick safer options like traditional endowment plans. You can also select ULIPs with age-based portfolio strategies to maximize returns.</p>
							   
							   <li><b>Consider liquidity</b></li>
							   <p>Choose plans that offer partial withdrawal options, yearly incomes, regular money-back opportunities, or options to avail of loans to access funds in emergencies.</p>
							   
							   <li><b>Pay attention to the fine print</b></li>
							   <p>Understand all the exclusions, clauses and conditions to be confident about the suitability of the plan.</p>
							   
							   <li><b>Weigh in tax-savings</b></li>
							   <p>Choose plans that not only help you save tax but also generate tax-exempt income as well.</p>
							   
							   <li><b>Diversify your portfolio </b></li>
							   <p>Spread out your funds across different investment plans to evade excessive losses in a particular instrument.</p>
							   
						   </ul>	
							    
				   <li class="ga_track">
					   <h3 class=""><span>Can I Save Tax with Savings and Investment plans?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   
						   <p>You can claim tax deductions under Section 80C of the Income Tax Act, 1961 for the premiums paid towards these plans. The amount of tax you can save is equal to the product of the sum invested and your tax rate. For example, if you fall under the 31.2% tax bracket, and invest ₹1.5 lakhs in an investment plan, you can save ₹46,800 in taxes.</p>
					   <p>Moreover, the maturity benefits, as well as the death benefits, are also tax-exempt, subject to the conditions specified in <a href="<?=base_url()?>/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D).</a></p>
					   
					   </div>
				   </li>  
				   <li class="ga_track">
					   <h3 class=""><span>What are the various savings and investment plans offered by Kotak Life?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>Kotak Life offers a wide variety of investment and savings plans. Such plans cover every financial need from wealth creation, income generation, to tax planning. The types of plans include:</p>
							   <ul class="bullet">
							   <li>Endowment policies like Kotak Classic Endowment Plan, Kotak Premium Endowment Plan</li>
							   <li>Money-back plan like Kotak Premier Moneyback Plan</li>
							   <li>ULIP like Kotak Invest Maxima</li>
							   <li>Income plan like Kotak Assured Income Accelerator, Kotak Premier Income Plan</li>
							   <li>Guaranteed savings plan like Kotak Assured Savings Plan, Kotak Guaranteed Savings</li>
							   <li>Limited pay plans like Kotak SmartLife, Kotak Platinum Plan (ULIP)</li>
						   <li>One-time investment plans like Single Invest Plus, Single Invest Advantage</li>
										   <li>Double-life protection plan like Single Invest Plus</li>
								   <li>Top-up ULIP like Kotak Ace Investment></li>
												   <li>Low-income support plan like Sampoorn Bima Micro-Insurance</li>
												   
							   </ul>
												  
														  
					   </div>
				   </li>
				   
				   
				   
				   <li class="ga_track">
					   <h3 class=""><span>How to buy the best savings and investment plan in India?</span></h3>
					   <div class="accordDesc" style="display: none;">
						   <p>The features that decide the best saving policy include:</p>
								 <ul class="bullet">
							   <li>High yields – When investing in the money market, look for plans that offer diverse fund types and the option to switch among funds with changing market scenario.  It will help in maximizing returns. Also, when investing in traditional plans, opt for those that offer guaranteed boosts to your capital. </li>
							   <li>Low cost – Look for plans that charge the least for handling your funds.</li>
							   <li>Reliability –The provider must be financially strong enough to be able to meet all claims. Also, a company with a robust claim settlement record promises surety about your claim being cleared</li>
							   
							   <p>In India, Kotak Life Insurance meets all these parameters. </p>
							   
							   
							   <li>Offering 6 fund types to choose from and the liberty to switch, the ULIPs from Kotak present substantial growth potential.</li>
							   <li>Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.</li>
							   <li>Some plans require zero premium allocation charges.</li>
							  <li>With a CSR of 97.4% in the FY 2018-19 and a solvency ratio of 3.02 for the year ending on March 2019, Kotak Life occupies a position of trust in the Indian insurance sector. </li>
						   <p>Therefore,you can remain stay stress-free about your investments with a Kotak savings and investment plan.</p>
							   </ul>     							
					   </div>
				   </li> 
			   </ul>
   
		   
							   <!-- Accord End --> 
		   </div>
		 </article>
	<script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "What are Savings and Investment Plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "A savings and investment plan is a savings scheme that allows you to make systematic deposits into money-making avenues. Thus, such plans enable you to accumulate a corpus over time that you can utilize for your future financial goals. At the same time, such plans offer the benefit of life coverage, protecting your loved ones against economic hardships in your absence. Endowment policies, ULIPs, and money-back plans are a few examples of such schemes."

}

},{

"@type": "Question",

"name": "Who Should Invest in Savings and Investment Plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Everyone should include these plans in their financial portfolio. With several varieties to choose from, there is an investment plan for every need.Those who are young or have a high risk-appetite can opt for long-term savings in equity funds through ULIPsConservative investors who are risk-averse can choose assured income and guaranteed savings plans.People looking for moderate-risk investment channels can select balanced funds in ULIPs.Investing in a guaranteed income plan can ensure regular income after retirement.Retired individuals can safeguard their retirement funds through debts funds in ULIPs.If you need funds at intermittent intervals, you can buy a money-back plan.Investment plans are also useful for those who are looking for tax savings channels."

}

},{

"@type": "Question",

"name": "What is a Money Back Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "In a money-back plan, the insurance provider will pay you a percentage of the sum assured at regular intervals. For example, if you buy a plan with a policy term of 20 years and payout interval of 5 years, you will get a pre-defined part of your sum assured on the 5th, 10th, 15th, and the final year of your policy. At maturity, you will get the balance sum assured. Also, your family remains protected against eventualities with the life insurance part of the plan."

}

},{

"@type": "Question",

"name": "What is an Income Plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "An income plan is a saving policy that primarily offers yearly or monthly income. Kotak Assured Income Accelerator is one such protection-oriented scheme that provides an annual income after the premium payment phase. The earnings increase year-on-year via income boosters throughout the payout period. Life protection also remains intact throughout the policy term."

}

},{

"@type": "Question",

"name": "What are Guaranteed Savings Plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "A guaranteed savings planoffers the assurance of higher returns than the total premium outgo. The sum assured is declared upfront. The maturity value is the summation of the life coverage plus guaranteed additions. Thus, such plans offer a fail-safe lump sum at the end of the policy tenure."

}

},{

"@type": "Question",

"name": "How to determine the perfect savings and investment plans for your needs?",

"acceptedAnswer": {

"@type": "Answer",

"text": "dentify your financial needsClarity about your immediate and future financial goals is crucial for determining the apt investment plan. You can make a list of objectives like children’s education, retirements planning etc. After that, chalk out specific time frames for meeting such goals. Match the projected returns of your investment plan with your target funds to decide on the plan to buy. Also, choose the policy tenure accordingly.Select the premium payment terms wiselyOpt for single premium or regular payment options in keeping with your resources. Consider limited payment terms if your income fluctuates, preventing long-term commitments. Recognize your risk appetiteWhen you are young and have lesser financial liabilities, you can opt for aggressive ULIP funds. Such asset types present higher risks but lucrative return potentials. Investors of middle or advanced age with more significant monetary obligations can pick safer options like traditional endowment plans. You can also select ULIPs with age-based portfolio strategies to maximize returns.Consider liquidityChoose plans that offer partial withdrawal options, yearly incomes, regular money-back opportunities, or options to avail of loans to access funds in emergencies.Pay attention to the fine printUnderstand all the exclusions, clauses and conditions to be confident about the suitability of the plan.Weigh in tax-savingsChoose plans that not only help you save tax but also generate tax-exempt income as well.Diversify your portfolioSpread out your funds across different investment plans to evade excessive losses in a particular instrument."

}

},{

"@type": "Question",

"name": "Can I Save Tax with Savings and Investment plans?",

"acceptedAnswer": {

"@type": "Answer",

"text": "You can claim tax deductions under Section 80C of the Income Tax Act, 1961 for the premiums paid towards these plans. The amount of tax you can save is equal to the product of the sum invested and your tax rate. For example, if you fall under the 31.2% tax bracket, and invest ₹1.5 lakhs in an investment plan, you can save ₹46,800 in taxes.Moreover, the maturity benefits, as well as the death benefits, are also tax-exempt, subject to the conditions specified in Section 10(10D)."

}

},{

"@type": "Question",

"name": "What are the various savings and investment plans offered by Kotak Life?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Kotak Life offers a wide variety of investment and savings plans. Such plans cover every financial need from wealth creation, income generation, to tax planning. The types of plans include:Endowment policies like Kotak Classic Endowment Plan, Kotak Premium Endowment PlanMoney-back plan like Kotak Premier Moneyback PlanULIP like Kotak Invest MaximaIncome plan like Kotak Assured Income Accelerator, Kotak Premier Income PlanGuaranteed savings plan like Kotak Assured Savings Plan, Kotak Guaranteed SavingsLimited pay plans like Kotak SmartLife, Kotak Platinum Plan (ULIP)One-time investment plans like Single Invest Plus, Single Invest AdvantageDouble-life protection plan like Single Invest PlusTop-up ULIP like Kotak Ace Investment>Low-income support plan like Sampoorn Bima Micro-Insurance"

}

},{

"@type": "Question",

"name": "How to buy the best savings and investment plan in India?",

"acceptedAnswer": {

"@type": "Answer",

"text": "The features that decide the best saving policy include:High yields – When investing in the money market, look for plans that offer diverse fund types and the option to switch among funds with changing market scenario. It will help in maximizing returns. Also, when investing in traditional plans, opt for those that offer guaranteed boosts to your capital.Low cost – Look for plans that charge the least for handling your funds.Reliability –The provider must be financially strong enough to be able to meet all claims. Also, a company with a robust claim settlement record promises surety about your claim being clearedIn India, Kotak Life Insurance meets all these parameters.Offering 6 fund types to choose from and the liberty to switch, the ULIPs from Kotak present substantial growth potential.Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.Some plans require zero premium allocation charges.With a CSR of 97.4% in the FY 2018-19 and a solvency ratio of 3.02 for the year ending on March 2019, Kotak Life occupies a position of trust in the Indian insurance sector.Therefore,you can remain stay stress-free about your investments with a Kotak savings and investment plan."

}

}]

}

</script>
		<?php  }   ?> 
        <!---------------------accordin end here-------------->
  <?php if(sizeof($plans) > 0) { ?>
  <!-- midWrapper Start-->
  <article class="similarPlan gggg">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Related Insurance Plans</h2>
        <p><?php echo isset($planInfo->plan_type_our_plans_title) ? $planInfo->plan_type_our_plans_title : '' ?></p>
      </div>
      <ul class="planUL <?php echo ($mainPlanType == 'Online Plans') ? 'onlineplanUL' : ''; ?>">
        <?php foreach($plans as $detail) {
//if($detail->title!='Kotak Group Secure One'){ ?>
		<li>
			<?php if(isset($detail->plan_image) && $detail->plan_image != '') { ?>
			<?php //if($detail->title!='Kotak Lifetime Income Plan'){?>
			<div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>"></div>
			<?php //}?>
			<?php } ?>
      <div class="detail">
	        <?php
              //GA code Variables
              $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' know more' : '';
              $labelGA =  isset($detail->title) ? 'know more|' . strtolower($detail->title) : '';
              //GA code Variables
            ?>
			<?php //if($detail->title!='Kotak Lifetime Income Plan'){?>
          <h3 class="ga_track" data-event="<?php echo $eventGA; ?>" data-action="<?php echo $actionGA; ?>" data-label="<?php echo $labelGA; ?>"><?php echo isset($detail->title) ? $detail->title : '' ?></h3>         
          <p><?php echo isset($detail->plan_description) ? $detail->plan_description : '' ?></p>
          <div class="linkBox">           
		  <?php if($detail->related_insurance_plan_url!=""){?>         
            <a href="<?=$detail->related_insurance_plan_url?>" class="links" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>
			<?php }else {?>   
		  <a href="<?php echo isset($detail->url_title) ? base_url($mainPlanURL.'/'.$planCategoryURL.'/'.$detail->url_title) : '' ?>" class="links" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>
		  <?php  } ?>
		  <?php //}?>
			<?php if ($mainPlanType == 'Online Plans' && isset($detail->buy_online_url) && $detail->buy_online_url != '') { ?>
              <?php
                //GA code Variables
                $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' buy online' : '';
                $labelGA =  isset($detail->title) ? 'buy online|' . strtolower($detail->title) : '';
                //GA code Variables
				
				
              ?>
              <a href="<?php echo isset($detail->buy_online_url) ? $detail->buy_online_url : '' ?>" class="onlineBuy" target="_blank" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Buy online</a> 
            <?php } ?>
          </div>
      </div>    
		</li>
        <?php } //} ?>
      </ul>
    </div>
  </article>

  <!-- midWrapper End -->
  <?php } ?> 
  

<?php if($plansSchema!=""){ ?>
<script type="application/ld+json">
<?php echo str_replace(' &apos; ', "'", str_replace("'", '"', $plansSchema));?> 
</script>
<?php } ?>

  <?php   
    if ($mainPlanType == 'Online Plans') {
        //GA code Variables
        $eventGA = 'event online plans email';
        $labelGA = 'email click';
       //Need help for paying premium
       $this->load->view('common/need_help_paying_premium', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
    } 
  ?>

  <?php 
    if($mainPlanType == 'Insurance Plans') { 
      //GA code Variables
      $eventGA = 'event need help email';
      $labelGA = 'email click';
      //Need Help Buying A Plan Block
      $this->load->view('common/need_help_buying_a_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA)); 
    }
  ?>

  <?php 
    if($mainPlanType == 'Group Plans') { 
    //GA code Variables
    $eventGA = 'event need help email';
    $labelGA = 'email click'; 
    //Need Help Buying A Plan Block
    $this->load->view('common/need_help_buying_a_group_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA)); 
  }
  ?>
</section>
<!-- Section End --> 
		
		
		
		<input type="hidden" id="pageNo" value="0">
		<input type="hidden" id="url" value="<?=base_url()?>">
  <input type="hidden" id="sortType" value="recent">
  <input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>">
  <input type="hidden" id="searchArticle" value="">
  <input type="hidden" id="pageType" value="topic">
  <input type="hidden" id="topicSlug" value="wealth-creation">


   
    <input type="hidden" id="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>">
<script  src="assets/js/cal-jquery-3.6.0.js"></script>
<script>


var loadArticleData = function(sort_type) {
    var pageNo = parseInt($('#pageNo').val()),
	url = $('#url').val(),
        sortType = $('#sortType').val(),
        pageLimit = $('#pageLimit').val(),
        topicSlug = $('#topicSlug').val(),
        searchArticle = $('#searchArticle').val(),
        baseurl = $('base').attr('href'),
        pageType = $('#pageType').val(), 
        href = pageType == 'topic' ? url + 'insurance-guide/articles/load-more' : url + 'insurance-guide/tag-articles/load-more',
        post_data = { page: pageNo, sortType: sortType, topicSlug: topicSlug, searchArticle: searchArticle,url: url};
    $('.noRecord').text('').css("display", "none");
    $('#load-more-articles').css("display", "none");
    $('.innerLoader').css("display", "block");
    $.ajax({
        url: href,
        type: 'post',
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(post_data),
        dataType: "json",
        success: function(data) {
            console.log(data);
            var newdata = data, 
                nextDataCount = newdata.nextDataCount;
                console.log("nextDataCount=="+nextDataCount);
            if (newdata.success) {
                var arraydata = newdata.data,
                    article_title = '',
                    short_description = '',
                    simpletext = new RegExp(searchArticle, "gi"),
                    newhtmldata = '',
                    eventGA = 'event insurance guide read more',
                    actionGA = '',
                    labelGA = '',
                    topic_name = '';
                if (arraydata.length) {
                    $('#pageNo').val(parseInt(pageNo) + 1);
					newhtmldata=newdata.newhtmldata; 
					console.log(newdata.newhtmldata);
                    /*for (i = 0; i < arraydata.length; i++) {
                        article_title =  arraydata[i].article_title;
                        short_description = (searchArticle != '') ? arraydata[i].short_description.replace(simpletext, '<b>' + searchArticle + '</b>') : arraydata[i].short_description;
                        topic_name = pageType == 'tag' ? '<h4>' + arraydata[i].title + '</h4>' : '';
                        actionGA = pageType == 'tag' ? 'tag' : arraydata[i].title.toLowerCase();
                        labelGA = 'read more|' + arraydata[i].article_title.toLowerCase();
                        dynamicActionGA = actionGA;
                        newhtmldata += '<li><div class="reportBox"><div class="img"><img src="' + arraydata[i].article_image + '" alt="Topic Icon"></div><div class="detail">' + topic_name + '<ul class="dateInfo"><li>' + arraydata[i].posted_date + '</li><li><a href="javascript:;" class="views">' + arraydata[i].viewed_count + '</a></li></ul><h3>' + article_title + '</h3><p>' + short_description + '</p><a href="' + baseurl + 'insurance-guide/' + arraydata[i].topic_url_title + '/' + arraydata[i].url_title + '" class="links"  onclick="dataLayer.push({\'event\': \'' + eventGA + '\', \'category\': \'' + categoryGA + '\', \'action\': \'' + actionGA + '\', \'label\': \'' + labelGA + '\'});">Read more</a></div></div></li>';
                    }
*/
                    $("#articles-div").append(newhtmldata);

                   /* if (searchArticle.length >= 1 && pageNo == 0) {
                        //GA code Variables
                        eventGA = 'event search';
                        categoryGA = 'search';
                        labelGA = searchArticle.toLowerCase();
                        dataLayer.push({ 'event': eventGA, 'category': categoryGA, 'action': actionGA, 'label': labelGA });
                    }*/
                }

                if ((arraydata.length < pageLimit) || nextDataCount == 0) {
                    if (pageNo == 0 && arraydata.length == 0) {
                        $('.noRecord').text('').text(newdata.message).css("display", "block");
                    }
                    $('#load-more-articles').css("display", "none");
                } else {
                    $('#load-more-articles').css("display", "table");
                }

                $('.innerLoader').css("display", "none");
                gridBox01();
            }
        }
    });

};
     // Initial Load aritcle data
     if ($('section').find("ul#articles-div").length == 1) {
        loadArticleData();
    }
    $('ul.mostVisited li a').click(function() {
        // Set active
        $('ul.mostVisited li a').removeClass('selected');
        $(this).addClass('selected');
        var sort_type = $(this).text() == 'Most Recent' ? 'recent' : 'viewed';
        $('#sortType').val('').val(sort_type);
        $('#search-article, #searchArticle').val('');
        $('#pageNo').val(0);
        $("#articles-div li").remove();
        $('#load-more-articles').text('').text('Load More').css("display", "table");
        loadArticleData();
    });

    $('#load-more-articles').click(function() {
        //alert(1)
        loadArticleData();
    });
    
var gridBox01 = function() {
    $('ul.reportUL > li').removeAttr('style');
    var reportUL_Len = $('ul.reportUL').length;
    var mxHt = 0,
        ht;


    for (var x = 0; x < reportUL_Len; x++) {
        maxDivWid = parseInt($('ul.reportUL').eq(x).css('width'));
        divWid = parseInt($('ul.reportUL').eq(x).find('li').css('width'));
        var divLen = $('ul.reportUL').eq(x).find('li').length;
        var boxLenRow = Math.round(maxDivWid / divWid);
        var boxRowCount = Math.ceil(divLen / boxLenRow);
        //console.log('boxLenRow-->'+boxLenRow+' ..................boxRowCount-->'+boxRowCount+'...............calculation--?>'+(boxLenRow)+'          divLen-->'+divLen)

        for (h = 0; h < divLen; h++) {
            for (var i = h; i < (boxLenRow + h); i++) {
                ht = parseInt($('ul.reportUL').eq(x).find(' > li').eq(i).css("height"));
                if (mxHt < ht) {
                    mxHt = ht;
                }
            }
            for (var k = h; k < (boxLenRow + h); k++) {
                $('ul.reportUL').eq(x).find(' > li').eq(k).css("height", mxHt);
            }
            h += (boxLenRow - 1);
            mxHt = 0;
        }
    }

};
</script>