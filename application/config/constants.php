<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('base_url','http://localhost/kotaklife-corporate-webiste/'); 

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//defined('GOOGLE_RECAPTHA_KEY')        			OR define('GOOGLE_RECAPTHA_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI');
//defined('GOOGLE_RECAPTHA_SECRET')        			OR define('GOOGLE_RECAPTHA_SECRET', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe');
//defined('GOOGLE_RECAPTHA_KEY')        				OR define('GOOGLE_RECAPTHA_KEY', '6LdFVA8UAAAAAKjC63qe7SFTWVbZtqBgJvpmZgse');
//defined('GOOGLE_RECAPTHA_SECRET')        			OR define('GOOGLE_RECAPTHA_SECRET', '6LdFVA8UAAAAADs_t5ChsQlqu1Tz-HwxzNV0387A');


//defined('GOOGLE_RECAPTHA_KEY')OR define('GOOGLE_RECAPTHA_KEY', '6Ld_EA8cAAAAAJaUp3NI9vR74J2Aagxc0FpwQLx2');
//defined('GOOGLE_RECAPTHA_SECRET') OR define('GOOGLE_RECAPTHA_SECRET', '6Ld_EA8cAAAAAEzG2FWcLaoeMlNJuBG-12rPI_81');
defined('GOOGLE_RECAPTHA_KEY')OR define('GOOGLE_RECAPTHA_KEY', '6LewnFEcAAAAANEeuJToXO0tgejiAQ-XtRVDcJTB');
defined('GOOGLE_RECAPTHA_SECRET') OR define('GOOGLE_RECAPTHA_SECRET', '6LewnFEcAAAAAEbUi9_1E7YcomR2bkaXsBjYaJhs');

//Codebele CodeIgniter


define('globalAccessToken', 'cpk5sre43kpsprytujhjatquwevgtpljkg?e21nfo5k#qaqwe6thnbde');
define('apiendpoint', 'https://www.kotaklife.com/kotaktv/Api/');


defined('SITE_ID')        					 		OR define('SITE_ID', 1);
defined('AUTHOR_ID')        						OR define('AUTHOR_ID', 1);
defined('VERSIONING_ENABLED')        				OR define('VERSIONING_ENABLED', 'n');
defined('INSURANCE_PLANS_CHANNEL_ID')        		OR define('INSURANCE_PLANS_CHANNEL_ID', 4);
defined('INSURANCE_PLANS_TYPE_CHANNEL_ID')        	OR define('INSURANCE_PLANS_TYPE_CHANNEL_ID', 9);
defined('INSURANCE_PLANS_TYPE_RELATIONSHIP')        OR define('INSURANCE_PLANS_TYPE_RELATIONSHIP', 176);
defined('CITIES_CHANNEL_ID')        				OR define('CITIES_CHANNEL_ID', 26);
defined('REQUEST_LIFE_ADVISOR_CHANNEL_ID')        	OR define('REQUEST_LIFE_ADVISOR_CHANNEL_ID', 27);
defined('REQUEST_LIFE_ADVISOR_PLANS_ID')        	OR define('REQUEST_LIFE_ADVISOR_PLANS_ID', 91);
defined('CONTACT_US_CHANNEL_ID')        			OR define('CONTACT_US_CHANNEL_ID', 36);


defined('SR_GROUP_CHANNEL_ID') OR define('SR_GROUP_CHANNEL_ID', 71);
defined('SR_TYPE_CHANNEL_ID') OR define('SR_TYPE_CHANNEL_ID', 72);
defined('SR_GROUP_RELATIOSHIP_ID') OR define('SR_GROUP_RELATIOSHIP_ID', 322);
defined('SR_GROUP_FIELD_ID') OR define('SR_GROUP_FIELD_ID', 323);
defined('SR_TYPE_FIELD_ID') OR define('SR_TYPE_FIELD_ID', 324);
defined('SR_FILE_UPLOAD_DIR') OR define('SR_FILE_UPLOAD_DIR', 23);
defined('MEMBER_ID') OR define('MEMBER_ID', 1);
defined('CONTACTUS_UPLOAD_DIRECTORY_ID') OR define('CONTACTUS_UPLOAD_DIRECTORY_ID', 23);

defined('RIDERS_CHANNEL_ID')        				OR define('RIDERS_CHANNEL_ID', 54);
defined('SEO_CHANNEL_ID')        					OR define('SEO_CHANNEL_ID', 70);

defined('ULIP_PLANS_CHANNEL_ID')        				OR define('ULIP_PLANS_CHANNEL_ID', 76);
defined('TERM_PLANS_CHANNEL_ID')        				OR define('TERM_PLANS_CHANNEL_ID', 77);
defined('SAVINGS_PLAN_CHANNEL_ID')        				OR define('SAVINGS_PLAN_CHANNEL_ID', 78);
defined('HAPPY_YOU_CHANNEL_ID')        				OR define('HAPPY_YOU_CHANNEL_ID', 83);

defined('IG_MODULE_LINK')        					OR define('IG_MODULE_LINK', 'insurance-guide');
defined('IP_MODULE_LINK')        					OR define('IP_MODULE_LINK', 'insurance-plans');
defined('FP_MODULE_LINK')        					OR define('FP_MODULE_LINK', 'fund-performance');
defined('WKL_MODULE_LINK')        					OR define('WKL_MODULE_LINK', 'why-kotak-life');
defined('HDI_MODULE_LINK')        					OR define('HDI_MODULE_LINK', 'how-do-i');
//defined('GP_MODULE_LINK')        					OR define('GP_MODULE_LINK', 'group-plans');
defined('GP_MODULE_LINK')        					OR define('GP_MODULE_LINK', 'business-solutions');
defined('IS_MODULE_LINK')        					OR define('IS_MODULE_LINK', 'insurance-stories');

defined('OP_MODULE_LINK')        					OR define('OP_MODULE_LINK', 'online-plans');
defined('HIRING_PROCESS_LINK')        				OR define('HIRING_PROCESS_LINK', 'hiring-process');
defined('CAREER_AS_LIFE_ADVISOR')        			OR define('CAREER_AS_LIFE_ADVISOR', 'career-as-life-advisor');
defined('LA_FAQS_LINK')        			OR define('LA_FAQS_LINK', 'life-advisor-faqs');
defined('LA_SEARCH_LINK') OR define('LA_SEARCH_LINK', 'verify-life-advisor');
defined('EXECUTIVEADVISOR_LIMIT') OR define('EXECUTIVEADVISOR_LIMIT', 12);

defined('INSURANCE_GUIDE_TOPICS_CHANNEL_ID')        OR define('INSURANCE_GUIDE_TOPICS_CHANNEL_ID', 37);
defined('INSURANCE_GUIDE_TAGS_CHANNEL_ID')        	OR define('INSURANCE_GUIDE_TAGS_CHANNEL_ID', 40);
defined('INSURANCE_GUIDE_CHANNEL_ID')        		OR define('INSURANCE_GUIDE_CHANNEL_ID', 42);
defined('INSURANCE_GUIDE_GLOSSARY_CHANNEL_ID')   	OR define('INSURANCE_GUIDE_GLOSSARY_CHANNEL_ID', 43);
defined('INSURANCE_GUIDE_USERS_GLOSSARY_CHANNEL_ID')OR define('INSURANCE_GUIDE_USERS_GLOSSARY_CHANNEL_ID', 44);
defined('INSURANCE_GUIDE_FAQS_CHANNEL_ID')   	   	OR define('INSURANCE_GUIDE_FAQS_CHANNEL_ID', 45);
defined('INSURANCE_GUIDE_RELATIONSHIP')        		OR define('INSURANCE_GUIDE_RELATIONSHIP', 171);
defined('INSURANCE_GUIDE_TAG_RELATIONSHIP')        	OR define('INSURANCE_GUIDE_TAG_RELATIONSHIP', 172);
defined('INSURANCE_GUIDE_TOPIC_RELATIONSHIP')       OR define('INSURANCE_GUIDE_TOPIC_RELATIONSHIP', 177); 
defined('ULIP_PLANS_CHANNEL_ID')        			OR define('ULIP_PLANS_CHANNEL_ID', 78);
defined('TERM_PLANS_CHANNEL_ID')        			OR define('TERM_PLANS_CHANNEL_ID', 80);
defined('SAVINGS_PLANS_CHANNEL_ID')        			OR define('SAVINGS_PLANS_CHANNEL_ID', 81);
defined('POPULAR_SEARCHES_ID')        				OR define('POPULAR_SEARCHES_ID', 79);
  

defined('FUND_PERFORMANCE_MODULE_CHANNEL_ID')       OR define('FUND_PERFORMANCE_MODULE_CHANNEL_ID', 10);
defined('FUND_PERFORMANCE_SCHEMES_CHANNEL_ID')      OR define('FUND_PERFORMANCE_SCHEMES_CHANNEL_ID', 12);
defined('FUND_PERFORMANCE_NAV_CHANNEL_ID')        	OR define('FUND_PERFORMANCE_NAV_CHANNEL_ID', 18);
defined('FUND_PERFORMANCE_UPDATE_CHANNEL_ID')   	OR define('FUND_PERFORMANCE_UPDATE_CHANNEL_ID', 28);
defined('FUND_PERFORMANCE_FAQS_CHANNEL_ID')   		OR define('FUND_PERFORMANCE_FAQS_CHANNEL_ID', 59);
defined('FUND_PERFORMANCE_SCHEME_RELATIONSHIP')     OR define('FUND_PERFORMANCE_SCHEME_RELATIONSHIP', 195);
defined('FUND_PERFORMANCE_DATE_FORMAT')     		OR define('FUND_PERFORMANCE_DATE_FORMAT', 'F d, Y');
defined('DATE_PICKER_FORMAT')     					OR define('DATE_PICKER_FORMAT', 'd-m-Y');

defined('BLOG_DATE_FORMAT')     					OR define('BLOG_DATE_FORMAT', 'M d, Y');


defined('RECENT_ARTICLES_LIMIT')        	OR define('RECENT_ARTICLES_LIMIT', 3);
defined('RANDOM_TOPICS_LIMIT')        		OR define('RANDOM_TOPICS_LIMIT', 4);
defined('ARTICLES_LIMIT')        			OR define('ARTICLES_LIMIT', 12);
defined('GLOSSARY_LIMIT')        			OR define('GLOSSARY_LIMIT', 3);
defined('FAQS_LIMIT')        				OR define('FAQS_LIMIT', 10);
defined('ALSO_READ_LIMIT')        			OR define('ALSO_READ_LIMIT', 3);
defined('ARTICLE_DATE_FORMAT')        		OR define('ARTICLE_DATE_FORMAT', 'jS M Y');
defined('ARTICLE_DATE_FORMAT1')        		OR define('ARTICLE_DATE_FORMAT1', 'jS M, Y');
defined('READ_MORE_DESCRIPION_LENGTH') 		OR define('READ_MORE_DESCRIPION_LENGTH', 150);
defined('NO_RECORDS_FOUND') 				OR define('NO_RECORDS_FOUND', 'No records found');

defined('WKL_HOME')        							OR define('WKL_HOME', 30);
defined('WKL_CONTACTUS_ADDRESS_FOR_MAP')        	OR define('WKL_CONTACTUS_ADDRESS_FOR_MAP', 41);

defined('WKL_ABOUTUS_OUR_VISION_MISSION')        	OR define('WKL_ABOUTUS_OUR_VISION_MISSION', 31);
defined('WKL_ABOUTUS_OUR_VALUES')        			OR define('WKL_ABOUTUS_OUR_VALUES', 32);
defined('WKL_ABOUTUS_BOARD_OF_DIRECTORS')        	OR define('WKL_ABOUTUS_BOARD_OF_DIRECTORS', 33);
defined('WKL_ABOUTUS_OUR_KEY_PEOPLE')        		OR define('WKL_ABOUTUS_OUR_KEY_PEOPLE', 34);

defined('WKL_CAREER_OUR_CULTURE')        			OR define('WKL_CAREER_OUR_CULTURE', 11);
defined('WKL_CAREER_GREAT_PLACE_TO_WORK')       	OR define('WKL_CAREER_GREAT_PLACE_TO_WORK', 13);
defined('WKL_CAREER_TESTIMONIALS')        			OR define('WKL_CAREER_TESTIMONIALS', 14);
defined('WKL_CAREER_BEST_EMPLOYEE')        			OR define('WKL_CAREER_BEST_EMPLOYEE', 15);
defined('WKL_CAREER_GREAT_PLACE_CONTENT')        	OR define('WKL_CAREER_GREAT_PLACE_CONTENT', 16);
defined('WKL_CAREER_GALLERY')        				OR define('WKL_CAREER_GALLERY', 17);

defined('WKL_CORPORATE_GOVERNANCE_PUBLIC_DISCLOUSURE')      OR define('WKL_CORPORATE_GOVERNANCE_PUBLIC_DISCLOUSURE', 5);
defined('WKL_CORPORATE_GOVERNANCE_ANNUAL_REPORT')        	OR define('WKL_CORPORATE_GOVERNANCE_ANNUAL_REPORT', 6);
defined('WKL_CORPORATE_GOVERNANCE_POLICIES_CODES')        	OR define('WKL_CORPORATE_GOVERNANCE_POLICIES_CODES', 7);
defined('WKL_CORPORATE_GOVERNANCE_NEWS_EVENTS')        		OR define('WKL_CORPORATE_GOVERNANCE_NEWS_EVENTS', 8);
defined('WKL_CORPORATE_GOVERNANCE_ANNUAL_RETURN')        	OR define('WKL_CORPORATE_GOVERNANCE_ANNUAL_RETURN', 73);

defined('WKL_MEDIA_CENTER_KLI_IN_NEWS')        				OR define('WKL_MEDIA_CENTER_KLI_IN_NEWS', 19);
defined('WKL_MEDIA_CENTER_PRESS_RELEASES')        			OR define('WKL_MEDIA_CENTER_PRESS_RELEASES', 20);
defined('WKL_MEDIA_CENTER_OUR_CAMPAIGNS')        			OR define('WKL_MEDIA_CENTER_OUR_CAMPAIGNS', 21);
defined('WKL_MEDIA_CENTER_MEDIA_KIT')        				OR define('WKL_MEDIA_CENTER_MEDIA_KIT', 22);
defined('WKL_MEDIA_CENTER_KLI_IN_NEWS_ARCHIVES')        	OR define('WKL_MEDIA_CENTER_KLI_IN_NEWS_ARCHIVES', 25);


defined('HDI_UNDERSTAND_STAGES_OF_APPLICATION')        		OR define('HDI_UNDERSTAND_STAGES_OF_APPLICATION', 46);
//defined('HDI_FUND_PERFORMANCE')        						OR define('HDI_FUND_PERFORMANCE', 47);
defined('HDI_ANNUAL_FUND_PERFORMANCE')        				OR define('HDI_ANNUAL_FUND_PERFORMANCE', 48);
defined('HDI_PAY_MY_PREMIUM')        						OR define('HDI_PAY_MY_PREMIUM', 29);
defined('HDI_PAY_MY_PREMIUM_FAQS')        					OR define('HDI_PAY_MY_PREMIUM_FAQS', 35);
defined('HDI_DOWNLOAD_APPLICATION_FORM')        			OR define('HDI_DOWNLOAD_APPLICATION_FORM', 49);
defined('HDI_DOWNLOAD_POLICY_BROCHURE')        				OR define('HDI_DOWNLOAD_POLICY_BROCHURE', 50);
defined('HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN')        	OR define('HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN', 51);
defined('HDI_FILE_CLAIM_FAQs')       					 	OR define('HDI_FILE_CLAIM_FAQs', 52);
defined('HDI_FILE_CLAIM')       						 	OR define('HDI_FILE_CLAIM', 53);
defined('HDI_SURRENDER_APPLICATION_FORM')        		OR define('HDI_SURRENDER_APPLICATION_FORM', 82);

defined('GRIEVANCE_REDRESSAL')       					 	OR define('GRIEVANCE_REDRESSAL', 47);

defined('NEED_BASE_CALCULATOR')       					 	OR define('NEED_BASE_CALCULATOR', 55);
defined('NEED_BASE_CALCULATOR_USER_DETAILS')       			OR define('NEED_BASE_CALCULATOR_USER_DETAILS', 56);

defined('GET_A_CALL')       					 			OR define('GET_A_CALL', 57);
defined('FEEDBACK_FORM')       					 			OR define('FEEDBACK_FORM', 60);
defined('CHNL_JOIN_US')       					 			OR define('CHNL_JOIN_US', 61);
defined('LA_SUCCESS_STORIES')   				 			OR define('LA_SUCCESS_STORIES', 62);
defined('LA_OUR_EXECUTIVE')   					 			OR define('LA_OUR_EXECUTIVE', 63);
defined('LA_FAQs')   					 					OR define('LA_FAQs', 65);
defined('DO_NOT_CALL_REGISTRY')   					 		OR define('DO_NOT_CALL_REGISTRY', 68);
defined('AGENTS_TERMINATED')   					 			OR define('AGENTS_TERMINATED', 69);

defined('INSURANCE_STORIES_CHANNEL_ID')        		OR define('INSURANCE_STORIES_CHANNEL_ID', 80);


defined('REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID')       			OR define('REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID', 58);
defined('REQUEST_A_RELATIONSHIP_MANAGER_PLANS_ID')       			OR define('REQUEST_A_RELATIONSHIP_MANAGER_PLANS_ID', 263);
defined('REQUEST_A_RELATIONSHIP_MANAGER_EMPLOYEE_COUNT_ID')       	OR define('REQUEST_A_RELATIONSHIP_MANAGER_EMPLOYEE_COUNT_ID', 262);


#Convonix SEO Common Information
defined('ORG_CONTEXT')      	 		OR define('ORG_CONTEXT', 'https://schema.org');
defined('ORG_TYPE_PRODUCT')      		OR define('ORG_TYPE_PRODUCT', 'Product');
defined('ORG_TYPE_ORGANIZATION')      	OR define('ORG_TYPE_ORGANIZATION', 'Organization');
defined('ORG_NAME')       		 		OR define('ORG_NAME', 'Kotak Life Insurance');
defined('ORG_IMG_URL')    		 		OR define('ORG_IMG_URL', 'https://www.kotaklife.com/assets/images/kotak-logo.png');
defined('ORG_CONTENT_URL')  	 		OR define('ORG_CONTENT_URL', 'kotak-logo.png');
defined('ORG_IMG_ALT')  		 		OR define('ORG_IMG_ALT', 'Kotak Life Insurance Logo');
defined('ORG_TELEPHONE')  		 		OR define('ORG_TELEPHONE', '1800 209 8800');
defined('KLI_KEYWORDS')  		 		OR define('KLI_KEYWORDS', 'Life insurance plans, term plans, investment plans,  life insurance India,  insurance companies in India');

defined('ORG_WEBSITE_URL')       		OR define('ORG_WEBSITE_URL', 'https://www.kotaklife.com/');
defined('ORG_WIKIPEDIA')       			OR define('ORG_WIKIPEDIA', 'https://en.wikipedia.org/wiki/Kotak_Life_Insurance');

defined('ORG_CONTEXT')      	 		OR define('ORG_CONTEXT', 'http://schema.org');
defined('ORG_AGENCY_TYPE')      		OR define('ORG_AGENCY_TYPE', 'InsuranceAgency');

defined('FTC_LINK')                            OR define('FTC_LINK', 'financial-tools-calculators');

defined('ULIP_PLAN_LINK')               OR define('ULIP_PLAN_LINK', 'ulip-plans'); 

defined('SH_MODULE_LINK')        					OR define('SH_MODULE_LINK', 'insurance-stories'); 
defined('SP_MODULE_LINK')               OR define('SP_MODULE_LINK', 'savings-plan');

defined('TI_MODULE_LINK')        					OR define('TI_MODULE_LINK', 'term-insurance');
defined('HAPPY_YOU_MODULE_LINK')        					OR define('HAPPY_YOU_MODULE_LINK', 'happy-you');
defined('INVESTMENT_PLANS')        					OR define('INVESTMENT_PLANS', 'investment-plans');

# define constant, serialize array as array by default cannot be stored in constant
# use it
#$categories = unserialize (CUSTOMERS);
define ("CUSTOMERS", serialize (array('New','Existing')));

//Predefine the CSS Files
/*define ("CSS_FILES", serialize (array(
								'assets/css/reset.css',
								'assets/css/owl.carousel.css',
								'assets/css/owl.theme.css',
								'assets/css/jquery.jscrollpane.css',
								'assets/css/style.css',
								'assets/css/media.css',
								'assets/css/jquery-ui.css',
								'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css',
								//'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css'
								)
							));

//Predefine the JS Files
define ("JS_FILES", serialize (array(
								//'assets/js/jquery-1.11.2.min.js',
								//'assets/js/jquery-3.5.1.min.js',
								//'assets/js/jquery-migrate-1.2.1.min.js',
								'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js',
								'assets/js/jpreloader.js',
								'assets/js/jquery.mousewheel.js',
								'assets/js/jquery.jscrollpane.min.js',
								'assets/js/owl.carousel.min.js',
								'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', 
								'assets/js/hammer.js',
								'assets/js/common.js',
								'assets/js/common-dev.js'
								//'assets/js/jquery.validate.js',
								)
							));
define ("Mobile_JS_FILES", serialize (array(
								'assets/mobile/js/jquery-3.6.0.min.js'
								)
							));							*/
define ("CSS_FILES", serialize (array(
        'assets/css/reset.css',

        //'assets/css/owl.carousel.css',
        // "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css",
        //"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",
        'assets/css/owl.theme.css',
        //'assets/css/jquery.jscrollpane.css',
        'https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.20/style/jquery.jscrollpane.min.css',
        //'assets/css/jquery-ui.css',
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css',

       // 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
       // 'assets/css/style.css',
       // 'assets/css/media.css',
	//	'assets/css-term/style.css',

        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css',
        'assets/css/style.css',
        'assets/css/media.css',
        //'assets/css/slick.css',
        //'assets/css/jquery.fancybox.min.css',
        //'assets/css/jquery-ui.min.css',
						)
));

//Predefine the JS Files
define ("JS_FILES", serialize (array(

 
					//'assets/js/jquery-1.11.2.min.js', 
	'https://code.jquery.com/jquery-3.6.0.min.js',
	//'assets/js/jquery-3.6.0.min.js',
	//'assets/js/jquery-ui.min.js',
    "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js",
	// 'assets/js/jquery-migrate-1.4.1.min.js',
	"https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js",
	//'assets/js/jquery-migrate-1.2.1.min.js',
	//'assets/js/jquery.fancybox.min.js',
	"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js",
	//'assets/js/jquery.mousewheel.js',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.10/jquery.mousewheel.min.js',
	//'assets/js/jquery.jscrollpane.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.20/script/jquery.jscrollpane.min.js',
	'assets/js/jpreloader.js',
	
	'assets/js/owl.carousel.min.js',
	// "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js",
	   // "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js",
	//'assets/js/bootstrapValidator.min.js', // Need to check cdn link
    'https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js',
	//'assets/js/hammer.js', // Need to check cdn link
    'https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js',
	//'assets/js/bootstrapValidator.min.js',
	//'assets/js/jquery.validate.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js',
	//'assets/js/slick.min.js',
    "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js",
	//'assets/js/select2.min.js', // Need to check cdn link
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js',
	'assets/js/common.js',
	'assets/js/common-dev.js'
	//'assets/js/jquery.validate.js',
)
));
define ("Mobile_JS_FILES", serialize (array(
'assets/mobile/js/jquery-3.6.0.min.js'
)
));  					