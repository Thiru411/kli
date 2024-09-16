<script>
(function() {
    var cx = '009495362598862889223:zcnggqyxtxg';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
})();
</script>
<section>
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <article>
    <div class="midWrapper">
	<div class="searchResultWrap">
     	<gcse:searchresults-only></gcse:searchresults-only>
	</div>
    </div>
  </article>
</section>