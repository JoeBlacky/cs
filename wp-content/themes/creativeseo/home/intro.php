<?php
	$introButtonUrl  = get_field('intro_button_url');
  $introButtonText = get_field('intro_button_text');
  $introServices   = get_field('services_list');
?>
<div class="page-intro reverse" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>)">
  <section class="mw">
    <?php the_content(); ?>

    <?php if($introButtonUrl): ?>
      <a class="btn btn-large" href="<?php echo $introButtonUrl; ?>">
        <?php echo $introButtonText; ?>
      </a>
    <?php endif; ?>

    <?php if($introServices): ?>
      <div class="flex services-list">
  		  <?php foreach($introServices as $service): ?>
  		  	<div class="service">
  		  		<?php echo $service['content']?>
  		  	</div>
  		  <?php endforeach; ?>
  		</div>
    <?php endif; ?>
  </section>
</div>