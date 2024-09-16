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
        <h1>Life Advisor FAQs</h1>
        <p>Get answers to all your questions below.</p>
	    <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a>
      </div>
    </div>
  </article>
  
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
	  <form id="FaqSearchForm" name="FaqSearchForm" onsubmit="return false" autocomplete="off">
        <input type="text" id="searchFaqs" name="searchFaqs" placeholder="Search by your question" />
        <a href="javascript:;" id="searchFaqsSubmit" name="searchFaqsSubmit">Search</a>
		</div>
		</form>
    </div>
  </article>
  
  <article class="faqsWrap">
    <div class="midWrapper">
        <ul class="accordUL" id="faqLARes">
            <!--<li>
            	<h3><span>What is a claim?</span></h3>
                <div class="accordDesc">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tellus libero, venenatis ut ullamcorper nec, ultricies vitae velit. Sed id ultrices ex, in ornare sapien. In tristique, metus sit amet varius commodo, quam tellus porttitor ante, non volutpat lorem arcu in mauris. Integer at porta odio. Praesent blandit, neque id bibendum aliquet, dolor tellus venenatis felis, in auctor eros dui quis ante. Aenean ac leo non lorem ultricies lobortis. Nullam consectetur tempus pellentesque. Nunc et turpis varius tellus aliquam pharetra.</p>
                    <p>Sed bibendum ac mi et consequat. Vivamus congue efficitur dui, in semper nisi vestibulum id. Mauris ultrices euismod lorem at fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam vel scelerisque nibh, in tincidunt massa. In id gravida dolor. Nulla facilisi. Fusce dignissim venenatis nulla, eu scelerisque urna cursus eu. Aenean purus mi, aliquam at quam ac, cursus maximus elit.</p>
                </div>
            </li>-->
        </ul>
      <a href="javascript:;" class="link" id="moreFaqs">Load more FAQs</a> </div>
  </article>
</section>
<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var agentsJson = "";

var formsJson = "";
var formsJsonLmt = "";

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = "";
var resExeAdvLimit= "";

var jsonFaqs = <?php echo json_encode($lifeAdvisorFAQ);?>;
var resFaqsLimit= 6;
</script>