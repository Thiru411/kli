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
    .containerWrapper .mapForm{height: auto; }
    .button-click{background: #08315f; margin-top: 5rem;}
    .button-click:hover{background: #da251c;}
    .branch-list p span{display: block; width: 100%;}
    @media screen and (max-width:480px) {
        .branch-list{width: 100%;}
    }
    
    .branch-list:last-child{border-bottom:0;}

</style>

<section>
    <!-- breadcrumb Start -->
    <article class="breadcrumb">
        <div class="midWrapper">
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="activeLink"><a href="javascript:;">Nearest Branch Locations</a></li>
            </ul>
        </div>
    </article>
    <!-- breadcrumb End -->

    <!-- midWrapper Start -->
    <article class="containerWrapper">
        <div>
        <div class="headDesc">
                    <h1>Nearest Branch Location</h1>
                    <!--a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a-->
                </div>
                <?php $this->load->view('common/visit_kotak_branches_for_near');?>

         
        </div>
    </article>
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
}
                $stdcodephonecall = $stdcode . $phonenumber;
                $stdcodephone = '<span>Contact Number: ' . $stdcode . $phonenumber.'</span>';
                $stdcodephone1 = '<b>Contact Number:</b>' . $stdcode . $phonenumber.'<br>';

                $stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
                $stdcodephone1 = $stdcodephone1 . '</br><b>Secondary Number:</b>18002098800';


            } else {
                $stdcodephone = '<span>Contact Number: 18002098800</span>';
                $stdcodephonecall = '18002098800';
                $stdcodephone1 = '<b>Contact Number:</b> 18002098800</>';

            }
            echo "{";
                echo "nameshowing:" . json_encode("Kotak Life Insurance ".$brnchcity." Branch") . ",";
                echo "name:" . json_encode("<p>Kotak Life Insurance, &nbsp; &nbsp;".$brnchcity."  Branch</p>") . ",";
                echo "structureofaddress:" . json_encode("<p>{$brnchaddress1}, {$brnchcity}, {$states}-{$brnchpincode} {$stdcodephone}</p>") . ",";
                echo "latitude: {$latitude},";
                echo "longitude: {$longitude},";
                echo "stdcodephonecall:{$stdcodephonecall},";
                echo "branchaddressdetails:" . json_encode("<div class='info_content'><h3>Kotak Life Insurance, {$brnchcity} </h3><hr/><p><b>Address</b> : <br/> <p>{$brnchaddress1}, {$brnchcity}, {$states}-{$brnchpincode}</p><br><p>{$stdcodephone1}</p></div>") . "},";
                        }
    } ?>
];

</script>
<script src="<?= base_url()?>assets/js/near-loc1.js"></script>

<!-- Load Google Maps API with callback to initialize the map -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDxXs--htI0lAdhO1dr6tXzQqIkvycZ2U&callback=initMap">
</script>

