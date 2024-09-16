<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <!-- midWrapper Start -->
  <article class="locateWrap">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Locate a  Kotak Life branch</h1>
        <p>Kotak Life branches are spread across cities and towns of India. Enter your location and walk in to talk to our executives.</p>
        
		<a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
        
         <div class="topHeading">
      <h2>What you can do at Branches</h2>
	  <p>At the Kotak Life branches, you can fulfill a wide range of transactions like premium payment, policy revival and submission of policy servicing forms.</p>
    </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <?php $this->load->view('common/visit_kotak_branches');?>
  
 </section>
 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPSQ9MyzaDxMrpiQ4KoxffTgqE-QFaxAk" type="text/javascript"></script>

<script>
var formType = "Locate Kotak Branch";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>