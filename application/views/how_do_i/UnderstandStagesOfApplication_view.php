<style>
.ro0w{width:100%;}
.co0l-6{width:50%;padding:0 15px;}
.custom_align{display:flex;flex-direction:column;justify-content:center;}
.title_understand{padding-bottom:15px}
.qr_scan1{ font-size: 2em;line-height: 1.4em;color:#5E6061;text-align: left;
    margin-left: 15px;}
.qr_code1{width: 100%;max-width:250px;height:250px;margin:0 auto;}
.img_align{text-align:center;}

@media only screen and (max-width:768px){
.co0l-6{width: 100%;}
.qr_code1{width: 100%;max-width:150px;height:150px;}
.ro0w .vidBox{width: 100% !important;padding-left:0px !important;}
.qr_scan1{font-size:16px;}
}
</style>
<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article >
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Track My Proposal Status</h1>
        <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
    <div class="ro0w">
      <div class="co0l-6">
      <div class="claimWrapper claimWrapper01">
        <div class="vidWrap">
			<?php
			if($stagesApplicationData){
				foreach($stagesApplicationData as $dt){ ?>
					<p class="title_understand"><?php echo $dt->videoTitle;?></p>
					
            <div class="vidBox">
                <iframe width="560" height="315" src="<?php echo $dt->videoLink;?>" frameborder="0" allowfullscreen></iframe>
            </div>
				<?php }
			}
			?>
        </div>
      </div>
      </div>
      <div class="co0l-6 custom_align">
        <p class="qr_scan1 title_understand">Now you can track your proposal status with ease on WhatsApp. Click the link <a href="http://kli.in/wa">kli.in/wa</a> or scan the QR code.</p>
        <div class="img_align">
        <img class="qr_code1" src="<?=base_url()?>assets/images/QR-Whatsapp.png" >
        </div>

      </div>
    </div>
    </div>
  </article>
</section>
<script>

var formType = "Understand Stages of Application";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>