<!-- Section Start -->
<section>
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
  <!-- breadcrumb End -->
    <!-- midWrapper Start -->
  <article class="">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Our Executive Advisors </h1>
        <p>Discipline. Drive. Determination. The 3 Ds of success. These are the qualities that we look for in individuals in our Advisor Promotion Programme: Pragati. Our Executive Advisors have always utilised knowledge, experience and expertise to correctly assess our customers' needs and suggest the ideal plan from our diverse product portfolio. It is this dedication to customers that has played a big part in their success. We are sure that they will continue to improve upon their performance, which will help them reach even higher levels within the organisation.</p>
        <a href="javascript:;" class="kliBack" onclick="goBack();"><span>Back</span></a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="planWrap bodWrapper executiveWrapper">
    <div class="midWrapper">
      <div class="bodWrap">
        <ul class="planUL bodUL" id="advisorsRes">
			
        </ul>
      </div>
      <div class="executiveCount"><span class="count" id="visibleRecords"></span>/<span class="total" id="totalRecords"><?php echo $executiveAdvisorsCount; ?></span> Executive Life Advisors </div>
      
      <a href="javascript:;" class="link" id="moreExecutiveAdv">Load more</a></div>
  </article>
  <!-- midWrapper End -->
</section>
<!-- Section End --> 
<script>
var agentsJson = "";

var formsJson ="";
var formsJsonLmt = "";

var gaCat = <?php echo json_encode($gaCat);?>;

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = <?php echo json_encode($executiveAdvisors);?>;
//var resExeAdvLimit= <?php echo json_encode($executiveAdvisorsCount); ?>;
var resExeAdvLimit= 11;

var jsonFaqs = "";
var resFaqsLimit= "";
</script>