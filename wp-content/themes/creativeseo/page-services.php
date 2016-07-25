<?php
/**
 * Template Name: Services Page
 */
?>
<?php
$production_services_title = get_field('production_services_title');
$production_services_content = get_field('production_services_content');

$enable_why_to_us = get_field('enable_why_to_us');
$why_to_us_title = get_field('why_to_us_title');
$why_to_us_lists = get_field('why_to_us_lists');

$enable_services_lists = get_field('enable_services_lists');
$services_lists_title = get_field('services_lists_title');
$services_lists_content = get_field('services_lists_content');

$enable_the_detail = get_field('enable_the_detail');
$the_detail_title = get_field('the_detail_title');
$the_detail_content = get_field('the_detail_content');

$speak_team_title = get_field('speak_team_title');
$speak_team_body = get_field('speak_team_body');
$button_text = get_field('button_text');
$button_url = get_field('button_url');

?>
<?php get_header(); ?>

<!-- Production Services Section -->
<?php echo $production_services_title; ?>
<?php echo $production_services_content; ?>
<!-- End Production Services Section -->

<!-- Why Come To Us Section -->
<?php if($enable_why_to_us) { ?>
    <?php echo $why_to_us_title; ?>
    <?php foreach ($why_to_us_lists as $why_to_us_list) { ?>
        <?php echo $why_to_us_list['image']; ?>
        <?php echo $why_to_us_list['title']; ?>
        <?php echo $why_to_us_list['content']; ?>
    <?php } ?>
<?php } ?>
<!-- End Why Come To Us -->

<!-- Services List Section -->
<?php if($enable_services_lists) { ?>
    <?php echo $services_lists_title; ?>
    <?php echo $services_lists_content; ?>
<?php } ?>
<!-- End Services List Section -->

<!-- The Detail Section -->
<?php if($enable_the_detail) { ?>
    <?php echo $the_detail_title; ?>
    <?php echo $the_detail_content; ?>
<?php } ?>
<!-- End The Detail Section -->

<!-- Speak To The Team Section -->
    <?php echo $speak_team_title; ?>
    <?php echo $speak_team_body; ?>
    <?php echo $button_text; ?>
    <?php echo $button_url; ?>
<!-- End Speak To The Team Section -->

<?php get_footer();?>