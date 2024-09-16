
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<style>
    .fancybox__caption {
        display: none;
    }

    .d--flex {
        display: flex;
    }

    .splash-close img {
        height: 20px;
        opacity: 0.2;
        cursor: pointer;
        transition: 0.6s;
    }

    .splash-close img:hover {
        opacity: unset;
        transition: 0.6s;
    }

    .splash-close {
        width: 30px;
        margin: 0 0 0 auto;
    }

    .splash p {
        margin: 0;
    }

    .splash-content {
        width: 65%;
        font-size: 18px;
        margin: 0 auto;
        background-color: #fff;
        padding: 16px 18px;
        border-radius: 11px;
        margin-top: 201px;
    }

    .overlay-black {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: -1;
    }

    #splash {
        position: fixed;
        top: 0;
        z-index: 10;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, .5);
    }

    #splash a {
        color: red
    }



    @media (max-width: 640px) {
        .mt-102 {
            margin-top: 45px !important;
            top: 0;
        }
    }

    @media screen and (max-width: 768px) {
        
        .splash {
            display: block;
        }

        .splash-content {
            width: 85%;
            font-size: 15px;
            margin: 0 auto;
            background-color: #fff;
            padding: 16px 18px;
            border-radius: 11px;
            margin-top: 30px;
        }
    }



    @media screen and (min-width: 768px) {
        .splash {
            display: block;
        }
    }

    @media only screen and (max-width: 1024px) {
        section {
            margin-top: 0px;
        }
    }

    .get-btn {
        padding: 3px 30px 3px 29px;
        border-radius: 15px;
        background-color: #00387e !important;
        color: #fff !important;
        font-size: 22px;
        font-weight: 100;
        position: absolute;
        bottom: 40px;
        right: 315px;
    }

    .position-relative {
        position: relative !important;
    }
	   .related-blogs-gsp .likeWrap ul.reportUL {
    margin: 0 0 40px 0!important;
}
</style>

 <section class="best-invest">
      <div class="midWrapper">
          <!-- breadcrumb Start -->
          <article class="breadcrumb">
              <div class="midWrapper">
                  <ul>
                      <?php echo $this->breadcrumb->output(); ?>
                  </ul>
              </div>
          </article>
    </div>
 </section>
 

<!-- Section Start -->
<div class="term-design">
		  
	<?php $category = $this->uri->segment(2);if(($category=='protection') || ($category=='about-life-insurance') || ($category=='government-schemes')){?>
    <section class="pt-52 how-choose term-ulip-spac mb-30" id="terms_and_conditions">
        <div class="midWrapper">
            <h2 class="mb-37 term-tags">Terms & Conditions of Term Insurance Plans</h2>
            <div class="ulip-cat-terms">
                <!--p> Kotak e-Term Plan UIN No.: 107N104V02, Form No. N104, Kotak Critical Illness Plus Benefit Rider UIN No.: 107B020V01, Form No.: B020. This is a non-participating, pure protection oriented plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. You may avail tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p-->
<p>Kotak e-Term; UIN No.: 107N129V01, Ref. No.: KLI/22-23/E-BB/2435 </p>
<p>This is a non-participating, pure protection plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. *The special exit benefit is for 40 years old male, with a 40-year old policy term with regular premium payment option. For Special Exit Value terms & conditions please refer to the product brochure. **Free Medical Checkup every 5th year starting from 5th policy year onwards.  </p>
               
                <p>Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285032nd Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 | Website: www.kotaklife.com | WhatsApp: 9321003007</p>

                <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS  </h3>

                <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>

                <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
			</div>
        </div>
    </section>
	<?php }
    
  
	
	
	if($category=='wealth-creation'){?>
	<section class="pt-52 how-choose term-ulip-spac" id="terms_and_conditions">
        <div class="midWrapper">
            <h2 class="mb-37 term-tags">Terms and Conditions</h2>
            <div class="ulip-cat-terms">
			
				<p>Disclaimer-  </p>
				
			    <h3>In this policy, the investment risk in the investment portfolio is borne by the policyholder. </h3>
                <p> Kotak e-Invest: UIN - 107L121V01, Form No. - L121. This is an individual non-participating unit linked endowment plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. Plan Option needs to selected on inception of the policy. ^Tax benefits are subject to conditions specified under the Income-tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant. *Maximiser Plan Option: On survival of Life Assured till Maturity, on the maturity date, a percentage of the total amount of Mortality Charges deducted in respect of life cover provided throughout the Policy Term will be added back to the Fund Value based on the Policy Term chosen. The Percentage varies based on the Age at Entry of Life Assured and the Policy Term chosen. <sup>$</sup>Retire Rich Plan Option: At the end of policy year following 60th birthday of Life Assured, a % of total amount of mortality charges deducted in respect of life cover till then will be added back to the Fund Value. Such percentages vary based duration elapsed as at the end of policy year coinciding or immediately following 60th birthday of Life Assured. </p>

                <p>Risk Factors: <b>The Unit Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender /withdraw the monies invested in Unit Linked Insurance Products completely or partially till the end of the fifth year from inception.</b> Unit Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors. In this policy, the investment risk in the investment portfolio is borne by the policyholder. The premium paid in Unit Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors influencing the capital market and the insured is responsible for his/her decisions. Kotak Mahindra Life Insurance Company Ltd. is only the name of the Insurance Company and Kotak e-Invest is only the name of the unit linked life insurance contract and does not in any way indicate the quality of the contract, its future prospects or returns. The various funds offered under this contract are the names of the funds and do not in any way indicate the quality of these funds, their future prospects and returns. The past performance of other Funds of the Company is not necessarily indicative of the future performance of the funds. Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your Insurance Agent / Corporate Agent / Insurance Broker / Intermediary or policy document of the insurer. All benefits payable under the Policy are subject to the Tax Laws and other financial enactments, as they exist from time to time. </p>

                <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS  </h3>

                <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.   </p>

                <p>Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll Free: 1800 209 8800 | Ref. No. KLI/22-23/E-BB/521 </p>
				
				<p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license. </p>
			</div>
        </div>
    </section>
	<?php } ?>
	
	<?php if($category=='retirement'){?>
	<section class="pt-52 how-choose term-ulip-spac" id="terms_and_conditions">
        <div class="midWrapper">
            <h2 class="mb-37 term-tags">Terms and Conditions</h2>
            <div class="ulip-cat-terms">
						
			    <p> Kotak Lifetime Income Plan; UIN: 107N103V12, Form No: N103 This is a non-participating immediate annuity plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. Ref. No. KLI/23-24/E-BB/1052.</p>
                <p>Tax benefit^ is applicable as per the Income Tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
				<p>Kotak Mahindra Life Insurance Company Ltd.  </p>
				<p>Reg No. 107 | CIN : U66030MH2000PLC128503 </p>
				<p>Regd. Office: 8<sup>th</sup>  Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051, Toll Free: 1800 2098800 </p>
				<p>Website: www.kotaklife.com | WhatsApp: 9321003007 </p>
                <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS   </h3>

                <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint. </p>

                <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license. </p>
				
			</div>
        </div>
    </section>
	<?php } ?>
	
	<?php
    if(isset($_GET['g'])){
	$gss=$_GET['g'];
    }else{
        $gss='';
    }
	
    if ($category == 'savingstax' && $gss==1) { ?>
	<section class="pt-52 how-choose term-ulip-spac" id="terms_and_conditions">
        <div class="midWrapper">
            <h2 class="mb-37 term-tags">Terms and Conditions</h2>
            <div class="ulip-cat-terms">
			
				   <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS   </h3>	
            <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of
premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                   <p>Kotak Guaranteed Fortune Builder UIN: 107N128V04 Form No: N128.</p>
                   <p>Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider,
UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03,
Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental
Disability Guardian Benefit, UIN: 107B011V02, Form No: B011, Kotak Critical Illness Plus Benefit
Rider - 107B020V01, Form No.: B020.</p>
                   <p>An Individual, Non-Linked, Non-Participating, Savings, Life Insurance Plan. This is a saving and
protection oriented plan. For more details on risk factors, terms and conditions, please read sales
brochure carefully before concluding a sale. For more details on riders please read the Rider
Brochure. @Guaranteed benefits due under this plan are available provided premiums are paid
regularly for the entire premium payment term and the policy is in force. *The above illustration is
for Male aged 24 years, Premium: Rs. 10,000 per month, Premium Payment Term: 10 years,
Deferment Period: 1 years, Policy Term: 11 years, Income Benefit Period: 15 years & Income Benefit
Frequency: Annual. Plan option opted is Income Only for online channel. The premium figures are
exclusive of Goods and Services Tax and Cess, as applicable. Goods and Services Tax and Cess
thereon, shall be charged as per the prevalent tax laws over and above the said premiums.</p>
                   <p>ARN No.: KLI/23-24/E-BB/1201</p>
                   <p>Kotak Mahindra Life Insurance Company Ltd. Regn. No.:107, CIN: U66030MH2000PLC128503, Regd.
Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai - 400 051. Website:
www.kotaklife.com | WhatsApp: 9321003007 | Toll Free No:1800 209 8800.</p>
                   <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra
Life Insurance Company Ltd. under license.</p>
            		
            				
            						
            
			</div>
        </div>
    </section>
	<?php }else if($category == 'savingstax' && $gss==''){ ?> 


        <section class="pt-52 how-choose term-ulip-spac" id="terms_and_conditions">
            <div class="midWrapper">
                <h2 class="mb-37 term-tags">Terms and Conditions</h2>
                <div class="ulip-cat-terms">

                    <p><b>Kotak Assured Savings Plan UIN:</b></p>
                    <p>UIN: 107N081V04, Form No: N081, Kotak Term Benefit Rider - UIN:
                        107B003V03 Form No. B003, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No.:
                        B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No.: B002, Kotak Critical
                        Illness Plus Benefit Rider UIN: 107B020V01, Form No. B020, Kotak Life Guardian Benefit Rider UIN:
                        107B012V02, Form No.: B012, Kotak Accidental Disability Guardian Benefit Rider UIN: 107B011V02,
                        Form No.: B011. This is a savings-cum-protection oriented non-participating endowment assurance
                        plan. For more details on risk factors, terms and conditions, please read sales brochure carefully
                        before concluding a sale. For more details on riders, please read the Rider Brochure.</p>


                    <p><sup>*</sup>Guaranteed Yearly Additions is added every time premium is paid, payable at maturity or earlier
                        death. ^ Guaranteed benefits due under this plan are available provided premiums are paid regularly
                        for the entire premium payment term and the policy is in force. Guaranteed Maturity Benefit
                        payable at maturity is inclusive of Basic Sum Assured plus Accrued Guaranteed Yearly 1  Additions plus
                        Guaranteed Loyalty 2  Addition.  1 Guaranteed Yearly Additions is a percentage of Cumulative
                        Annualized Premium paid every year based on the opted premium payment term. It will accrue
                        throughout the premium payment term and will be paid out at Maturity or on Death.  2 Guaranteed
                        Loyalty Additions is a percentage of Basic Sum Assured and be paid out at Maturity. The rate of such
                        addition will be based on the opted premium payment term. Annualized Premium is the premium
                        payable in a policy year, excluding the taxes, rider premium underwriting extra premiums and
                        loadings for modal premium, if any. Tax Benefits are applicable as per Income Tax Act, 1961. Tax
                        laws are subject to amendments from time to time. Customer is advised to take an independent
                        view from tax consultant.</p>


                    <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS </h3>

                    <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of
                        premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p>Kotak Mahindra Life Insurance Company Ltd. Regd. Office: 8th Floor, Plot # C-12, G-Block, BKC,
                        Bandra (E), Mumbai - 400 051, India, Regn. No. 107. CIN : U66030MH2000PLC128503 |
                        Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll Free No:1800-209-8800 | Ref. No.
                         KLI/22-23/E-BB/999</p>
                    <p>All rights reserved. Registered with Insurance Regulatory &amp; Development Authority of India (IRDAI)
                        as Life Insurance Company.
                        Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra
                        Life Insurance Company Ltd. under license.</p>

                </div>
            </div>
        </section>
    <?php } ?>

	
	<?php if($category=='health-insurance'){?>
	<section class="pt-52 how-choose term-ulip-spac" id="terms_and_conditions">
        <div class="midWrapper">
            <h2 class="mb-37 term-tags">Terms and Conditions</h2>
            <div class="ulip-cat-terms">
						
			    <p> Kotak Health Shield UIN No.: 107N105V01, Form No. N105. This is a non-participating, fixed benefit, health insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. ^Under Kotak Health Shield, coverage is available against 4 Critical Illnesses: Cancer, Cardiac, Livo, Neuro. You have the option to choose one or more plan options under this plan. However Personal Accident Shield has to be selected with at least one more plan option. The plan option needs to be selected at inception of the policy and cannot be changed during the policy term. *You may avail of tax benefits under Section 80D of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant. Ref. No. KLI/22-23/E-BB/491 </p>
				<p>Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800-209-8800|Website: <a href=base_url."">www.kotaklife.com</a> | WhatsApp: 9321003007</p>
				<p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license. </p>
                <h3> BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS   </h3>

                <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.  </p>

			</div>
        </div>
    </section>
	<?php } ?>


</div>
<!-- Section End -->
