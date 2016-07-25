<?php
	$isEnabled      = get_field('enable_benefits');
	$sectionContent = get_field('benefits_content');
  $buttonUrl      = get_field('benefits_button_url');
  $buttonText     = get_field('benefits_button_text');
  $uspList        = get_field('usp');
?>
<?php if($isEnabled): ?>
	<section class="mw flex benefits">
		<div class="content">
			<?php echo $sectionContent; ?>

			<?php if($buttonUrl): ?>
				<a href="<?php echo $buttonUrl; ?>" class="btn">
					<?php echo $buttonText; ?>
				</a>
			<?php endif; ?>

		</div>

		<?php if($uspList): ?>
			<div class="usp flex">
				<?php foreach($uspList as $usp): ?>
					<section class="usp-item">
						<?php if($usp['image']): ?>
							<object type="image/svg+xml" data="<?php echo $usp['image']; ?>" class="usp-image"></object>
						<?php endif; ?>
						<h3 class="small-heading usp-title">
							<?php echo $usp['title']; ?>
						</h3>
						<?php echo $usp['content']; ?>
					</section>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

	</section>
<?php endif; ?>