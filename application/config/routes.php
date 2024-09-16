<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'site';
$route['404_override'] = 'site/error_page_404';
$route['translate_uri_dashes'] = true;

$route['insurance-guide/current-affairs/rss.xml'] = 'insurance_guide/rss_xml';

$route['error404'] = 'error404';

// $route['(:any)/(:any)/(:any)']														= 	"site/default_url/$1/$2/$3";
// $route['(:any)/(:any)/(:any)']														= 	"site/default_url/$1/$2/$3";


$route['search']														= 	"site/search";
$route['account-aggregator']														= 	"site/account_aggregator";
$route['life-advisor']="site/life_advisor";

$route['Updates-Covid-19'] = "site/UpdatesCovid19";
$route['nearest-branch'] = "site/getnearloc";
$route['getMap-Result'] = "site/getMapResultcities";
$route['getMap-Result-by-pincode'] = "site/getMapResultByPincodebyval";
$route['bind-Cities-detials'] = "site/bindCitiesdetials";
$route['new-404'] = "site/new_404";

$route['tl']           =  "site/tl";
$route['integrationapi'] 						= 	"site/integrationapi";


$route['Quarantine2020'] = "site/Quarantine2020";

$route['MDvideo'] = "site/MDvideo";

$route['your-needs-our-priority']="site/your_needs_our_priority";
$route['verify-my-advisor/(:any)'] = 'site/verify_my_advisor/$1';
//$route['Life-Advisor-Search']="site/Life_Advisor_Search";

	//$route['happyyou'] = "site/happyyou";
	//$route['advisors-for-life'] = "site/advisors_for_life";
	//$route['superstarsave'] = "site/superstarsave";
	//$route['advisors-for-life/thank-you'] = "site/thank_you";


	//$route['Advisor-Details'] = "site/advisor_details";
	
#$route['Life-Advisor']="site/life_advisor";
$route['fit4sure-privacy-policy']="site/fit4sure_privacy_policy";
$route['fit4sure']="site/fit4sure";
$route['eterm']="site/eterm";
$route['eterm_oldDesign']="site/eterm_oldDesign";
$route['gsp']="site/gsp";
$route['cookie_test']="site/cookie_test";
$route['tax-saving-solutions']="site/tax_saving_solutions";


$route['ulip-plans']="site/ulip_plans";

$route['leadcapture']="site/leadcapture";
$route['existing-customer']="site/existing_customer";

$route['seo-test']="site/seo_test";

$route['happyyou-privacy-policy']="site/happyyou_privacy_policy";
$route['disclaimer-page-kgfb']="site/disclaimer_page_kgfb";

$route['kli-boost'] = "site/kli_boost";


$route['account-aggregator']="site/account_aggregator";
$route['homepage']="site/homepage";

$route['investment-plans']="site/investment_plans";

/* Insurance Plans Module */

$route['life-insurance-plans']													= 	"insuranceplan/insurance_plan";
$route[IP_MODULE_LINK.'/insurance-plan-riders']							= 	"insuranceplan/plan_riders";
$route[IP_MODULE_LINK.'/term-plan']							            = 	"insuranceplan/term_plan";
$route[IP_MODULE_LINK.'/ulip-category']							        = 	"insuranceplan/ulip_category";
$route[IP_MODULE_LINK.'/(:any)']										= 	"insuranceplan/insurance_plan_type_detail/$1";
$route[IP_MODULE_LINK.'/(:any)/(:any)']									= 	"insuranceplan/insurance_plan_detail/$1/$2";

$route['retirement-and-pension-plans']													= 	"insuranceplan/retirement_and_pension_plans";

$route['retirement-and-pension-plans/(:any)']													= 	"insuranceplan/retirement_and_pension_plans_details/$1/$2";




$route['switch-customer'] = "site/switch_customer";
/* Online Plans Module */
$route[OP_MODULE_LINK]													= 	"insuranceplan/online_plan";
$route[OP_MODULE_LINK.'/(:any)']										= 	"insuranceplan/online_plan_type_detail/$1";
$route[OP_MODULE_LINK.'/(:any)/(:any)']									= 	"insuranceplan/online_plan_detail/$1/$2";

/* Group Plans Module */
$route[GP_MODULE_LINK]													= 	"insuranceplan/group_plan";
$route[GP_MODULE_LINK.'/(:any)']										= 	"insuranceplan/group_plan_type_detail/$1";
$route[GP_MODULE_LINK.'/(:any)/(:any)']									= 	"insuranceplan/group_plan_detail/$1/$2";

/* Insurance Guide Module */
$route[IG_MODULE_LINK]													= 	"insurance_guide/insurance_guide_landing";
$route[IG_MODULE_LINK.'/glossary']										= 	"insurance_guide/glossary_landing";
$route[IG_MODULE_LINK.'/policy-faqs']									= 	"insurance_guide/faqs_landing";



$route[IG_MODULE_LINK.'/knowledgevault']								= 	"insurance_guide/knowledgevault/";
$route[IG_MODULE_LINK.'/knowledgevault/(:any)']						    = 	"insurance_guide/knowledgevault/$1";
$route[IG_MODULE_LINK.'/super-hero-blog']						    = 	"insurance_guide/super_hero_blog";
$route[IG_MODULE_LINK.'/super-hero-blog-details']						    = 	"insurance_guide/super_hero_blog_details";


//$route[IG_MODULE_LINK]								= 	"insurance_guide/tax_saving_solutions";



$route[IG_MODULE_LINK.'insurance_guide/(:any)/(:any)']							= 	"insurance_guide/savingstax/termsconditions";
$route[IG_MODULE_LINK.'/policy-related-faqs']							= 	"insurance_guide/policy_related_faqs";


$route[IG_MODULE_LINK.'/(:any)']										= 	"insurance_guide/insurance_guide_topic_details/$1";
$route[IG_MODULE_LINK.'/articles/load-more-happy'] 							= 	"ajax/load_more_articles_for_happy_you";


$route[IG_MODULE_LINK.'/articles/load-more'] 							= 	"ajax/load_more_articles";
$route[IG_MODULE_LINK.'/tag-articles/load-more'] 						= 	"ajax/load_more_tag_articles";
$route[IG_MODULE_LINK.'/glossary/load-more'] 							= 	"ajax/load_more_glossary";
$route[IG_MODULE_LINK.'/policy-faqs/load-more'] 						= 	"ajax/load_more_faqs";

$route[IG_MODULE_LINK.'/glossary/add-new'] 								= 	"ajax/add_users_glossary_word";
$route[IG_MODULE_LINK.'/tag/(:any)']									= 	"insurance_guide/insurance_guide_tag_articles/$1";
$route[IG_MODULE_LINK.'/(:any)/(:any)']									= 	"insurance_guide/insurance_guide_article_details/$1/$2";

/* Fund Performance Module */
$route[FP_MODULE_LINK]													= 	"fund_performance/landing";
$route[FP_MODULE_LINK.'/nav-performance']								= 	"fund_performance/nav_performance_landing";
$route[FP_MODULE_LINK.'/nav-performance/pdf-report/(:any)/(:any)/(:any)']= 	"fund_performance/generate_pdf_file/$1/$2/$3";
/*$route[FP_MODULE_LINK.'/nav-performance/testpdf-report/(:any)/(:any)/(:any)']= 	"fund_performance/common_pdf_file/$1/$2/$3";*/
$route[FP_MODULE_LINK.'/nav-performance/(:any)']						= 	"fund_performance/nav_performance_landing/$1";
$route[FP_MODULE_LINK.'/nav-performance/(:any)/(:any)']					= 	"fund_performance/nav_performance_landing/$1/$2";
$route[FP_MODULE_LINK.'/nav-performance/(:any)/(:any)/(:any)']			= 	"fund_performance/nav_performance_landing/$1/$2/$3";
$route[FP_MODULE_LINK.'/fund-update']									= 	"fund_performance/fund_update_landing";
$route[FP_MODULE_LINK.'/fund-update/(:num)']							= 	"fund_performance/fund_update_landing/$1";
$route[FP_MODULE_LINK.'/investment-fund-faqs']							= 	"fund_performance/investment_fund_faqs_landing";
$route[FP_MODULE_LINK.'/investment-philosophy']							= 	"fund_performance/investment_philosophy_landing";
$route[FP_MODULE_LINK.'/investment-philosophy-debt']					= 	"fund_performance/investment_philosophy_debt_landing";
$route[FP_MODULE_LINK.'/investment-fund-faqs/load-more'] 				= 	"ajax/load_more_investment_fund_faqs";
$route[FP_MODULE_LINK.'/load-latest-nav'] 								= 	"ajax/load_latest_nav_data";
$route[FP_MODULE_LINK.'/load-schemes'] 									= 	"ajax/load_scheme_lists";

$route['request-a-life-advisor/submit'] 								= 	"ajax/request_a_life_advisor_submit";
$route['request-a-relationship-manager/submit'] 						= 	"ajax/request_a_relationship_manager_submit";

/* Why Kotak Life Module */
$route[WKL_MODULE_LINK] 												=	"WhyKotakLife/main_page";
$route[WKL_MODULE_LINK.'/corporate-governance'] 						= 	"WhyKotakLife/why_kotak";
$route[WKL_MODULE_LINK.'/career'] 										= 	"WhyKotakLife/career";
$route[WKL_MODULE_LINK.'/media-center'] 								= 	"WhyKotakLife/MediaCenter_ind";
$route[WKL_MODULE_LINK.'/media-center-details/(:any)/(:any)'] 			= 	"WhyKotakLife/MediaCenterDetails_ind/$1/$2";
$route[WKL_MODULE_LINK.'/about-us'] 									= 	"WhyKotakLife/about";
$route[WKL_MODULE_LINK.'/csr'] 									= 	"WhyKotakLife/csr";
$route[WKL_MODULE_LINK.'/contact-us-new']									= "WhyKotakLife/Contactnew";
$route[WKL_MODULE_LINK.'/contact-us']									= 	"WhyKotakLife/Contact";
$route[WKL_MODULE_LINK . '/contact-us/save'] = "WhyKotakLife/contactUpdate";
$route['contact-us-form/submit'] 										= 	"ajax/contact_us_submit";
$route['get-a-call/submit'] 											= 	"ajax/get_call_submit";
$route['join-us/submit'] 												= 	"ajax/join_us_submit";
$route['bind-city-dropdown/states'] 									= 	"WhyKotakLife/bindCities";
$route['bind-result/city'] 												= 	"WhyKotakLife/getMapResult";
$route['bind-result-pincode/pin'] 										= 	"WhyKotakLife/getMapResultByPincode";
$route['bind-srtype-dropdown/srgroup'] = "WhyKotakLife/bindSrtypes";
/*Need base calculator*/
$route['need-base-calculator/result'] 									= 	"ajax/needBaseCalRes";
/*Need base calculator*/

/* How Do I Module */
$route[HDI_MODULE_LINK]													= 	"HowDoI/HowDoI_home";
$route[HDI_MODULE_LINK.'/pay-my-premium']								= 	"HowDoI/payMyPremium";
$route[HDI_MODULE_LINK.'/manage-my-policy']								= 	"HowDoI/manageMyPolicy";
$route[HDI_MODULE_LINK.'/apply-for-life-insurance-plan']				= 	"HowDoI/applyForLifeInsurancePlan";
$route[HDI_MODULE_LINK.'/locate-kotak-branches']						= 	"HowDoI/locateKotakBranch";
$route[HDI_MODULE_LINK.'/understand-stages-of-application']				= 	"HowDoI/understandStagesOfApplication";
$route[HDI_MODULE_LINK.'/download-application-form']					= 	"HowDoI/downloadApplicationForm";
$route[HDI_MODULE_LINK.'/policy-servicing-forms']						= 	"HowDoI/applicationFormPolicyServing";
$route[HDI_MODULE_LINK.'/major-revival-policy-forms']					= 	"HowDoI/applicationFormMajorRevival";
$route[HDI_MODULE_LINK.'/application-form-riders']						= 	"HowDoI/applicationFormRiders";
$route[HDI_MODULE_LINK.'/death-claim']									= 	"HowDoI/deathClaim";
$route[HDI_MODULE_LINK.'/fund-update']									= 	"HowDoI/fundUpdate";
$route[HDI_MODULE_LINK.'/fund-update/(:num)']							= 	"HowDoI/fundUpdate/$1";
$route[HDI_MODULE_LINK.'/individual-claim']							= 	    "HowDoI/individual_claim";
$route[HDI_MODULE_LINK.'/check-my-policy-document-annexures']							= 	    "HowDoI/checkMysurrendervalue";


$route[HDI_MODULE_LINK.'/registerfor-ecs']					= 	"HowDoI/registerForEcs";

$route[HDI_MODULE_LINK.'/file-claim']									= 	"HowDoI/fileClaim";
$route[HDI_MODULE_LINK.'/file-claim/claims/(:any)']							= 	"HowDoI/claims/$1";
$route[HDI_MODULE_LINK.'/group-claim']									= 	"HowDoI/fileGroupClaim";
$route[HDI_MODULE_LINK.'/get-policy-brochure']							= 	"HowDoI/getPolicyBrochure";
$route[HDI_MODULE_LINK.'/brochure-savings-and-investments']				= 	"HowDoI/getPolicyBrochureSavingsInvestment";
$route[HDI_MODULE_LINK.'/brochure-child-plans']							= 	"HowDoI/getPolicyBrochureChildPlans";
$route[HDI_MODULE_LINK.'/brochure-retirement-plans']					= 	"HowDoI/getPolicyBrochureRetirementPlans";

$route[HDI_MODULE_LINK.'/brochure-health-plans']					= 	"HowDoI/getPolicyBrochureHealthPlans";

$route[HDI_MODULE_LINK.'/check-policy-document-specimen']				= 	"HowDoI/checkPolicyDocumentSpecimen";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-savings-and-investments']				= 	"HowDoI/checkPolicyDocumentSpecimenSavingsInvestments";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-retirement-plans']				= 	"HowDoI/checkPolicyDocumentSpecimenRetirementPlans";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-child-plans']				= 	"HowDoI/checkPolicyDocumentSpecimenChildPlans";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-group-plans']				= 	"HowDoI/checkPolicyDocumentSpecimenGroupPlans";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-riders']				= 	"HowDoI/checkPolicyDocumentSpecimenRiders";
$route[HDI_MODULE_LINK . '/check-policy-document-specimen-withdrawn-products'] = "HowDoI/checkPolicyDocumentSpecimenWithdrawnProducts";
$route[HDI_MODULE_LINK.'/check-policy-document-specimen-health-plans']				= 	"HowDoI/checkPolicyDocumentSpecimenHealthPlans";



$route[HIRING_PROCESS_LINK]				= 	"LifeAdvisor/HiringProcess";
$route[CAREER_AS_LIFE_ADVISOR]			= 	"LifeAdvisor/CareerAsLifeAdvisor";
$route['our-executive-advisors']			= 	"LifeAdvisor/MoreExecutiveAdvisors";
$route[LA_FAQS_LINK]			= 	"LifeAdvisor/LifeAdvisorFaqs";
$route[HDI_MODULE_LINK.'/'.LA_SEARCH_LINK] = "LifeAdvisor/LifeAdvisorSearch";
$route['lifeadvisorsearch/submit'] = "ajax/search_life_advisor";
$route['executive-advisors/load-more'] = "ajax/load_more_executive";

$route['grievance-redressal/(:any)']											= 	"Site/GrievanceRedressal/$1";
$route['website-feedback']									= 	"Site/feedback";
$route['kotak-tv']									= 	"Site/kotak_tv";

$route['savings-plan']	= 	"savings_plan/index";
$route['nav-upload']=      "nav_upload/index";
$route['nav-upload/(:any)']=      "nav_upload/$1";

$route['term-insurance']	= 	"term_insurance/index";
$route[FTC_LINK]                           =  "financial_tools_calculators/index";

$route[HAPPY_YOU_MODULE_LINK]  =  "happy_you/index";

//$route[HAPPY_YOU_MODULE_LINK]  =  "happy_you/index";
$route[HAPPY_YOU_MODULE_LINK.'/(:any)']													= 	"happy_you/happy_you_blog/$1";


//commmon_method_for_happy_you
$route['ulip-plan'] = "ulip_plan/index";
$route['api'] = "api/index";
$route['api/(:any)'] = "api/$1";

$route['insurance-stories']													= 	"insurance_stories/index";
$route['insurance-stories/(:any)']													= 	"insurance_stories/insurance_story_details/$1";
$route['insurance-stories/(:any)/(:any)']													= 	"insurance_stories/insurance_story_details/$1/$1";


$route['disclaimer-page']									= 	"Site/disclaimer_page";
$route['einvest-disclaimer']									= 	"Site/einvest_disclaimer";
$route['gen2gen-disclaimer-page']									= 	"Site/gen2gen_disclaimer";


$route['disclaimer-page-gsp/(:any)']									= 	"Site/disclaimer-page-gsp";


$route['get-views']									= 	"Site/get_views";
$route['kotak-tv/(:any)']									= 	"Site/kotak_tv/$1";
$route['kotak-tv/(:any)/(:any)']									= 	"Site/kotak_tv/$1/$2";
$route['feedback-form/submit'] 								= 	"ajax/feedback_submit";
$route['feedback-form/cities'] 								= 	"ajax/feedback_cities";
$route['sitemap']											= 	"Site/sitemap";
$route['main']												= 	"Site/desktop_index";
$route['(:any)']											= 	"Site/footerLinks/$1";
$route['do-not-call-registry/submit'] 						= 	"ajax/do_not_call_registry_submit";
$route['campaign/submit'] = "api/eterm_campaign_submit";
$route['thatswhy/submit'] = "api/thatswhy_campaign_submit";
$route['campaign-report-page/(:any)'] = "report/campaign_report_page/$1";
$route['campaign-report-download/(:any)'] = "report/campaign_export_CSV/$1";
$route['COP/(:any)'] = "COP/cop_submit/$1";
$route[FTC_LINK.'/dass-21-calculator']                           =  "financial_tools_calculators/dass-21-calculator";
$route[FTC_LINK.'/term-insurance-calculator']                           =  "financial_tools_calculators/term_insurance_calculator";

$route[FTC_LINK.'/ulip-calculator']                           =  "financial_tools_calculators/ulip_calculator";
$route[FTC_LINK.'/retirement-calculator']                     =  "financial_tools_calculators/retirement_calculator";
$route[FTC_LINK.'/income-tax-calculator']                     =  "financial_tools_calculators/income_tax_calculator";
$route[FTC_LINK.'/compound-interest-calculator']            =  "financial_tools_calculators/compound_interest_calculator";
$route[FTC_LINK.'/fd-calculator']            =  "financial_tools_calculators/fd_calculator";
$route[FTC_LINK.'/rd-calculator']            =  "financial_tools_calculators/rd_calculator";

$route[FTC_LINK.'/sip-calculator']            =  "financial_tools_calculators/sip_calculator";
$route[FTC_LINK.'/bmi-calculator']            =  "financial_tools_calculators/bmi_calculator";
$route[FTC_LINK.'/hra-calculator']            =  "financial_tools_calculators/hra_calculator";
$route[FTC_LINK.'/gratuity-calculator']            =  "financial_tools_calculators/gratuity_calculator";
$route[FTC_LINK.'/ppf-calculator']            =  "financial_tools_calculators/ppf_calculator";
$route[FTC_LINK.'/dummy-calculator']            =  "financial_tools_calculators/dummy_calculator";


$route[ULIP_PLAN_LINK.'/sum-assured-in-unit-linked-insurance-plan']           =  "ulip_plans/sum_assured_in_unit_linked_insurance_plan";

$route[ULIP_PLAN_LINK.'/benefits-of-ulip-in-hindi']           =  "ulip_plans/benefits_of_ulip_in_hindi";
$route[ULIP_PLAN_LINK.'/best-investment-options-for-females'] =  "ulip_plans/best_investment_options_for_females";
$route[ULIP_PLAN_LINK.'/fd-vs-mutual-fund-vs-sip-vs-ulip']    =  "ulip_plans/fd_vs_mutual_fund_vs_sip_vs_ulip";
$route[ULIP_PLAN_LINK.'/how-is-cagr-calculated-in-ulip']      =  "ulip_plans/how_is_cagr_calculated_in_ulip";
$route[ULIP_PLAN_LINK.'/importance-of-portfolio-management']  =  "ulip_plans/importance_of_portfolio_management";

$route[ULIP_PLAN_LINK.'/kotak-e-term-plan-insurance']  =  "ulip_plans/kotak_e_term_plan_insurance";
$route[ULIP_PLAN_LINK.'/kotak-invest-maxima']  =  "ulip_plans/kotak_invest_maxima";


$route[ULIP_PLAN_LINK.'/what-is-ulip-plan']  =  "ulip_plans/what_is_ulip_plan";
$route[ULIP_PLAN_LINK.'/how-ulip-works']  =  "ulip_plans/how_ulip_works";
$route[ULIP_PLAN_LINK.'/ulip-renewal']  =  "ulip_plans/ulip_renewal";
$route[ULIP_PLAN_LINK.'/ulip-nav']  =  "ulip_plans/ulip_nav"; 
$route[ULIP_PLAN_LINK.'/how-is-cagr-calculated-in-ulip']      =  "ulip_plans/how_is_cagr_calculated_in_ulip";
$route[ULIP_PLAN_LINK.'/importance-of-portfolio-management']  =  "ulip_plans/importance_of_portfolio_management";
$route[ULIP_PLAN_LINK.'/minimum-lock-in-period-for-ulip']           =  "ulip_plans/minimum_lock_in_period_for_ulip";
$route[ULIP_PLAN_LINK.'/benefits-of-ulip']           =  "ulip_plans/benefits_of_ulip";



$route[ULIP_PLAN_LINK.'/kotak-e-invest']	= 	"ulip_plans/kotak_e_invest";
$route[ULIP_PLAN_LINK.'/kotak-single-invest-plus']	= 	"ulip_plans/kotak_single_invest_plus";
$route[ULIP_PLAN_LINK.'/kotak-single-invest-advantage']	= 	"ulip_plans/kotak_single_invest_advantage";
$route[ULIP_PLAN_LINK.'/kotak-platinum-plan']	= 	"ulip_plans/kotak_platinum_plan";
$route[ULIP_PLAN_LINK.'/kotak-ace-investment-plan']="ulip_plans/kotak_ace_investment_plan";

$route[ULIP_PLAN_LINK.'/kotak-wealth-optima-plan']="ulip_plans/kotak_wealth_optima_plan";
$route[ULIP_PLAN_LINK.'/sum-assured-in-unit-linked-insurance-plan']="ulip_plans/sum_assured_in_unit_linked_insurance_plan";

$route[ULIP_PLAN_LINK.'/ulip-returns-in-15-years']="ulip_plans/ulip_returns_in_15_years";
$route[ULIP_PLAN_LINK.'/ulip-returns-in-5-years']="ulip_plans/ulip_returns_in_5_years";
$route[ULIP_PLAN_LINK.'/ulip-returns-in-20-years']="ulip_plans/ulip_returns_in_20_years";

$route[ULIP_PLAN_LINK.'/ulip-returns-in-10-years']="ulip_plans/ulip_returns_in_10_years";
$route[ULIP_PLAN_LINK.'/kotak-tulip']           =  "ulip_plans/kotak_tulip";

$route[SP_MODULE_LINK.'/commmon_method_insurance_plans']           =  "savings_plan/commmon_method_insurance_plans";

$route[SP_MODULE_LINK.'/commmon_method_online_plans']           =  "savings_plan/commmon_method_online_plans";

$route[SP_MODULE_LINK.'/commmon_method_insurance_guides']           =  "savings_plan/commmon_method_insurance_guides";

$route[SP_MODULE_LINK.'/kotak-assured-savings-plan']           =  "savings_plan/kotak_assured_savings_plan";
$route[SP_MODULE_LINK.'/kotak-health-maximiser']           =  "savings_plan/kotak_health_maximiser";

$route[SP_MODULE_LINK.'/kotak-get-assured-income-now']           =  "savings_plan/kotak_get_assured_income_now";

$route[SP_MODULE_LINK.'/kotak-guaranteed-savings-plan-online']           =  "savings_plan/kotak_guaranteed_savings_plan_online";

$route[SP_MODULE_LINK.'/kotak-guaranteed-fortune-builder']           =  "savings_plan/kotak_guaranteed_fortune_builder";

$route[SP_MODULE_LINK.'/kotak-fortune-maximiser']           =  "savings_plan/kotak_fortune_maximiser";

$route[SP_MODULE_LINK.'/kotak-assured-income-accelerator']           =  "savings_plan/kotak_assured_income_accelerator";

$route[SP_MODULE_LINK.'/kotak-premier-endowment-plan']           =  "savings_plan/kotak_premier_endowment_plan";

$route[SP_MODULE_LINK.'/kotak-premier-life-plan']           =  "savings_plan/kotak_premier_life_plan";

$route[SP_MODULE_LINK.'/kotak-pos-bachat-bima']           =  "savings_plan/kotak_pos_bachat_bima";

$route[SP_MODULE_LINK.'/kotak-sampoorn-bima-micro-insurance-plan']           =  "savings_plan/kotak_sampoorn_bima_micro_insurance_plan";

$route[SP_MODULE_LINK.'/kotak-premier-income-plan']           =  "savings_plan/kotak_premier_income_plan";

$route[SP_MODULE_LINK.'/kotak-smartlife-plan']           =  "savings_plan/kotak_smartlife_plan";

$route[SP_MODULE_LINK.'/kotak-classic-endowment-plan']           =  "savings_plan/kotak_classic_endowment_plan";

$route[SP_MODULE_LINK.'/kotak-premier-moneyback-plan']           =  "savings_plan/kotak_premier_moneyback_plan";

$route[SP_MODULE_LINK.'/what-is-savings-plan']           =  "savings_plan/what_is_savings_plan";

$route[SP_MODULE_LINK.'/what-is-savings-plan-in-hindi']           =  "savings_plan/what_is_savings_plan_in_hindi";
$route[SP_MODULE_LINK.'/top-benefits-of-savings-plan']           =  "savings_plan/top_benefits_of_savings_plan";


$route[SP_MODULE_LINK.'/tips-to-plan-your-savings']           =  "savings_plan/tips_to_plan_your_savings";

$route[SP_MODULE_LINK.'/important-things-to-remember-while-investing-in-a-savings-plan']           =  "savings_plan/eight_important_things_to_remember_while_investing_in_a_savings_plan";

$route[SP_MODULE_LINK.'/how-to-create-wealth-through-a-savings-plan']           =  "savings_plan/how_to_create_wealth_through_a_savings_plan";

$route[SP_MODULE_LINK.'/complete-savings-plan-for-low-income-earners']           =  "savings_plan/complete_savings_plan_for_low_income_earners";

$route[SP_MODULE_LINK.'/how-to-boost-your-savings-with-guaranteed-results']           =  "savings_plan/how_to_boost_your_savings_with_guaranteed_results";

$route[SP_MODULE_LINK.'/what-are-deferred-savings-plans']           =  "savings_plan/what_are_deferred_savings_plans";

$route[SP_MODULE_LINK.'/importance-of-savings-plan-you-need-to-know']           =  "savings_plan/importance_of_savings_plan_you_need_to_know";

$route[SP_MODULE_LINK.'/best-savings-plan-for-the-middle-class-in-india']           =  "savings_plan/best_savings_plan_for_the_middle_class_in_india";

$route[SP_MODULE_LINK.'/who-should-invest-in-savings-plan']           =  "savings_plan/who_should_invest_in_savings_plan";
$route[TI_MODULE_LINK.'/commmon_method_insurance_plans']           =  "term_insurance/commmon_method_insurance_plans";

$route[TI_MODULE_LINK.'/commmon_method_online_plans']           =  "term_insurance/commmon_method_online_plans";

$route[TI_MODULE_LINK.'/commmon_method_insurance_guides']           =  "term_insurance/commmon_method_insurance_guides";



$route[TI_MODULE_LINK.'/kotak-term-plan']           =  "term_insurance/kotak_term_plan";

$route[TI_MODULE_LINK.'/kotak-saral-jeevan-bima']           =  "term_insurance/kotak_saral_jeevan_bima";

$route[TI_MODULE_LINK.'/kotak-protect-india']           =  "term_insurance/kotak_protect_india";

$route[TI_MODULE_LINK.'/critical-illness']           =  "term_insurance/critical_illness";

$route[TI_MODULE_LINK.'/disability-insurance']           =  "term_insurance/disability_insurance";

$route[TI_MODULE_LINK.'/claim-settlement-ratio']           =  "term_insurance/claim_settlement_ratio";

$route[TI_MODULE_LINK.'/term-insurance-for-housewife']           =  "term_insurance/term_insurance_for_housewife";

$route[TI_MODULE_LINK.'/1-crore-term-insurance']           =  "term_insurance/one_crore_term_insurance";

$route[TI_MODULE_LINK.'/term-insurance-for-senior-citizens']           =  "term_insurance/term_insurance_for_senior_citizens";

$route[TI_MODULE_LINK.'/term-insurance-for-self-employed']           =  "term_insurance/term_insurance_for_self_employed";

$route[TI_MODULE_LINK.'/term-plan-with-return-of-premium']           =  "term_insurance/term_plan_with_return_of_premium";

$route[TI_MODULE_LINK.'/whole-life-insurance']           =  "term_insurance/whole_life_insurance";

$route[TI_MODULE_LINK.'/term-insurance-benefits']           =  "term_insurance/term_insurance_benefits";

$route[TI_MODULE_LINK.'/term-insurance-for-nri']           =  "term_insurance/term_insurance_for_nri";

$route[TI_MODULE_LINK.'/covid-19-term-insurance']           =  "term_insurance/covid_19_term_insurance";

$route[TI_MODULE_LINK.'/term-insurance-age-limit']           =  "term_insurance/term_insurance_age_limit";

$route[TI_MODULE_LINK.'/what-is-term-insurance']           =  "term_insurance/what_is_term_insurance";

$route[TI_MODULE_LINK.'/single-premium-term-insurance']           =  "term_insurance/single_premium_term_insurance";

$route[TI_MODULE_LINK.'/term-insurance-tax-benefits']           =  "term_insurance/term_insurance_tax_benefits";

$route[TI_MODULE_LINK.'/term-insurance-for-smokers']           =  "term_insurance/term_insurance_for_smokers";

$route[TI_MODULE_LINK.'/medical-test-for-term-insurance']           =  "term_insurance/medical_test_for_term_insurance";

$route[TI_MODULE_LINK.'/kotak-e-term']           =  "term_insurance/kotak_e_term";

$route[TI_MODULE_LINK.'/2-crore-term-insurance']           =  "term_insurance/two_crore_term_insurance";
$route[TI_MODULE_LINK.'/75-lakh-term-insurance']           =  "term_insurance/seventyfive_lakh_term_insurance";


$route[TI_MODULE_LINK.'/1-5-crore-term-insurance']           =  "term_insurance/one_five_crore_term_insurance";

$route[TI_MODULE_LINK.'/5-crore-term-insurance']           =  "term_insurance/five_crore_term_insurance";
$route[TI_MODULE_LINK.'/50-lakh-term-insurance']           =  "term_insurance/fifty_lakh_term_insurance";


$route[TI_MODULE_LINK.'/term-insurance-terminology']           =  "term_insurance/term_insurance_terminology";
$route[TI_MODULE_LINK.'/term-insurance-for-women']           =  "term_insurance/term_insurance_for_women";
$route[TI_MODULE_LINK.'/term-insurance-premium-calculator']           =  "term_insurance/term_insurance_premium_calculator";




//Super Hero blogs 

/*$route['advisors-for-life']									= 	"advisors_for_life";

$route['advisors-for-life/admin']									= 	"advisors_for_life/login";

$route['advisors-for-life/admin/login-check']									= 	"advisors_for_life/login_check";

$route['advisors-for-life/admin/dashboard']									= 	"advisors_for_life/dashboard";

$route['advisors-for-life/admin/common-data']									= 	"advisors_for_life/common_data";

$route['advisors-for-life/admin/life-advisor-details']									= 	"advisors_for_life/life_advisor_details";

$route['advisors-for-life/admin/customer-details']									= 	"advisors_for_life/customer_details";
$route['advisors-for-life/admin/logout']									= 	"advisors_for_life/logout";*/












$route[TI_MODULE_LINK.'/term-insurance-grace-period']           =  "term_insurance/term_insurance_grace_period";

//$route[TI_MODULE_LINK.'/term-insurance/1-crore-term-insurance']           =  "term_insurance/1_crore_terminsurance";

$route[TI_MODULE_LINK.'/term-insurance-grace-period']           =  "term_insurance/term_insurance_grace_period";

$route[TI_MODULE_LINK.'/term-insurance-and-maturity-benefits']           =  "term_insurance/term_insurance_and_maturity_benefits";

$route[TI_MODULE_LINK.'/term-insurance-terminology']           =  "term_insurance/term_insurance_terminology";
$route[TI_MODULE_LINK.'/what-is-term-insurance-in-hindi']           =  "term_insurance/what_is_term_insurance_in_hindi";
$route[TI_MODULE_LINK.'/whole-life-insurance']           =  "term_insurance/whole_life_insurance";


$route[TI_MODULE_LINK.'/smart-term-plan']           =  "term_insurance/smart_term_plan";
$route[TI_MODULE_LINK.'/term-plan-with-return-of-premium']           =  "term_insurance/term_plan_with_return_of_premium";
$route[TI_MODULE_LINK.'/what-is-term-insurance-in-hindi']           =  "term_insurance/what_is_term_insurance_in_hindi";


$route[ULIP_PLAN_LINK.'/ulip-for-retirement']  =  "ulip_plans/ulip_for_retirement";
$route[ULIP_PLAN_LINK.'/ulip-for-child-education']  =  "ulip_plans/ulip_for_child_education";

//$route[HAPPY_YOU_MODULE_LINK.'/(:any)'] = 'happy_you/$1';

$route[HAPPY_YOU_MODULE_LINK.'/(:any)/(:any)']													= 	"happy_you/$1/$1";
$route['nav-upload/addcsv']="nav_upload/addcsv";
