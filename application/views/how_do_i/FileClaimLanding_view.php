<?php 
if($data){
	foreach($data as $dt){
		$title = $dt->claimType;
		$description = $dt->claimDescription;
		$tblres = $dt->claimDocumentsToSubmit;
		$additionalInfo = $dt->additionalInfo;
	}
}
?>
<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  
  <!-- midWrapper Start -->
  <article class="claimDetailWrap">
    <div class="midWrapper">
      <div class="headDesc">
        <h1><?php echo $title; ?></h1>
		 <?php if (($this->config->item("fileclaim_tolfreeno"))) { ?>
                    <div class="callClaim">
                        <a href="javascript:;" class="telBtn01">Call on <b><?php echo $this->config->item("fileclaim_tolfreeno"); ?></b><br>
                            for Claim Query <span>(8:00 am to 10:00pm)</span> </a>
                    </div>
                <?php } ?>
        <p><?php echo $description; ?></p>
        <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a></div>
      <div class="claimDetails">
        <div class="claimBox">
        	<div class="claimtable claimtable01">
	        <?php 
				$tblres = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $tblres);
				$tblres = str_replace("<v>","<p>",$tblres);
				$tblres = str_replace("</v>","</p>",$tblres);
				echo htmlspecialchars_decode($tblres); 
			?>
			</div>
        </div>
        
        <div class="claimBox claimBoxLast">
		<?php if($pdfSection){ $c = 0; foreach($pdfSection as $dt){ ?>
          <div class="box <?php if($c==1){echo "boxBorder";}?>">
            <h3><?php echo $dt->pdfTitle; ?></h3>
            <ul class="claimBoxUL">
              <li> <a href="<?php echo str_replace('{filedir_17}', base_url().'assets/images/uploads/how_do_i/', $dt->pdfUrl) ?>" class="pdfIcon">Download Sample Form</a> </li>
              <li> <a href="<?php echo str_replace('{filedir_17}', base_url().'assets/images/uploads/how_do_i/', $dt->pdfUrl2) ?>" class="newsIcon">Download Form</a>
                <p><?php echo $dt->note; ?></p>
              </li>
            </ul>
          </div>
		  
		  <?php $c++; } } ?>
          <!--<div class="box boxBorder">
            <h3>Claim Under (Without Cover Plan)</h3>
            <ul class="claimBoxUL">
              <li> <a href="javascript:;" class="pdfIcon">Downlad Claim <br>Under Form</a> </li>
              <li> <a href="javascript:;" class="newsIcon">Downlad <br>Sample Form</a>
                <p>(Content of this is just for your referance perpose while filling form)</p>
              </li>
            </ul>
          </div>-->
        </div>
        <!--<h2>Additional Information</h2>-->
        <?php 
			//echo strip_tags($additionalInfo);
			$additionalInfo = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $additionalInfo);
			$additionalInfo = str_replace("<v>","<p>",$additionalInfo);
			$additionalInfo = str_replace("</v>","</p>",$additionalInfo);
			echo htmlspecialchars_decode($additionalInfo); 
			//echo strip_tags($additionalInfo);
		?>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="buyPlan buyPlan01">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Need help for paying premium?</h2>
      </div>
      <div class="tollFree ">
        <div class="needBox">
          <h3 class="callon">Call on toll free number <a href="javascript:;">1800 209 8800</a><span>(8:00 am to 10:00pm)</span></h3>
          <p>Call the toll free number for help regarding premium payments.</p>
        </div>
        <div class="needBox">
          <h3 class="mailus">OR Mail to <a  onClick="dataLayer.push({'event':'event need help email', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'email click'});" href="mailTo:kli.in/WECARE">kli.in/WECARE</a></h3>
          <p>Kindly mail us at the above email and we will respond to you at the earliest.</p> 
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
</section>
<!-- Section End --> 