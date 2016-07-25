<?php
	$isEnabled    = get_field('enable_news');
	$sectionTitle = get_field('news_title');
	$sectionBg    = get_field('news_bg');
	$postList     = customPostListing('post', 2);
?>
<?php if($isEnabled): ?>
	<div class="recent-news" style="background-image: url(<?php echo $sectionBg; ?>)">
		<section class="mw">
			<? if($sectionTitle): ?>
				<h2 class="block-title">
					<?php echo $sectionTitle; ?>
				</h2>
			<?php endif; ?>
	    <div class="post-listing no-date">
		    <?php while( $postList->have_posts() ) : $postList->the_post(); ?>
	        <?php get_template_part( 'content', get_post_format() ); ?>
		    <?php endwhile; wp_reset_postdata(); ?>
	    </div>
		</section>
	<div>
<?php endif; ?>