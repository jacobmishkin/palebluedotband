<section class="modules module-band">
	<div class="container">
		<div class="band-wrapper">
			<div class="band-members">
				<div class="band-title">
							<h2>Band Members</h2>
				</div>
			<?php if( have_rows('band') ) : ?>
   <ul class="members">
			<?php while(have_rows('band')) : the_row(); 

						$band_photo = get_sub_field('member_photo');
						$member_name = get_sub_field('band_member_name');
						$instument = get_sub_field('instument');
					
			?> 
			<li>
					<h4><?= $member_name; ?></h4>
					<p><?= $instument; ?></p>  
					<img src="<?= $band_photo; ?>">
			</li>
		<?php endwhile; ?>
			   </ul>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>