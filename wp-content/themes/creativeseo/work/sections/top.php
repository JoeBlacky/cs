<?php
	$isEnabled      = get_field('enable_top_section');
  $sectionImage   = get_field('top_image');
  $sectionContent = get_field('top_content');
?>
<?php if($isEnabled) : ?>
	<div class="wd-section top">
		<?php  if($sectionImage): ?>
    	<img class="image" src="<?php echo $sectionImage; ?>" alt="<?php the_title; ?>" />
    <?php endif?>
    <?php if($sectionContent): ?>
	    <div class="mw">
	    	<section class="content">
	    		<?php echo $sectionContent; ?>
	    	</section>
	    </div>
    <?php endif?>
 </div>
<?php endif; ?>