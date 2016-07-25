<?php
/**
 * Template Name: Home Page
 */
?>
<?php
  $research_video = get_field('research_video');
?>
<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>
  <?php get_template_part('home/intro'); ?>
  <?php get_template_part('home/benefits'); ?>
  <?php get_template_part('home/works'); ?>
  <?php get_template_part('home/news'); ?>
<?php endwhile; ?>

<?echo $research_video; ?>


<?php get_footer();?>
