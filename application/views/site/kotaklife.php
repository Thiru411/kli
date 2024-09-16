<!DOCTYPE html>
<html lang="en">

<head>
    <title>KotakLife</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url()?>assets/digital-guide/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <section class="kotak_landing_page d-md-block d-none">
            <div class="position-relative">

                <div class="logored d-md-block d-none">
                    <img class="logoimgs d-none d-md-block" src="<?=base_url()?>assets/digital-guide/images/logo.svg">
                    <div class="digital_guidedesktop bgremove d-none d-md-block">
                        <a href="" class="btnreddesktop">Digital Guide <img class="circlearrowimg"
                                src="<?=base_url()?>assets/digital-guide/images/newcircleimg 1.svg"></a>
                    </div>
                    <!-- <img class="logoimgs d-md-none" src="<?=base_url()?>assets/digital-guide/images/mobilelogimg.svg">-->
                </div>
                <div class="banner-content">
                    <div class="banner-box">
                        <div class="things">
                            <p>Things are easy with us, hamesha.</p>
                        </div>
                        <div class="features">

                            <!-- <button type="button" class="featuresbtn">Features</button>-->
                        </div>


                        <!-- <img class="w-100 d-none d-md-block bannerimg" src="<?=base_url()?>assets/digital-guide/images/bannerimg.png">-->


                        <!--   <img class="w-100 d-md-none" src="<?=base_url()?>assets/digital-guide/images/mobilebannerimg.png">-->

                        <div class="viewlinks">
                            <!-- <p>Things are easy with us, hamesha.</p> -->
                            <div class="row smallicons">
                                <div class="d-flex mobileiconsside justify-content-center">
                                    <div class="pr-20">
                                        <div class="smalliconsimg">
                                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Premium due dateimg.svg">
                                        </div>
                                        <div class="smalliconstext">
                                            <p class="mb-0">View Premium</p>
                                            <p class="m-0">Due Date/Amount</p>
                                        </div>

                                    </div>
                                    <div class="pr-20">
                                        <div class="smalliconsimg">
                                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Policyimg.svg">
                                        </div>
                                        <div class="smalliconstext">
                                            <p class="m-0">View Policy</p>
                                            <p class="m-0">Information</p>
                                        </div>

                                    </div>
                                    <div class="pr-20">
                                        <div class="smalliconsimg">
                                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/Requestimg.svg">
                                        </div>
                                        <div class="smalliconstext">
                                            <p class="m-0">Request</p>
                                            <p class="m-0">Statements</p>
                                        </div>
                                    </div>
                                    <div class="pr-20">
                                        <div class="smalliconsimg">

                                            <img class="iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Fundimg.svg">
                                        </div>
                                        <div class="smalliconstext">
                                            <p class="m-0">View Fund &</p>
                                            <p class="m-0">Bonus Value</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mobile-show">
                            <img src="<?=base_url()?>assets/digital-guide/images/digital-mobile-bg.jpg" alt="">
                        </div>
                    </div>

                    <div class="banner-gal">
                        <img src="<?=base_url()?>assets/digital-guide/images/bannerimgs2.png" alt="">
                    </div>
                </div>

            </div>
            <div class="bg-red">

            </div>
        </section>


        <section class="digital_services d-md-block d-none">
            <!-- <h3>Digital services and more in just one click</h3> -->


            <div class="container bg-darkblue">
                <!-- <div class="bg-red">
                    <img src="<?=base_url()?>assets/digital-guide/images/text.png" class="bg-text">
                </div> -->
                <h3 class="digital_click">Digital services and more in just one click</h3>
                <div class="footer-icons">
                    <div class="clickcircle justify-content-between">
                        <div class="links">
                           <a href="#">
                            <div class="smalldigitalicons">
                                <img class="desktopiconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaimg.svg">
                                <p class="m-0 desktop_p">KAYA WhatsApp BOT</p>
                            </div>
                            </a>
                        </div>
                        <div class="links">
                            <a href="#">
                            <div class="smalldigitalicons">
                                <img class="desktopiconimgs" src="<?=base_url()?>assets/digital-guide/images/Structuredimg.svg">
                                <p class="m-0 desktop_p">Structured Web Form</p>
                            </div>
                            </a>
                        </div>
                        <div class="links">
                            <a href="#" >
                            <div class="smalldigitalicons">
                                <img class="desktopiconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaWebChat BOTimg.svg" onClick="openChat()">
                                <p class="m-0 desktop_p">KAYA WebChat BOT</p>
                            </div>
                            </a>
                        </div>
                        <div class="links">
                            <a href="#">
                            <div class="smalldigitalicons">
                                <img class="desktopiconimgs" src="<?=base_url()?>assets/digital-guide/images/payPremiumimg.svg">
                                <p class="m-0 desktop_p">Pay Premium</p>
                            </div>
                            </a>
                        </div>
                        <div class="links">
                            <a href="#">
                            <div class="smalldigitalicons">
                                <img class="desktopiconimgs" src="<?=base_url()?>assets/digital-guide/images/Online Policyimg.svg">
                                <p class="m-0 desktop_p">Online Policy Manager</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-red mt-1">
                    <img src="<?=base_url()?>assets/digital-guide/images/text.png" class="bg-text">
                </div>
            </div>

        </section>
        <section class="digital_services d-md-block d-none">
            <h3>Digital services and more in just one click</h3>

            <div class="container mt-3 ">
                <div class="row clickcircle" style="display: none;">
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaimg.svg">
                        <p class="m-0">KAYA</p>
                        <p class="m-0">WhatsApp BOT</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/Structuredimg.svg">
                        <p class="m-0">Structured </p>
                        <p class="m-0">Web Form</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaWebChat BOTimg.svg">
                        <p class="m-0">KAYA </p>
                        <p class="m-0">WebChat BOT</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/payPremiumimg.svg">
                        <p class="m-0">Pay </p>
                        <p class="m-0">Premium</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/Online Policyimg.svg">
                        <p class="m-0">Online Policy </p>
                        <p class="m-0">Manager</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="digital_guide d-md-block d-none">
            <a href="" class="btnred">Digital Guide <img class="circlearrowimg" src="<?=base_url()?>assets/digital-guide/images/circleimg.svg"></a>
        </section>


        <section class="digital_services d-md-none d-block">
            <h3>Digital services and more in just one click</h3>

            <div class="container mt-3 ">
                <div class="row clickcircle">
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaimg.svg">
                        <p class="m-0">KAYA</p>
                        <p class="m-0">WhatsApp BOT</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/Structuredimg.svg">
                        <p class="m-0">Structured </p>
                        <p class="m-0">Web Form</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/kayaWebChat BOTimg.svg">
                        <p class="m-0">KAYA </p>
                        <p class="m-0">WebChat BOT</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/payPremiumimg.svg">
                        <p class="m-0">Pay </p>
                        <p class="m-0">Premium</p>
                    </div>
                    <div class="links">
                        <img class="iconimgs" src="<?=base_url()?>assets/digital-guide/images/Online Policyimg.svg">
                        <p class="m-0">Online Policy </p>
                        <p class="m-0">Manager</p>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <div class="things d-md-none d-block">
                <p class="things_are">Things are easy with us, hamesha.</p>
            </div>
            <div class="mobile-show d-md-none d-block">
                <img src="<?=base_url()?>assets/digital-guide/images/Bitmap@4x 1.svg" alt="">
            </div>
        </div>

        <div class="viewlinks d-md-none d-block">
            <!-- <p>Things are easy with us, hamesha.</p> -->
            <div class="smallicons">
                <div class="row mobileiconsside justify-content-center">
                    <div class="pr-20 cust_col">
                        <div class="smalliconsimg">
                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Premium due dateimg.svg">
                        </div>
                        <div class="smalliconstext">
                            <p class="mb-0">View Premium</p>
                            <p class="m-0">Due Date/Amount</p>
                        </div>

                    </div>
                    <div class="pr-20 cust_col">
                        <div class="smalliconsimg">
                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Policyimg.svg">
                        </div>
                        <div class="smalliconstext">
                            <p class="m-0">View Policy</p>
                            <p class="m-0">Information</p>
                        </div>

                    </div>
                    <div class="pr-20 cust_col">
                        <div class="smalliconsimg">
                            <img class="icons iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/Requestimg.svg">
                        </div>
                        <div class="smalliconstext">
                            <p class="m-0">Request</p>
                            <p class="m-0">Statements</p>
                        </div>
                    </div>
                    <div class="pr-20 cust_col">
                        <div class="smalliconsimg">

                            <img class="iconsimg1024" src="<?=base_url()?>assets/digital-guide/images/View Fundimg.svg">
                        </div>
                        <div class="smalliconstext">
                            <p class="m-0">View Fund &</p>
                            <p class="m-0">Bonus Value</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="digital_guide d-md-none d-block">
            <a href="" class="btnred">Digital Guide <img class="circlearrowimg" src="<?=base_url()?>assets/digital-guide/images/circleimg.svg"></a>
        </section>
    </div>


</body>
<script>
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
'custom-button': true,
'ignore-storage': true,
'chat-bubble-text-desktop': "I'm Online",
'chat-bubble-text-mobile': "_NONE_",

sdkEvents: event => {
          console.log('📣 from SDK: ', JSON.stringify(event));
        }
 };
    function openChat(input) {
	//alert(1)
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

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</html>