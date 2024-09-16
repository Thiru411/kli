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
?> <link href="assets/images/favicon.ico" type="image/ico/gif" sizes="16x16" rel="shortcut icon"><link rel="stylesheet" href="assets/css/global.css"><link rel="stylesheet" href="assets/css/income-tax.css"><link rel="stylesheet" href="assets/css/vendor/rangeslider.css"><style>.calc-list{padding-left:16px}.calc-list li{font-size:1.6rem;list-style:disc}.breadcrumb-ulip{margin-top:20px;padding-bottom:1rem}.new-terms a{color:#000}.income-tac a{font-size:14px;color:#08315f;font-weight:400}.claimsDesc a{color:#08315f}.taxTablebody td{padding-left:1.2rem!important;padding-right:1.2rem!important}table.taxTable tr td,table.taxTable tr th{border:1px solid #e5e5e5!important;border-bottom:none!important;border-right:none!important}#taxTable .taxTable{box-shadow:1px 2px 7px 3px #f0efef!important}.taxTable .taxTablebody tr:nth-child(odd){background-color:#f9f9f9!important}.taxTable .taxTablehead .sub-title th{font-size:1.4rem!important;font-weight:400}.accordDesc p a{font-weight:600}.disclaimer-backbtn{position:relative;top:-4rem}#backDeduction1{text-transform:initial}</style><div class="interactionWrap incomeTax"><div class="pageWrapper"><section id="incomeTaxCalculator"><div class="container"><ul class="breadcrumb-ulip"><li><a href="https://www.kotaklife.com/">Home></a></li><li><a href="javascript:void(0);">Financial Tool Calculator ></a></li><li class="active"><a href="javascript:void(0);">Income Tax Calculator</a></li></ul></div></section><div class="modal-overlay close-modal"><div class="modal"><div class="close-modal"><img src="assets/images/close.svg" alt="" title=""></div><div class="modal-content"><div class="incometax-breakdown-wrapper"><h2 class="sec-head">Detailed breakdown of your<span class="sec-head-blue">income tax</span></h2><div class="breakdown-table"><table width="100%" celspacing="0" cellpadding="0" border="0"><tr><th class="table-head brd-right brd-left brd-top">Particulars</th><th class="table-head2 brd-right brd-top">Amount Entered</th><th class="table-head brd-right brd-top">Amount Considered</th></tr><tr><td class="table-data brd-right brd-left">Income from Salary (A)</td><td class="table-data2 brd-right">&#8377;&nbsp;<span id="incomeFromSalary"></span></td><td class="table-data brd-right">&#8377;&nbsp;<span id="incomeFromSalaryNew"></span></td></tr><tr><td class="table-data brd-right brd-left">Exemptions (B)</td><td class="table-data2 brd-right">&#8377;&nbsp;<span id="exemptions"></span></td><td class="table-data brd-right">&#8377;&nbsp;<span id="exemptionsNew"></span></td></tr><tr><td class="table-data brd-right brd-left">Income from Other Sources (C)</td><td class="table-data2 brd-right">&#8377;&nbsp;<span id="incomeOther"></span></td><td class="table-data brd-right">&#8377;&nbsp;<span id="incomeOtherNew"></span></td></tr><tr><th class="brd-right brd-left table-head">GROSS TOTAL INCOME (D) = (A) - (B) + (C)</th><th class="brd-right table-head2">&nbsp;</th><th class="brd-right table-head">&#8377;&nbsp;<span id="grossTotalIncome"></span></th></tr><tr><td class="table-data brd-right brd-left">Professional Tax</td><td class="table-data2 brd-right">&#8377;&nbsp;<span id="profTax"></span></td><td class="table-data brd-right">&#8377;&nbsp;<span id="profTaxNew"></span></td></tr><tr><td class="table-data brd-right brd-left">Standard Deduction</td><td class="table-data2 brd-right">&nbsp;</td><td class="table-data brd-right">&#8377;&nbsp;<span id="standardDeduction"></span></td></tr><tr><th class="table-head brd-right brd-left">TOTAL DEDUCTIONS (E)</th><th class="table-head2 brd-right">&nbsp;</th><th class="table-head brd-right">&#8377;&nbsp;<span id="totalDeductions"></span></th></tr><tr><th class="table-head brd-right brd-left">NET TAXABLE AMOUNT (F) = (D) - (E)</th><th class="table-head2 brd-right">&nbsp;</th><th class="table-head brd-right">&#8377;&nbsp;<span id="netTaxableAmount"></span></th></tr><tr><th class="table-head brd-right brd-left">TAX ON TAXABLE AMOUNT (G)</th><th class="table-head2 brd-right">&nbsp;</th><th class="table-head brd-right">&#8377;&nbsp;<span id="taxTaxableAmount"></span></th></tr><tr><td class="table-data brd-right brd-left">Surcharge @% (H)</td><td class="table-data2 brd-right">&nbsp;</td><td class="table-data brd-right">&#8377;&nbsp;<span id="surcharge"></span></td></tr><tr><td class="table-data brd-right brd-left">Education Cess @4% (I)</td><td class="table-data2 brd-right">&nbsp;</td><td class="table-data brd-right">&#8377;&nbsp;<span id="educationCess"></span></td></tr><tr><th class="table-head brd-right brd-left brd-bottom">TOTAL TAX (J) = (G) + (H) + (I)</th><th class="table-head2 brd-right brd-bottom">&nbsp;</th><th class="table-head brd-right brd-bottom">&#8377;&nbsp;<span id="totalTax"></span></th></tr></table></div></div></div></div></div><section id="HowtouseCalc"><div class="container"><div class="secWarp"><div class="leftSec"><h2 class="Title">Key Takeaways</h2><div class="Steps"><div class="stepsCont"><span><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org2000/svg"><circle cx="18.5" cy="18" r="18" fill="#F3F3F3"></circle><path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"></path></svg></span><div class="stepWarp"><h4 class="stepTitle cblack">Income tax is a direct tax that is levied on the income of individuals and businesses by the government.</h4></div></div><div class="stepsCont"><span><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.5" cy="18" r="18" fill="#F3F3F3"></circle><path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"></path></svg></span><div class="stepWarp"><h4 class="stepTitle cblack">Exemptions on total income tax are typically granted for specific reasons, such as supporting dependents, investing in retirement savings, or promoting economic activities in certain sectors.</h4></div></div><div class="stepsCont"><span><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.5" cy="18" r="18" fill="#F3F3F3"></circle><path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"></path></svg></span><div class="stepWarp"><h4 class="stepTitle cblack">Income tax calculators are powerful tools that can help individuals and businesses estimate their tax liability.</h4></div></div><div class="stepsCont"><span><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.5" cy="18" r="18" fill="#F3F3F3"></circle><path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"></path></svg></span><div class="stepWarp"><h4 class="stepTitle cblack">Before you start using the salary income tax calculator, you need to have all the relevant information about your income, deductions, and exemptions.</h4></div></div></div></div><div class="rightSec"><picture><source media="(min-width:767px)" width="100%" height="100%" srcset="assets/images/calculator/income-tax/keyTakeaway.svg"><img srcset="assets/images/calculator/income-tax/keyTakeaway.svg" src="./assets/keyTakeaway.svg" alt="Income Tax Key Takeways"></picture></div></div><div class="keyTakeaway-section"><p class="keyTakeaway-desc">Income tax is an essential part of any country's economic structure. It is a form of tax that governments collect on the income of individuals and organizations. The tax collected is used to fund various public services like healthcare, education, infrastructure, and so on. Income tax is calculated based on the amount of income an individual or organization earns over a given period.</p><br><p class="keyTakeaway-desc">In this article, we will discuss the salary income tax calculator, how it works, and its benefits.</p></div></div></section><section id="whatisITC"><div class="whatisITC-bg"><div class="container"><h2 class="whatisITC-title">What is Income Tax Calculator?</h2><p class="whatisITC-desc">An income tax calculator is an online tool that helps individuals and organizations calculate their income tax liability. It is an easy and convenient way to<a class="inset-link" href="https://www.kotaklife.com/insurance-guide/protection/income-tax-calculator-how-to-calculate-income-tax" target="_blank">calculate your income tax</a>as it eliminates the need for manual calculations, which can be time-consuming and prone to errors. The income tax calculator takes into account various factors like income, deductions, and exemptions and calculates the total tax liability accordingly.</p></div></div></section><section id="useOnlineITC"><div><div class="container"><h2 class="useOnlineITC_title">How to Use the Online Income Tax Calculator?</h2><p class="useOnlineITC-desc">Paying income tax is a crucial part of being a responsible citizen. However, it can be a daunting task to calculate your income tax liability, especially if you have multiple sources of income or various deductions and exemptions. Fortunately, the internet has made it easier than ever to calculate your income tax liability using an online income tax calculator.</p><br><p class="useOnlineITC-desc">Read ahead to go through a step-by-step guide on how to use an online income tax calculator.</p><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">1</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Gather all relevant information</h3><div class="useOnlineITC_stepDesc">Before you start using the salary income tax calculator, you need to have all the relevant information about your income, deductions, and exemptions. Make sure you have your<a href="https://www.kotaklife.com/insurance-guide/savingstax/guide-to-form-16-form-16-a-and-16-b" target="_blank" class="inset-link">Form 16</a>(issued by your employer),<a href="https://www.kotaklife.com/insurance-guide/savingstax/all-you-need-to-know-about-form-26as" class="inset-link" class="inset-link" target="_blank">Form 26AS</a>(tax credit statement), and other income-related documents such as bank statements, rent receipts, and investment proofs.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">2</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Find a reliable income tax calculator</h3><div class="useOnlineITC_stepDesc">There are many online income tax calculators available, but you need to choose a reliable one. You can use the income tax calculator provided by the Income Tax Department of India on their official website or any other trusted tax calculator website.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">3</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Choose the correct assessment year</h3><div class="useOnlineITC_stepDesc">Make sure you choose the correct assessment year for which you want to calculate your income tax liability. The assessment year is the year in which you file your tax return, and it is always one year ahead of the financial year.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">4</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Enter your income details</h3><div class="useOnlineITC_stepDesc">Enter your income details in the income tax calculator. You need to enter your total income from all sources, such as salary, interest income, rental income, and capital gains. If you have any deductions, such as investments under Section<a class="inset-link" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction" target="_blank">80C</a>or<a class="inset-link" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act" target="_blank">80D</a>, you can enter them in the deductions section.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">5</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Enter other details</h3><div class="useOnlineITC_stepDesc">Apart from income and deductions, you need to enter other details such as your age, gender, and residential status. If you have paid any advance tax or self-assessment tax, you can enter those details as well.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">6</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Calculate your tax liability</h3><div class="useOnlineITC_stepDesc">After entering all the details, click on the calculate button. The income tax calculator will automatically calculate your tax liability for the selected assessment year. It will also show you the amount of tax payable and the amount of tax refundable.</div></div></div><div class="useOnlineITC_steps"><div class="useOnlineITC-step"><div class="useOnlineITC_stepText">Step</div><div class="useOnlineITC_number">7</div></div><div class="useOnlineITC-stepContent"><h3 class="useOnlineITC_stepTitle">Save and print the results</h3><div class="useOnlineITC_stepDesc">You can save and print the results of the income tax calculator for future reference. The results will show you the tax liability for each income slab, including the cess and surcharge, if applicable.</div></div></div></div></div></section><section id="understandITS"><div class="container"><h2 class="understandITSTitle">How to Understand Income Tax Slabs?</h2><p class="understandITSDesc">Income tax is a<a class="inset-link" href="https://www.kotaklife.com/insurance-guide/savingstax/what-are-direct-taxes-how-to-avoid-being-overtaxed" target="_blank">direct tax</a>that is levied on the income of individuals and businesses by the government. The tax is calculated based on the income earned by an individual in a financial year. Understanding income tax slabs is crucial as it determines the tax liability of an individual. Most importantly, the basic exemption limit has increased to ₹3 lakh from ₹2.5 lakh. The number of income tax slabs has been reduced from 6 to five.</p><br><p class="understandITSDesc">Let’s now understand some jargon related to income tax slabs.</p><div class="understandITS_steps"><div class="understandITS_img it-setp-1"></div><div class="understandITS-stepContent"><h3 class="understandITS_stepTitle">Income Tax Slabs</h3><div class="understandITS_stepDesc"><a class="inset-link" href="https://www.kotaklife.com/insurance-guide/savingstax/new-income-tax-slabs-in-india" target="_blank">Income tax slabs</a>are the categories in which the government divides the taxable income and applies different tax rates.</div></div></div><div class="understandITS_steps"><div class="understandITS_img it-setp-2"></div><div class="understandITS-stepContent"><h3 class="understandITS_stepTitle">Gross Total Income</h3><div class="understandITS_stepDesc">Gross total income is the total income an individual earns in a financial year from all sources, including salary, business, profession, house property, capital gains, and other sources.</div></div></div><div class="understandITS_steps"><div class="understandITS_img it-setp-3"></div><div class="understandITS-stepContent"><h3 class="understandITS_stepTitle">Taxable Income</h3><div class="understandITS_stepDesc">Taxable income is the income on which an individual is liable to pay tax after claiming deductions and exemptions allowed under the Income Tax Act.</div></div></div><div class="understandITS_steps"><div class="understandITS_img it-setp-4"></div><div class="understandITS-stepContent"><h3 class="understandITS_stepTitle">Tax Liability</h3><div class="understandITS_stepDesc">Tax liability is the amount of tax an individual owes to the government based on their taxable income and the tax rates applicable to their income bracket.</div></div></div></div></section><section id="incomeTaxSlab"><div class="container"><h2 class="incomeTaxSlab">Income Tax Slab</h2><div class="tax-table"><table class="taxTable"><thead class="taxTablehead"><tr><th class="tax-pattern" colspan="2">Old Regime</th></tr><tr class="sub-title"><th class="borderRight" style="font-size:17px!important">Income Tax Slab</th><th class="borderRight" style="font-size:17px!important">Income Tax Rate</th></tr></thead><tbody class="taxTablebody"><tr><td class="borderRight">Up to ₹ 2,50,000</td><td class="borderRight">Nil</td></tr><tr><td class="borderRight">₹ 2,50,001 - ₹ 5,00,000</td><td class="borderRight">5% above ₹ 2,50,000</td></tr><tr><td class="borderRight">₹ 5,00,001 - ₹ 10,00,000</td><td class="borderRight">₹ 12,500 + 20% above ₹ 5,00,000</td></tr><tr><td class="borderRight">Above ₹ 10,00,000</td><td class="borderRight">₹ 1,12,500 + 30% above ₹ 10,00,000</td></tr></tbody></table><table class="taxTable"><thead class="taxTablehead"><tr><th class="tax-pattern" colspan="2">New Regime</th></tr><tr class="sub-title"><th class="borderRight" style="font-size:17px!important">Income Tax Slab</th><th class="borderRight" style="font-size:17px!important">Income Tax Rate</th></tr></thead><tbody class="taxTablebody"><tr><td class="borderRight">Up to ₹ 2,50,000</td><td class="borderRight">Nil</td></tr><tr><td class="borderRight">₹ 2,50,001 - ₹ 5,00,000</td><td class="borderRight">5% above ₹ 2,50,000</td></tr><tr><td class="borderRight">₹ 5,00,001 - ₹ 7,50,000</td><td class="borderRight">₹ 12,500 + 10% above ₹ 5,00,000</td></tr><tr><td class="borderRight">₹ 7,50,001 - ₹ 10,00,000</td><td class="borderRight">₹ 37,500 + 15% above ₹ 7,50,000</td></tr><tr><td class="borderRight">₹ 10,00,001 - ₹ 12,50,000</td><td class="borderRight">₹ 75,000 + 20% above ₹ 10,00,000</td></tr><tr><td class="borderRight">₹ 12,50,001 - ₹ 15,00,000</td><td class="borderRight">₹ 1,25,500 + 25% above ₹ 12,50,000</td></tr><tr><td class="borderRight">Above ₹ 15,00,000</td><td class="borderRight">₹ 1,87,500 + 30% above ₹ 15,00,000</td></tr></tbody></table></div></div></section><section id="taxDeduction"><div class="container"><h2 class="taxDeduction-title">Claims on Tax deductions</h2><p class="taxDeduction-desc"><b>Section 87A:</b>Income below ₹5 lakhs is eligible for a tax rebate of up to ₹12,500.</p><p class="taxDeduction-desc"><b>Section 80CCD (1B):</b>For exemption of up to ₹2 lakhs for money deposited in the National Pension System (NPS).</p><p class="taxDeduction-desc"><b>Section 80C:</b>It permits a maximum annual deduction from the taxpayer's gross income of ₹1.5 lakh. Both individuals and HUFs are eligible to take advantage of this discount. LLPs, corporations, and partnership firms are not eligible for this deduction.</p><p class="taxDeduction-desc"><b>Section 80D:</b>Up to ₹25,000 tax exemption on Medical Insurance Premium bills. The limit rises to ₹50,000 for senior citizens.</p><p class="taxDeduction-desc"><b>Section 80G:</b>Any donations made to charitable organizations are fully exempt from tax calculations.</p><p class="taxDeduction-desc"><b>Section 80E:</b>Interest on education loan enjoys a 100% tax rebate for up to 8 years.</p><p class="taxDeduction-desc"><b>Section 8OTTA/80TTB:</b>Interest income from savings accounts is eligible for tax waivers of up to ₹10,000. For senior citizens, all forms of interest income up to ₹50,000 are fully waivered from tax calculations under Section 8OTTB.</p></div></section><section id="taxLiability"><div class="container"><h2 class="taxLiability-title">How to Calculate the Total Income Tax Liability?</h2><p class="taxLiability-desc">Calculating your total income tax liability can be a daunting task, especially if you are not familiar with the tax laws in your country. However, understanding the basics of how income tax works can help make the process a little easier.</p><br><p class="taxLiability-desc">Take these steps to calculate your total income tax liability.</p><div class="taxLiabilityCards"><div class="taxLiabilityCard"><div class="taxLiability-step"><div class="taxLiability_stepText">Step</div><div class="taxLiability_number">1</div></div><h3 class="taxLiability-subtitle">Determine your taxable income</h3><p class="taxLiability-subdesc">The first step in calculating your income tax liability is to determine your taxable income. This is the amount of income that is subject to taxation. Your taxable income is calculated by subtracting all allowable deductions from your gross income. Allowable deductions may include expenses such as mortgage interest, charitable contributions, and certain business expenses.</p></div><div class="taxLiabilityCard"><div class="taxLiability-step"><div class="taxLiability_stepText">Step</div><div class="taxLiability_number">2</div></div><h3 class="taxLiability-subtitle">Calculate your tax liability</h3><p class="taxLiability-subdesc">Once you have determined your taxable income and tax bracket, you can calculate your tax liability. This is the amount of tax you owe based on your taxable income and tax bracket. The tax liability is calculated by multiplying your taxable income by the tax rate for your tax bracket.</p></div><div class="taxLiabilityCard"><div class="taxLiability-step"><div class="taxLiability_stepText">Step</div><div class="taxLiability_number">3</div></div><h3 class="taxLiability-subtitle">Deduct any tax credits</h3><p class="taxLiability-subdesc">Tax credits are deductions that are subtracted directly from your tax liability. They can reduce your tax liability or increase your tax refund. Some common tax credits include credits for childcare expenses, education expenses, and renewable energy investments. Deduct any tax credits you may be eligible for from your tax liability.</p></div><div class="taxLiabilityCard"><div class="taxLiability-step"><div class="taxLiability_stepText">Step</div><div class="taxLiability_number">4</div></div><h3 class="taxLiability-subtitle">Calculate your total income tax liability</h3><p class="taxLiability-subdesc">Your total income tax liability is the amount of tax you owe after deducting any tax credits from your tax liability. This is the final amount of tax you will owe for the tax year. If you have already paid some tax during the year through paycheck withholding or estimated tax payments, subtract that amount from your total tax liability to determine how much you still owe or how much refund you may expect.</p></div></div></div></section><section id="exemptionIT"><div class="container"><h2 class="exemptionIT-title">Exemptions on Total Income Tax</h2><p class="exemptionIT-desc">Taxation is an integral part of any modern economy, providing governments with the necessary revenue to fund public services and infrastructure. However, tax laws often include exemptions and deductions that allow taxpayers to reduce their overall tax liability. One such concept is exemptions on total income tax, which refers to certain exclusions from the total income of a taxpayer, resulting in a lower taxable income and, consequently, a reduced tax liability. Exemptions on total income tax are typically granted for specific reasons, such as supporting dependents, investing in retirement savings, or promoting economic activities in certain sectors. Understanding the intricacies of exemptions on total income tax can help taxpayers optimize their tax planning strategies and potentially reduce their overall tax burden.</p><h3 class="exemptionIT-subtitle">Section 80C</h3><p class="exemptionIT-subdesc">This is one of the most popular sections under the Income Tax Act, and it allows individuals to claim a deduction of up to ₹1.5 lakhs on their total income tax. This deduction is available for various investments and expenses, including contributions to a provident fund, life insurance premiums, tuition fees paid for children, and investments in certain specified instruments such as<a class="inset-link" href="https://www.kotaklife.com/insurance-guide/government-schemes/what-is-national-savings-certificate" target="_blank">National Savings Certificate (NSC),</a>Public Provident Fund (PPF), Equity Linked Savings Scheme (ELSS), and so on.</p><h3 class="exemptionIT-subtitle">Section 80D</h3><p class="exemptionIT-subdesc">This section allows individuals to claim a deduction of up to ₹25,000 on health insurance premiums paid for themselves, their spouses, and their dependent children. An additional deduction of ₹25,000 is available for health insurance premiums paid for parents, and if the parents are senior citizens, the deduction limit is increased to ₹50,000.</p><h3 class="exemptionIT-subtitle">Section 80E</h3><p class="exemptionIT-subdesc">This section allows individuals to claim a deduction on the interest paid on education loans for themselves, their spouses, and their children. The deduction is available for a maximum of eight years or until the loan is fully repaid, whichever is earlier.</p><h3 class="exemptionIT-subtitle">Section 80G</h3><p class="exemptionIT-subdesc">This section allows individuals to claim a deduction for donations made to specified charitable organizations. The deduction amount varies based on the type of organization and the amount of donation made.</p></div></section><section class="conclusion"><div class="conclusion-bg"><div class="container"><h2 class="conclusion-title">Wrapping Up</h2><p class="conclusion-desc">Income tax calculators are powerful tools that can help individuals and businesses estimate their tax liability. They allow for the easy input of income and expenses and quickly calculate the amount of taxes owed or refunded. These calculators are widely available and can be used to plan for tax payments and budget accordingly. However, it is important to note that income tax calculators are not a substitute for professional tax advice.</p><br><p class="conclusion-desc">Tax laws and regulations can be complex and subject to change, and a tax professional can provide valuable guidance and ensure that taxpayers are taking advantage of all available deductions and credits. Ultimately, income tax calculators are a useful resource, but taxpayers should seek the advice of a qualified professional to ensure they are compliant with tax laws and regulations.</p></div></div></section><section id="comppundFaq"><div class="container"><div class="accordSec"><h2 class="accordTitle">FAQs</h2><div class="accordList"><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>1</span>What is the maximum non-taxable income limit?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>For FY 2023-24, the income tax exemption ceiling is up to ₹7 lakhs under new regime for all persons, HUFs, those under the age of 60, and NRIs.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>2</span>Does everyone have to file their income tax returns?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>All registered taxpayers with taxable income are required to file their income tax forms electronically. However, people over 80 years old who do not get any regular company or professional income may file paper returns.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>3</span>Does the income tax calculator calculate for TDS?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>Yes, the income tax calculator usually takes into account the TDS (Tax Deducted at Source) while calculating your taxable income and the amount of tax you are liable to pay. TDS is a mechanism by which the government collects taxes from individuals or businesses at the source of income, i.e., at the time of payment itself.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>4</span>How can I calculate my Income tax?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>Calculating your income tax can seem overwhelming, but it's actually a straightforward process if you have all the necessary information. Here are the steps you can follow to calculate your income tax</p><ul class="calc-list"><li>Determine your taxable income</li><li>Find your tax bracket</li><li>Calculate your tax liability</li><li>Apply any credits or deductions</li><li>Determine your final tax owed or refund due</li></ul></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>5</span>What are the details required when while e-filing the income tax returns?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>When e-filing your income tax returns, you will need to provide various details and information about your income, deductions, and tax payments. Here are some of the details you will be required to provide:</p><ul class="calc-list"><li>Personal Information</li><li>Income details</li><li>Tax Deductions</li><li>Tax payments</li><li>Bank details</li><li>Form 16/16A</li></ul></div></div></div></div></div></section><section class="term-blog ulip-blogs" id="ulip_blog"><div class="midWrapper"><div class="term-blog"><h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs</h2> <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';
        //GA code Variables
      ?> <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul> <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' load';
        $labelGA  =   'load more';
        //GA code Variables
      ?> <div class="loadmores"><a href="javascript:;" class="link" id="load-more-articles" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})'>Load More</a></div><div class="noRecord"></div><div class="innerLoader"><img src="assets/images/loader.gif" alt="Kotak Loader"></div></div></div></section></div><section class="terms new-terms pt-0" id="terms_conditions"><div class="midWrapper"><button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button><div class="content-col mb-0 tab-align li-disc terms-para"><h3 class="terms-conditions">Disclaimers</h3><div class="disclamier-pera pt-0"><p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p><br><p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale. Ref No : KLI/23-24/E-WEB/467</p><br><br><p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p><p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p><p class="pl-0 mt-10 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website:<a href="https://www.kotaklife.com">https://www.kotaklife.com,</a>|Whatsapp:9321003007 |Toll free No: 1800 209 8800.</p><p class="pl-0 mt-10 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license</p></div></div></div></section></div><input type="hidden" id="pageNo" value="0"> <input type="hidden" id="url" value="<?=base_url()?>"> <input type="hidden" id="sortType" value="recent"> <input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>"> <input type="hidden" id="searchArticle" value=""> <input type="hidden" id="pageType" value="topic"> <input type="hidden" id="topicSlug" value="wealth-creation"><script>var i,acc=document.getElementsByClassName("collapsible");for(i=0;i<acc.length;i++)acc[i].addEventListener("click",function(){this.classList.toggle("active");var e=this.nextElementSibling;"block"===e.style.display?e.style.display="none":e.style.display="block"})</script>