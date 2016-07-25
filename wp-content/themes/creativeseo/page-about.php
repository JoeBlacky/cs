<?php
/**
 * Template Name: About Page
 */
?>
<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>
  <div class="page-about">
    <?php get_template_part('about/intro'); ?>
    <?php get_template_part('about/aims'); ?>
  </div>
<?php endwhile; ?>

<?php get_footer();?>