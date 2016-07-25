<?php
/**
 * Template Name: Work Page
 */
?>
<?php
	$loop = customPostListing('works', -1);

	$cta = getAdditionalBlock('speak-to-the-team');
?>
<?php get_header(); ?>
	<div class="mw projects-landing">
		<?php while( have_posts() ) : the_post(); ?>
			<div class="intro">
	    	<?php the_content(); ?>
	    </div>
			<div class="flex projects-listing">
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			    <?php get_template_part( 'content-work', get_post_format() ); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php get_footer();?>