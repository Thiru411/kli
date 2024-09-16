<?php
$actual_link='';
function isMobile()
{
    return preg_match(
        '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',
        $_SERVER['HTTP_USER_AGENT']
    );
}
if (isMobile()) {
    // Do something for only mobile users
} else {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https'
            : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only desktop users
}
?>
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/insurance-plans.css">
<section class="save-breadcrumb newsave">
    <div class="midWrapper">
        <ul class="breadcrumb-ulip">
            <li><a href="https://www.kotaklife.com/">Life Insurance&gt;</a></li>
            <li class="active"><a href="javascript:void(0)">Insurance Plans</a></li>
        </ul>
    </div>
</section>
<section id="insurancePlans" class="newplan">
    <div class="midWrapper">
        <div class="headGrid">
            <div>
                <h1 class="sectionTitle">Life Insurance Plans and Policies</h1>
                <p class="sectionDesc">Insurance is a fundamental aspect of modern life that provides financial protection and peace of mind in the face of unforeseen events and risks. Life Insurance plans and policies serve as a safety net, helping individuals, families, and businesses navigate the uncertainties of life. These financial instruments have evolved over years, adapting to the changing needs of society and the complexities of the modern world.</p>
            </div>
            <div class="headImg"><img src="assets/images/insurance-plans/RKR.png" alt="Insurance Plans"></div>
        </div>
    </div>
</section>
<section id="insuranceplans">
    <div class="fullBg">
        <div class="midWrapper p10">
            <h2 class="insurancePlans-title textCenter">Life Insurance Plans By Kotak Life</h2>
            <ul class="safeguardtabs">
                <li class="tab-link current" data-tab="tab-1">Term Insurance Plans</li>
                <li class="tab-link" data-tab="tab-2">Savings Plan</li>
                <li class="tab-link" data-tab="tab-3">ULIP Plans</li>
                <li class="tab-link" data-tab="tab-4">Retirement Plans</li>
                <li class="tab-link" data-tab="tab-5">Health Plans</li>
            </ul>
            <div id="tab-1" class="safeguardtab-content current">
                <div class="safeguard-protection">
                    <p class="space-plan-custom">Ensuring your family's financial stability, no matter what.</p>
                    <div class="safeguard-cards">
                        <div class="safeguard-card">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Gen2Gen Protect</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Gen2Gen_Protect.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Get Return of Premium</li>
                                <li>Two Plan Options: Life ROP Option and Legacy ROP Option</li>
                                <li>Dual Generation Plan: Cover two generations under one single plan with Transfer of Life Cover under Legacy ROP Option</li>
                                <li>Additional Death Benefit of 5% applicable for Female Lives</li>
                                <li>Enhanced Protection with Riders</li>
                            </ul>
                            <p class="getlife">Get<strong class="red amount">₹1Cr.</strong>Life Cover and</p>
                            <p class="getlife">Return of Premiums of<strong class="red">₹4,03,440</strong>at 65 age on survival</p>
                            <p class="getlife">By just Paying<strong class="red">₹3,362<sup>+</sup></strong>per month for 10 years</p>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect" class="knowMore">Know More</a></div>
                        </div>
                        <div class="safeguard-card">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak e-Term</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Combines features & comprehensive coverage with a high level of protection</li>
                                <li>Customize Protection With Riders</li>
                                <li>Option to Exit at Age 60 years<sup>$</sup></li>
                                <li>Low-cost insurance</li>
                                <li>Offers the benefit of high cover at economical prices</li>
                            </ul>
                            <p class="safeguard-get">Get<strong class="red">₹1Cr.</strong>Life Cover With just<strong>₹17/day^!</strong></p>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/term-insurance/kotak-e-term" class="knowMore">Know More</a></div>
                        </div>
                        <!-- <div class="safeguard-card mh-second">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Protect India</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Offers the younger generation a short-duration sachet life insurance cover</li>
                                <li>Keep increasing your plan as per the requirement</li>
                                <li>Enhance your benefit through accidental death and Hospital benefit</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-protect-india" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-second">
                            <div>
                                <div class="safeguard-flx">
                                    <h4 class="safeguard-plantitle">Kotak Term Plan</h4>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                    <defs>
                                                        <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                            <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                            <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </mask>
                                                        <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                            <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                            <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                        </filter>
                                                        <clipPath id="d63ic">
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g>
                                                        <g>
                                                            <g filter="url(#d63ia)">
                                                                <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                                <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            </g>
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                            </g>
                                                        </g>
                                                    </g>`
                                                </svg></button></a></div>
                                </div>
                                <ul class="safeguard-list">
                                    <li>Pure risk cover plan</li>
                                    <li>Adequate level of financial protection</li>
                                </ul>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-term-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-third">
                            <div>
                                <div class="safeguard-flx">
                                    <h4 class="safeguard-plantitle">Kotak Saral Jeevan Bima Plan</h4>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                    <defs>
                                                        <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                            <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                            <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </mask>
                                                        <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                            <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                            <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                        </filter>
                                                        <clipPath id="d63ic">
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g>
                                                        <g>
                                                            <g filter="url(#d63ia)">
                                                                <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                                <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            </g>
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                            </g>
                                                        </g>
                                                    </g>`
                                                </svg></button></a></div>
                                </div>
                                <ul class="safeguard-list">
                                    <li>Hassle-free life insurance cover</li>
                                    <li>Long-term coverage</li>
                                    <li>Choice of coverage payment term</li>
                                    <li>Special premium rates for female</li>
                                </ul>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-third">
                            <div>
                                <div class="safeguard-flx">
                                    <h4 class="safeguard-plantitle">Kotak Health Maximiser</h4>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                    <defs>
                                                        <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                            <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                            <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </mask>
                                                        <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                            <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                            <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                        </filter>
                                                        <clipPath id="d63ic">
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g>
                                                        <g>
                                                            <g filter="url(#d63ia)">
                                                                <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                                <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            </g>
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                            </g>
                                                        </g>
                                                    </g>`
                                                </svg></button></a></div>
                                </div>
                                <ul class="safeguard-list">
                                    <li>Provides Life cover along with Health Cover
                                    <li>Hassle Free Issuance with Minimal Documentation</li>
                                    <li>Tax Benefits<sup>#</sup>under Sec 80C and 80D</li>
                                    <li>Cashless Transactions in over 7800<sup>+</sup>Network Hospitals**</li>
                                    <li>Flexibility to choose your policy and premium payment terms</li>
                                    <li>Preferred premium rates for female lives</li>
                                    <li>Lifelong coverage irrespective of any claims under the policy</li>
                                </ul>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-health-maximiser" class="knowMore">Know More</a></div>
                        </div> -->
                    </div>
                </div>


                <div class="roww bestsavgsp offline-new  spacing-tab-1">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 newgsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Protect India</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Term Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Saral Jeevan Bima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Health Maximiser</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <!-- <li class="opc6">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Ace Investment</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc7">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Wealth Optima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op2 accelblock offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Protect India</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                        <li>Offers the younger generation a short-duration sachet life insurance cover</li>
                                        <li>Keep increasing your plan as per the requirement  </li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Enhance your benefit through accidental death and Hospital benefit  </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-protect-india" class="kotak-red">Kotak Protect India</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op3 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Term Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                        <li>Pure risk cover plan</li>
                                        <li>Adequate level of financial protection</li>
                                    </ul>
                                </div>
                                <!-- <div class="coll-md-6">
                                    <ul>
                                        <li>Loyalty Additions to enhance fund growth</li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="gspview" title="View Kotak Single Invest Plus">View Kotak Single Invest Plus</a></div> -->
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-term-plan" class="kotak-red">Kotak Term Plan</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op4 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Saral Jeevan Bima Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" title="Kotak Single Invest Advantage" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                        <li>Hassle-free life insurance cover
                                        </li>
                                        <li>Long-term coverage </li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                        <li>Choice of coverage payment term</li>
                                        <li>Special premium rates for female</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima" class="kotak-red">Kotak Saral Jeevan Bima Plan</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op5 offlin-card-height  height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Health Maximiser</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" title="Kotak Platinum Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Provides Life cover along with Health Cover
                                    <li>Hassle Free Issuance with Minimal Documentation</li>
                                    <li>Tax Benefits<sup>#</sup>under Sec 80C and 80D</li>
                                    <li>Cashless Transactions in over 7800<sup>+</sup>Network Hospitals**</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Flexibility to choose your policy and premium payment terms</li>
                                    <li>Preferred premium rates for female lives</li>
                                    <li>Lifelong coverage irrespective of any claims under the policy</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-health-maximiser" class="kotak-red">Kotak Health Maximiser</a></div>

                        </div>
                        
                       
                    </div>
                </div>

                <div  class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
               <span class="onlineplan">Offline plans</span>
               <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Protect India</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Offers the younger generation a short-duration sachet life insurance cover</li>
                                                    <li>Keep increasing your plan as per the requirement  </li>
                                                    <li>Enhance your benefit through accidental death and Hospital benefit  </li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="coll-md-6">
                                                    <ul>
                                                    <li>Income supplement in case of job loss</li>
                                                    <li>Cover against death or disability due to accident</li>
                                                             
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-protect-india" class="kotak-red">Kotak Protect India</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="assured" class="accordion" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Term Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Pure risk cover plan</li>
                                                    <li>Adequate level of financial protection</li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="coll-md-6">
                                                    <ul>
                                                        <li>Partial withdrawals</li>
                                                        <li>Rewards on long-term investment</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-term-plan" class="kotak-red">Kotak Term Plan</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="premier" class="accordion">
                                <p>Kotak Saral Jeevan Bima Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Paris" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc  ">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Hassle-free life insurance cover
                                                     </li>
                                                     <li>Long-term coverage </li>
                                                     <li>Choice of coverage payment term</li>
                                                    <li>Special premium rates for female</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima" class="kotak-red">Kotak Saral Jeevan Bima Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Health Maximiser</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tokyo" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Provides Life cover along with Health Cover
                                                    <li>Hassle Free Issuance with Minimal Documentation</li>
                                                    <li>Tax Benefits<sup>#</sup>under Sec 80C and 80D</li>
                                                    <li>Cashless Transactions in over 7800<sup>+</sup>Network Hospitals**</li>
                                                    <li>Flexibility to choose your policy and premium payment terms</li>
                                                     <li>Preferred premium rates for female lives</li>
                                                     <li>Lifelong coverage irrespective of any claims under the policy</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-health-maximiser" class="kotak-red">Kotak Health Maximiser</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                      
                       
                        
                    </div>
                </div>
               </div>
            </div>
            <div id="tab-2" class="safeguardtab-content">
                <div class="safeguard-protection">
                    <p class="space-plan-custom">Invest for your dreams, ensure your financial goals</p>
                    <div class="safeguard-cards">
                        <div class="safeguard-card mh-savings1">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Assured Savings Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Savings_Plan_Brochure_-_23rd_June_2022.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed<sup>@</sup>yearly additions</li>
                                <li>Guaranteed<sup>@</sup>loyalty addition</li>
                                <li>Tax benefits under section 80C & 10(10d)</li>
                                <li>Life cover</li>
                            </ul>
                            <p class="safeguard-carddesc">Pay<strong>₹10,000<sup>~</sup></strong>per month for 10 years</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p>Get<strong class="amt">₹27.16 Lakh<sup>~</sup></strong>Guaranteed Returns at the end of 20<sup>th</sup>year</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/savings-plan/kotak-assured-savings-plan" class="knowMore">Know More</a></div>
                        </div>
                        <div class="safeguard-card mh-savings1">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Guaranteed Savings Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Guaranteed_Savings_Plan_Brochure3.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed<sup>@</sup>additions</li>
                                <li>Option for limited premium payment term</li>
                                <li>Guaranteed<sup>@</sup>loyalty addition</li>
                            </ul>
                            
                            <p class="safeguard-carddesc">Pay<strong>₹10,000<sup>1</sup></strong>per month for 10 years</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p>Get<strong class="amt">₹27.21<sup>1</sup>Lakh</strong>Guaranteed Returns at the end of 20<sup>th</sup>year</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/savings-plan/kotak-guaranteed-savings-plan-online" class="knowMore">Know More</a></div>
                        </div>
                        <div class="safeguard-card mh-savings2">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Guaranteed Fortune Builder</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Guaranteed_Fortune_Builder_Brochure_Online.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Life cover for financial security of your family</li>
                                <li>Option to avail guaranteed<sup>@</sup>income</li>
                                <li>Option to secure your child's future</li>
                                <li>Return of premium option available</li>
                                <li>Premium break for females</li>
                            </ul>
                            <p class="safeguard-carddesc">Pay<strong>₹10,000<sup>2</sup></strong>per month for 10 years</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p>Get<strong class="amt">₹17,948<sup>2</sup></strong>per month for 15 years</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/savings-plan/kotak-guaranteed-fortune-builder" class="knowMore">Know More</a></div>
                        </div>
                        <!-- <div class="safeguard-card mh-savings2">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Get Assured Income Now</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-GAIN-Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Life Cover till 85 years of age</li>
                                <li>3 Plan Options - Early Income, Paid-Up Addition and Premium Saver.</li>
                                <li>Early Income Payout</li>
                                <li>6 Optional Riders</li>
                                <li>Additional Benefit with the same premium for Female Life</li>
                                <li>Additional benefit in case premium is paid through ECS/Auto Debit option</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/savings-and-investments-plans/kotak-get-assured-income-now" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Assured Income Accelerator</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-assured-income-accelerator-brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>A non-participating life insurance plan</li>
                                <li>Income boosters to increase yearly returns</li>
                                <li>Guaranteed<sup>@</sup>yearly income during the payout phase</li>
                                <li>Death benefit independent of the income paid</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-assured-income-accelerator" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Premier Endowment Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-endowment-plan-brochure-1.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed<sup>@</sup>additions</li>
                                <li>Additional Protection through optional riders</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-endowment-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Premier Moneyback Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Premier-Moneyback-Plan-Savings-and-Investment-Plan.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Payouts at regular intervals</li>
                                <li>Bonus* from the first year onwards</li>
                                <li>lump-sum amount at maturity</li>
                                <li>Accidental death benefit</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-moneyback-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Classic Endowment Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-classic-endowment-plan-brochure-1.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Yearly bonuses* from 1st year along with maturity benefits</li>
                                <li>Choice of policy term options</li>
                                <li>Discounts on premium with high sum assured</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-classic-endowment-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak SmartLife Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-smartlife-plan-brochure-11.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>A limited pay non- linked participating plan</li>
                                <li>Offers protection up to the age of 75 years</li>
                                <li>Choice of bonus* options</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-smartlife-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Premier Income Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-income-plan-brochure-1.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed<sup>@</sup>Annual / Monthly Income</li>
                                <li>Enhanced life coverage on higher premiums and for females</li>
                                <li>Bonuses* throughout the policy period</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-income-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">POS Bachat Bima Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-poa-bachat-bima-brochure-18-may-2020-1.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed<sup>@</sup>Yearly Additions & Guaranteed<sup>@</sup>Loyalty Addition</li>
                                <li>Two plan options - Life and Life Plus</li>
                                <li>Double life coverage on accidental death with Life Plus option</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-pos-bachat-bima" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Fortune Maximiser</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-fortune-maximiser.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Multiple plan options</li>
                                <li>Multiple bonus* payment options</li>
                                <li>Long life cover till 85 years of age</li>
                                <li>Optional rider coverage</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-fortune-maximiser" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings4">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Sampoorna Bima Micro-Insurance Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-sampoorn-bima-micro-insurance-plan-brochure-4-february-2021.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Short-term plan for 5 years</li>
                                <li>Fixed premium of ₹200 only</li>
                                <li>Guaranteed<sup>@</sup>Payout – Both maturity benefit and death benefit</li>
                                <li>No medicals</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-sampoorn-bima-micro-insurance-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings4">
                            <div class="safeguard-flx">
                                <h2 class="safeguard-plantitle">Kotak Premier Life Plan</h2>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Premier_Life_Plan_-_Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Protection up to the age of 99 years</li>
                                <li>Receive Bonus* payouts or accumulate under the policy</li>
                                <li>Enhance protection through optional riders</li>
                                <li>Tax benefits u/s 80C and 10(10D)</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-life-plan" class="knowMore">Know More</a></div>
                        </div> -->
                    </div>
                </div>

                <div class="roww bestsavgsp offline-new spacing-tab-2">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 newgsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Get Assured Income Now</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Assured Income Accelerator</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Premier Endowment Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Premier Moneyback Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc6">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Classic Endowment Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc7">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak SmartLife Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc8">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Premier Income Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc9">
                                <div class="d-flex align-center accordioncard">
                                    <div>POS Bachat Bima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc10">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Fortune Maximiser</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc11">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Sampoorna Bima Micro-Insurance Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc12">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Premier Life Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op2 accelblock offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Get Assured Income Now</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-GAIN-Brochure.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Life Cover till 85 years of age</li>
                                     <li>3 Plan Options - Early Income, Paid-Up Addition and Premium Saver.</li>
                                     <li>Early Income Payout</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                   
                                        <li>6 Optional Riders</li>
                                        <li>Additional Benefit with the same premium for Female Life</li>
                                        <li>Additional benefit in case premium is paid through ECS/Auto Debit option</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/savings-and-investments-plans/kotak-get-assured-income-now" class="kotak-red">Kotak Get Assured Income Now</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op3 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Assured Income Accelerator</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-assured-income-accelerator-brochure.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>A non-participating life insurance plan</li>
                                    <li>Income boosters to increase yearly returns</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                   
                                     <li>Guaranteed<sup>@</sup>yearly income during the payout phase</li>
                                     <li>Death benefit independent of the income paid</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-assured-income-accelerator" class="kotak-red">Kotak Assured Income Accelerator</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op4 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Premier Endowment Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-endowment-plan-brochure-1.pdf" title="Kotak Single Invest Advantage" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Guaranteed<sup>@</sup>additions</li>
                                    <li>Additional Protection through optional riders</li>
                                    </ul>
                                </div>
                                <!-- <div class="coll-md-6">
                                    <ul class="list-none">
                                        <li>Choice of coverage payment term</li>
                                        <li>Special premium rates for female</li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-endowment-plan" class="kotak-red">Kotak Premier Endowment Plan</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op5 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Premier Moneyback Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Premier-Moneyback-Plan-Savings-and-Investment-Plan.pdf" title="Kotak Platinum Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Payouts at regular intervals</li>
                                   <li>Bonus* from the first year onwards</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                   
                                <li>lump-sum amount at maturity</li>
                                <li>Accidental death benefit</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-moneyback-plan" class="kotak-red">Kotak Premier Moneyback Plan</a></div>

                        </div>
                         <div class="kotaksavcard accelcard op6 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Classic Endowment Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-classic-endowment-plan-brochure-1.pdf" title="Kotak Ace Investment" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Yearly bonuses* from 1st year along with maturity benefits</li>
                                <li>Choice of policy term options</li>
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Discounts on premium with high sum assured</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-classic-endowment-plan" class="kotak-red">Kotak Classic Endowment Plan</a></div>

                        </div> 
                        <div class="kotaksavcard accelcard op7  offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak SmartLife Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-smartlife-plan-brochure-11.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>A limited pay non- linked participating plan</li>
                                    <li>Offers protection up to the age of 75 years</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Choice of bonus* options</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-smartlife-plan" class="kotak-red">Kotak SmartLife Plan</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op8  offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Premier Income Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-income-plan-brochure-1.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Guaranteed<sup>@</sup>Annual / Monthly Income</li>
                                <li>Enhanced life coverage on higher premiums and for females</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Bonuses* throughout the policy period</li>


                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-income-plan" class="kotak-red">Kotak Premier Income Plan</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op9  offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">POS Bachat Bima Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-poa-bachat-bima-brochure-18-may-2020-1.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Guaranteed<sup>@</sup>Yearly Additions & Guaranteed<sup>@</sup>Loyalty Addition</li>
                                <li>Two plan options - Life and Life Plus</li>
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Double life coverage on accidental death with Life Plus option</li>


                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-pos-bachat-bima" class="kotak-red">POS Bachat Bima Plan</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op10  offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Fortune Maximiser</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-fortune-maximiser.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Multiple plan options</li>
                                <li>Multiple bonus* payment options</li>
                                
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Long life cover till 85 years of age</li>
                                  <li>Optional rider coverage</li>


                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-fortune-maximiser" class="kotak-red">Kotak Fortune Maximiser</a></div>



                        </div>
                        <div class="kotaksavcard accelcard op11 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Sampoorna Bima Micro-Insurance Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-sampoorn-bima-micro-insurance-plan-brochure-4-february-2021.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Short-term plan for 5 years</li>
                                <li>Fixed premium of ₹200 only</li>
                              
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Guaranteed<sup>@</sup>Payout – Both maturity benefit and death benefit</li>
                                    <li>No medicals</li>


                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-sampoorn-bima-micro-insurance-plan" class="kotak-red">Kotak Sampoorna Bima Micro-Insurance Plan</a></div>




                        </div>
                        <div class="kotaksavcard accelcard op12 offlin-card-height op-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Premier Life Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Premier_Life_Plan_-_Brochure.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Protection up to the age of 99 years</li>
                                <li>Receive Bonus* payouts or accumulate under the policy</li>
                               
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Enhance protection through optional riders</li>
                                    <li>Tax benefits u/s 80C and 10(10D)</li>


                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-life-plan" class="kotak-red">Kotak Premier Life Pla</a></div>





                        </div>
                    </div>
                </div>


                <div  class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
               <span class="onlineplan">Offline planS</span>
               <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">


                       
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Get Assured Income Now</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Life Cover till 85 years of age</li>
                                                    <li>3 Plan Options - Early Income, Paid-Up Addition and Premium Saver.</li>
                                                    <li>Early Income Payout</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>6 Optional Riders</li>
                                                        <li>Additional Benefit with the same premium for Female Life</li>
                                                        <li>Additional benefit in case premium is paid through ECS/Auto Debit option</li>
                                                             
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-GAIN-Brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/savings-and-investments-plans/kotak-get-assured-income-now" class="kotak-red">Kotak Get Assured Income Now</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="assured" class="accordion" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Assured Income Accelerator</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>A non-participating life insurance plan</li>
                                                    <li>Income boosters to increase yearly returns</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed<sup>@</sup>yearly income during the payout phase</li>
                                                    <li>Death benefit independent of the income paid</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-assured-income-accelerator-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-assured-income-accelerator" class="kotak-red">Kotak Assured Income Accelerator</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="premier" class="accordion">
                                <p>Kotak Premier Endowment Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Paris" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed<sup>@</sup>additions</li>
                                                    <li>Additional Protection through optional riders</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-endowment-plan-brochure-1.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-endowment-plan" class="kotak-red">Kotak Premier Endowment Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Premier Moneyback Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tokyo" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Payouts at regular intervals</li>
                                                    <li>Bonus* from the first year onwards</li>
                                                    <li>lump-sum amount at maturity</li>
                                                    <li>Accidental death benefit</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Premier-Moneyback-Plan-Savings-and-Investment-Plan.pdf" download="Brochure"></a></div>
                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview">View Kotak Single Invest Advantage Plan</a></div> -->
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-moneyback-plan" class="kotak-red">Kotak Premier Moneyback Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="accordion" class="accordion">
                                <p>Kotak SmartLife Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="four" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>A limited pay non- linked participating plan</li>
                                                    <li>Offers protection up to the age of 75 years</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Choice of bonus* options</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-smartlife-plan-brochure-11.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-smartlife-plan" class="kotak-red">Kotak SmartLife Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Classic Endowment Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Yearly bonuses* from 1st year along with maturity benefits</li>
                                                    <li>Choice of policy term options</li>
                              
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Discounts on premium with high sum assured</li>

                                                     </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-classic-endowment-plan-brochure-1.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-classic-endowment-plan" class="kotak-red">Kotak Classic Endowment Plan</a></div>





                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="smartlife" class="accordion">
                                <p>Kotak Premier Income Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="five" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed<sup>@</sup>Annual / Monthly Income</li>
                                                    <li>Enhanced life coverage on higher premiums and for females</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Bonuses* throughout the policy period</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-premier-income-plan-brochure-1.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-income-plan" class="kotak-red">Kotak Premier Income Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>POS Bachat Bima Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed<sup>@</sup>Yearly Additions & Guaranteed<sup>@</sup>Loyalty Addition</li>
                                                    <li>Two plan options - Life and Life Plus</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Double life coverage on accidental death with Life Plus option</li>                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-poa-bachat-bima-brochure-18-may-2020-1.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-pos-bachat-bima" class="kotak-red">POS Bachat Bima Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Fortune Maximiser</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                      <li>Multiple plan options</li>
                                                      <li>Multiple bonus* payment options</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Long life cover till 85 years of age</li>
                                                     <li>Optional rider coverage</li>
                                                     </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-fortune-maximiser.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-fortune-maximiser" class="kotak-red">Kotak Fortune Maximiser</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Sampoorna Bima Micro-Insurance Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Short-term plan for 5 years</li>
                                                    <li>Fixed premium of ₹200 only</li>
                              
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed<sup>@</sup>Payout – Both maturity benefit and death benefit</li>
                                                    <li>No medicals</li>

                                                     </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-sampoorn-bima-micro-insurance-plan-brochure-4-february-2021.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-sampoorn-bima-micro-insurance-plan" class="kotak-red">Kotak Sampoorna Bima Micro-Insurance Plan</a></div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Premier Life Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Protection up to the age of 99 years</li>
                                                    <li>Receive Bonus* payouts or accumulate under the policy</li>
                               
                              
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Enhance protection through optional riders</li>
                                                       <li>Tax benefits u/s 80C and 10(10D)</li>

                                                     </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Premier_Life_Plan_-_Brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/savings-plan/kotak-premier-life-plan" class="kotak-red">Kotak Premier Life Plan</a></div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            <div id="tab-3" class="safeguardtab-content">
                <div class="safeguard-protection">
                    <p class="space-plan-custom"><b>“IN THIS POLICY, THE INVESTMENT RISK IN INVESTMENT PORTFOLIO IS BORNE BY THE POLICYHOLDER”</b>Get the advantage of Investments along with Insurance.</p>
                    <div class="safeguard-cards">
                        <div class="safeguard-card prelative">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak e-Invest</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/assets/brochure/Kotak_e-Invest_-_Brochure1.PDF" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Return of Mortality Charges</li>
                                <li>Enhanced Protection with riders</li>
                                <li>Multiple Plan Options</li>
                                <li>Zero Premium Allocation Charges</li>
                                <li>Tax Savings</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p class="safeguard-carddesc">Pay<strong>₹1,00,000<sup>3</sup></strong>per month for 20 years</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p class="flexPayGet">Get<span class="amt">₹41.22 Lakh<sup>3</sup></span></p>
                                    <p>@8%<sup>#</sup>p.a. at the end of 20<sup>th</sup>year</p>
                                </div>
                                <div class="safeguard-get">
                                    <p class="flexPayGet">Get<span class="amt">₹26.43 Lakh<sup>3</sup></span></p>
                                    <p>@4%<sup>#</sup>p.a. at the end of 20<sup>th</sup>year</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/ulip-plans/kotak-e-invest" class="knowMore">Know More</a></div>
                        </div>
                        <div class="safeguard-card prelative">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak T.U.L.I.P</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>High Sum assured multiple for higher life cover</li>
                                <li>2X return of premium allocation charges</li>
                                <li>Upto 3X return of mortality charges</li>
                                <li>Loyalty additions</li>
                                <li>Flexibility to choose a short or long premium payment term</li>
                                <li>Multiple investment strategies</li>
                            </ul>
                            <p class="safeguard-carddesc">Pay<strong>₹1,00,000<sup>4</sup></strong>per month</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p class="flexPayGet">Get<span class="amt">₹52.87 Lakh<sup>4</sup></span></p>
                                    <p>@8%<sup>#</sup>p.a.</p>
                                </div>
                                <div class="safeguard-get">
                                    <p class="flexPayGet">Get<span class="amt">₹18.91 Lakh<sup>4</sup></span></p>
                                    <p>@4%<sup>#</sup>p.a.</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/ulip-plans/kotak-tulip" class="knowMore">Know More</a></div>
                        </div>
                        <!-- <div class="safeguard-card mh-savings4 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Invest Maxima</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Zero premium allocation charges</li>
                                <li>Choice of portfolio strategies and fund types</li>
                                <li>A variety of policy term and premium payment terms are available.</li>
                                <li>Partial withdrawals</li>
                                <li>Rewards on long-term investment</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings4 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Single Invest Plus</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Single premium policy</li>
                                <li>Joint life cover for two family members</li>
                                <li>Loyalty additions after the 10th policy year (for a 10-year term) and the 15th year (for 15-year tenure)</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Single Invest Advantage</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>One-time investment</li>
                                <li>Choice of 3 investment strategies</li>
                                <li>Loyalty Additions to give boost to your wealth</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Platinum</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Choice of Three fund-management strategies</li>
                                <li>Survival units to enhance your fund value</li>
                                <li>Limited premium payment term</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Ace Investment</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Choice of three investment strategies</li>
                                <li>Flexibility to add Top-up premium</li>
                                <li>Multiple premium payment period options</li>
                                <li>Option to make partial withdrawal</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card mh-savings3 prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Wealth Optima Plan</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Choice of two investment strategies</li>
                                <li>Options to be covered till 99 years</li>
                                <li>Enhances fund growth through Yearly Additions Post Lock-in period</li>
                                <li>Boosts long term savings through Wealth Boosters</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="knowMore">Know More</a></div>
                        </div> -->
                    </div>
                </div>
                <div class="roww bestsavgsp offline-new spacing-tab-3">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 newgsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Invest Maxima</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Plus</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Advantage</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Platinum</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc6">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Ace Investment</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc7">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Wealth Optima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op2 accelblock offlin-card-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Invest Maxima</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Zero premium allocation charges</li>
                                <li>Choice of portfolio strategies and fund types</li>
                                <li>A variety of policy term and premium payment terms are available.</li>
                               
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Partial withdrawals</li>
                                    <li>Rewards on long-term investment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="kotak-red">Kotak Invest Maxima</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op3 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Single Invest Plus</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Single premium policy</li>
                                    <li>Joint life cover for two family members</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Loyalty additions after the 10th policy year (for a 10-year term) and the 15th year (for 15-year tenure)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="kotak-red">Kotak Single Invest Plus</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op4 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Single Invest Advantage</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" title="Kotak Single Invest Advantage" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>One-time investment</li>
                                <li>Choice of 3 investment strategies</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                       
                                    <li>Loyalty Additions to give boost to your wealth</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="kotak-red">Kotak Single Invest Advantage</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op5 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Platinum</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Kotak Platinum Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Choice of Three fund-management strategies</li>
                                <li>Survival units to enhance your fund value</li>
                               
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Limited premium payment term</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="kotak-red">Kotak Platinum</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op6 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Ace Investment</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="Kotak Ace Investment" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Choice of three investment strategies</li>
                                <li>Flexibility to add Top-up premium</li>
                                
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Multiple premium payment period options</li>
                                    <li>Option to make partial withdrawal</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="kotak-red">Kotak Ace Investment</a></div>
                        </div> 
                        <div class="kotaksavcard accelcard op7 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Wealth Optima Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Choice of two investment strategies</li>
                                <li>Options to be covered till 99 years</li>
                               
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Enhances fund growth through Yearly Additions Post Lock-in period</li>
                                    <li>Boosts long term savings through Wealth Boosters</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="kotak-red">Kotak Wealth Optima Plan</a></div>
                        </div>
                    </div>
                </div>


                <div  class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
               <span class="onlineplan">Offline plans</span>
               <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Invest Maxima</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Zero premium allocation charges</li>
                                                    <li>Choice of portfolio strategies and fund types</li>
                                                    <li>A variety of policy term and premium payment terms are available.</li>
                               
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Partial withdrawals</li>
                                                    <li>Rewards on long-term investment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="kotak-red">Kotak Invest Maxima</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="assured" class="accordion" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Single Invest Plus</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Single premium policy</li>
                                                    <li>Joint life cover for two family members</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Loyalty additions after the 10th policy year (for a 10-year term) and the 15th year (for 15-year tenure)</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="kotak-red">Kotak Single Invest Plus</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="premier" class="accordion">
                                <p>Kotak Single Invest Advantage</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Paris" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>One-time investment</li>
                                                    <li>Choice of 3 investment strategies</li>
                                                    <li>Loyalty Additions to give boost to your wealth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="kotak-red">Kotak Single Invest Advantage</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Platinum</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tokyo" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Choice of Three fund-management strategies</li>
                                                    <li>Survival units to enhance your fund value</li>
                                                    <li>Limited premium payment term</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview">View Kotak Single Invest Advantage Plan</a></div> -->
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="kotak-red">Kotak Platinum</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="accordion" class="accordion">
                                <p>Kotak Ace Investment</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="four" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Choice of three investment strategies</li>
                                                    <li>Flexibility to add Top-up premium</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Multiple premium payment period options</li>
                                                    <li>Option to make partial withdrawal</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="knowMore">Know More</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="smartlife" class="accordion">
                                <p>Kotak Wealth Optima Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="five" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Choice of two investment strategies</li>
                                                    <li>Options to be covered till 99 years</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Enhances fund growth through Yearly Additions Post Lock-in period</li>
                                                    <li>Boosts long term savings through Wealth Boosters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="kotak-red">Kotak Wealth Optima Plan</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
               </div>





            </div>
            <div id="tab-4" class="safeguardtab-content ">
                <div class="safeguard-protection">
                    <p class="space-plan-custom">Secure investment for a financially-secured tomorrow.</p>
                    <div class="safeguard-cards">
                        <div class="safeguard-card prelative">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Lifetime Income Plan</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-lifetime-income-plan-brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Post-retirement provides regular payouts</li>
                                <li>Offers a wide range of income options with six annuity options</li>
                                <li>Allows a range of four annuity payout frequencies</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p class="safeguard-carddesc">Pay<strong>₹1,000,000</strong>as single pay<sup>7</sup></p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p class="flexPayGet">Get<span class="amt">68,470/year</span>as annuity</p>
                                    <p class="safeguard-carddesc">&<strong>₹10,00,000</strong>in cashback to the nominee on death</p>
                                </div>
                            </div>
                            <div class="safeguard-btns">
                                <!-- <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a> -->
                            <a href="https://www.kotaklife.com/online-plans/retirement-pension-plans/kotak-lifetime-income-plan" class="knowMore">Know More</a></div>
                        </div>
                        <div class="safeguard-card prelative">
                            <p class="onlineTag">Online plan</p>
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Assured Pension</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Choice of annuity options: Immediate or Deferred</li>
                                <li>Higher Annuity rates for the higher purchase price</li>
                                <li>Issued annuity rates are guaranteed for lifetime</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p class="safeguard-carddesc">Pay<strong>₹5,00,0006<sup>6</sup></strong>per year for 10 years</p>
                            <div class="safeguard-payget">
                                <div class="safeguard-pay">
                                    <p class="flexPayGet">Get<span class="amt">₹4,17,5006<sup>6</sup></span>for lifetime</p>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=insurance_plans" class="categoryBtn">Buy Online</a><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-assured-pension" class="knowMore">Know More</a></div>
                        </div>
                        <!-- <div class="safeguard-card prelative">
                            <div class="safeguard-flx">
                                <h4 class="safeguard-plantitle">Kotak Premier Pension Plan</h4>
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                <defs>
                                                    <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                        <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                        <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </mask>
                                                    <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                        <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                    </filter>
                                                    <clipPath id="d63ic">
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g>
                                                        <g filter="url(#d63ia)">
                                                            <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                            <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </g>
                                                        <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                        </g>
                                                    </g>
                                                </g>`
                                            </svg></button></a></div>
                            </div>
                            <ul class="safeguard-list">
                                <li>Guaranteed Additions in the first 5 policy years</li>
                                <li>Bonuses* will start accruing from the 6th policy year.</li>
                                <li>Assured benefit of 105% of the total premiums paid on death or vesting.</li>
                                <li>Two riders to further boost your protection – Kotak Accidental Death Benefit Rider and Kotak Permanent Disability Benefit Rider.</li>
                            </ul>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-premier-pension-plan" class="knowMore">Know More</a></div>
                        </div> -->
                        <!-- <div class="safeguard-card prelative">
                            <div>
                                <div class="safeguard-flx">
                                    <h4 class="safeguard-plantitle">Kotak Saral Pension</h4>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-pension-brochure-26-july-2021-11.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                    <defs>
                                                        <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                            <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                            <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </mask>
                                                        <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                            <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                            <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                        </filter>
                                                        <clipPath id="d63ic">
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g>
                                                        <g>
                                                            <g filter="url(#d63ia)">
                                                                <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                                <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            </g>
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                            </g>
                                                        </g>
                                                    </g>`
                                                </svg></button></a></div>
                                </div>
                                <ul class="safeguard-list">
                                    <li>Issued Annuity rates are guaranteed for a lifetime.</li>
                                    <li>Life Annuity with Return of 100% of purchase price</li>
                                </ul>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-saral-pension" class="knowMore">Know More</a></div>
                        </div> -->
                    </div>
                </div>

                <div class="roww bestsavgsp offline-new spacing-tab-4">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 newgsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Premier Pension Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Saral Pension</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                           
                           
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op2 accelblock offlin-card-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Premier Pension Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Guaranteed Additions in the first 5 policy years</li>
                                <li>Bonuses* will start accruing from the 6th policy year.</li>
                              
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Assured benefit of 105% of the total premiums paid on death or vesting.</li>
                                    <li>Two riders to further boost your protection – Kotak Accidental Death Benefit Rider and Kotak Permanent Disability Benefit Rider.</li>
                               
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-premier-pension-plan" class="kotak-red">Kotak Premier Pension Plan</a></div>


                        </div>
                        <div class="kotaksavcard accelcard op3 offlin-card-height height-acc">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Saral Pension</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-pension-brochure-26-july-2021-11.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Issued Annuity rates are guaranteed for a lifetime.</li>
                                    <li>Life Annuity with Return of 100% of purchase price
                                    </li>
                                    </ul>
                                </div>
                                <!-- <div class="coll-md-6">
                                    <ul class="list-none">
                                    <li>Loyalty additions after the 10th policy year (for a 10-year term) and the 15th year (for 15-year tenure)</li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-saral-pension" class="kotak-red">Kotak Saral Pension</a></div>


                        </div>
                       
                        
                       
                       
                    </div>
                </div>


                <div  class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
               <span class="onlineplan">Offline plans</span>
               <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Premier Pension Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Guaranteed Additions in the first 5 policy years</li>
                                                    <li>Bonuses* will start accruing from the 6th policy year.</li>
                              
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Assured benefit of 105% of the total premiums paid on death or vesting.</li>
                                                      <li>Two riders to further boost your protection – Kotak Accidental Death Benefit Rider and Kotak Permanent Disability Benefit Rider.</li>
                               
                                                             
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-premier-pension-plan" class="kotak-red">Kotak Premier Pension Plan</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="assured" class="accordion" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Saral Pension</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Issued Annuity rates are guaranteed for a lifetime.</li>
                                                      <li>Life Annuity with Return of 100% of purchase price
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="coll-md-6">
                                                    <ul>
                                                        <li>Partial withdrawals</li>
                                                        <li>Rewards on long-term investment</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-pension-brochure-26-july-2021-11.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/retirement-plans/kotak-saral-pension" class="kotak-red">Kotak Saral Pension</a></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                        
                        
                       
                    </div>
                </div>
               </div>
            </div>
            <div id="tab-5" class="safeguardtab-content">
                <div class="safeguard-protection">
                    <p class="space-plan-custom">Your safety net in the face of medical uncertainties.</p>
                    <div class="safeguard-cards">
                        <div class="safeguard-card prelative">
                            <div>
                                <div class="safeguard-flx">
                                    <h4 class="safeguard-plantitle">Kotak Health Shield</h4>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakHealthShieldBrochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" foxified="">
                                                    <defs>
                                                        <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                            <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                            <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </mask>
                                                        <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                            <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feOffset>
                                                            <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></feGaussianBlur>
                                                        </filter>
                                                        <clipPath id="d63ic">
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                        </clipPath>
                                                    </defs>
                                                    <g>
                                                        <g>
                                                            <g filter="url(#d63ia)">
                                                                <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                                <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            </g>
                                                            <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                            <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                            </g>
                                                        </g>
                                                    </g>`
                                                </svg></button></a></div>
                                </div>
                                <ul class="safeguard-list">
                                    <li>Lump-sum payouts on the diagnosis of critical illnesses</li>
                                    <li>Ease of claim disbursal</li>
                                    <li>Income supplement in case of job loss</li>
                                    <li>Cover against death or disability due to accident</li>
                                </ul>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/health-plans/kotak-health-shield" class="knowMore">Know More</a></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="roww bestsavgsp offline-new">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 newgsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Health Shield</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            
                           
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op2 accelblock offlin-card-height">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel " style="color:#036!important;font-size:28px!important">Kotak Health Shield/h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakHealthShieldBrochure.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Lump-sum payouts on the diagnosis of critical illnesses</li>
                                    <li>Ease of claim disbursal</li>
                                   
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul class=" list-none">
                                    <li>Income supplement in case of job loss</li>
                                    <li>Cover against death or disability due to accident</li>
                                                             
                                    </ul>
                                </div>
                            </div>
                            <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/health-plans/kotak-health-shield" class="knowMore">Know More</a></div>


                        </div>
                      
                       
                        
                       
                       
                    </div>
                </div> -->

               <!-- <div  class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
               <span class="onlineplan">Offline plans</span>
               <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">Kotak Health Shield</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Lump-sum payouts on the diagnosis of critical illnesses</li>
                                                    <li>Ease of claim disbursal</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Income supplement in case of job loss</li>
                                                    <li>Cover against death or disability due to accident</li>
                                                             
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakHealthShieldBrochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class="safeguard-btns"><a href="https://www.kotaklife.com/insurance-plans/health-plans/kotak-health-shield" class="knowMore">Know More</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                      
                       
                     
                       
                       
                       
                    </div>
                </div>
               </div> -->
            </div>
        </div>
    </div>
</section>
<section id="tableofContent">
    <div class="midWrapper"><span class="tocText">Table of Contents</span>
        <div class="contenttable show-more-height">
            <div><a href="<?php echo $actual_link ?>#whyChooseLifeInsurancePlans" class="tocContent"><span>Why Choose Life Insurance Plans?</span></a><a href="<?php echo $actual_link ?>#whoCanBuyLIP" class="tocContent"><span>Who Can Purchase a Life Insurance Policy?</span></a><a href="<?php echo $actual_link ?>#howToChooseBestLIC" class="tocContent"><span>How to Choose the Best Life Insurance Company?</span></a><a href="<?php echo $actual_link ?>#whyBuyPolicy" class="tocContent"><span>Why Buy a Life Insurance Policy Online?</span></a><a href="<?php echo $actual_link ?>#tipsToAvoidClaim" class="tocContent"><span>Tips to Avoid Life Insurance Claim Rejection</span></a><a href="<?php echo $actual_link ?>#howToSaveTax" class="tocContent"><span>How do You Save Tax with Life Insurance Plans?</span></a><a href="<?php echo $actual_link ?>#howWillFamilyReceive" class="tocContent"><span>How Will Your Family Receive the Life Insurance Claim Money?</span></a><a href="<?php echo $actual_link ?>#LIPTerms" class="tocContent"><span>Life Insurance Policy Important Terms</span></a><a href="<?php echo $actual_link ?>#diffBtnSection" class="tocContent"><span>Difference Between Life Insurance, General Insurance, and Health <span class="d-block"> Insurance</span></span></a></div>
            <div><a href="<?php echo $actual_link ?>#whyChooseLifeInsurancePlans" class="tocContent"><span>What is a Life Insurance Policy?</span></a><a href="<?php echo $actual_link ?>#benefitsOfLIP" class="tocContent"><span>Benefits of Having a Life Insurance Policy</span></a><a href="<?php echo $actual_link ?>#typeOfLifeInsurance" class="tocContent"><span>Types of Life Insurance Plans</span></a><a href="<?php echo $actual_link ?>#understandingLifeInsuranceCA" class="tocContent"><span>Understanding the Life Insurance Coverage Amount</span></a><a href="<?php echo $actual_link ?>#documentReqd" class="tocContent"><span>Documents Required to Get Life Insurance Plans</span></a><a href="<?php echo $actual_link ?>#howCanYouPayLIP" class="tocContent"><span>How Can You Pay for Life Insurance Policy?</span></a><a href="<?php echo $actual_link ?>#whichLIPSuitsYou" class="tocContent"><span>Which Life Insurance Plan Suits Your Need?</span></a><a href="<?php echo $actual_link ?>#faqLIP" class="tocContent"><span>FAQs on Life Insurance Plans</span></a></div><a id="readMoreIP" class="tocReadMore">Read More</a>
        </div>
    </div>
</section>
<section id="whyChooseLifeInsurancePlans">
    <div class="fullBg">
        <div class="midWrapper">
            <div class="whyChoose-grid">
                <div><img class="whyChooseimg" src="assets/images/insurance-plans/whyChooseLIP.svg" alt="Why Choose Life Insurance Plans?">
                    <h2 class="insurancePlans-title">Why Choose Life Insurance Plans?</h2>
                    <p class="insurancePlans-desc">Choosing to invest in a life insurance policy is a proactive and responsible decision that provides financial security and peace of mind for you and your loved ones. In this ever-changing world, where the future is uncertain, having a reliable life insurance plan in place is a prudent choice.</p>
                </div>
                <div><img class="whyChooseimg" src="assets/images/insurance-plans/WhatisLIP.svg" alt="What is a Life Insurance Policy?">
                    <h2 class="insurancePlans-title">What is a Life Insurance Policy?</h2>
                    <p class="insurancePlans-desc">A life insurance policy is a contract that pays money to your loved ones when you pass away, helping them financially after your death. This financial safety net ensures that your loved ones can maintain their quality of life, pay off debts, cover living expenses, and achieve their long-term goals even in your absence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="typeOfLifeInsurance">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Types of Life Insurance Plans</h2>
        <p class="insurancePlans-desc">There are five primary categories of life insurance plans:</p>
        <div class="typeOfLifeInsurance-flex"><img src="assets/images/insurance-plans/typeOfLifeInsurance.svg" alt="Term Insurance Plans">
            <div>
                <h3 class="insurancePlans-subTitle">Term Insurance Plans</h3>
                <p class="insurancePlans-desc">Term life insurance is a cost-effective option that offers coverage for a specified period. It provides a death benefit to your beneficiaries if you pass away during the policy term. Term policies do not accumulate cash value, making them simpler and more affordable compared to other types of life insurance plan. These plans are ideal for those seeking substantial coverage at a lower premium, especially during critical life stages such as raising a family or paying off a mortgage.</p>
            </div>
        </div>
        <div class="typeOfLifeInsurance-flex"><img src="assets/images/insurance-plans/savingsPlan.svg" alt="Term Insurance Plans">
            <div>
                <h3 class="insurancePlans-subTitle">Savings Plan</h3>
                <p class="insurancePlans-desc">Savings plans are specialized financial instruments crafted to facilitate systematic saving while providing consistent returns, thereby assisting you in reaching your financial objectives. Given their core function as life insurance products, these plans also offer reassurance by safeguarding the financial well-being of your family in the event of unforeseen circumstances.</p>
            </div>
        </div>
        <div class="typeOfLifeInsurance-flex"><img src="assets/images/insurance-plans/ulipPlans.svg" alt="Term Insurance Plans">
            <div>
                <h3 class="insurancePlans-subTitle">ULIP Plan</h3>
                <p class="insurancePlans-desc">ULIPs are a unique combination of insurance and investment, allowing policyholders to allocate a portion of their premium towards investments in a range of funds (equity, debt, or balance). ULIPs provide the opportunity for potential wealth creation, but they also carry market risks. Policyholders have the flexibility to switch between investment funds based on market conditions and their risk appetite. Over time, the policy may build a cash value that can be utilized for various financial goals, or a death benefit is paid out to beneficiaries in case of the policyholder's demise.</p>
            </div>
        </div>
        <div class="typeOfLifeInsurance-flex"><img src="assets/images/insurance-plans/retirementPlans.svg" alt="Term Insurance Plans">
            <div>
                <h3 class="insurancePlans-subTitle">Retirement Plan</h3>
                <p class="insurancePlans-desc">Retirement plans, also known as pension plans or annuities, are specifically designed to provide a regular income stream during your post-retirement years. These plans ensure that you maintain a certain standard of living even when you are no longer earning a regular income. Retirement plans can be immediate, where you start receiving payouts shortly after investing a lump sum, or deferred, where you contribute over time and receive payouts after retirement. These plans are vital for building a financially secure retirement, allowing you to enjoy your golden years without financial worries.</p>
            </div>
        </div>
        <div class="typeOfLifeInsurance-flex"><img src="assets/images/insurance-plans/healthPlan.svg" alt="Term Insurance Plans">
            <div>
                <h3 class="insurancePlans-subTitle">Health Insurance</h3>
                <p class="insurancePlans-desc">Health insurance is an agreement between an individual and an insurance company in which the insurer agrees to cover a portion or all of the insured person's medical expenses in exchange for regular premium payments. These expenses can include doctor visits, hospital stays, prescription medications, preventive care, and more. The goal of health insurance is to safeguard individuals and families against the high costs of medical treatments.</p>
            </div>
        </div>
    </div>
</section>
<section id="benefitsOfLIP">
    <div class="fullBg">
        <div class="midWrapper">
            <h2 class="insurancePlans-title">Benefits of Having a Life Insurance Policy</h2>
            <p class="insurancePlans-desc">Life insurance offers numerous benefits that contribute to your peace of mind and your loved ones' future:</p>
            <div class="benefitsOfLIP-grid">
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Financial Security">
                    <div>
                        <h3 class="insurancePlans-subTitle">Financial Security</h3>
                        <p class="insurancePlans-desc">Life insurance provides a safety net, ensuring that your family's financial needs are met, including mortgage payments, education expenses, and daily living costs.</p>
                    </div>
                </div>
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Income Replacement">
                    <div>
                        <h3 class="insurancePlans-subTitle">Income Replacement</h3>
                        <p class="insurancePlans-desc">If you are the primary breadwinner, a life insurance policy can replace lost income, enabling your family to maintain their standard of living.</p>
                    </div>
                </div>
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Debt Coverage">
                    <div>
                        <h3 class="insurancePlans-subTitle">Debt Coverage</h3>
                        <p class="insurancePlans-desc">Your outstanding debts, such as loans and credit card balances, will not burden your family in your absence. The policy's death benefit can be used to settle these obligations.</p>
                    </div>
                </div>
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Business Continuation">
                    <div>
                        <h3 class="insurancePlans-subTitle">Business Continuation</h3>
                        <p class="insurancePlans-desc">Business owners can use life insurance to ensure the seamless continuation of their business operations or provide funds for succession planning.</p>
                    </div>
                </div>
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Wealth Creation">
                    <div>
                        <h3 class="insurancePlans-subTitle">Wealth Creation</h3>
                        <p class="insurancePlans-desc">Whole life and universal life come with a cash value component that grows over the years. This cash value is invested by the insurance company, and it accrues interest and other earnings on a tax-deferred basis.</p>
                    </div>
                </div>
                <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Tax Advantages">
                    <div>
                        <h3 class="insurancePlans-subTitle">Tax Advantages</h3>
                        <p class="insurancePlans-desc">Life insurance policies often offer tax advantages that can benefit both the policyholder and the beneficiaries. The death benefit paid to your beneficiaries is typically income tax-exempt , ensuring that your loved ones receive the full benefit amount without any tax implications.</p>
                    </div>
                </div>
            </div>
            <div class="benefitsOfLIP-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Tax Advantages">
                <div>
                    <h3 class="insurancePlans-subTitle">Rider Policies</h3>
                    <p class="insurancePlans-desc">Life insurance policies often allow you to add rider policies to customize your coverage to your specific needs. Rider policies are additional features or benefits that can be included with your primary life insurance policy for an extra premium. Common rider options include:</p>
                    <ul class="benefitsOfLIP-list">
                        <li><img src="assets/images/insurance-plans/arrow.svg" alt="arrow">
                            <div>
                                <h4 class="insurancePlans-subTitles">Critical Illness Rider</h4>
                                <p class="insurancePlans-desc">Critical Illness Rider This provides a lump-sum payment if you are diagnosed with a covered critical illness, such as cancer, heart attack, or stroke, during the policy term. It helps cover medical expenses and other financial obligations during a health crisis.</p>
                            </div>
                        </li>
                        <li><img src="assets/images/insurance-plans/arrow.svg" alt="arrow">
                            <div>
                                <h4 class="insurancePlans-subTitles">Disability Income Rider</h4>
                                <p class="insurancePlans-desc">This pays a monthly income if you become disabled and are unable to work. It ensures you have a steady stream of income to cover living expenses while you recover.</p>
                            </div>
                        </li>
                        <li><img src="assets/images/insurance-plans/arrow.svg" alt="arrow">
                            <div>
                                <h4 class="insurancePlans-subTitles">Waiver of Premium Rider</h4>
                                <p class="insurancePlans-desc">If you become disabled or seriously ill, this rider can waive your premium payments, ensuring that your life insurance coverage remains in force even when you can't afford to pay the premiums.</p>
                            </div>
                        </li>
                        <li><img src="assets/images/insurance-plans/arrow.svg" alt="arrow">
                            <div>
                                <h4 class="insurancePlans-subTitles">Child or Spousal Rider</h4>
                                <p class="insurancePlans-desc">This extends coverage to your spouse or children, providing them with financial protection in the event of their death or critical illness.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="howToChooseBestLIC" class="howz">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">How to Choose the Best Life Insurance Company?</h2>
        <p class="insurancePlans-desc">The decision to select the best life insurance company should be made carefully, as it can have a long-lasting impact on your financial security and that of your loved ones.</p><span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
        <div class="factorsslick">
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Solvency Ratio</h3>
                    <p class="insurancePlans-desc">One of the primary factors to consider when choosing a life insurance company is its financial stability. Look for a life insurance company with a solvency ratio significantly above the regulatory requirements. Kotak Life Insurance has a solvency ratio of 2.73.</p>
                </div>
            </div>
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Financial Strength and Reputation</h3>
                    <p class="insurancePlans-desc">When evaluating life insurance companies, it is essential to research their financial stability and reputation within the industry. Look for high credit ratings and a strong track record of fulfilling claims promptly.</p>
                </div>
            </div>
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Policy Options</h3>
                    <p class="insurancePlans-desc">Consider the variety of life insurance policies offered by the company. Whether you are interested in term life, whole life, or universal life insurance plans, make sure the company has a range of options that align with your financial goals and family's needs.</p>
                </div>
            </div>
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Premium Rates</h3>
                    <p class="insurancePlans-desc">Compare premium rates offline and online to ensure you are getting a competitive price for the coverage you need. It is important to strike a balance between affordability and comprehensive coverage.</p>
                </div>
            </div>
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Consider Claim Settlement Ratio</h3>
                    <p class="insurancePlans-desc">The claim settlement ratio is another crucial metric to assess when evaluating life insurance plans. This ratio reflects the percentage of claims that the insurer successfully pays out compared to the total number of claims received. Kotak Life Insurance holds a brilliant claim settlement* ratio of 98.29% for the year 2023-24.</p>
                </div>
            </div>
            <div>
                <div class="howToChooseBestLIC-card">
                    <h3 class="insurancePlans-subTitle">Reviews and Testimonials</h3>
                    <p class="insurancePlans-desc">Reading reviews and testimonials from current policyholders can provide valuable insights into a company's customer satisfaction levels and claims handling process.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="whoCanBuyLIP">
    <div class="fullBg">
        <div class="midWrapper">
            <h2 class="insurancePlans-title">Who Can Purchase a Life Insurance Policy?</h2>
            <p class="insurancePlans-desc">Life insurance plan is a versatile financial tool that can be tailored to meet the needs of various individuals and situations. It is available to:</p>
            <div class="whoCanBuyLIP-cards">
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/Individuals.svg" alt="Individuals">
                    <h3 class="insurancePlans-subTitle">Individuals</h3>
                    <p class="insurancePlans-desc">If you are an adult, you can purchase a life insurance policy to protect your loved ones financially in the event of your untimely demise. Whether you are single, married, a parent, or a retiree, life insurance ensures that your family's financial well-being is safeguarded.</p>
                </div>
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/ParentsandGuardians.svg" alt="Parents and Guardians">
                    <h3 class="insurancePlans-subTitle">Parents and Guardians</h3>
                    <p class="insurancePlans-desc">As a responsible parent or guardian, you can secure your children's future by obtaining a life insurance policy. Plans like savings or ULIP can ensure your kids have the financial resources they need for education, healthcare, and other essential needs.</p>
                </div>
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/Spouses.svg" alt="Spouses">
                    <h3 class="insurancePlans-subTitle">Spouses</h3>
                    <p class="insurancePlans-desc">Life insurance plans (such as term insurance) provides a safety net for married couples, offering financial support to the surviving spouse if one partner passes away. It can help cover mortgage payments, outstanding debts, and everyday living expenses.</p>
                </div>
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/businessOwners.svg">
                    <h3 class="insurancePlans-subTitle">Business Owners</h3>
                    <p class="insurancePlans-desc">If you are a business owner, life insurance plan can play a crucial role in your succession planning. It ensures a smooth transition of business ownership and provides funds to cover any outstanding business debts.</p>
                </div>
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/homeowners.svg">
                    <h3 class="insurancePlans-subTitle">Homeowners</h3>
                    <p class="insurancePlans-desc">Homeowners can use life insurance plan to protect their family's ability to keep their home in case of unforeseen circumstances. It can help cover mortgage payments and maintain the family's lifestyle.</p>
                </div>
                <div class="whoCanBuyLIP-card"><img src="assets/images/insurance-plans/elderlyIndividuals.svg">
                    <h3 class="insurancePlans-subTitle">Elderly Individuals</h3>
                    <p class="insurancePlans-desc">Even if you are retired, life insurance plan can still provide valuable benefits. When planned early in life retirement plans can be a great boon to retired individuals. It can also be used to leave a financial legacy for your heirs, cover final expenses, or leave a charitable donation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="understandingLifeInsuranceCA">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Understanding the Life Insurance Coverage Amount</h2>
        <p class="insurancePlans-desc">The coverage amount, or death benefit, depends on various factors such as your financial obligations, income, and long-term goals. A general rule of thumb is to choose a coverage amount that is sufficient to replace your income for a certain number of years and cover significant expenses like debts, education, and healthcare.</p>
        <div class="understandingLifeInsuranceCA-grid"><img src="assets/images/insurance-plans/understandingLICA.svg" alt="Understanding the Life Insurance Coverage Amount">
            <div>
                <h3 class="insurancePlans-title">Factors that Affect Life Insurance Premiums</h3>
                <p class="insurancePlans-desc">Several factors influence the cost of your life insurance premiums, including:</p>
                <ul class="understandingLifeInsuranceCA-list">
                    <li><img src="assets/images/insurance-plans/redDot.svg" alt="redDot">
                        <p><strong>Age:</strong>Younger individuals usually pay lower premiums.</p>
                    </li>
                    <li><img src="assets/images/insurance-plans/redDot.svg" alt="">
                        <p><strong>Lifestyle Habits:</strong>Factors like smoking and excessive drinking can increase premiums.</p>
                    </li>
                    <li><img src="assets/images/insurance-plans/redDot.svg" alt="redDot">
                        <p><strong>Coverage Amount:</strong>Higher coverage amounts lead to higher premiums.</p>
                    </li>
                    <li><img src="assets/images/insurance-plans/redDot.svg" alt="redDot">
                        <p><strong>Type of Policy:</strong>Permanent policies tend to have higher premiums than term policies.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="diffBtnSection">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Difference Between Life Insurance, General Insurance, and Health Insurance</h2>
        <p class="insurancePlans-desc">Each type of insurance – Life Insurance, General Insurance, and Health Insurance – serves a distinct purpose, addressing specific aspects of your financial and personal security. While life insurance focuses on providing for your family's future, general insurance safeguards your assets, and health insurance ensures your well-being in times of medical need.</p>
        <div class="insurancePlans-table">
            <table>
                <tr>
                    <th>Aspects</th>
                    <th>Life insurance</th>
                    <th>General insurance</th>
                    <th>Health insurance</th>
                </tr>
                <tbody>
                    <tr>
                        <td>Purpose</td>
                        <td>Provides financial protection in case of the policyholder's death.</td>
                        <td>Covers a wide range of non-life risks, such as property, vehicles, travel, etc.</td>
                        <td>Offers coverage for medical expenses and healthcare-related costs.</td>
                    </tr>
                    <tr>
                        <td>Benefit</td>
                        <td>Pays out a death benefit to beneficiaries upon the policyholder's death.</td>
                        <td>Offers compensation for damages/losses to insured assets (e.g., property damage, theft).</td>
                        <td>Covers medical expenses, hospitalization costs, and related healthcare expenditures.</td>
                    </tr>
                    <tr>
                        <td>Premiums</td>
                        <td>Generally higher due to longer coverage and potential cash value growth.</td>
                        <td>Varies based on the insured asset, its value, and the level of coverage.</td>
                        <td>Premiums are influenced by factors like age, health status, coverage scope, and more.</td>
                    </tr>
                    <tr>
                        <td>Riders/Add-Ons</td>
                        <td>Offers riders like critical illness, disability, etc., for added coverage.</td>
                        <td>Additional coverage options like personal accident, loss of baggage, etc.</td>
                        <td>Riders for maternity, pre-existing conditions, etc., can be added for specific needs.</td>
                    </tr>
                    <tr>
                        <td>Payout</td>
                        <td>Lump sum payout to beneficiaries upon the policyholder's death</td>
                        <td>Compensation for repair/replacement costs for the insured asset.</td>
                        <td>Direct payment to healthcare providers or reimbursement for medical expenses.</td>
                    </tr>
                    <tr>
                        <td>Tax Benefits</td>
                        <td>Premiums paid and benefits received are often eligible for tax benefits.</td>
                        <td>Premiums may be tax-deductible in some cases; claim payouts are generally tax-exempt.</td>
                        <td>Premiums and benefits are often eligible for tax benefits under prevailing laws.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="whyBuyPolicy">
    <div class="fullBg">
        <div class="midWrapper">
            <h2 class="insurancePlans-title">Why Buy a Life Insurance Policy Online?</h2>
            <p class="insurancePlans-desc">Buying a life insurance policy online has become an increasingly popular and convenient option for individuals seeking financial security and peace of mind.</p>
            <div class="whyBuyPolicy-grid">
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Premium Rates">
                    <div>
                        <h3 class="insurancePlans-subTitle">Premium Rates</h3>
                        <p class="insurancePlans-desc">Premium rates are a critical factor when considering a life insurance policy. Online platforms often provide competitive premium rates due to reduced overhead costs compared to traditional insurance companies.</p>
                    </div>
                </div>
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Flexibility">
                    <div>
                        <h3 class="insurancePlans-subTitle">Flexibility</h3>
                        <p class="insurancePlans-desc">Online life insurance platforms provide you with the flexibility to customize your policy according to your unique requirements. You can easily adjust coverage amounts, policy terms, and riders to tailor the policy to your family's specific needs, all with a few clicks.</p>
                    </div>
                </div>
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Convenience">
                    <div>
                        <h3 class="insurancePlans-subTitle">Convenience</h3>
                        <p class="insurancePlans-desc">Gone are the days of scheduling in-person appointments and spending hours discussing options with agents. Buying life insurance plan online empowers you to explore and compare policies at your own pace from the comfort of your home. With our user-friendly website, you can easily browse through a variety of plans, features, and premium options to find the perfect fit for your needs.</p>
                    </div>
                </div>
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Instant and Transparent Comparisons">
                    <div>
                        <h3 class="insurancePlans-subTitle">Instant and Transparent Comparisons</h3>
                        <p class="insurancePlans-desc">Obtaining instant quotes for different life insurance policies is a breeze online. Our platform allows you to see exactly what you will be paying for each policy, enabling you to make informed decisions. The transparent comparison feature lets you weigh the pros and cons of various plans side by side, helping you select the one that aligns with your financial goals.</p>
                    </div>
                </div>
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Paperless Process">
                    <div>
                        <h3 class="insurancePlans-subTitle">Paperless Process</h3>
                        <p class="insurancePlans-desc">Say goodbye to stacks of paperwork and lengthy application forms. Buying life insurance online means a seamless, paperless application process. Fill out the necessary details, and upload the required documents, and you are well on your way to securing your family's financial future.</p>
                    </div>
                </div>
                <div class="whyBuyPolicy-flxS"><img src="assets/images/insurance-plans/blueArrow.svg" alt="Access to Educational Resources">
                    <div>
                        <h3 class="insurancePlans-subTitle">Access to Educational Resources</h3>
                        <p class="insurancePlans-desc">Our online platform is not just a place to buy insurance, it is a hub of valuable information. We provide comprehensive educational resources to help you understand the intricacies of life insurance, from the basics to more advanced concepts. Empower yourself with knowledge before making your decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tipsToAvoidClaim">
    <div class="midWrapper">
        <div class="tipsToAvoidClaim-grid">
            <div>
                <h2 class="insurancePlans-title">Tips to Avoid Life Insurance Claim Rejection</h2><img src="assets/images/insurance-plans/quickTips.svg" alt="Quick tip">
                <p class="insurancePlans-desc">Understanding the potential reasons for claim rejections and taking proactive steps to prevent them is essential to ensure that your loved ones receive the intended benefits during their time of need.</p>
            </div>
            <div class="quickTips-cards">
                <div class="quickTips-card">
                    <h3 class="insurancePlans-subTitle">Full and Accurate Disclosure</h3>
                    <p class="insurancePlans-desc ptb5">Thoroughly review your policy documents. Familiarize yourself with the coverage, exclusions, and terms of the policy. This will help you avoid situations where a claim might be denied due to misunderstanding the policy details.</p>
                </div>
                <div class="quickTips-card">
                    <h3 class="insurancePlans-subTitle">Understand Policy Terms</h3>
                    <p class="insurancePlans-desc ptb5">Thoroughly review your policy documents. Familiarize yourself with the coverage, exclusions, and terms of the policy. This will help you avoid situations where a claim might be denied due to misunderstanding the policy details.</p>
                </div>
                <div class="quickTips-card">
                    <h3 class="insurancePlans-subTitle">Timely Premium Payments</h3>
                    <p class="insurancePlans-desc ptb5">Ensure that your premium payments are made on time and in accordance with the policy terms. Missed payments can result in a lapse of coverage, leaving your beneficiaries vulnerable.</p>
                </div>
                <div class="quickTips-card4">
                    <h3 class="insurancePlans-subTitle">Avoid Misrepresentation</h3>
                    <p class="insurancePlans-desc ptb5">Do not provide false information or misrepresent facts during the application process. Any inconsistencies discovered during the claims process could lead to denial.</p>
                </div>
                <div class="quickTips-card5">
                    <h3 class="insurancePlans-subTitle">Maintain Accurate Beneficiary Information</h3>
                    <p class="insurancePlans-desc ptb5">Regularly review and update your beneficiary information. Life changes such as marriage, divorce, or the birth of a child should be reflected in your policy to prevent confusion during the claims process.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="commonExclusion">
    <div class="fullBg">
        <div class="midWrapper">
            <h2 class="insurancePlans-title">Common Exclusions in Life Insurance Plans</h2>
            <p class="insurancePlans-desc">It is essential to be aware of the limitations and exclusions that may apply to different types of life insurance plans. These exclusions are subject to change from policy to policy and insurer to insurer.</p>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">Suicide Clause</h3>
                    <p class="insurancePlans-desc pb5">Most life insurance policies have a suicide exclusion clause, typically within the first one to two years of the policy's inception. If the policyholder dies by suicide within this period, the policy may not pay out the full death benefit. After the initial exclusion period, the policy will generally cover suicide-related deaths.</p>
                </div>
            </div>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">High-Risk Activities</h3>
                    <p class="insurancePlans-desc">Engaging in dangerous hobbies or occupations, such as skydiving, rock climbing, or professional racing, might lead to exclusions. If the insured person passes away while participating in these high-risk activities, the policy may not provide coverage.</p>
                </div>
            </div>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">Misrepresentation</h3>
                    <p class="insurancePlans-desc">Providing inaccurate information or withholding crucial details during the application process can lead to coverage denial. It's vital to be completely transparent about your medical history, lifestyle, and other relevant factors.</p>
                </div>
            </div>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">Criminal Activities</h3>
                    <p class="insurancePlans-desc">If the policyholder's death results from criminal activities or engaging in illegal acts, the policy may not cover the claim.</p>
                </div>
            </div>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">Pre-Existing Conditions</h3>
                    <p class="insurancePlans-desc">If the insured person passes away due to a pre-existing medical condition that was not disclosed or accurately represented, the policy may be voided.</p>
                </div>
            </div>
            <div class="commonExclusion-flexS"><img src="assets/images/insurance-plans/redArrow.svg" alt="Arrow">
                <div>
                    <h3 class="insurancePlans-subTitle">Intoxication</h3>
                    <p class="insurancePlans-desc">If the policyholder's death is a result of drug or alcohol abuse, the policy may not provide coverage.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="commonInclusion">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Common Inclusions in Life Insurance Plans</h2>
        <p class="insurancePlans-desc">Whether you are seeking pure protection, savings with insurance coverage, investments with insurance benefits, or secure retirement planning, there's a life insurance plan to suit your needs. Understanding the nuances of each type of plan is vital for making informed decisions that align with your financial aspirations. These inclusions are subject to change from policy to policy and insurer to insurer.</p>
        <div class="commonInclusion-cards">
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Death Benefit</h3>
                <p class="insurancePlans-desc ptb5">The heart of any life insurance plan is the death benefit, which provides a tax-exempt lump sum payment to your beneficiaries upon your passing. This financial safety net ensures that your loved ones can cover essential expenses, such as mortgage payments, education costs, and daily living expenses, even in your absence.</p>
            </div>
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Terminal Illness Cover</h3>
                <p class="insurancePlans-desc ptb5">Many of our life insurance plans include terminal illness cover, offering you peace of mind during challenging times. If you are diagnosed with a terminal illness and have a life expectancy of, for example, 12 months or less, you may have the option to receive a portion of your death benefit early to help alleviate financial burdens.</p>
            </div>
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Accidental Death Benefit</h3>
                <p class="insurancePlans-desc ptb5">Life is unpredictable, and accidents can happen. Some of our life insurance plans provide an additional accidental death benefit, which offers an extra layer of protection in case your passing is the result of a covered accident. This supplementary benefit can provide your beneficiaries with an increased payout, helping them manage unexpected expenses.</p>
            </div>
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Permanent and Total Disability Benefit</h3>
                <p class="insurancePlans-desc ptb5">Life is unpredictable, and accidents can happen. Some of our life insurance plans provide an additional accidental death benefit, which offers an extra layer of protection in case your passing is the result of a covered accident. This supplementary benefit can provide your beneficiaries with an increased payout, helping them manage unexpected expenses.</p>
            </div>
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Premium Waiver Option</h3>
                <p class="insurancePlans-desc ptb5">Understand that unforeseen circumstances, such as disability, can impact your ability to pay premiums. Our premium waiver option, available in select plans, ensures that if you become permanently disabled, your policy remains in force, and you will not need to worry about premium payments.</p>
            </div>
            <div class="commonInclusion-card">
                <h3 class="insurancePlans-subTitle">Cash Value Accumulation</h3>
                <p class="insurancePlans-desc ptb5">Understand that unforeseen circumstances, such as disability, can impact your ability to pay premiums. Our premium waiver option, available in select plans, ensures that if you become permanently disabled, your policy remains in force, and you will not need to worry about premium payments.</p>
            </div>
        </div>
    </div>
</section>
<section id="documentReqd">
    <div class="midWrapper">
        <h2 class="insurancePlans-title"></h2>
        <p class="insurancePlans-desc"></p>
        <div class="insurancePlans-table">
            <table>
                <tr>
                    <th>Documents</th>
                    <th>Details to be provided</th>
                </tr>
                <tbody>
                    <tr>
                        <td>Application Form</td>
                        <td>Complete the provided application form accurately and legibly.</td>
                    </tr>
                    <tr>
                        <td>Proof of Identity</td>
                        <td>Valid government-issued photo ID, such as a driver's license, passport, or Aadhar card.</td>
                    </tr>
                    <tr>
                        <td>Proof of Address</td>
                        <td>Recent utility bills, rental agreement, or other official documents that verify your address.</td>
                    </tr>
                    <tr>
                        <td>Age Proof</td>
                        <td>Document that confirms your age, such as a birth certificate or school leaving certificate.</td>
                    </tr>
                    <tr>
                        <td>Income Proof</td>
                        <td>Documents that reflect your income, such as salary slips, tax returns, or Form 16.</td>
                    </tr>
                    <tr>
                        <td>Medical Examination Reports</td>
                        <td>Depending on the chosen plan and your age, a medical examination may be required. Submit the relevant medical reports, if applicable.</td>
                    </tr>
                    <tr>
                        <td>Nominee Information</td>
                        <td>Details of your chosen nominee, including their name, relationship, and contact information.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="howToSaveTax">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">How do You Save Tax with Life Insurance Plans?</h2>
        <p class="insurancePlans-desc">Tax Deductions under Section 80C: Our life insurance plans allow you to claim deductions up to ₹1.5 lakhs under Section 80C of the Income Tax Act, 1961. This means a significant reduction in your taxable income, ensuring that you keep more of your money in your pocket.</p>
        <div class="howToSaveTax-grid"><img src="assets/images/insurance-plans/howToSaveTax.svg" alt="How to save tax">
            <div>
                <h3 class="insurancePlans-subTitle">Tax- Exempt Proceeds</h3>
                <p class="insurancePlans-desc">The proceeds from a life insurance policy are typically tax- exempt under Section 10(10D) of the Income Tax Act. This ensures that your family receives the sum assured without any tax liability in case of an unfortunate event.</p><br>
                <h3 class="insurancePlans-subTitle">Wealth Creation with Tax Benefits</h3>
                <p class="insurancePlans-desc">Some of our plans offer market-linked returns, allowing you to grow your wealth over time potentially. The gains made from these plans can also be tax-exempt, making them an attractive investment option.</p><br>
                <h3 class="insurancePlans-subTitle">Rider Benefits</h3>
                <p class="insurancePlans-desc">Enhance your coverage with optional riders like critical illness and disability benefits. These riders can also come with additional tax benefits, allowing you to enjoy extra deductions on your premiums.</p>
            </div>
        </div>
    </div>
</section>
<section id="howCanYouPayLIP">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">How Can You Pay for Life Insurance Policy?</h2>
        <p class="insurancePlans-desc">Life is unpredictable, and we believe your life insurance payment options should reflect that. We offer a variety of payment methods to ensure you have the flexibility and convenience you deserve:</p>
        <div class="howCanYouPayLIP-cards">
            <div class="howCanYouPayLIP-card">
                <h3 class="insurancePlans-subTitle">Monthly Premiums</h3>
                <p class="insurancePlans-desc ptb5">Spread the cost of your life insurance over manageable monthly payments. This option allows you to budget effectively without compromising on coverage.</p>
            </div>
            <div class="howCanYouPayLIP-card">
                <h3 class="insurancePlans-subTitle">Quarterly Payments</h3>
                <p class="insurancePlans-desc ptb5">Pay your life insurance premiums every three months. This option provides a balance between more frequent payments and the convenience of a lump-sum payment.</p>
            </div>
            <div class="howCanYouPayLIP-card">
                <h3 class="insurancePlans-subTitle">Semi-Annual Payments</h3>
                <p class="insurancePlans-desc ptb5">Choose to pay your premiums twice a year. This option offers a longer payment interval, reducing the frequency of transactions while ensuring your coverage remains intact.</p>
            </div>
            <div class="howCanYouPayLIP-card">
                <h3 class="insurancePlans-subTitle">Annual Payment</h3>
                <p class="insurancePlans-desc ptb5">Make a single payment for the entire year. This option simplifies your financial planning and guarantees uninterrupted coverage for the entire policy term.</p>
            </div>
        </div>
        <p class="insurancePlans-desc f17 ptb5">Selecting the right payment option for your life insurance policy is crucial. Consider factors such as your financial situation, budget, and payment preferences. Our experienced insurance advisors are here to guide you through the decision-making process, ensuring you make the choice that best aligns with your needs.</p>
    </div>
</section>
<section id="howWillFamilyReceive">
    <div class="fullBg">
        <div class="midWrapper">
            <h2 class="insurancePlans-title">How Will Your Family Receive the Life Insurance Claim Money?</h2>
            <p class="insurancePlans-desc">When the time comes to file a life insurance claim, we strive to make the process as simple as possible for your family. Our dedicated claims team is here to guide you through each step, ensuring that you have the necessary information and assistance.</p>
            <div class="howWillFamilyReceive-grid">
                <div>
                    <ul class="howWillFamilyReceive-list">
                        <li><img src="assets/images/insurance-plans/redDot.svg" alt="redDot">
                            <div>
                                <h3 class="insurancePlans-subTitle">File a Claim</h3>
                                <p class="insurancePlans-desc">To initiate the claim process, your family will need to submit the required documents, including the death certificate and policy information. Our online portal makes it convenient to submit documents from the comfort of your home.</p>
                            </div>
                        </li>
                        <li><img src="assets/images/insurance-plans/redDot.svg" alt="">
                            <div>
                                <h3 class="insurancePlans-subTitle">Documentation Review</h3>
                                <p class="insurancePlans-desc">Our expert claims team will carefully review the submitted documents to ensure everything is in order.</p>
                            </div>
                        </li>
                        <li><img src="assets/images/insurance-plans/redDot.svg" alt="redDot">
                            <div>
                                <h3 class="insurancePlans-subTitle">Claim Approval</h3>
                                <p class="insurancePlans-desc">Once the documentation is verified and the claim is approved, your family will be notified promptly. We understand the urgency of this process and strive to expedite it to provide financial support when it's needed most.</p>
                            </div>
                        </li>
                    </ul>
                </div><img src="assets/images/insurance-plans/howWillFamilyReceive.svg" alt="How Will Your Family Receive the Life Insurance Claim Money?">
            </div>
        </div>
    </div>
</section>
<section id="whichLIPSuitsYou">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Which Life Insurance Plan Suits Your Need?</h2>
        <p class="insurancePlans-desc">Explore the in-depth resources on each life insurance plan to delve deeper into their features and benefits. Secure your future today by selecting the life insurance plan that suits your needs best.</p>
        <div class="whichLIPSuitsYou-cards">
            <div class="whichLIPSuitsYou-card">
                <h3 class="insurancePlans-subTitle">Explore the Range of Available Life Insurance Options</h3>
                <p class="insurancePlans-desc ptb5">Without a comprehensive understanding of how life insurance functions, individuals often find themselves unsure when it comes to selecting the most suitable policy. Therefore, acquiring an in-depth knowledge of the various types of life insurance products is vital before making a decision.</p>
            </div>
            <div class="whichLIPSuitsYou-card">
                <h3 class="insurancePlans-subTitle">Evaluate Your Financial Requirements</h3>
                <p class="insurancePlans-desc ptb5">A life insurance policy that suits your peers might not necessarily align with your own needs. Hence, it is important to assess your specific financial considerations, whether they pertain to affordability, preferred coverage amount, or optional add-ons, before embarking on a comparison of different plans.</p>
            </div>
            <div class="whichLIPSuitsYou-card">
                <h3 class="insurancePlans-subTitle">Analyze Plans Based on Their Advantages</h3>
                <p class="insurancePlans-desc ptb5">Given the extensive array of life insurance plans accessible, it is imperative to ensure that you opt for the right one that offers ample benefits. To accomplish this, it is essential to diligently compare plans across various criteria, such as premiums, coverage amounts, and potential investment components.</p>
            </div>
        </div>
    </div>
</section>
<section id="LIPTerms">
    <div class="midWrapper">
        <h2 class="insurancePlans-title">Life Insurance Policy Important Terms</h2>
        <p class="insurancePlans-desc">Navigating the realm of life insurance involves familiarizing yourself with terms such as "premiums," "beneficiary," "policyholder," "death benefit," "cash value," and much more. Each term plays a unique role in shaping the terms and conditions of your life insurance policy.</p>
        <div class="LIPTerms-cards">
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/Premium.svg" alt="Premium">
                <h3 class="insurancePlans-subTitle">Premium</h3>
                <p class="insurancePlans-desc ptb5">The amount you pay at regular intervals (monthly, annually) to maintain your life insurance coverage.</p>
            </div>
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/deathBenefit.svg" alt="Death Benefit">
                <h3 class="insurancePlans-subTitle">Death Benefit</h3>
                <p class="insurancePlans-desc ptb5">The sum of money your beneficiaries receive upon your passing.</p>
            </div>
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/Policyholder.svg" alt="Policyholder">
                <h3 class="insurancePlans-subTitle">Policyholder</h3>
                <p class="insurancePlans-desc ptb5">The individual who owns the life insurance policy and pays the premiums.</p>
            </div>
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/Beneficiary.svg" alt="Beneficiary">
                <h3 class="insurancePlans-subTitle">Beneficiary</h3>
                <p class="insurancePlans-desc ptb5">The person(s) or entity designated to receive the death benefit.</p>
            </div>
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/term.svg" alt="Term">
                <h3 class="insurancePlans-subTitle">Term</h3>
                <p class="insurancePlans-desc ptb5">The duration of coverage provided by a policy. Term life insurance plan offers coverage for a specific period, while permanent life insurance provides lifelong protection.</p>
            </div>
            <div class="LIPTerms-card"><img src="assets/images/insurance-plans/cashValue.svg" alt="Cash Value">
                <h3 class="insurancePlans-subTitle">Cash Value</h3>
                <p class="insurancePlans-desc ptb5">A feature of permanent life insurance where a portion of your premium accumulates as an investment that you can access during your lifetime.</p>
            </div>
        </div>
    </div>
</section>
<section id="faqLIP" class="insurance">
    <div class="midWrapper">
        <div class="">
            <h2 class="mb-20 term-tags fnt-24">FAQs on Life Insurance Plans</h2>
            <div class="accordion-div accordion-btns mt-mob-15">
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>1</span>Is it necessary to buy life insurance plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>While life insurance plans can provide financial security and support to your loved ones in case of your unexpected demise. It ensures that your family has a safety net to cover expenses and debts.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>2</span>How does life insurance plan work?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>For a life insurance policy, you pay regular, limited, single premium, and in return, the insurance company provides a payout, known as the death benefit, along with maturity benefits (depending upon the type of life insurance policy), to your beneficiaries upon your passing. This payout can help your family manage financial obligations.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>3</span>Who can buy a life insurance policy?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>Life insurance policy can be bought by anyone from the age of 25-45 and beyond. The aim is to provide financial protection to your family in case of uncertainty.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>4</span>What is the ideal life cover that I need?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>The ideal life cover varies depending on your individual circumstances, such as your financial obligations, debts, income, and the needs of your dependents. It's advisable to assess your current and future financial needs to determine an appropriate coverage amount. Use the online calculator to find out how much you need to put in your insurance premium.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>5</span>What is the right age to buy a life insurance plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>The ideal age to buy life insurance is often when you are younger and healthier, as premiums tend to be lower. However, it's never too late to get coverage. Your life stage, financial situation, and dependents play a role in determining the right time for you.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>6</span>How to pay the premium for my life insurance?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>Life insurance premiums can be paid on a regular basis (monthly, quarterly, half yearly, annually) through various methods such as electronic transfers, checks, or online payments, depending on the insurer's options. Visit<a class="inLine-links" href="https://www.kotaklife.com/how-do-i/pay-my-premium">https://www.kotaklife.com/how-do-i/pay-my-premium</a>for premium payments.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>7</span>What will happen to my life insurance policy if I cancel it?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>If you cancel your life insurance policy, you may lose the coverage and any benefits associated with it. Depending on the policy type, you might receive a surrender value or a portion of the premiums paid, but this varies by policy and insurer.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>8</span>How do I choose a nominee?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>A nominee is the person who will receive the life insurance payout upon your demise. You can choose a family member, spouse, or anyone with an insurable interest. Ensure the nominee's details are correctly mentioned in the policy to avoid complications.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>9</span>Can I change the beneficiary/nominee for my life insurance policy?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>Yes, in most cases, you can change the beneficiary or nominee of your life insurance policy. Visit<a class="inLine-links" href="https://www.kotaklife.com/how-do-i/manage-my-policy">https://www.kotaklife.com/how-do-i/manage-my-policy</a>for changing nominee or for more information. If you face any issues, contact your nearest branch.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>10</span>How will my family receive the life insurance claim?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>After your passing, your beneficiaries need to file a claim with the insurance company. They will need to provide necessary documents, such as a death certificate and policy details. Once verified, the company will disburse the death benefit to your beneficiaries. Visit<a class="inLine-links" href="https://customer.kotaklifeinsurance.com/ocm">https://customer.kotaklifeinsurance.com/ocm</a>for further details.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>11</span>Why should I buy a life insurance policy?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>Life insurance provides financial protection to your loved ones in the event of your death. It can help cover funeral expenses, outstanding debts, and mortgage payments and provide ongoing financial support to your family members.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion bor-top-zero">
                        <h3><span>12</span>What are the tax benefits available with life insurance plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>Life insurance may offer tax benefits Under section 80C & 10(10D). It's important to consult a tax professional to understand the specific tax implications in your situation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="terms new-terms" id="terms-conditions">
    <div class="midWrapper"><button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits and Plan Disclaimer</button>
        <div class="content-col mb-0 tab-align li-disc terms-para">
            <p class="pl-0 space-term"><b>Terms and Conditions for Savings Plans</b></p>
            <p class="pl-0">You may avail of tax benefits as per Income Tax Act, 1961, Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant. Goods and Services Tax and Cess as applicable shall be levied over and above premium amount as per applicable tax laws.</p>
            <p class="pl-0 space-2 space-term"><sup>@</sup>Guaranteed benefits due under this plan are available provided premiums are paid regularly for the entire premium payment term and the policy is in force. *Please note that Bonuses are NOT guaranteed and may be as declared by the Company from time to time. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Guaranteed Fortune Builder,</b>UIN: 107N128V05 Form No: N128. An Individual, Non-Linked, Non-Participating, Savings, Life Insurance Plan. This is a saving and protection oriented plan. For substandard lives, extra premium may be charged based on Kotak Life Insurance’s underwriting policy. This product is available for sale through online mode. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. 2The above illustration is for Male aged 18 years, Premium: Rs. 10,000 per month, Premium Payment Term: 10 years, Deferment Period: 5 years, Policy Term: 15 years, Income Benefit Period: 15 years & Income Benefit Frequency: monthly. Plan option opted is Long Term Income – Income only option for online channel. The income benefits will be Rs. 17,948 per month for 15 years after 15th year of policy term. The premium figures are exclusive of Goods and Services Tax and Cess, as applicable. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums. @Guaranteed benefits due under this plan are available provided premiums are paid regularly for the entire premium payment term and the policy is in force</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Guaranteed Savings Plan</b>UIN: 107N100V04, Form No: N100. Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider, UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03, Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental Disability Guardian Benefit, UIN: 107B011V02, Form No: B011. This is a non-linked, non-participating endowment plan. This is a saving and protection oriented plan. For more details on risk factors, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><sup>1</sup>The above illustration is for an 18-year-old healthy male, non-smoker who is willing to invest Rs. 10,000 per month and will pay for 10 years for this policy; where the policy term is 20 years, the basic sum assured is ₹20,89,466 and guaranteed maturity benefit is ₹27,21,849. The premium is assuming the policy is bought Online. The above premium figures are exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premiums.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Assured Savings Plan</b>UIN: 107N081V06, Form No: N081. Kotak Term Benefit Rider UIN:107B003V03, Form No.: B003, Kotak Accidental Death Benefit Rider UIN: 107B001V03, FormNo.: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No.: B002, Kotak Life Guardian Benefit Rider UIN: 107B012V02, Form No.: B012, Kotak Accidental DisabilityGuardian Benefit Rider UIN: 107B011V02, Form No.: B011, Kotak Critical Illness Plus Benefit Rider UIN:107B020V01, Form No.: B020. This is a savings-cum-protection oriented non-participating endowment assurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For details on riders, please refer to the Rider Brochure</p>
            <p class="pl-0 space-2 space-term"><sup>~</sup>The above illustration is for an 18-year-old healthy male, non-smoker who is willing to invest Rs. 10,000 per month and will pay for 10 years for this policy; where the policy term is 20 years, the basic sum assured is Rs. 17,42,559 and guaranteed maturity benefit is Rs. 27,16,071 . The premium is assuming the policy is bought Online. The above premium figures are exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premiums.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Fortune Maximiser</b>UIN: 107N125V02, Form No: N125. Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider, UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03, Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental Disability Guardian Benefit, UIN: 107B011V02, Form No: B011, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Sampoorn Bima Micro-Insurance Plan -</b>UIN: 107N092V02, Form No: N092. This is a non-linked non-participating endowment assurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Premier Life Plan</b>UIN: 107N096V04, Form No: N096. Kotak Term Benefit Rider - 107B003V03, Form No. B003, Kotak Accidental Death Benefit Rider - 107B001V03, Form No. B001, Kotak Permanent Disability Benefit Rider - 107B002V03, Form No. B002, Kotak Life Guardian Benefit Rider - 107B012V02, Form No. B012, Kotak Accidental Disability Guardian Benefit Rider - 107B011V02, Form B011, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form NO.: B020. This is a non-linked participating whole life plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Assured Income Accelerator</b>UIN No.: 107N089V04, Form No.: N089. This is a non-participating guaranteed income anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Premier Endowment Plan</b>UIN: 107N079V03, Form No.: N079, Kotak Term Benefit Rider UIN: 107B003V03, Form No.: B003, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No.: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No.: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No.: B020, Kotak Life Guardian Benefit Rider UIN: 107B012V02, Form No.: B012, Kotak Accidental Disability Guardian Benefit Rider UIN: 107B011V02, Form No: B011. This is a Savings-cum-Protection oriented Participating Endowment Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Premier Moneyback Plan</b>UIN: 107N083V02, Form No: N083. This is a participating anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Classic Endowment Plan</b>UIN:107N082V02, Form No.: N082. This is a Savings-cum-Protection oriented Participating Endowment Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak SmartLife Plan</b>UIN: 107N102V03, Form No: N102. This is a Savings-cum-Protection oriented Participating Endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Premier Income Plan</b>UIN: 107N099V02, Form No: N099. This is a participating anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak POS Bachat Bima;</b>UIN: 107N117V01, Form No: N117. This is a non-linked, non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Get Assured Income Now</b>UIN: 107N141V01, Form No: N141, Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider, UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03, Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental Disability Guardian Benefit, UIN: 107B011V02, Form No: B011, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020. This is a savings-cum-protection oriented participating endowment plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
            <p class="pl-0 space-term"><b>Terms and Conditions for Term Plan</b></p>
            <p class="pl-0 space-2 space-term"><b>Kotak e-Term</b>UIN:107N129V02, Form No: N104, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-participating pure protection plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><sup>^</sup>The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment option, Level Recurring Payout Option and Sum Assured on Death of Rs.1 Crore. The per day premium is Rs.17 [Rs. 6,100 Annualized Premium / 365 days = Rs. 16.71]. The premium is assuming the policy is bought Online and the customer has not purchased any policy from Kotak Life Insurance. The above premium figures are exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premiums. Annualized Premium is the premium payable in a policy year, excluding the underwriting extra premiums, loadings for modal premium, Goods and Services Tax and Cess, as applicable and Rider Premium, if any.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Gen2Gen Protect</b>UIN: 107N132V01, Form No: N132, Kotak Permanent Disability Benefit Rider - UIN: 107B002V03, Form No.: B002, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020, Kotak Accidental Death Benefit Rider - UIN: 107B001V03, Form No: B001. This is a Non-Linked Non-Participating Individual Savings Life Insurance Plan. For sub-standard lives, extra premium may be charged based on Kotak Mahindra Life Insurance Company’s underwriting policy. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><sup>+</sup>The above premium figures are exclusive of Goods & Services Tax & Cess. Goods and Services Tax & Cess thereon, shall be charged as per the tax laws over and above the said premium. Plan Option – Life ROP. ROP – Return of Premiums. Life Insured Age: 30 years, Policy Term: To Age 65 (35 years), Premium Payment Term (PPT): 10 years, Sum Assured: 1 Crore, Monthly Premium: 3,362. ROP at Primary Life Insured Age 65: ₹4,03,440. The monthly premium is ₹3,362 (annual premium ₹38,200 * 8.8%). The premium is assuming the policy is bought Online and the customer has not purchased any policy from Kotak Life Insurance.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Protect India</b>UIN: 107N130V01, Form No: N130. This is a non-participating, pure protection, life insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Term Plan</b>UIN:107N005V06, Form No: N005, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-unit linked, non-participating, term plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Saral Jeevan Bima</b>UIN:107N120V01, Form No: N120. This is a Non-Linked Non-Participating Individual Pure Risk Premium Life Insurance Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Health Maximiser</b>UIN: KOTHLIP24026V012324 is a Combi Product with both protection & health benefits. It is a jointly offered product of Kotak Mahindra Life Insurance Company Limited and Kotak Mahindra General Insurance Company Limited, where protection benefits are being offered by Kotak Mahindra Life Insurance Company Ltd. under Kotak Term Plan - UIN 107N005V06, Form No. N005 and health benefits are being offered by Kotak Mahindra General Insurance Company Ltd under Kotak Health Premier – UIN KOTHLIP23109V042223; The risks of this product are distinct and are accepted by respective companies. Please refer to the Policy Document for specific details on all terms, conditions and exclusions. #For more options on plans, coverages, features, premium paying term, eligibility, etc. please get in touch with the Company Representative. Please know the associated risk and applicable charges from your insurance agent or the intermediary or the policy document of the insurer.</p>
            <p class="pl-0 space-2 space-term"><sup>**</sup>Data as on May 2024</p>
            <p class="pl-0 space-2 space-term"><sup>#</sup>Tax laws are subject to amendments from time to time. The customer is advised to take an independent view from a tax consultant. Tax benefits are subject to conditions specified under Section 80C and Section 80D of the Income-tax Act, 1961. The tax benefit is applicable as per the Income Tax Act, of 1961</p>
            <p class="pl-0 space-2 space-term"><b>Terms and Conditions for ULIP Plans</b></p>
            <p class="pl-0 space-2 space-term">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
            <p class="pl-0 space-2 space-term"><b>Risk Factors:</b></p>
            <p class="pl-0 space-2 space-term"><b>The Unit Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender /withdraw the monies invested in Unit Linked Insurance Products completely or partially till the end of the fifth year from inception.</b></p>
            <p class="pl-0 space-2 space-term">
            <ul class="safeguard-list">
                <li>Unit Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors.</li>
                <li>The premium paid in Unit Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors influencing the capital market and the insured is responsible for his/her decisions.</li>
                <li>Kotak Mahindra Life Insurance Company Ltd. is only the name of the Insurance Company and Kotak e-Invest, Kotak T.U.L.I.P, Kotak Invest Maxima, Kotak Single Invest Plus, Kotak Single Invest Advantage, Kotak Platinum, Kotak Ace Investment, Kotak Wealth Optima Plan are only the name of the unit linked life insurance contract and does not in any way indicate the quality of the contract, its future prospects or returns.</li>
                <li>The various funds offered under this contract are the names of the funds and do not in any way indicate the quality of these plans, their future prospects and returns.</li>
                <li>The past performance of other Funds of the Company is not necessarily indicative of the future performance of the funds</li>
                <li>Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your Insurance Agent or Corporate Agent / Insurance Broker or policy document of the insurer</li>
                <li>All benefits payable under the Policy are subject to the Tax Laws and other financial enactments, as they exist from time to time.</li>
            </ul>
            </p>
            <p class="pl-0 space-2 space-term"><b>Kotak e-Invest</b>UIN - 107L121V01, Form No. - L121. Kotak Accidental Death Benefit Rider (Linked) UIN - 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN -107A018V01 Form No: A018. This is an individual Unit-linked Non-Participating Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><sup>3</sup>The illustration is for an 18 year old healthy male with base premium is Rs. 1 lakh p.a. and Sum Assured as Rs. 10 Lakhs, premium payment term / policy term: 20/20 years, with investment strategy as aggressive under age based strategy. The above figures are net of Goods and Services Tax and Cess, as applicable. Goods and Services Tax and Cess are subject to change from time to time as per the prevailing tax laws. #The values are based on assumed investment rate of return of 4% p.a. & 8% p.a. The values shown are not guaranteed and they are not upper and lower limit of what you might get back as the value of your policy is dependent on a number of factors including future investment performance. The actual experience may be different from the illustrated.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak T.U.L.I.P</b>UIN No.: 107L131V02 Form No.: L131, Kotak Accidental Death Protection Rider (Linked) UIN No.:107A021V01, Form No.: A021. Kotak Critical Illness Benefit Rider (Linked)UIN No.:107A022V01 Form No.: A22. This is a non-participating unit linked endowment plan. This product is available for sale through online mode. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><sup>4</sup>The illustration is for an 18 year old healthy male with base premium is Rs. 1 lakh p.a. and Sum Assured as Rs. 50 lakhs, premium payment term / policy term: 30/10 years, Rider premiums are Rs. 2,440 for Accidental Death Benefit of Rs. 20L and Rs. 1,605 for Critical Illness Cover of Rs. 5L with investment strategy as moderate under age based strategy. The above figures are net of Goods and Services Tax and Cess, as applicable. Goods and Services Tax and Cess are subject to change from time to time as per the prevailing tax laws. #The values are based on assumed investment rate of return of 4% p.a. & 8% p.a. The values shown are not guaranteed and they are not upper and lower limit of what you might get back as the value of your policy is dependent on a number of factors including future investment performance. The actual experience may be different from the illustrated.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Invest Maxima</b>UIN No.: 107L073V05, Form No: L073. This is an individual, unit linked non-par life insurance plan. This website content is not a brochure and only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Single Invest Plus</b>UIN No.: 107L075V04, Form No.: L075. This is a savings oriented unit linked endowment plan. This website content only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Single Invest Advantage</b>UIN No.: 107L065V05, Form No.: L065. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Platinum</b>UIN No.: 107L067V07, Form No.: L067. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is an individual, Unit-linked, Non-par, Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For details on riders please read rider brochure.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Ace Investment</b>UIN No.: 107L064V06, Form No.: L064. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Wealth Optima Plan</b>UIN: 107L118V03, Form No: L118, Kotak Accidental Death Benefit Rider (Linked) UIN – 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN – 107A018V01 Form No: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the rider brochure.</p>
            <p class="pl-0 space-term"><b>Terms and Conditions for Retirement Plans</b></p>
            <p class="pl-0 space-2 space-term">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Lifetime Income Plan</b>UIN: 107N103V15, Form No: N103 This is a non-participating immediate annuity plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><sup>7</sup>The above illustration is for an 45-year-old healthy male who is willing to invest Rs. 10 Lakh in Lifetime Income with Cash Back. The premium is assuming the policy is bought Online. The above premium figures are exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premiums.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Premier Pension</b>Plan UIN: 107N094V02, Form No: N094, Kotak Accidental Death Benefit Rider UIN - 107B001V03, Form No:B001, Kotak Permanent Disability Benefit Rider UIN- 107B002V03, Form No:B002. This is a Participating non-linked Pension Plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Assured Pension</b>UIN: 107N123V08, Form No: N123. This is a non-linked, non-participating annuity plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term"><sup>6</sup>The above illustration is for an 45-year-old healthy male who is willing to invest Rs. 5 Lakhs in Deferred Income with Cash-Back and will pay for 10 years with deferment period of 10 years for this policy. The premium is assuming the policy is bought Online. The above premium figures are exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premiums.</p>
            <p class="pl-0 space-2 space-term"><b>Kotak Saral Pension</b>UIN: 107N124V01, Form No: N124. This is a single premium non-linked non participating individual immediate annuity plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2 space-term">Annuity rates applicable as on the date of policy issuance will be provided to the customer. Once a policy is issued, the rates will be guaranteed for life. Please check for the latest rates at the time of purchase in force.</p>
            <p class="pl-0 space-term"><b>Terms and Conditions for Health Plans</b></p>
            <p class="pl-0 space-2 space-term"><b>Kotak Health Shield</b>UIN No.: 107N105V01, Form No. N105. This is a non-participating, fixed benefit, health insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
            <p class="pl-0 space-2"><b>Section 41-</b></p>
            <p class="pl-0">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: 0. No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. 1. Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
            <p class="pl-0 space-2"><b>Section 45-</b></p>
            <p class="pl-0">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:</p>
            <p><a href="https://www.kotaklife.com/assets/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf">https://www.kotaklife.com/assets/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf</a></p>
            <p class="pl-0 space-2 space-term">Claim Settlement<sup>*</sup>disclaimer:</p>
            <p class="pl-0 space-2 space-term"><a href="*https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2024/q4/investor-presentation/Q4FY24%20Investor-Presentation.pdf">*https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2024/q4/investor-presentation/Q4FY24%20Investor-Presentation.pdf</a></p>
            <p class="pl-0">Tax Benefits</p>
            <p class="pl-0">You may avail of tax benefits as per the Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. You are advised to consult your Tax Advisor for details. Goods and Services Tax and Cess, as applicable shall be levied over and above premium amount shown here as per applicable tax laws.</p>
            <p class="pl-0 space-2"><b>Regd. Office:</b></p>
            <p class="pl-0">8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 Toll Free: 1800 209 8800 Website: www.kotaklife.com | WhatsApp: 9321003007 |ARN No.: KLI/24-25/Comp/E-WEB/82.</p>
            <p class="pl-0 space-2"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS</b></p>
            <p class="pl-0">IRDAI or its officials do not involve in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
            <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
        </div>
    </div>
</section>
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer="defer" src="assets/js/insurance-plans.js"></script>
<script defer="defer" src="assets/js/global.js"></script>
<script>
    var i, acc = document.getElementsByClassName("collapsible");
    for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var e = this.nextElementSibling;
        "block" === e.style.display ? e.style.display = "none" : e.style.display = "block"
    })

</script>
