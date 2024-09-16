

<section class="mdvideo-sec"> 
  <!-- breadcrumb Start -->
  <!--<article class="breadcrumb">
      <div class="midWrapper">
          <ul>
              <?php echo $this->breadcrumb->output(); ?>
          </ul>
      </div>
  </article>-->
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article class="containerWrapper">
    <div class="midWrapper">
     
      <div class="contDetails"> 	<div class="position-relative">
      
							<!--<img src="assets/images/maxresdefault.jpg" class="prod-img1">
														
							<a data-fancybox href="https://www.youtube.com/embed/Vl-9hUgANFw?si=FbEMJ7a5pD0IAxN8" class="js-video-btn video-circle video-circle--lg">
								<div class="video-circle__button play-btn" data-tag="play-button" onclick="view_count('1','Products','','')">
									<img src="assets/images/kotak-tv/play-icon.png" class="prod-img">
								</div>
							</a>	-->		
							<div class="text-center">
<img class="mdiframe" src="assets/images/mdvideo/yyyy.png" alt="" data-youtube-id="Vl-9hUgANFw" width="60%" height="400"/>
</div>
										<!-- <iframe class="mdiframe" width="60%" height="400" src="https://www.youtube.com/embed/Vl-9hUgANFw" title="Mr. Mahesh Balasubramanian, MD, Kotak Life&#39;s message to Policy Holders"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allowfullscreen ></iframe>			 -->
						</div>
      
      </div>
    </div>
  </article>
  <!-- midWrapper End -->
</section>
<!-- Section End -->
<script>

lmSMTObj.track('videoMDPageLoaded');
  // $('.mdiframe').click(function(){
    
  //   lmSMTObj.track('MDvideoClicked')

  // });
  $('img').on('click', function(){
  $(this).fadeOut();
	$(this).parent().append('<iframe width="60%" height="400" src="https://www.youtube.com/embed/' + $(this).attr('data-youtube-id') + '?rel=0&amp;showinfo=0&autoplay=1" allow="autoplay" frameborder="0" allowfullscreen></iframe>');
      lmSMTObj.track('MDvideoClicked')

})
</script>