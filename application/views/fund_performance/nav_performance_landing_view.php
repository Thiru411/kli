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
  //GA code Variables
?>
 <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<style>
.ui-datepicker table{background-color:#fff!important;}
.ui-state-default{padding-right:5px!important;padding-left:5px!important;}
.ui-datepicker td{padding:0 !important;}
/*    .highcharts-container, rect, g, svg{width: 800px !important; height: 300px !important;}*/
</style>
<!-- Section Start -->
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
        <?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <?php if($moduleInfo) { ?> 
          <h1><?php echo $moduleInfo->title; ?></h1>
          <?php echo $moduleInfo->description; ?>
          <a href="<?php echo base_url(FP_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
        <?php } ?>
      </div>
    </div>
  </article>
  <!-- midWrapper End -->
  <!--
  
  <center><p><a href=base_url.'/pdf/NAV_17.12.19.pdf' target="_blank" style="font-size:1.6em;"><u>Click here for NAV for Dec 17 2019</u></a></p></center>
  <br><center><p><a href=base_url.'/pdf/NAV-18.12.19.pdf' target="_blank" style="font-size:1.6em;"><u>Click here for NAV for Dec 18 2019</u></a></p></center>
  
  -->
  <!-- Insurance Guide Start -->
  <input type="hidden" id="slect-tap-no" value="<?php echo !empty($schemeSlug)? 1 : ''; ?>">
  <div class="tabWrap tabWrap02">
  
  <ul class="fundTabUL fundTabUL02">
    <?php
      //GA code Variables
      $eventGA = 'event tab';
      $actionGA = 'nav performance';
      //GA code Variables
    ?>
	<!--<li><a href="assets/images/uploads/fund-performance/pdfs/NAV03122020.pdf" data-value="latest" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': 'tab|latest nav'});"> Latest NAVs</a></li>-->
    <li><a href="javascript:;" data-value="latest" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': 'tab|latest nav'});"> Latest NAV</a></li>
    <li><a href="javascript:;" data-value="previous" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': 'tab|previous nav'});">Previous NAV</a></li>
  </ul>
  </div>
  <article class="navWrapper navWrapper02" id="mainNAVWrapper">
    <div class="midWrapper"> 
      
      <!-- Latest NAV Start -->
      <div class="navWrapDetails" id="latest_NAV_div">
        <!-- Inner Loader Start-->
        <div class="innerLoader"><img src="assets/images/loader.gif" alt="Kotak Loader"></div>
        <!-- Inner Loader END-->
      </div>
      <!-- Latest NAV End --> 
      
      <!-- Previous NAV Start -->
      <div class="navWrapDetails"  id="latest_NAV_div">
        <div class="filterKLI">
          <p>You can view your scheme's/fund's past performance by looking at the NAV history.</p>
          <div class="dateSelect">
            <div class="selectDate"> <span>From</span>
              	<input type="text" class="dateFormat" id="startDate" value="<?php echo (!empty($startDate)?$startDate:''); ?>" />
                          </div>
            <div class="selectDate"> <span>To</span>
              <input type="text" class="dateFormat" id="endDate" value="<?php echo (!empty($endDate)?$endDate:''); ?>"/>
              
            </div>
          </div>
          <div class="keyWordWrap">
            <p>Select scheme or fund</p>
            <div class="selectbg">
              <div class="selectedvalue"><?php echo $schemes[$schemeSlug]; ?></div>
              <select id="schemes-dd">
                <?php 
                  if($schemes){
                    foreach ($schemes as $key => $value) {
                        $slected_status = 'selected="selected"';
                        if($schemeSlug != $key){
                            $slected_status = '';
                        }
                        echo '<option value="'.$key.'" '.$slected_status.'>'.$value.'</option>';
                    }
                  }
                ?>
              </select>
            </div>
            <a href="javascript:;" class="buttonClick" id="submit-graph">Go</a>
            <div id="graph-from-error" class="errorMsg"></div></div>
        </div>
        <?php if(!empty($startDate)) { ?>
        <div class="navDetailWrapper">
          <h2>NAV Performance analysis for <?php echo $schemes[$schemeSlug]; ?></h2>
          <?php if(count($table_view)) { 
              if($disable_graph_view  == 0){
            ?>

            <ul class="viewUL">
              <li><a href="javascript:;" class="gView selected">Graph View</a></li>
              <li><a href="javascript:;" class="tView">Table View</a></li>
            </ul>
            <div class="viewWrap">
            <div class="graphWrap">
              <div id="graphicalView"></div>           
              </div>
              
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableClass">
              <tr>
                <th>&nbsp;</th>
               <!-- <th>NIFTY</th>-->
                <th>NAV</th>
                <th>Dates</th>
              </tr>
                <?php if(count($gtable_view)) {
                    foreach ($gtable_view as $gvalue) { ?>
                      <tr>
                        <td><strong><?php echo $gvalue['title']; ?></strong></td>
                        <!--<td><?php //echo $gvalue['nifty_value']; ?></td>-->
                        <td><?php echo $gvalue['nav_value']; ?></td>
                        <td><?php echo $gvalue['date_value']; ?></td>
                      </tr>
                <?php }  } ?>
              </table></div>
              <div class="viewWrap ">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableClass">
                <tr>
                  <th class="26%">Date</th>
                  <th width="37%">NAV</th>
                  <!--<th width="37%">NIFTY</th>-->
                </tr>
                <?php if(count($table_view)) {
                    foreach ($table_view as $tvalue) { ?>
                      <tr>
                        <td><?php echo $tvalue['date_value']; ?></td>
                        <td><?php echo $tvalue['nav_value']; ?></td>
                        <!--<td><?php //echo $tvalue['nifty_value']; ?></td>-->
                      </tr>
                <?php }  } ?>
              </table> </div>
        <?php } else { ?>
            
            <div class="viewWrap ">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableClass bg-table">
              <tr>
                <th class="50%" style="text-align: center;">Date</th>
                <th width="50%" style="text-align: center;">Policy Account Value</th>
              </tr>
              <?php if(count($table_view)) {
                  foreach ($table_view as $tvalue) { ?>
                    <tr>
                      <td style="text-align: center;"><?php echo $tvalue['date_value']; ?></td>
                      <td style="text-align: center;"><?php echo $tvalue['nav_value']; ?></td>
                    </tr>
              <?php }  } ?>
            </table> </div>
            <?php } ?>
            <div class="clear"></div>
              <a href="<?php echo $pdfReportURL; ?>" target="_blank" class="pdfIcon">Download PDF </a>&nbsp;

<a id="btnExport" onclick="Export12()" class="pdfIcon excelicon">Download Excel</a> 
			  
          <?php } else { ?>
            <div class="noRecordDiv">Specified search returned no data. Please check your date range.</div>
          <?php }  ?>
        </div>
         <?php }  ?>
      </div>
      <!-- Previous NAV End --> 
      
    </div>
  </article>
  <!-- Insurance Guide End --> 

  <input type="hidden" id="nifty-values" value='<?php echo $nifty_values; ?>' >
  <input type="hidden" id="nav-values" value='<?php echo $nav_values; ?>' >
  <input type="hidden" id="date-values" value='<?php echo $date_values; ?>' >
  <input type="hidden" id="latest-nav-values" value='' >
  <input type="hidden" id="method-url" value="<?php echo base_url(FP_MODULE_LINK.'/nav-performance/');?>">

  
</section>
<!-- Section End --> 

<div id="kjsa" hidden>
<table id="resultData" style="display:none;">
</table>
</div>

		
<script src="<?=base_url()?>assets/js/ajax_libs_jquery_2.2.4_jquery.min.js"></script>			
<script src="<?=base_url()?>assets/js/cdn.jsdelivr.net_gh_rainabba_jquery-table2excel@1.1.0_dist_jquery.table2excel.min.js"></script>
 
  
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
	
	
	
 <script type="text/javascript">
          // let AJAX_URL="<?php echo base_url(FP_MODULE_LINK.'/getexceldata');?>";
          let sdate="<?=$this->uri->segment(4);?>";
		  let tdate="<?=$this->uri->segment(5);?>";
		  let urltype="<?=$this->uri->segment(3);?>";
           $(document).ready(function(){
			
		$.ajax({
		   //url:"<?php echo base_url(FP_MODULE_LINK.'/getexceldata');?>",
		   url:base_url+"Fund_performance/getexceldata",
		   type:"POST",
		   data:{sdate:sdate,tdate:tdate,urltype:urltype},
		   success:function(res){
			 //  alert(res+'=====')
			$('#resultData').html(res)
			}
		});
         

         });
        </script>
		
	<script>
 function Export12() {
	 let urltype="<?=$this->uri->segment(3);?>";
	   let file = new Blob([$('#kjsa').html()], {type:"application/vnd.ms-excel"});

let url = URL.createObjectURL(file);
const date = new Date();
var filename=date.getDate()+'-'+date.getMonth()+'-'+date.getFullYear();//date.getDate()+'-'+date.getMonth()+''+date.getFullYear()+'-'+date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
let a = $("<a />", {
  href: url,
  download: urltype+".xls"
})
    .appendTo("body")
    .get(0)
    .click();
      //e.preventDefault();
    
  }
</script>
<script>
		
	$(function () {
		setTimeout(function() {
	$(".dateFormat").datepicker({dateFormat:'dd-mm-yy'});
		},2000)
	});
    

if($(window).width() < 700){

		setTimeout(function() {
GraphChart.setSize(($(window).width() - 50), 350)

},3000)
}
  
 </script>

<!-- Section End --> 

