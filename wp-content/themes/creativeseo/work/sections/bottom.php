<?php
	$isEnabled      = get_field('enable_bottom_section');
	$sectionImage   = get_field('bottom_image');
	$sectionContent = get_field('bottom_content');
	$workUrl        = get_field('url_link');
?>
<?php if($isEnabled) : ?>
	<div class="wd-section bottom">
		<?php  if($sectionImage): ?>
    	<img class="image" src="<?php echo $sectionImage; ?>" alt="<?php the_title; ?>" />
    <?php endif; ?>
    <?php if($sectionContent): ?>
    	<div class="mw">
		    <section class="content">
		    	<?php echo $sectionContent; ?>
		    	<?php if($workUrl): ?>
			      <a href="<?php echo 'http://' . $workUrl; ?>" class="btn btn-small btn-shadowed" target="_blank">
			        <?php echo 'Visit the site'; ?>
			      </a>
			    <?php endif; ?>
		    </section>
		   </div>
    <?php endif?>
 </div>
<?php endif; ?>