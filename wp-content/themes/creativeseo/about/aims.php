<?php
	$isEnabled      = get_field('enable_our_aims');
	$sectionContent = get_field('our_aims_content');
	$aimsList       = get_field('our_aims_lists');
?>
<?php if($isEnabled): ?>
	<div class="mw t-center aims">
		<div class="content">
			<section class="section-intro">
				<?php echo $sectionContent; ?>
			</section>
			<?php if($aimsList): ?>
				<ul class="usp usp-centered flex">
					<?php foreach($aimsList as $aim): ?>
						<li class="usp-item">
							<?php if($aim['image']): ?>
								<object type="image/svg+xml" data="<?php echo $aim['image']; ?>" class="usp-image"></object>
							<?php endif; ?>
							<h3 class="small-heading usp-title">
								<?php echo $aim['title']; ?>
							</h3>
			        <?php echo $aim['content']; ?>
			       </li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>