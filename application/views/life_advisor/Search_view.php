<!-- Section Start -->
<section>
    <!-- breadcrumb Start -->
    <article class="breadcrumb">
        <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
    </article>
    <!-- breadcrumb End --> 

    <!-- midWrapper Start -->
    <article>
        <div class="midWrapper">
            <div class="headDesc">
                <h1>Know your Life Advisor</h1>      
                <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a>
            </div>
        </div>
    </article>

    <article class="searchWrapper">
        <div class="midWrapper">
            <div class="searchBox searchBox01">
                <form id="LifeAdvisorSearchForm" name="LifeAdvisorSearchForm" onsubmit="return false" autocomplete="off">
                    <input type="text" id="searchLifeAdvisor" value="<?php if(isset($_GET["ID"])){echo $_GET['ID']; }?>" name="searchLifeAdvisor" placeholder="Enter 8-digit Agent ID (without KLI prefix)" />
                    <a href="javascript:;" id="searchLifeAdvisorSubmit" name="searchLifeAdvisorSubmit">Search</a>
                    <div id="searchLifeAdvisor_error" class="input_error errorMsg"></div>
                </form>
            </div>
        </div>
    </article>

    <article class="searchAdvisorsWrapper">
        <div class="midWrapper">        
            <div id="lifeAdvisorData"></div>
                    
            <div class="innerLoader">
                <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="Kotak Loader" />
            </div>
        </div>
    </article>
	
	<article class="buyPlan buyPlan01">
        <div class="midWrapper">
            <div class="topDesc">
                <h2>Explore term insurance plan</h2>            
            <p>If you don't have an insurance, click below to explore or calculate premium.</p>
            <div class="centerDiv">			
                <a data-action="click" data-label="Know More" data-category="verify-life-advisor" data-event="event button" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="redBtn ga_banner_track">Know More</a>            
                <a rel="follow" data-action="click" data-label="Calculate Premium" data-category="verify-life-advisor" data-event="event button" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=calculate_premium&utm_content=life_advisor&lead_group=kotak_organic" class="link ga_banner_track">Calculate Premium</a>
            </div>
			</div>            
        </div>
    </article>

</section>
<script>
    var gaCat = <?php echo json_encode($gaCat); ?>;

    var agentsJson = "";
    var jsonSucessStories = "";
    var resLimit = "";
    var jsonExeAdvisors = "";
    var resExeAdvLimit = "";
    var jsonFaqs = "";
    var resFaqsLimit = "";

    var formsJson = "";
    var formsJsonLmt = "";

</script>