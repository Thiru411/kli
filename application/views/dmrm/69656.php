<style>
.breadcrumb{border-top: 1px solid #dfdfdf;}
.midWrapper {
    width: 1150px;
    margin: 0 auto;}
    .breadcrumb ul li {
    width: auto;
    position: relative;
    padding: 0 30px 0 0;
}
.headDesc {
    padding: 30px 0;
    position: relative;
}
ul.innerUL, .headDesc {
    width: 100%;
    float: left;
    padding: 50px 0 50px 0;
}
.headDesc a.kliBack {
    bottom: auto;
    top: 45px;
}
a.kliBack {
    position: absolute;
    left: 0;
    bottom: 20px;
}.bLifeAdvisorWrapper, .calcPremium, .followUsWrapNew, .buyPlan, .planWrap, .insuranceGuide01, .searchWrapper {
    background: rgb(255,255,255);
    background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(233,232,233,1) 100%);
    background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(233,232,233,1) 100%);
    background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(233,232,233,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f3f4', endColorstr='#e9e8e9', GradientType=1 );
}

.searchAdvisorsResult .advisorsWrap img.advisorsImg{left: 20px;}
.prof-img{width: 140px !important;height: auto;}

.advisorsImg.verified-txt{width: 180px;
    float: left;
    position: absolute;
    left: 48px;bottom: -5%;color: green;font-size: 14px;}
    
    @media only screen and (max-width: 425px){
    .advisorsImg.verified-txt{left: 180px;top: 48%;bottom: unset;}
    }
    @media only screen and (max-width: 414px){
    .advisorsImg.verified-txt{left: 170px;top: 40%;bottom: unset;}
    }
    @media only screen and (max-width: 375px){
    .advisorsImg.verified-txt{left: 170px;top: 40%;bottom: unset;}
    }
    .p-0{padding: 0 !important;}
    ul.innerUL, .headDesc h1{margin-bottom: 0 !important;}
    .midWrapper{width: 100% !important;}
</style>
<!-- Section Start -->
<section>
    <!-- breadcrumb Start -->
    
    <!-- breadcrumb End --> 

    <!-- midWrapper Start -->
    <article>
        <div class="midWrapper">
            <div class="headDesc p-0">
                <h1>Know your Relationship Manager</h1>      
                <!-- <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a> -->
            </div>
        </div>
    </article>
 

    <article class="searchAdvisorsWrapper">
        <div class="midWrapper">
            <div id="lifeAdvisorData">
                <div class="searchAdvisorsResult">
                    <div class="advisorsWrap">
                        <img src="<?php echo base_url(); ?>assets/images/dmrm/69656.jpg" title="Performance of Kotak Dynamic Growth Fund" alt="Performance of Kotak Dynamic Growth Fund" class="advisorsImg prof-img">
                        <span class="advisorsImg verified-txt">Verified Agent</span>
                        <ul class="advisorsList">
                            <li>Name: <span>Mr. Ramesh Dattatraya Dhore</span> </li>
                            <li>Location: <span>Mumbai</span> </li>
                            <li>Working Since: <span>2018</span> </li>
                         </ul>
                    </div>
                </div>
            </div>

            <div class="innerLoader">
                <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="Kotak Loader" />
            </div>
        </div>
    </article>
    
    <!--<article class="buyPlan buyPlan01">
        <div class="midWrapper">
            <div class="topDesc">
                <h2>Explore term insurance plan</h2>            
            <p>If you don't have an insurance, click below to explore or calculate premium.</p>
            <div class="centerDiv">            
                <a data-action="click" data-label="Know More" data-category="verify-life-advisor" data-event="event button" href="<?php echo base_url()?>online-plans/online-protection-plans/kotak-e-term-plan-online" class="redBtn ga_banner_track">Know More</a>            
                <a data-action="click" data-label="Calculate Premium" data-category="verify-life-advisor" data-event="event button" href="<?php echo base_url()?>OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=calculate_premium&utm_content=life_advisor&lead_group=kotak_organic" class="link ga_banner_track">Calculate Premium</a>
            </div>
            </div>            
        </div>
    </article>-->

</section>
