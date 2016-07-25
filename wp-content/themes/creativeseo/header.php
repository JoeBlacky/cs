<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php
		wp_head();
		$thumb = get_the_post_thumbnail_url($post->ID);
	?>
</head>

<body <?php body_class(); ?>>
<div class="page flex not-handheld">
	<header class="mw flex header" id="header">
		<?php if (get_theme_mod('themeslug_logo')): ?>
			<a href='<?php echo esc_url(home_url( '/' )); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home' class="logo">
				<img src='<?php echo esc_url(get_theme_mod('themeslug_logo')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' />
			</a>
		<?php endif; ?>
			<div class="menu<?php echo !$thumb ? ' secondary-nav ' : null; ?>">
				<?php wp_nav_menu(array('theme_location'   => 'primary', 'menu_class'=> 'flex main-nav nav')); ?>
				<span class="handheld-nav" data-trigger=".main-nav"></span>
			</div>
	</header>
	<main class="main">