<section class="module module-banner">
	<div class="container">
		<div class="banner">
			<div class="banner-slides">
				<?php if (have_rows('testimonials') ) : ?>
				
				<ul class="slides">
					
					<?php while (have_rows('testimonials') ) : the_row();
						//vars
						$text = get_sub_field( 'testimonial' );
						$image = get_sub_field( 'background_image' );
						$source = get_sub_field( 'reviewer' );
					?>
					<li class="slide" style="background: url('<?= $image ?>') no-repeat center center fixed">
						<div class="testimonials">
							<p>"<?= $text; ?>"</p>
							<span class="reviewer"><?= $source; ?></span>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>