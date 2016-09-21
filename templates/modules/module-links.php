<section class="module module-links">
	<div class="container">
		<div class="links-wrap">
			<?php if(have_rows('links') ) : ?>
			<ul class="links">
				<?php while ( have_rows( 'links' ) ) : the_row();
					$link = get_sub_field( 'link' );
					$logo = get_sub_field( 'logo' );
				?>
					<li>
					
						<a href="<?= $link; ?>">
							<img src="<?= $logo['url']; ?>" alt="<?= $logo['alt'] ?>">
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</section>