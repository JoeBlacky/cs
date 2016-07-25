<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-work-detail">
    <?php get_template_part('work/intro'); ?>
    <?php get_template_part('work/sections/top'); ?>
    <?php get_template_part('work/sections/middle'); ?>
    <?php get_template_part('work/sections/bottom'); ?>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>

