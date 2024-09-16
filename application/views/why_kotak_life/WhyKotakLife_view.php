
<section>
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul><?php echo $this->breadcrumb->output(); ?></ul>
    </div>
  </article>
  <article>
    <div class="midWrapper">
      <div class="headDesc headDesc01">
        <h1>Why Kotak Life</h1>
        		<p>Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 50 million lives nationwide (as on June 30 <sup>th</sup>, 2024).</p>
        <img alt="Icon for Why Kotak Life section" title="Icon for Why Kotak Life section" src="<?=base_url()?>assets/images/whyKotak_hd.png"> </div>
        <ul class="landingUL wk-life">
        
		<?php 
			if(get_cookie('kotak_customer_type')){
				$cusType = get_cookie('kotak_customer_type');
			}else{
				$cusType = "new_customer";
			}
			$c = 0; 
			foreach($whyKotakHome as $dt){
				if($cusType=="life_advisor"){
					$menuTitle = $dt->menuTitle;
					if($menuTitle == "Career"){
						continue;
					}
				}
				
				$bigImg = str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->menuPublicImg);
				$html = "<div class='img'><img src='{$bigImg}' alt='{$dt->menuTitle}'></div>";
				if($c%2 == 0){
					$even = $html;
					$odd = "";
				}else{
					$even = "";
					$odd = $html;
				}
		?>
			<li>
				<?php echo $odd;?>
			  <div class="boxInfo">
				<div class="mid"> <img src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->menuSmallImg) ?>" alt="<?php echo $dt->menuTitle;?>">
				  <h3><?php echo $dt->menuTitle;?></h3>
				  <p><?php echo $dt->menuDescription; ?></p>
				  <a onClick="dataLayer.push({'event':'event why kotak life', 'category':'<?php echo $gaCat;?>', 'action':'why kotak life?','label':'know more|<?php echo $dt->menuTitle;?>'});" href="<?php echo base_url(WKL_MODULE_LINK."/".$dt->url_Title); ?>" class="link">Know more</a> 
				</div>
			  </div>
			  <?php echo $even;?>
			</li>
		<?php $c++; } ?>
		
        
      </ul>
    </div>
  </article>
  <input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />
  <?php $this->load->view('common/need_help_buying_a_plan',array('actionGA' => "Why Kotak Life"));?> 
</section>