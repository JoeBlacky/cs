<?php
	$isEnabled      = get_field('enable_recent_work');
	$sectionContent = get_field('recent_work_content');
	$buttonText     = get_field('recent_work_button_text');
	$buttonUrl      = get_field('recent_work_button_url');
	$works          = customPostListing('works', 4);
?>
<?php if($isEnabled): ?>
	<div class="secondary recent-works">
		<section class="mw">
			<?php echo $sectionContent; ?>
			<ul class="flex projects-listing vertical owl-carousel stage-slider">
				<?php while( $works->have_posts() ) : $works->the_post(); ?>
					<li class="post">
						<a href="<?php echo get_permalink($works->ID); ?>">
							<?php if (get_field('work_post_image', $works->ID)): ?>
	              <img src="<?php echo get_field('work_post_image', $works->ID); ?>" alt="<?php echo $works->post_name; ?>" class="post-image" />
		          <?php else: ?>
	              <img src="<?php echo getPlaceholder(); ?>" alt="<?php echo $works->post_name; ?>" class="post-image" />
		          <?php endif; ?>
							<h3 class="post-title">
								<?php echo $post->post_title; ?>
							</h3>
							<ul>
								<?php
									$services = get_field_object('services');
									$values   = get_field('services', $works->ID);
									foreach($values as $value):
								?>
									<li class="service">
										<?php echo $services['choices'][$value]; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</a>
					</li>
	  		<?php endwhile; wp_reset_postdata(); ?>
  		</ul>

  		<?php if($buttonUrl):?>
	  		<a href="<?php echo $buttonUrl; ?>" class="btn btn-small btn-transparent">
					<?php echo $buttonText; ?>
				</a>
			<?php endif; ?>

		</section>
	</div>
<?php endif; ?>