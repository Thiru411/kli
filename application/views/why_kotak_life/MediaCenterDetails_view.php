<?php 
$flag_check = $urlSlug = $this->uri->segment(4);
foreach($kliNewsDetails as $dt){
	$kliNewsEntryID = $dt->entry_id;
	$kliNewsHeadline = $dt->kliNewsHeadline;
	$kliNewsSource = $dt->kliNewsSource;
	$kliNewsImage = $dt->kliNewsImage;
	$kliNewsContent = $dt->kliNewsContent;
	$kliNewsDate = $dt->kliNewsDate;
	$kliNewsMonth = $dt->kliNewsMonth;
	$kliNewsYear = $dt->kliNewsYear;
	$kliNewsPublication = $dt->kliNewsPublication;
}
?>
<section>
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul><?php echo $this->breadcrumb->output(); ?></ul>
    </div>
  </article>
  <article>
    <div class="midWrapper">
		<div class="headDesc">
			<a class="kliBack" href="<?=base_url()?>why-kotak-life/media-center"><span>Back</span></a>
		</div>
      <div class="mediaInner">
        <div class="leftData">
          <h1><?= $kliNewsHeadline ?></h1>
          <ul class="dateInfo">
            <li><?= $kliNewsDate ?></li>
            <li>Source: <?= $kliNewsSource ?></li>
          </ul>
          <img class="lazy" data-src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $kliNewsImage) ?>" alt="media detail" />
          <p><?= $kliNewsContent ?></p>
		  <div class="shareW">
            <ul class="shareUL">
              <li>Share this news</li>
			  <?php 
				$kliNewsContent = strip_tags($kliNewsContent);
				$WidgetText = substr($kliNewsContent, 0, strrpos(substr($kliNewsContent, 0, 120), ' '));
				if (strlen($WidgetText) > 120) { $WidgetText .= "..."; }
			  ?>
              <li>
                <a href="javascript:;" class="fb" data-title="<?php echo $kliNewsHeadline; ?>" data-image="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $kliNewsImage) ?>" data-desc="<?php echo $WidgetText; ?>">facebook</a>
              </li>
              <li>
                <a href="javascript:;" class="twt" data-title="<?php echo $kliNewsHeadline; ?>" data-desc="<?php echo $WidgetText; ?>">twitter</a>
              </li>
              <li>
                <?php $email_link = 'mailto:email@example.com?subject=Kotak KLI in NEWS - '.$kliNewsHeadline.'&body='.$kliNewsContent.'Click to view : '.current_url(); ?>
                <a href="<?php echo $email_link; ?>" class="mail">mail</a>
              </li>
            </ul>
            <ul class="controlBtn">
				<li>
				<?php 
				if($kliInNews){
					foreach($kliInNews as $dt){
						if($dt->entry_id < $kliNewsEntryID){ ?>
						<a href="<?php echo base_url();?>why-kotak-life/media-center-details/<?php echo $dt->entry_id;?>/<?=$flag_check ?>" class="prevLink ">Prev</a>
						<?php break; }
					}
				} ?>
				</li>
				<li>
				<?php 
				if($kliInNews){
					foreach($kliInNews as $dt){
						if($dt->entry_id > $kliNewsEntryID){ ?>
						<a href="<?php echo base_url();?>why-kotak-life/media-center-details/<?php echo $dt->entry_id;?>/<?=$flag_check ?>" class="nextLink ">Next</a>
						<?php break; }
					}
				} ?>
				</li>
            </ul>
          </div>
        </div>
        <div class="rightData">
          <p>Also read</p>
          <ul class="reportUL">
			<?php 
			if($kliInNews){
			$i= 0;
			foreach($kliInNews as $dt){ ?>
				  <li>
					<div class="reportBox">
					  <h3><?php echo $dt->kli_date;?></h3>
					  <p><?php echo $dt->kli_title;?></p>
					  <a href="<?php echo base_url();?>why-kotak-life/media-center-details/<?php echo $dt->entry_id;?>/<?=$flag_check ?>" class="newsIcon">Read more</a> 
					</div>
				  </li>
			<?php $i++; if($i==4){break;} }	}?>
          </ul>
        </div>
      </div>
    </div>
  </article>
</section>
<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var json1 = "";
var json2 = "";
var jsonData = "";
var cb_json = "";
</script>