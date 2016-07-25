<?php
	$isEnabled      = get_field('enable_middle_section');
  $sectionImage   = get_field('middle_image');
  $sectionContent = get_field('middle_content');
?>
<?php if($isEnabled) : ?>
	<div class="wd-section middle">
		<?php if($sectionImage): ?>
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