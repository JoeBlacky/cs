<?php $sideImage = get_field('image', $post->ID); ?>
<div class="page-intro" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>)">
  <section class="mw">
    <?php the_content(); ?>
  </section>
  <?php if($sideImage): ?>
  	<img class="side-image"	src="<?php echo $sideImage; ?>" alt="" />
  <?php endif; ?>
</div>