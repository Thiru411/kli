<?php
//GA code Variables
$categoryGA = '';
if (get_cookie('kotak_customer_type')) {
  if (get_cookie('kotak_customer_type') == 'new_customer') {
    $categoryGA = "new customers";
  } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
    $categoryGA = "existing customers";
  } elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
    $categoryGA = "life advisor";
  }
} else {
  $categoryGA = "new customers";
}
//GA code Variables
?>
<style>

</style>
<section class="knw_vault">
 <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
        <?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  <article>
  <div class="midWrapper">
    <div class="roww align-baseline d-block-mob">
      <div class="coll-md-7-knw">
        <h1>Knowledge Vault</h1>
		 <?php if($this->uri->segment(3)==''){$name = "About Life Insurance";$name1="about life insurance";}
		 else{$name = ucwords(str_replace('-',' ',$this->uri->segment(3)));$name1=str_replace('-',' ',$this->uri->segment(3));}?>
		 
      </div>
	  <p class="hide-desktop "><?php echo $name;?> is a necessity and should be a part of your financial portfolio. If you are looking for information related to <?php echo $name1;?>, we have it all in one place. Check it out.</p>
      <div class="coll-md-3 mob-coll-md-3">
        <div class="term-sel">
        <div class="term-sel">
          <select id="knowledgevault_topic" onchange="get_knowledge_topic()">
		  <!--<option value="<?php //echo $name1;?>"><?php //echo $name;?></option>-->
		        <?php if(count($topicsInfo)) { 
      			$i = 0; $val =''; $lower_data =''; $trim_val = '';$selected='';
      			foreach ($topicsInfo as $boxInfo) { 
				$title = $boxInfo->title;
				if($title == 'Protection'){$title = 'Term Insurance';}
				$val = str_replace(' ','-',$title);
				$lower_data = strtolower($val);
				$trim_val = rtrim($lower_data,'-');				
				if($this->uri->segment(3) == $trim_val){
					$selected = 'selected';
				}else {$selected = '';}
				?>
				
            <?php 
			if($boxInfo->title!='Family' && $boxInfo->title!='Health Insurance'){
				//if($boxInfo->title=='Protection'){?>
					
				<option <?php if(($trim_val==$this->uri->segment(3))) echo $selected;?> value="<?php echo $trim_val;?>"><?php echo $title;?></option><?php } } ?>
          <?php $i++;} //} ?>
          </select>
          <img src="assets/images/arrow-bg.svg" alt="" class="arrow-bg">
        </div>
      </div>
    </div>
    <p class="hide-mobile"><?php echo $name;?> is a necessity and should be a part of your financial portfolio. If you are looking for information related to <?php echo $name1;?>, we have it all in one place. Check it out.</p>

 <script>
		  function get_knowledge_topic()
		  {
			  var knowledgevault_topic = $('#knowledgevault_topic').val();
			  window.location.href=base_url+"insurance-guide/knowledgevault/"+knowledgevault_topic;
		  }
		  </script>
		  
    <div class="knw-cards">
      <div class="roww">
        <div class="coll-md-6 pr-22">


<?php if(count($what_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-what.svg" alt="">
              </div>
              <div>
                <h2>What</h2>
              </div>
            </div>
            <ul>
			<?php //var_dump($what_array);?>
				<?php 
				$i=1;
				foreach($what_array as $whatinfo){ ?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $whatinfo['topic_url_title'];?>/<?php echo $whatinfo['url_title']?>"><?php echo $whatinfo['article_title'];?></a></li>
                <?php $i++;}  ?>
            </ul>
          </div>
		  <?php }  ?>

<?php if(count($why_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-why.svg" alt="">
              </div>
              <div>
                <h2>Why</h2>
              </div>
            </div>
            <ul>
             <?php 
				$j=1;

				foreach($why_array as $whyinfo){
					//$urlLink = $whyinfo['url_title'];
				//if($urlLink){}
				?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $whyinfo['topic_url_title'];?>/<?php echo $urlLink; ?>"><?php echo $whyinfo['article_title'];?></a></li>
                <?php $j++;}  ?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/protection/why-is-medical-test-important-for-term-insurance-in-india">Do I Need to Give a Medical Test for Term Insurance in India?</a></li>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/protection/benefits-of-term-insurance-for-working-women">Why does every working women need life insurance?</a></li>
            </ul>
          </div>
		  <?php }  ?>


<?php if(count($vs_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-vss.svg" alt="" class="h-47">
              </div>
              <div>
                <h2>vs.</h2>
              </div>
            </div>
            <ul>
              <?php 
				$k=1;
				foreach($vs_array as $vsinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $vsinfo['topic_url_title'];?>/<?php echo $vsinfo['url_title']?>"><?php echo $vsinfo['article_title'];?></a></li>
                <?php $k++;}  ?>
            </ul>
          </div>
<?php }  ?>



<?php if(count($can_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-can.svg" alt="">
              </div>
              <div>
                <h2>Can</h2>
              </div>
            </div>
            <ul>
              <?php 
				$l=1;
				foreach($can_array as $caninfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $caninfo['topic_url_title'];?>/<?php echo $caninfo['url_title']?>"><?php echo $caninfo['article_title'];?></a></li>
                <?php $l++;} ?>
            </ul>
          </div>
		  <?php }  ?>
		  



    <?php if(count($is_array)!=0){?>     
	<div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-is.svg" alt="">
              </div>
              <div>
                <h2>Is</h2>
              </div>
            </div>
            <ul>
             <?php 
				$m=1;
				foreach($is_array as $isinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $isinfo['topic_url_title'];?>/<?php echo $isinfo['url_title']?>"><?php echo $isinfo['article_title'];?></a></li>
                <?php $m++;}  ?>
            </ul>
          </div>
		 
		 <?php }  ?>
	</div>	 
		 <div class="coll-md-6 pl-22">
		 <?php if(count($how_array)!=0){?>		
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-hw.svg" alt="">
              </div>
              <div>
                <h2 class="mt-neg-5">How</h2>
              </div>
            </div>
            <ul>
             <?php 
				$n=1;
				foreach($how_array as $howinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $howinfo['topic_url_title'];?>/<?php echo $howinfo['url_title']?>"><?php echo $howinfo['article_title'];?></a></li>
                <?php $n++;} ?>
            </ul>
          </div>
		  <?php }  ?>


<?php if(count($which_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-whch.svg" alt="">
              </div>
              <div>
                <h2 class="">Which</h2>
              </div>
            </div>
            <ul>
              <?php
				$o=1;
				foreach($which_array as $whichinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $whichinfo['topic_url_title'];?>/<?php echo $whichinfo['url_title']?>"><?php echo $whichinfo['article_title'];?></a></li>
                <?php $o++;}  ?>
            </ul>
          </div>
<?php }  ?>


<?php if(count($tips_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-tips.svg" alt="">
              </div>
              <div>
                <h2>Tips</h2>
              </div>
            </div>
            <ul>
              <?php 
				$p=1;
				foreach($tips_array as $tipsinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $tipsinfo['topic_url_title'];?>/<?php echo $tipsinfo['url_title']?>"><?php echo $tipsinfo['article_title'];?></a></li>
                <?php $p++;} ?>
            </ul>
          </div>
		  <?php }  ?>
		  
		  
		<?php if(count($do_array)!=0){?>
          <div class="vault-card">
            <div class="d-flex bg-vault">
              <div>
                <img src="assets/images/knw-do.svg" alt="">
              </div>
              <div>
                <h2>Do</h2>
              </div>
            </div>
            <ul>
            <?php $q=1;
				foreach($do_array as $doinfo){?>
				<li><a target="_blank" href="<?php echo base_url()?>insurance-guide/<?php echo $doinfo['topic_url_title'];?>/<?php echo $doinfo['url_title']?>"><?php echo $doinfo['article_title'];?></a></li>
                <?php $q++;} ?>
            </ul>
          </div>		  
		  <?php }  ?>
		  
		  
        </div>
		
      </div>
    </div>

  </div>
  </article>
</section>