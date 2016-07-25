		<?php get_template_part('additional/all'); ?>
	</main>
	<footer class="footer flex mw">
    <?php
    	wp_nav_menu(array('theme_location'   => 'footer', 'menu_class'=> 'flex footer-nav nav', 'container'=> false));
    	wp_nav_menu(array('theme_location'   => 'social', 'menu_class'=> 'flex nav socials', 'container'=> false));
    ?>
		<?php
			//if ( function_exists('dynamic_sidebar') )
		    //dynamic_sidebar('footer-sidebar');
		?>
	</footer>
	<script src="//localhost:35729/livereload.js"></script>
</div>
<?php wp_footer(); ?>
</body>
</html>
