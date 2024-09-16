<style>
    /* Styles for star ratings and map locations */
    .star_ratings { display: flex; margin-bottom: 10px; }
    .location_details p { font-size: 15px; }
    .location_details h2 { font-size: 16px; margin: 0; display:flex;padding: 0px;  margin-bottom: 100px; padding-left: 0 !important }
    .location_details p { margin: 0; }
    .location_details p, .location_details h2 { margin-bottom: 10px !important;  }
    .location_details h2{   font-family: 'Lato-Bold'; margin-top: 3rem !important;}
    .star_ratings p { align-self: center; margin-right: 10px !important; margin-bottom: 0 !important; }
    .dcs { display: flex; flex-wrap: wrap; padding-bottom: 20px;}
    .dcs a{min-width:30px !important;height:unset;line-height: 0;}
    .dcs1 img { margin: 10px 0; }
    .dcs1 p { padding-left: 10px; margin-bottom: 0 !important; }
    .disdisplay{display: none;}
    /* stars */
    ul {
        list-style: none;
        padding: 0;
    }

    .star-rating {
        display: inline-block;
        font-size: 0;
        margin-right: 10px;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        font-size: 20px;
        color: #ccc;
        cursor: pointer;
        display: inline-block;
    }

    .star-rating label:hover,
    .star-rating input:checked+label {
        color: #ffc107;
    }
    /* stars */
    .branch-list{border-bottom: 1px solid #d0d0d0; float: left; width: 80%;}
    .branch-list h2 p, .branch-list h2{margin-bottom:0 !important;}
    .distancekm{font-weight: 400 !important; font-family: 'Lato-Regular';    padding-left: 1rem}
    .containerWrapper .mapForm, .mapForm{height: auto; }
    .button-click{background: #08315f; margin-top: -75rem;float:right;}
    .button-click:hover{background: #da251c;}
    .branch-list p span{display: block; width: 100%;}
    @media screen and (max-width:480px) {
        .branch-list{width: 100%;}
		
        .button-click{margin-top: 5rem; position: static; left: 20px; float:none;}
        .branch-list:first-child{margin-top: 0rem;}
		
    }
    
    
    
    .branch-list:last-child{border-bottom:0;}
    .kli-b {font-weight: 600;    letter-spacing: 0.3px;  margin-bottom: 5px;}
.kli-address {    margin-bottom: 5px;}
.kli-contact{margin-top:5px;}
.info_content{width:250px}
#location_denied_message{
    text-align: center;
    font-size: 20px;
    margin-bottom: 1rem;
}
#location_denied_message p{color:#da251c; 
                              line-height: 1.0em;
}
</style>
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
  
                <?php $this->load->view('common/visit_kotak_branches_for_near');?>
  
 </section>
 
<script>
   var structureofaddress =branchaddressdetails= [];
const branchLocations = [
    <?php if (!empty($stateslist)) {
        foreach ($stateslist as $branches) {
             $branch_area = "";
            $states = $branches->states;
            $latitude = $branches->latitude;
            $longitude = $branches->longitude;
            $brnchpincode = $branches->brnchpincode;
           
            $brnchcity = $branches->brnchcity;
            $brnchaddress2 = "";
            $brnchaddress1 = $branches->brnchaddress1;

            if (isset($branches->phonenumber) && ($branches->phonenumber != '' && $branches->phonenumber !='NA' && $branches->phonenumber!='-')) {
                $phonenumber = $branches->phonenumber;
                $stdcode = $branches->stdcode;
if($stdcode=='NA' || $stdcode=='-'|| $stdcode==''){
    $stdcode='';
    $stdcodephonecall = $stdcode . $phonenumber;
    $stdcodephone = '<span>Contact Number : '.$phonenumber.'</span>';
    $stdcodephone1 = '<p class="kli-contact"><b>Contact Number : </b>' .$phonenumber.'</p>';

    $stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
    $stdcodephone1 = $stdcodephone1 . '<p class="kli-contact"><b>Secondary Number:</b>18002098800</p>';
}else{
                $stdcodephonecall = $stdcode . $phonenumber;
                $stdcodephone = '<span>Contact Number: ' . $stdcode .'-'.$phonenumber.'</span>';
                $stdcodephone1 = '<p class="kli-contact"><b>Contact Number : </b>' . $stdcode .'-'.$phonenumber.'</p>';

                $stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
                $stdcodephone1 = $stdcodephone1 . '<p class="kli-contact"><b>Secondary Number : </b>18002098800</p>';

}
            } else {
                $stdcodephone = '<span>Contact Number: 18002098800</span>';
                $stdcodephonecall = '18002098800';
                $stdcodephone1 = '<p class="kli-contact"><b>Contact Number : </b> 18002098800</p>';

            }
            echo "{";
                echo "nameshowing:" . json_encode("Kotak Life Insurance ".$brnchcity." Branch") . ",";
                echo "name:" . json_encode("<p>Kotak Life Insurance, &nbsp; &nbsp;".$brnchcity."  Branch</p>") . ",";
                echo "structureofaddress:" . json_encode("<p>{$brnchaddress1}, {$brnchcity}, {$states}-{$brnchpincode} {$stdcodephone}</p>") . ",";
                echo "latitude: {$latitude},";
                echo "longitude: {$longitude},";
                echo "stdcodephonecall:{$stdcodephonecall},";
                echo "branchaddressdetails:" . json_encode("<div class='info_content'><h3 class='kli-b'>Kotak Life Insurance, {$brnchcity} </h3><p class='kli-address'><b>Address</b> : <p>{$brnchaddress1}, {$brnchcity}, {$states}-{$brnchpincode}</p>{$stdcodephone1}</div>") . "},";
                        }
    } ?>
];

</script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Include the MarkerClusterer library -->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="<?= base_url()?>assets/js/near-loc.js"></script>

<!-- Load Google Maps API with callback to initialize the map -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDxXs--htI0lAdhO1dr6tXzQqIkvycZ2U&callback=initMap">
</script>

<script>
var formType = "Locate Kotak Branch";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>