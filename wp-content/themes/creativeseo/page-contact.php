<?php
/**
 * Template Name: Contact Page
 */
?>
<?php
$enable_get_in_touch = get_field('enable_get_in_touch');
$get_in_touch_content = get_field('get_in_touch_content');

$contact_form = get_field('form_text');
?>
<?php get_header(); ?>

	<?php while( have_posts() ) : the_post(); ?>
		<section class="page-intro" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>)">
			<section class="mw">
				<?php the_content(); ?>
			</section>
    </section>
	<?php endwhile; ?>

	<?php if($enable_get_in_touch) { ?>
		<section class="mw in-touch">
    	<?php echo $get_in_touch_content; ?>
    </section>
	<?php } ?>
	<div class="contacts flex mw">
		<section class="contact-form">
		<h3><?php _e('Contact Form'); ?></h3>
		<?php echo do_shortcode( '[contact-form-7 id="110" title="Contact form 1"]' ); ?>
		</section>
		<section class="contact-info">
			<h3><?php _e('Office'); ?></h3>
			<dl>
				<?php if(get_option('address')): ?>
					<dd><?php _e('Address'); ?></dd>
					<dt>
						<p><?php echo get_option('address'); ?></p>
					</dt>
				<?php endif; ?>
				<?php if(get_option('contact_email')): ?>
					<dd><?php _e('E-mail'); ?></dd>
					<dt>
						<p>
							<a href="mailto:<?php echo get_option('contact_email'); ?>"><?php echo get_option('contact_email'); ?>
							</a>
						</p>
					</dt>
				<?php endif; ?>
				<?php if(get_option('phone_number')):?>
					<dd><?php _e('Telephone'); ?></dd>
					<dt>
						<p>
							<a href="tel:<?php echo get_option('phone_number'); ?>">
								<?php echo get_option('phone_number'); ?>
							</a>
						</p>
					</dt>
				<?php endif; ?>
			</dl>
		</section>
	</div>
<?php get_footer();?>