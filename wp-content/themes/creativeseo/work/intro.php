<?php
	$technologies = get_field('technologies');
  $workUrl      = get_field('url_link');
?>

<div class="mw">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div class="flex wd-intro">
		<section class="content">
	  	<?php the_content(); ?>
		</section>
		<aside class="sidebar">
			<?php if($technologies): ?>
				<section class="sidebar-block">
					<h3 class="small-title sidebar-title">
						<?php echo 'Technology'; ?>
					</h3>
					<ul class="technologies-list">
					<?php foreach($technologies as $technology): ?>
						<li class="technology">
							<?php echo $technology; ?>
						</li>
					<?php endforeach; ?>
					</ul>
				</section>
			<?php endif; ?>
			<?php if($workUrl): ?>
				<section class="sidebar-block">
					<h3 class="small-title sidebar-title">
						<?php echo 'Url'; ?>
					</h3>
					<a href="<?php echo 'http://' . $workUrl; ?>" class="link" target="_blank">
						<?php echo $workUrl; ?>
					</a>
				</section>
	  	<?php endif; ?>
		</aside>
	</div>
</div>